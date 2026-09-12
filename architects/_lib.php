<?php
/* Shared helpers + data loader for the /architects/ section.
   Reuses the country/ISO/region maps and slug/flag helpers from the architecture project.
   Architect records live in architects/_data.json (built from verified research). */

require_once $_SERVER['DOCUMENT_ROOT'].'/architecture/_lib.php';  // $ARCH_ISO, $ARCH_REGION, arch_slug(), arch_flag(), arch_load()

function arcx_load() {
  $f = $_SERVER['DOCUMENT_ROOT'].'/architects/_data.json';
  return is_file($f) ? (json_decode(file_get_contents($f), true) ?: []) : [];
}

/* normalise a building/architect name for fuzzy matching */
function arcx_norm($s) {
  $s = mb_strtolower(trim((string)$s));
  $s = preg_replace('/\(.*?\)/u', ' ', $s);           // drop "(Bird's Nest)" etc.
  $s = preg_replace('/[^\p{L}\p{N} ]+/u', ' ', $s);
  return trim(preg_replace('/\s+/u', ' ', $s));
}

/* index every known building by normalised name → record (for work photos) */
function arcx_buildings_index() {
  static $idx = null;
  if ($idx !== null) return $idx;
  $idx = [];
  foreach (arch_load() as $b) {
    $n = arcx_norm($b['name'] ?? '');
    if ($n !== '' && !isset($idx[$n])) $idx[$n] = $b;
  }
  return $idx;
}

/* resolve an architect's named works to building records (photo + country) where we have them */
function arcx_resolve_works($works) {
  $idx = arcx_buildings_index();
  $out = [];
  foreach ((array)$works as $w) {
    $b = $idx[arcx_norm($w)] ?? null;
    $out[] = [
      'name'    => $w,
      'img'     => $b['img'] ?? '',
      'country' => $b['country'] ?? '',
      'wiki'    => $b['descurl'] ?? ($b['wiki'] ?? ''),
    ];
  }
  return $out;
}

/* slug that transliterates Latin diacritics first (arch_slug would drop them, e.g. "Gaudí"→"gaud") */
function arcx_slugify($s) {
  $from = ['à','á','â','ä','ã','å','ā','ç','č','ć','è','é','ê','ë','ē','ì','í','î','ï','ī','ñ','ń','ò','ó','ô','ö','õ','ø','ō','ù','ú','û','ü','ū','ý','ÿ','ž','š','ß','æ','œ'];
  $to   = ['a','a','a','a','a','a','a','c','c','c','e','e','e','e','e','i','i','i','i','i','n','n','o','o','o','o','o','o','o','u','u','u','u','u','y','y','z','s','ss','ae','oe'];
  $s = mb_strtolower(trim((string)$s), 'UTF-8');
  $s = str_replace($from, $to, $s);
  $s = preg_replace('/[^a-z0-9]+/', '-', $s);
  return trim($s, '-');
}
function arcx_person_slug($name) { return arcx_slugify($name); }

/* Use image URLs exactly as researched (imageinfo thumburls). Wikimedia returns HTTP 400 for
   arbitrary custom widths hotlinked off-site, so we do NOT rewrite widths — passthrough only. */
function arcx_thumb($url, $w = 480) { return $url; }

/* group architects by country name */
function arcx_by_country() {
  $out = [];
  foreach (arcx_load() as $a) { $c = $a['country'] ?? ''; if ($c === '') continue; $out[$c][] = $a; }
  return $out;
}

/* monogram initials for architects with no free portrait */
function arcx_initials($name) {
  $n = preg_replace('/\s*&.*$/', '', $name);           // "Herzog & de Meuron" → "Herzog"
  $parts = preg_split('/[\s\.\-]+/', trim($n));
  $ini = '';
  foreach ($parts as $p) { if ($p !== '' && preg_match('/^\p{L}/u', $p)) { $ini .= mb_strtoupper(mb_substr($p, 0, 1)); if (mb_strlen($ini) >= 2) break; } }
  return $ini ?: 'A';
}
function arcx_hue($str) { $h = 0; for ($i=0;$i<strlen($str);$i++) $h = (ord($str[$i]) + $h*31) % 360; return $h; }

