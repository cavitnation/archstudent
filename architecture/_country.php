<?php
/* Renders one /architecture/<country>/ page. A per-country index.php sets
   $ARCH_COUNTRY (full country name) then includes this file. */
require_once $_SERVER['DOCUMENT_ROOT'].'/architecture/_lib.php';
$C = $ARCH_COUNTRY ?? '';
$slug = arch_slug($C);
$iso  = $ARCH_ISO[$C] ?? '';
$flag = arch_flag($iso);
$all  = arch_by_country()[$C] ?? [];
$iconic = array_values(array_filter($all, fn($p)=>($p['era']??'')!=='recent'));
$recent = array_values(array_filter($all, fn($p)=>($p['era']??'')==='recent'));
$nImg   = count(array_filter($all, fn($p)=>!empty($p['img'])));

$PAGE_TITLE = "Famous Architecture in $C — Iconic Buildings & Landmark Projects | ArchStudent";
$PAGE_DESC  = "The most famous architecture in $C: iconic all-time landmarks and recent standout buildings, with photos, architects and dates — a visual guide for architecture students.";
$CANONICAL  = "/architecture/$slug/";
if (!empty($all[0]['img'])) $OG_IMAGE = $all[0]['img'];
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

function ap_card($p) {
  $img = $p['img'] ?? '';
  $wiki = $p['wiki'] ?? '';
  $href = $wiki ? 'https://en.wikipedia.org/wiki/'.rawurlencode(str_replace(' ','_',$wiki)) : ($p['descurl'] ?? '#');
  $era = (($p['era']??'')==='recent') ? 'Recent' : 'Iconic';
  $meta = trim(($p['architect']??'').(!empty($p['city'])?' · '.$p['city']:'').(!empty($p['year'])?' · '.$p['year']:''), ' ·');
  $cred = trim(($p['credit']??'').(!empty($p['credit'])&&!empty($p['license'])?' · ':'').($p['license']??''));
  ob_start(); ?>
  <a class="card aproj" href="<?= htmlspecialchars($href) ?>" target="_blank" rel="noopener noreferrer">
    <div class="ph"<?= $img ? '' : ' style="background:linear-gradient(135deg,#e8ecf3,#d3dbe6)"' ?>>
      <?php if ($img): ?><img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($p['name']??'') ?>" loading="lazy" onerror="this.remove()"><?php endif; ?>
      <span class="era<?= $era==='Recent'?' r':'' ?>"><?= $era ?></span>
    </div>
    <div class="body">
      <h3><?= htmlspecialchars($p['name']??'') ?></h3>
      <?php if($meta): ?><span class="meta"><?= htmlspecialchars($meta) ?></span><?php endif; ?>
      <?php if(!empty($p['desc'])): ?><p><?= htmlspecialchars($p['desc']) ?></p><?php endif; ?>
      <span class="go">On Wikipedia ↗</span>
      <?php if($img && $cred): ?><span class="cred">Photo: <?= htmlspecialchars($cred) ?> — Wikimedia</span><?php endif; ?>
    </div>
  </a>
  <?php return ob_get_clean();
}
?>
<style>
  .aproj-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(232px,1fr));gap:16px;margin:14px 0 8px}
  .aproj{display:flex;flex-direction:column;padding:0;overflow:hidden}
  .aproj .ph{position:relative;aspect-ratio:16/10;overflow:hidden;display:flex;align-items:center;justify-content:center}
  .aproj .ph img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;filter:grayscale(30%) contrast(1.02);transition:filter .5s,transform .6s}
  .aproj:hover .ph img{filter:grayscale(0) saturate(1.08);transform:scale(1.04)}
  .aproj .era{position:absolute;top:8px;left:8px;background:rgba(20,30,45,.72);color:#fff;font-size:10px;font-weight:700;letter-spacing:.4px;text-transform:uppercase;padding:2px 8px;border-radius:999px;backdrop-filter:blur(2px)}
  .aproj .era.r{background:#b8492e}
  .aproj .body{padding:12px 15px 14px;display:flex;flex-direction:column;gap:4px;flex:1}
  .aproj .body h3{margin:0;font-size:15px;line-height:1.3}
  .aproj .body .meta{color:#7a8699;font-size:12.5px}
  .aproj .body p{margin:3px 0 0;color:#3a4658;font-size:12.8px;line-height:1.5}
  .aproj .body .go{margin-top:auto;font-size:12px;color:#2f6df6;font-weight:600;padding-top:6px}
  .aproj .body .cred{font-size:10px;color:#9aa4b3;margin-top:5px;line-height:1.3}
  @media(max-width:600px){.aproj-grid{grid-template-columns:1fr}}
</style>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/architecture/">Architecture</a> › <?= htmlspecialchars($C) ?></p>
  <h1><?= $flag ?> Famous architecture in <?= htmlspecialchars($C) ?></h1>
  <p class="lead muted" style="max-width:760px">A visual tour of <?= htmlspecialchars($C) ?>'s most important buildings — the <strong>all-time landmarks</strong> every architecture student should know, and the <strong>recent projects</strong> making news now. Each with the architect, the year, and a photo. Photos are from Wikimedia Commons; click any card to read more.</p>

  <?php if ($iconic): ?>
    <h2 style="margin-top:30px">Iconic buildings — the all-time greats</h2>
    <div class="aproj-grid"><?php foreach ($iconic as $p) echo ap_card($p); ?></div>
  <?php endif; ?>

  <?php if ($recent): ?>
    <h2 style="margin-top:34px">Recent &amp; notable — the latest hits</h2>
    <div class="aproj-grid"><?php foreach ($recent as $p) echo ap_card($p); ?></div>
  <?php endif; ?>

  <?php if (!$all): ?>
    <div class="callout">Project profiles for <?= htmlspecialchars($C) ?> are on the way. In the meantime, browse <a href="/schools/">architecture schools</a> and the latest <a href="/news/">architecture news</a>.</div>
  <?php endif; ?>

  <div class="related">
    <h2>Explore more</h2>
    <div class="rgrid">
      <a href="/schools/#c-<?= $slug ?>"><b>Architecture schools in <?= htmlspecialchars($C) ?> →</b><span>Where to study, by country</span></a>
      <a href="/architecture/"><b>All countries →</b><span>Famous architecture worldwide</span></a>
      <a href="/news/"><b>Architecture news →</b><span>What's happening now</span></a>
      <a href="/student-work/"><b>Thesis showcase →</b><span>Real student projects</span></a>
    </div>
  </div>
</div>
<?php
if ($all) {
  $items = [];
  foreach ($all as $i=>$p) $items[] = ['@type'=>'ListItem','position'=>$i+1,'name'=>$p['name']??'',
    'item'=>($p['wiki']??'') ? 'https://en.wikipedia.org/wiki/'.rawurlencode(str_replace(' ','_',$p['wiki'])) : null];
  echo '<script type="application/ld+json">'.json_encode([
    '@context'=>'https://schema.org','@type'=>'ItemList','name'=>"Famous architecture in $C",
    'itemListElement'=>$items], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>';
}
include $_SERVER['DOCUMENT_ROOT'].'/_footer.php';
