<?php
http_response_code(404);
$PAGE_TITLE = 'Page not found (404) | ArchStudent';
$PAGE_DESC  = 'That page could not be found. Explore ArchStudent — standards, tutorials, guides and free resources for architecture students.';
$CANONICAL  = '/404/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose" style="text-align:center;padding:40px 0 10px">
  <div style="font-family:var(--serif);font-size:clamp(3rem,10vw,5rem);color:var(--accent)">404</div>
  <h1>This page slipped off the drawing board</h1>
  <p class="lead muted" style="margin-left:auto;margin-right:auto">The page you're after doesn't exist or has moved. Here's where most students head next:</p>
</div>
<div class="wrap">
  <div class="grid cols-3" style="margin:10px 0 30px">
    <a class="card" href="/standards/"><div class="ico">📐</div><h3>Standards &amp; Dimensions</h3><p>The numbers you look up on every project.</p></a>
    <a class="card" href="/process/"><div class="ico">🧭</div><h3>Design Process</h3><p>Step-by-step, brief to resolved scheme.</p></a>
    <a class="card" href="/resources/"><div class="ico">📦</div><h3>Free Resources</h3><p>CAD blocks, textures, cutouts &amp; PDFs.</p></a>
    <a class="card" href="/tutorials/"><div class="ico">💻</div><h3>Software Tutorials</h3><p>Revit, AutoCAD, Rhino and more.</p></a>
    <a class="card" href="/news/"><div class="ico">🌍</div><h3>World News</h3><p>Architecture headlines from everywhere.</p></a>
    <a class="card" href="/"><div class="ico">🏠</div><h3>Home</h3><p>Back to the start.</p></a>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
