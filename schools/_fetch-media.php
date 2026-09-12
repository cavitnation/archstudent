<?php
/* Fetch a real CAMPUS/BUILDING PHOTO (not a logo) + attribution for each school,
   using the "wiki" article title on each entry. Strategy per title:
     1) REST media-list -> pick the best genuine photograph on the page
        (prefer JPEG, larger; skip SVG/logos/seals/maps/flags/crests/icons).
     2) fallback: REST summary lead image, but ONLY if it's a JPEG photo.
   Then one imageinfo call (Commons, then en) -> 680px thumb + Artist/License.
   Anything without a real photo is left blank so the page shows a clean
   gradient monogram instead of an off-brand logo.
   Caches to media.json; re-running keeps titles that already have an image.
   Run:  php _fetch-media.php            (incremental — fills blanks only)
         php _fetch-media.php --fresh    (ignore cache, refetch everything)  */
if (php_sapi_name() !== 'cli') { http_response_code(403); exit("CLI only\n"); }
$FRESH = in_array('--fresh', $argv, true);

$DIR = include __DIR__ . '/_directory.php';
$OUT = __DIR__ . '/media.json';
$existing = (!$FRESH && is_file($OUT)) ? (json_decode(file_get_contents($OUT), true) ?: []) : [];

// Hand-picked overrides (keyed by wiki title) — used when Wikipedia's photo is
// wrong/unrepresentative. These always win, even on --fresh.
$OVERRIDES = [
  'University of Engineering and Technology, Lahore' => [
    'img'     => 'https://architecture.uet.edu.pk/wp-content/uploads/2026/06/IMG_5218.JPG-scaled.jpeg',
    'w' => 680, 'h' => 383,
    'artist'  => 'Dept of Architecture, UET Lahore',
    'license' => '', 'descurl' => 'https://architecture.uet.edu.pk/architecture-campus/',
  ],
  'University of Engineering & Technology, Peshawar' => [
    'img'     => 'https://www.uetpeshawar.edu.pk/wp-content/uploads/2024/04/2-1-800x725.jpg',
    'w' => 800, 'h' => 725,
    'artist'  => 'UET Peshawar', 'license' => '',
    'descurl' => 'https://www.uetpeshawar.edu.pk/',
  ],
  'National College of Arts' => [
    'img'     => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/National_College_of_Arts_front_view.jpg/960px-National_College_of_Arts_front_view.jpg',
    'w' => 960, 'h' => 540,
    'artist'  => 'Muhammad Dawood Jawad', 'license' => 'CC BY-SA 4.0',
    'descurl' => 'https://commons.wikimedia.org/wiki/File:National_College_of_Arts_front_view.jpg',
  ],
];
// Bulk hand-verified corrections (campus photos chosen by visual review) live in
// overrides.json so they survive a --fresh refetch. They win over Wikipedia's pick.
if (is_file(__DIR__.'/overrides.json')) {
  $__ov = json_decode(file_get_contents(__DIR__.'/overrides.json'), true);
  if (is_array($__ov)) $OVERRIDES = array_merge($OVERRIDES, $__ov);
}

$ctx = stream_context_create(['http' => [
  'timeout' => 30,
  'user_agent' => 'ArchStudentSchoolsBot/2.0 (https://archstudent.com; info@archstudent.com)',
  'header' => "Accept: application/json\r\n",
]]);
function api($url, $ctx) { $r = @file_get_contents($url, false, $ctx); return $r ? json_decode($r, true) : null; }
function strip_credit($h) { $t = trim(preg_replace('/\s+/', ' ', strip_tags(html_entity_decode((string)$h, ENT_QUOTES, 'UTF-8')))); return mb_strlen($t) > 90 ? mb_substr($t, 0, 90) . '…' : $t; }
$BAD = '/(logo|seal|icon|map|flag|coat[_ ]?of[_ ]?arms|wordmark|signature|crest|emblem|badge|banner|diagram|locator|plaque|qr[_ ]?code)/i';