function arcx_life($a) {
  $b = trim((string)($a['born'] ?? '')); $d = trim((string)($a['died'] ?? ''));
  if ($b === '' && $d === '') return '';
  if ($d === '') return 'b. '.$b;
  return $b.'–'.$d;
}

/* one architect card (used by index + country pages).
   Image = portrait if we have it, else a photo of their most famous building, else an initials monogram. */
function arcx_card($a, $cslug) {
  $pslug = arcx_person_slug($a['name']);
  $life  = arcx_life($a);
  $flag  = '';
  foreach ((array)($a['works'] ?? []) as $w) { if (trim($w) !== '') { $flag = $w; break; } }
  $img = $a['photo'] ?? ''; $isFace = ($img !== '');
  if (!$isFace) { foreach (arcx_resolve_works($a['works'] ?? []) as $w) { if (!empty($w['img'])) { $img = $w['img']; break; } } }
  if (!$isFace && $img === '' && !empty($a['workphoto'])) $img = $a['workphoto'];
  $img = arcx_thumb($img, 340);
  $hue = arcx_hue($a['name']); $ini = arcx_initials($a['name']);
  $sstr = mb_strtolower(trim($a['name'].' '.($a['country'] ?? '').' '.($a['city'] ?? '').' '.implode(' ', (array)($a['works'] ?? [])).' '.($a['blurb'] ?? '')));
  ?>
  <a class="arc-card" data-s="<?= htmlspecialchars($sstr) ?>" href="/architects/<?= $cslug ?>/<?= $pslug ?>/">
    <span class="arc-portrait <?= $isFace ? 'is-face' : 'is-bldg' ?>"<?= $img === '' ? ' style="background:hsl('.$hue.' 34% 55%)"' : '' ?>>
      <?php if ($img !== ''): ?>
        <img src="<?= htmlspecialchars($img) ?>" alt="<?= $isFace ? 'Portrait of ' : '' ?><?= htmlspecialchars($a['name']) ?>" loading="lazy" onerror="this.parentNode.classList.remove('is-face','is-bldg');this.parentNode.innerHTML='<span class=\'mono\'><?= htmlspecialchars($ini) ?></span>';this.parentNode.style.background='hsl(<?= $hue ?> 34% 55%)'">
      <?php else: ?>
        <span class="mono"><?= htmlspecialchars($ini) ?></span>
      <?php endif; ?>
    </span>
    <span class="arc-meta">
      <h3><?= htmlspecialchars($a['name']) ?></h3>
      <?php if ($life): ?><span class="yr"><?= htmlspecialchars($life) ?></span><?php endif; ?>
      <?php if ($flag): ?><span class="flag"><span class="df">◆</span><?= htmlspecialchars($flag) ?></span><?php endif; ?>
      <?php if (!empty($a['blurb'])): ?><p><?= htmlspecialchars($a['blurb']) ?></p><?php endif; ?>
      <span class="go">Life &amp; work →</span>
    </span>
  </a>
<?php }

