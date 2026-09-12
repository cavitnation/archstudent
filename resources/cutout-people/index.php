<?php
$PAGE_TITLE = 'Free Cutout People (PNG) for Architecture Renders | ArchStudent';
$PAGE_DESC  = 'Free cutout people and scale figures for architecture renders, collages and diagrams — transparent PNG plus editable SVG. Download individually or as a pack.';
$CANONICAL  = '/resources/cutout-people/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
$dir = $_SERVER['DOCUMENT_ROOT'].'/downloads/cutouts';
$files = glob($dir.'/*.png'); sort($files);
function nice($f){ return ucwords(str_replace('-',' ', pathinfo($f, PATHINFO_FILENAME))); }
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/resources/">Resources</a> › Cutout people</p>
  <h1>Free cutout people</h1>
  <p class="lead muted" style="max-width:700px">Flat silhouette scale figures for renders, collages, diagrams and site plans — transparent PNG (high-res) plus editable SVG so you can recolour them. Free for any project.</p>
  <a class="dl-all" href="/downloads/archstudent-cutout-people.zip" download>⬇ Download all cutouts (.zip)</a>
  <div class="asset-grid">
    <?php foreach($files as $f): $b = basename($f); $svg = str_replace('.png','.svg',$b); ?>
    <div class="asset contain">
      <div class="thumb"><img src="/downloads/cutouts/<?= $b ?>" alt="<?= nice($f) ?> cutout figure" loading="lazy"></div>
      <div class="meta"><b><?= nice($f) ?></b><span><a href="/downloads/cutouts/<?= $b ?>" download>PNG</a> · <a href="/downloads/cutouts/<?= $svg ?>" download>SVG</a></span></div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="callout">Transparent PNGs at 3&times; resolution, plus vector SVGs you can recolour or scale infinitely. Free to use, no attribution required.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
