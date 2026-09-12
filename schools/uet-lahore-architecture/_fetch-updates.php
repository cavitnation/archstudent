<?php
/* Aggregate UET Lahore Dept of Architecture updates — announcements (WP posts)
   and events (activity pages) — via the WordPress REST API, with an RSS fallback.
   Run from cron (CLI). Output: updates.json in this directory. */
if (php_sapi_name() !== 'cli') { http_response_code(403); exit('CLI only'); }

$B   = 'https://architecture.uet.edu.pk';
$OUT = __DIR__ . '/updates.json';
$ctx = stream_context_create([
  'http' => ['timeout' => 25, 'user_agent' => 'Mozilla/5.0 (ArchStudent UET updates bot)'],
  'ssl'  => ['verify_peer' => false, 'verify_peer_name' => false],
]);

function jget($url, $ctx) { $r = @file_get_contents($url, false, $ctx); if (!$r) return null; $d = json_decode($r, true); return is_array($d) ? $d : null; }
function clean_txt($html) {
  $t = trim(strip_tags(html_entity_decode((string)$html, ENT_QUOTES, 'UTF-8')));
  $t = preg_replace('/\s+/', ' ', $t);
  if (mb_strlen($t) > 190) $t = mb_substr($t, 0, 190) . '…';
  return $t;
}
function ttl($p) { return trim(html_entity_decode($p['title']['rendered'] ?? '', ENT_QUOTES, 'UTF-8')); }

$items = [];

// 1) Announcements & awards (posts)
foreach ((jget("$B/wp-json/wp/v2/posts?per_page=20&_fields=link,title,date,excerpt", $ctx) ?: []) as $p) {
  $items[] = ['kind'=>'Announcement','title'=>ttl($p),'link'=>$p['link']??'','ts'=>strtotime($p['date']??'')?:0,'excerpt'=>clean_txt($p['excerpt']['rendered']??'')];
}
// 2) Events & activities (pages under /activities/)
foreach ((jget("$B/wp-json/wp/v2/pages?per_page=100&_fields=link,title,date,excerpt", $ctx) ?: []) as $p) {
  $lnk = $p['link'] ?? '';
  if (strpos($lnk, '/activities/') === false) continue;
  if (rtrim($lnk, '/') === rtrim("$B/activities", '/')) continue;
  $items[] = ['kind'=>'Event','title'=>ttl($p),'link'=>$lnk,'ts'=>strtotime($p['date']??'')?:0,'excerpt'=>clean_txt($p['excerpt']['rendered']??'')];
}
// 3) Fallback: RSS feed (if REST returned nothing)
if (!$items) {
  $xml = @file_get_contents("$B/feed/", false, $ctx);
  if ($xml) { $doc = @simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
    if ($doc && isset($doc->channel->item)) foreach ($doc->channel->item as $it) {
      $items[] = ['kind'=>'Announcement','title'=>trim((string)$it->title),'link'=>trim((string)$it->link),'ts'=>strtotime((string)$it->pubDate)?:0,'excerpt'=>clean_txt((string)$it->description)];
    }
  }
}
if (!$items) { fwrite(STDERR, "no items fetched\n"); exit(1); }

usort($items, fn($a, $b) => $b['ts'] <=> $a['ts']);
$items = array_slice($items, 0, 12);
file_put_contents($OUT, json_encode(['fetched'=>time(),'items'=>$items], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE));
echo "saved " . count($items) . " updates (" . count(array_filter($items, fn($i)=>$i['kind']==='Event')) . " events)\n";
