<?php
/* ArchStudent world architecture news aggregator — CLI cron script.
   Fetches architecture RSS feeds, tags each item by country/region, writes data/news.json.
   Run hourly:  php /var/www/archstudent.com/news_fetch.php  */
if (php_sapi_name() !== 'cli') { http_response_code(403); exit('CLI only'); }

$FEEDS = [
  ['ArchDaily',  'https://www.archdaily.com/rss/',                     'https://www.archdaily.com'],
  ['Dezeen',     'https://www.dezeen.com/architecture/feed/',          'https://www.dezeen.com/architecture/'],
  ['Designboom', 'https://www.designboom.com/architecture/feed/',      'https://www.designboom.com/architecture/'],
  ['Architizer', 'https://architizer.com/blog/feed/',                  'https://architizer.com/blog/'],
  ['Archpaper',  'https://www.archpaper.com/feed/',                    'https://www.archpaper.com'],
  ['Parametric Architecture','https://parametric-architecture.com/feed/','https://parametric-architecture.com'],
];

$DATA = __DIR__ . '/data';
@mkdir($DATA, 0775, true);

// --- country / region tagging ---
$REGIONS = [
  'Europe' => ['United Kingdom','UK','England','Scotland','Wales','Ireland','France','Germany','Spain','Portugal','Italy','Netherlands','Belgium','Switzerland','Austria','Denmark','Sweden','Norway','Finland','Iceland','Poland','Czech','Czechia','Slovakia','Hungary','Greece','Romania','Bulgaria','Croatia','Slovenia','Serbia','Ukraine','Russia','Estonia','Latvia','Lithuania','Luxembourg'],
  'Asia' => ['China','Japan','South Korea','Korea','India','Indonesia','Thailand','Vietnam','Singapore','Malaysia','Philippines','Taiwan','Hong Kong','Sri Lanka','Bangladesh','Nepal','Cambodia','Myanmar','Mongolia','Kazakhstan'],
  'Middle East' => ['United Arab Emirates','UAE','Dubai','Abu Dhabi','Saudi Arabia','Qatar','Kuwait','Bahrain','Oman','Israel','Jordan','Lebanon','Turkey','Iran','Ira'],
  'Americas' => ['United States','USA','US','America','Canada','Mexico','Brazil','Argentina','Chile','Colombia','Peru','Ecuador','Uruguay','Paraguay','Bolivia','Venezuela','Costa Rica','Panama','Guatemala'],
  'Africa' => ['Egypt','Morocco','South Africa','Nigeria','Kenya','Ghana','Ethiopia','Tanzania','Senegal','Rwanda','Tunisia','Algeria'],
  'Oceania' => ['Australia','New Zealand','Fiji'],
];
// canonical display name for a few abbreviations
$CANON = ['UK'=>'United Kingdom','England'=>'United Kingdom','Scotland'=>'United Kingdom','Wales'=>'United Kingdom',
  'USA'=>'United States','US'=>'United States','America'=>'United States','UAE'=>'United Arab Emirates',
  'Dubai'=>'United Arab Emirates','Abu Dhabi'=>'United Arab Emirates','Korea'=>'South Korea','Czechia'=>'Czech Republic','Czech'=>'Czech Republic','Hong Kong'=>'China'];

function detect(&$REGIONS,&$CANON,$text){
  $best=null;
  foreach($REGIONS as $region=>$countries){
    foreach($countries as $c){
      if (preg_match('/\b'.preg_quote($c,'/').'\b/i', $text)){
        $name = $CANON[$c] ?? $c;
        return [$name,$region];   // first match wins (feeds usually front-load location)
      }
    }
  }
  return [null,null];
}

function clean_txt($h){
  $t = html_entity_decode(strip_tags((string)$h), ENT_QUOTES|ENT_HTML5, 'UTF-8');
  $t = trim(preg_replace('/\s+/', ' ', $t));
  // strip WordPress-feed boilerplate that leaks into descriptions
  $t = preg_replace('/\s*The post\b.*$/is', '', $t);              // "The post <title> appeared first on <Site>."
  $t = preg_replace('/\s*(Continue reading|Read more|Read on).*$/is', '', $t);
  $t = preg_replace('/\s*\[(?:…|\.\.\.|read more)\].*$/iu', '', $t);
  $t = trim($t, " \t\n\r\0\x0B–—-·|");
  if (mb_strlen($t) > 200) $t = mb_substr($t, 0, 197) . '…';
  return $t;
}
function img_junk($u){
  return $u==='' || preg_match('/(blank|spacer|1x1|placeholder|pixel|transparent|loading\.gif|data:image)/i', $u);
}
function first_img($item, $hay){
  $cand = [];
  if (isset($item->enclosure['url'])) $cand[] = (string)$item->enclosure['url'];
  $m = $item->children('http://search.yahoo.com/mrss/');
  if (isset($m->content) && isset($m->content->attributes()->url))   $cand[] = (string)$m->content->attributes()->url;
  if (isset($m->thumbnail) && isset($m->thumbnail->attributes()->url)) $cand[] = (string)$m->thumbnail->attributes()->url;
  // collect <img> urls, preferring real lazy-load attributes over a blank src
  foreach (['data-src','data-lazy-src','data-original','data-lazy','src'] as $attr) {
    if (preg_match_all('/<img[^>]+?'.$attr.'=["\\\']([^"\\\']+)["\\\']/i', $hay, $mm))
      foreach ($mm[1] as $u) $cand[] = $u;
  }
  // 1st pass: a real image file that isn't a blank/pixel; 2nd pass: any non-junk url
  foreach ($cand as $u) if (!img_junk($u) && preg_match('/\.(jpe?g|png|webp|gif)/i', $u)) return $u;
  foreach ($cand as $u) if (!img_junk($u)) return $u;
  return '';
}

