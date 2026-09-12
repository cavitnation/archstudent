<?php
/* Renders one country's famous architects. A per-country stub sets $ARC_COUNTRY then includes this. */
require_once $_SERVER['DOCUMENT_ROOT'].'/architects/_lib.php';

$country = $ARC_COUNTRY ?? '';
$all = arcx_by_country();
$list = $all[$country] ?? [];
if (!$list) { http_response_code(404); $PAGE_TITLE='Not found | ArchStudent'; include $_SERVER['DOCUMENT_ROOT'].'/_header.php'; echo '<div class="wrap"><h1>Country not found</h1><p><a href="/architects/">Back to all architects →</a></p></div>'; include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; exit; }

usort($list, fn($a,$b)=>strcmp($a['name'],$b['name']));
$iso  = $ARCH_ISO[$country] ?? '';
$flag = arch_flag($iso);
$cslug = arch_slug($country);
$names = array_map(fn($a)=>$a['name'], $list);

$PAGE_TITLE = 'Famous Architects of '.$country.' — Great '.$country.' Architects & Their Buildings | ArchStudent';
$PAGE_DESC  = 'The most influential architects from '.$country.' — '.implode(', ', array_slice($names,0,5)).($count=count($names)>5?' and more':'').'. Portraits, life, signature buildings and legacy.';
$CANONICAL  = '/architects/'.$cslug.'/';
foreach ($list as $a) { if (!empty($a['photo'])) { $OG_IMAGE = $a['photo']; break; } }
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
arcx_styles();

/* ItemList structured data */
$__ld = ['@context'=>'https://schema.org','@type'=>'ItemList','name'=>'Famous architects of '.$country,'itemListElement'=>[]];
$__i=1; foreach ($list as $a) { $__ld['itemListElement'][]=['@type'=>'ListItem','position'=>$__i++,'item'=>['@type'=>'Person','name'=>$a['name'],'nationality'=>$country,'url'=>$BASE.$CANONICAL.arcx_person_slug($a['name']).'/']]; }
?>
<script type="application/ld+json"><?= json_encode($__ld, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/architects/">Architects</a> › <?= $flag ?> <?= htmlspecialchars($country) ?></p>
  <h1>Famous architects of <?= htmlspecialchars($country) ?></h1>
  <p class="lead muted arc-lead">The architects who shaped <?= htmlspecialchars($country) ?>’s built identity — from the masters who defined its movements to the names redrawing its skylines today. Each links to their story and their most important buildings.</p>

  <div class="arc-grid" style="margin-top:24px">
    <?php foreach ($list as $a) arcx_card($a, $cslug); ?>
  </div>

  <div class="related" style="margin-top:34px">
    <h3>Keep exploring</h3>
    <ul>
      <li><a href="/architecture/<?= $cslug ?>/">Famous buildings in <?= htmlspecialchars($country) ?> →</a></li>
      <li><a href="/schools/#c-<?= $cslug ?>">Architecture schools in <?= htmlspecialchars($country) ?> →</a></li>
      <li><a href="/architects/">All famous architects by country →</a></li>
    </ul>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