/* shared CSS for all architect pages — echoed once per request */
function arcx_styles() {
  static $done = false; if ($done) return; $done = true; ?>
<style>
  .arc-lead{max-width:760px}
  .arc-region{margin:40px 0 2px;font-size:1.45rem}
  .arc-cgroup{margin-top:26px}
  .arc-ch{display:flex;align-items:baseline;gap:9px;margin:0 0 12px;font-size:1.12rem}
  .arc-ch a{color:var(--ink)}
  .arc-ch .n{color:var(--ink-soft);font-size:.85rem;font-weight:400}
  .arc-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(330px,1fr));gap:16px}
  .arc-card{display:flex;gap:16px;background:#fff;border:1px solid var(--line);border-radius:14px;padding:14px 16px;text-decoration:none;color:inherit;transition:transform .2s,box-shadow .2s,border-color .2s}
  .arc-card:hover{transform:translateY(-3px);box-shadow:0 12px 26px rgba(30,20,10,.09);border-color:#e0d6c9}
  .arc-portrait{flex:0 0 90px;width:90px;height:114px;border-radius:10px;overflow:hidden;background:var(--bg-alt);display:flex;align-items:center;justify-content:center}
  .arc-portrait img{width:100%;height:100%;object-fit:cover;object-position:center top;filter:grayscale(12%);transition:filter .4s,transform .5s}
  .arc-portrait.is-bldg img{object-position:center center;filter:grayscale(0)}
  .arc-card:hover .arc-portrait img{filter:grayscale(0);transform:scale(1.04)}
  .arc-portrait .mono{font-family:var(--serif);font-size:1.7rem;font-weight:600;color:#fff}
  .arc-meta{min-width:0;display:flex;flex-direction:column}
  .arc-meta h3{margin:0;font-size:1.08rem;line-height:1.22}
  .arc-meta .yr{color:var(--ink-soft);font-size:.8rem;margin-top:2px}
  .arc-meta .flag{margin-top:6px;font-size:.83rem;color:var(--accent-ink);font-weight:600;line-height:1.25}
  .arc-meta .flag .df{color:var(--accent);font-size:.72rem;margin-right:3px}
  .arc-meta p{margin:6px 0 0;font-size:.84rem;color:var(--ink-soft);line-height:1.4;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}
  .arc-meta .go{margin-top:auto;padding-top:8px;font-size:.8rem;color:var(--accent);font-weight:600}
  /* person page */
  .arc-hero{display:grid;grid-template-columns:230px 1fr;gap:30px;align-items:start;margin-top:6px}
  .arc-hero .pf{border-radius:16px;overflow:hidden;border:1px solid var(--line);box-shadow:0 10px 30px rgba(30,20,10,.14);background:var(--bg-alt);aspect-ratio:4/5;display:flex;align-items:center;justify-content:center}
  .arc-hero .pf img{width:100%;height:100%;object-fit:cover;object-position:center top}
  .arc-hero .pf.is-bldg img{object-position:center center}
  .arc-hero .pf .mono{font-family:var(--serif);font-size:4rem;color:#fff}
  .arc-hero .cred{font-size:11px;color:var(--ink-soft);margin-top:8px;line-height:1.35}
  .arc-hero .cred a{color:var(--ink-soft)}
  .arc-life{color:var(--ink-soft);font-size:1rem;margin:2px 0 0}
  .arc-flag{font-size:1rem}
  .arc-lede{font-size:1.14rem;line-height:1.5;margin:16px 0 0;max-width:60ch}
  .arc-works{margin:22px 0 0}
  .arc-wgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(190px,1fr));gap:15px;margin-top:14px}
  .arc-wcard{display:block;border-radius:12px;overflow:hidden;border:1px solid var(--line);text-decoration:none;color:inherit;background:#fff;transition:transform .2s,box-shadow .2s}
  .arc-wcard:hover{transform:translateY(-3px);box-shadow:0 10px 24px rgba(30,20,10,.1)}
  .arc-wcard .wph{aspect-ratio:4/3;background:var(--bg-alt);overflow:hidden}
  .arc-wcard .wph img{width:100%;height:100%;object-fit:cover;transition:transform .5s}
  .arc-wcard:hover .wph img{transform:scale(1.05)}
  .arc-wcard .wb{padding:10px 12px}
  .arc-wcard .wb b{display:block;font-size:.94rem;font-weight:600;line-height:1.25}
  .arc-wcard .wb span{font-size:.78rem;color:var(--ink-soft)}
  .arc-wtext{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px}
  .arc-wtext span{background:var(--bg-alt);border:1px solid var(--line);border-radius:999px;padding:5px 13px;font-size:.85rem;color:var(--ink)}
  @media(max-width:640px){
    .arc-hero{grid-template-columns:1fr;gap:18px}
    .arc-hero .pf{max-width:230px}
    .arc-card{flex-direction:row}
  }
</style>
<?php }
