<?php
$PAGE_TITLE = 'Free Seamless Textures for Architects — download | ArchStudent';
$PAGE_DESC  = 'Free seamless, tileable textures for architecture renders and diagrams: concrete, brick, wood, grass, gravel and plaster. Download individually or as a pack.';
$CANONICAL  = '/resources/textures/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
$dir = $_SERVER['DOCUMENT_ROOT'].'/downloads/textures';
$files = glob($dir.'/*.jpg'); sort($files);
function nice($f){ return ucwords(str_replace('-',' ', str_replace('-seamless','', pathinfo($f, PATHINFO_FILENAME)))); }
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/resources/">Resources</a> › Textures</p>
  <h1>Free seamless textures</h1>
  <p class="lead muted" style="max-width:700px">Tileable 1024&nbsp;px textures for renders, elevations and diagrams — drop them into Photoshop, SketchUp or your render engine and they repeat with no visible seams. Free for student and commercial work.</p>
  <a class="dl-all" href="/downloads/archstudent-textures.zip" download>⬇ Download all textures (.zip)</a>
  <div class="asset-grid">
    <?php foreach($files as $f): $b = basename($f); ?>
    <div class="asset">
      <div class="thumb"><img src="/downloads/textures/<?= $b ?>" alt="<?= nice($f) ?> seamless texture" loading="lazy"></div>
      <div class="meta"><b><?= nice($f) ?></b><a href="/downloads/textures/<?= $b ?>" download>Download</a></div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="callout">These are procedural seamless tiles made in-house — free to use in any project, no attribution required. More textures added regularly.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