$UA = 'Mozilla/5.0 (compatible; ArchStudentBot/1.0; +https://archstudent.com)';
$all = [];
foreach ($FEEDS as [$src,$url,$home]) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER=>1, CURLOPT_FOLLOWLOCATION=>1,
    CURLOPT_TIMEOUT=>25, CURLOPT_USERAGENT=>$UA, CURLOPT_SSL_VERIFYPEER=>1, CURLOPT_ENCODING=>'']);
  $body = curl_exec($ch); curl_close($ch);
  if (!$body) { fwrite(STDERR,"fetch failed: $src\n"); continue; }
  // strip anything before the XML declaration / root (leading BOM or whitespace)
  $body = ltrim($body, "\xEF\xBB\xBF \t\r\n");
  $p = strpos($body, '<?xml'); if ($p === false) $p = strpos($body, '<');
  if ($p > 0) $body = substr($body, $p);
  // tolerant parse (recovers from redefined namespaces etc.)
  libxml_use_internal_errors(true);
  $dom = new DOMDocument();
  $dom->recover = true; $dom->strictErrorChecking = false;
  $ok = @$dom->loadXML($body, LIBXML_NOCDATA|LIBXML_NOERROR|LIBXML_NOWARNING);
  libxml_clear_errors();
  $xml = $ok ? @simplexml_import_dom($dom) : @simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NOCDATA);
  if (!$xml) { fwrite(STDERR,"parse failed: $src\n"); continue; }
  $items = $xml->channel->item ?? $xml->item ?? [];
  foreach ($items as $it) {
    $title = clean_txt($it->title);
    $link  = trim((string)$it->link);
    if ($title==='' || $link==='') continue;
    $descRaw = (string)($it->description ?? '');
    $ce = $it->children('http://purl.org/rss/1.0/modules/content/');
    $content = isset($ce->encoded) ? (string)$ce->encoded : '';
    if ($descRaw==='' && $content!=='') $descRaw = $content;
    $date = strtotime((string)($it->pubDate ?? $it->pubdate ?? 'now')) ?: time();
    $img  = html_entity_decode(first_img($it, $descRaw.' '.$content), ENT_QUOTES|ENT_HTML5, 'UTF-8');
    [$country,$region] = detect($REGIONS,$CANON, $title.' '.strip_tags($descRaw).' '.$link);
    $all[] = ['title'=>$title,'link'=>$link,'source'=>$src,'home'=>$home,
      'date'=>$date,'excerpt'=>clean_txt($descRaw),'img'=>$img,
      'country'=>$country,'region'=>$region];
  }
}

// dedupe by link, sort newest first, cap
$seen=[]; $out=[];
usort($all, fn($a,$b)=>$b['date']-$a['date']);
foreach($all as $a){ if(isset($seen[$a['link']])) continue; $seen[$a['link']]=1; $out[]=$a; }
$out = array_slice($out, 0, 160);

$payload = ['updated'=>time(),'count'=>count($out),'items'=>$out];
// JSON_INVALID_UTF8_SUBSTITUTE: feeds occasionally carry malformed bytes that make json_encode
// return false. Without this, the bad byte silently wiped the whole cache (0-byte news.json).
$json = json_encode($payload, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_INVALID_UTF8_SUBSTITUTE);
// Never overwrite a good cache with nothing: bail on encode failure or an empty result.
if ($json === false || count($out) === 0) {
  fwrite(STDERR, 'ABORT write: '.(count($out)===0 ? '0 items parsed' : 'json_encode failed: '.json_last_error_msg())."\n");
  exit(1);
}
$tmp = $DATA.'/news.json.tmp';
file_put_contents($tmp, $json);
rename($tmp, $DATA.'/news.json');
echo "OK: ".count($out)." items from ".count($FEEDS)." feeds\n";