// Choose the best photo File: name from a REST media-list response.
function best_photo($ml, $BAD) {
  $best = null; $bestScore = -1;
  foreach ($ml['items'] ?? [] as $it) {
    if (($it['type'] ?? '') !== 'image') continue;
    $t = preg_replace('/^File:/', '', $it['title'] ?? '');
    if (!preg_match('/\.(jpe?g|png)$/i', $t)) continue;      // skip SVG and non-images
    if (preg_match($BAD, $t)) continue;                       // skip logos/seals/maps/etc.
    $isJpg = preg_match('/\.jpe?g$/i', $t) ? 1 : 0;
    $w = (int)($it['width'] ?? 0);
    if (!$w && !empty($it['srcset'][0]['src']) && preg_match('/\/(\d+)px-/', $it['srcset'][0]['src'], $mm)) $w = (int)$mm[1];
    if ($w && $w < 200) continue;                             // skip tiny inline icons
    $score = $isJpg * 1000 + min($w, 4000);                   // prefer JPEG, then larger
    if ($score > $bestScore) { $bestScore = $score; $best = urldecode($t); }
  }
  return $best;
}

$titles = [];
foreach ($DIR as $s) { $w = trim($s['wiki'] ?? ''); if ($w !== '') $titles[$w] = true; }
$titles = array_keys($titles);

$media = []; $done = 0; $hit = 0; $fresh = 0;
foreach ($titles as $title) {
  if (isset($OVERRIDES[$title])) { $media[$title] = $OVERRIDES[$title]; $done++; $hit++; continue; }
  if (!empty($existing[$title]['img'])) { $media[$title] = $existing[$title]; $done++; $hit++; continue; }
  $fresh++;
  $enc = rawurlencode(str_replace(' ', '_', $title));

  // 1) media-list -> best genuine photo
  $file = best_photo(api("https://en.wikipedia.org/api/rest_v1/page/media-list/$enc", $ctx), $BAD);
  // 2) fallback: summary lead image, only if a JPEG photo
  if (!$file) {
    $sum = api("https://en.wikipedia.org/api/rest_v1/page/summary/$enc", $ctx);
    $src = $sum['originalimage']['source'] ?? '';
    if ($src && preg_match('/\.jpe?g$/i', $src) && preg_match('#/([^/]+\.jpe?g)$#i', $src, $m) && !preg_match($BAD, $m[1])) $file = urldecode($m[1]);
  }
  if (!$file) { fwrite(STDERR, "no photo: $title\n"); $media[$title] = ['img'=>'']; $done++; continue; }

  // imageinfo -> 680px thumb + attribution (Commons first, then en)
  $fenc = rawurlencode('File:' . $file);
  $img=''; $w=0; $h=0; $artist=''; $license=''; $descurl='';
  foreach (['https://commons.wikimedia.org', 'https://en.wikipedia.org'] as $host) {
    $fi = api("$host/w/api.php?action=query&format=json&prop=imageinfo&iiprop=url|size|extmetadata&iiurlwidth=680&titles=$fenc", $ctx);
    if ($fi && isset($fi['query']['pages'])) {
      $fp = reset($fi['query']['pages']);
      if (!empty($fp['imageinfo'][0])) {
        $ii = $fp['imageinfo'][0];
        $img = $ii['thumburl'] ?? ($ii['url'] ?? '');
        $w = (int)($ii['thumbwidth'] ?? 0); $h = (int)($ii['thumbheight'] ?? 0);
        $em = $ii['extmetadata'] ?? [];
        $artist  = strip_credit($em['Artist']['value'] ?? '');
        $license = strip_credit($em['LicenseShortName']['value'] ?? '');
        $descurl = $ii['descriptionurl'] ?? '';
        if ($img) break;
      }
    }
  }
  if (!$img) { fwrite(STDERR, "no imageinfo: $title ($file)\n"); $media[$title] = ['img'=>'']; $done++; continue; }
  $media[$title] = ['img'=>$img, 'w'=>$w, 'h'=>$h, 'artist'=>$artist, 'license'=>$license, 'descurl'=>$descurl];
  $hit++; $done++;
  usleep(90000);
}

file_put_contents($OUT, json_encode($media, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE));
$withImg = count(array_filter($media, fn($m)=>!empty($m['img'])));
echo "media.json: {$done} titles ({$fresh} fetched this run), {$withImg} with photos (" . round(100*$withImg/max(1,$done)) . "%)\n";
