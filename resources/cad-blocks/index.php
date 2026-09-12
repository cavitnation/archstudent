<?php
$PAGE_TITLE = 'Free CAD Blocks (DWG/DXF) for Architecture Students | ArchStudent';
$PAGE_DESC  = 'Free 2D CAD blocks for AutoCAD and other software: furniture, sanitary, cars, trees, people and more — DXF format, openable everywhere. Download individually or as a pack.';
$CANONICAL  = '/resources/cad-blocks/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
$dir = $_SERVER['DOCUMENT_ROOT'].'/downloads/cad';
$files = glob($dir.'/*.png'); sort($files);  // previews; each has a matching .dxf
function nice($f){ return ucwords(str_replace('-',' ', pathinfo($f, PATHINFO_FILENAME))); }
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/resources/">Resources</a> › CAD blocks</p>
  <h1>Free CAD blocks</h1>
  <p class="lead muted" style="max-width:700px">Common 2D plan blocks — furniture, sanitary ware, cars, trees, people and symbols — drawn to real dimensions in millimetres. Supplied as <strong>DXF</strong>, which opens in AutoCAD, Revit, ARCHICAD, DraftSight, LibreCAD and more.</p>
  <a class="dl-all" href="/downloads/archstudent-cad-blocks.zip" download>⬇ Download all blocks (.zip)</a>
  <div class="asset-grid">
    <?php foreach($files as $f): $b = basename($f); $dxf = str_replace('.png','.dxf',$b); ?>
    <div class="asset contain">
      <div class="thumb"><img src="/downloads/cad/<?= $b ?>" alt="<?= nice($f) ?> CAD block" loading="lazy"></div>
      <div class="meta"><b><?= nice($f) ?></b><a href="/downloads/cad/<?= $dxf ?>" download>DXF ↓</a></div>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="callout">Drawn at 1:1 in millimetres — insert straight into your drawing at the right size. Free to use in any project. More blocks added regularly.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
