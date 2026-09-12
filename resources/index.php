<?php
$PAGE_TITLE = 'Free Architecture Resources & Downloads — cheat sheets, checklists, CAD | ArchStudent';
$PAGE_DESC  = 'Free downloads for architecture students: dimension cheat sheets, design checklists, software shortcut sheets (AutoCAD, Revit, Rhino), CAD blocks, cutout people and seamless textures. No sign-up.';
$CANONICAL  = '/resources/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

function dlcard($file,$badge,$title,$desc){ ?>
  <div class="dl-card">
    <span class="ftype"><?= htmlspecialchars($badge) ?></span>
    <h3><?= htmlspecialchars($title) ?></h3>
    <p><?= $desc ?></p>
    <a class="dl" href="/downloads/<?= $file ?>" download>Download PDF ↓</a>
  </div>
<?php }
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Free Resources</p>
  <h1>Free resources</h1>
  <p class="lead muted" style="max-width:720px">Printable PDFs and ready-to-use assets you can download right now — no sign-up, no paywall. Pin them above your desk, drop them in your project folder, share them with your studio.</p>

  <a class="card" href="/resources/free-download-sites/" style="display:block;margin-top:22px;border-color:#2f6df6">
    <h3 style="margin:0">🌐 40+ free download sites — models, CAD, textures, entourage &amp; more</h3>
    <p class="muted" style="margin:6px 0 0">A hand-checked directory of the best places to download free 3D models, Revit/BIM families, CAD blocks, PBR textures, HDRIs, cutout people, fonts and mockups — each tagged with its licence.</p>
    <span class="tag">Browse the directory →</span>
  </a>

  <h2 style="margin-top:36px">Cheat sheets &amp; references</h2>
  <div class="grid cols-4" style="margin:18px 0 8px">
    <?php
    dlcard('architecture-dimensions-cheat-sheet.pdf','PDF · 2 pages','Dimensions Cheat Sheet','The numbers you look up on every project — stairs, doors, ramps, parking, circulation and guarding.');
    dlcard('drawing-scales-reference.pdf','PDF · reference','Drawing Scales Reference','Which scale to use and what it\'s for — 1:1 to 1:2500 — plus how to read each one.');
    dlcard('human-dimensions-anthropometrics.pdf','PDF · reference','Human Dimensions &amp; Anthropometrics','Body dimensions for sizing spaces and furniture — standing, seated, reach and wheelchair users.');
    dlcard('accessibility-quick-reference.pdf','PDF · reference','Accessibility Quick Reference','Key accessible-design figures at a glance — doors, ramps, WCs, turning circles and parking.');
    ?>
  </div>

  <h2 style="margin-top:34px">Checklists</h2>
  <div class="grid cols-4" style="margin:18px 0 8px">
    <?php
    dlcard('design-process-checklist.pdf','PDF · checklist','Design Process Checklist','The six-stage path from a blank brief to a resolved scheme, as a tick-box checklist.');
    dlcard('site-analysis-checklist.pdf','PDF · checklist','Site Analysis Checklist','Physical, environmental, movement, context and regulatory — everything to record on site.');
    dlcard('architecture-portfolio-checklist.pdf','PDF · checklist','Portfolio Checklist','Curation, what each project should show, layout and craft — before you submit.');
    dlcard('crit-and-presentation-checklist.pdf','PDF · checklist','Crit &amp; Presentation Checklist','Walk into your review prepared — the day before, the pin-up, presenting and feedback.');
    ?>
  </div>

  <h2 style="margin-top:34px">Software shortcuts</h2>
  <p class="muted" style="max-width:680px">The keyboard shortcuts that make you fast. Print one and tape it next to your screen.</p>
  <div class="grid cols-4" style="margin:16px 0 8px">
    <?php
    dlcard('autocad-shortcuts-cheat-sheet.pdf','PDF · shortcuts','AutoCAD Shortcuts','Command aliases for draw, modify, annotate and the function keys.');
    dlcard('revit-shortcuts-cheat-sheet.pdf','PDF · shortcuts','Revit Shortcuts','Two-key shortcuts for create, modify, view and visibility.');
    dlcard('sketchup-shortcuts-cheat-sheet.pdf','PDF · shortcuts','SketchUp Shortcuts','Default tool shortcuts for drawing, modelling and navigating.');
    dlcard('rhino-essential-commands.pdf','PDF · commands','Rhino Essential Commands','The 2D, edit, 3D-modelling and output commands you\'ll use most.');
    dlcard('photoshop-for-architects-shortcuts.pdf','PDF · shortcuts','Photoshop for Architects','Shortcuts that speed up render post-production, collage and diagrams.');
    ?>
    <div class="dl-card" style="background:var(--bg-alt);border-style:dashed">
      <span class="ftype">Requests open</span>
      <h3>Want another cheat sheet?</h3>
      <p>Need shortcuts for Grasshopper, Lumion or something else? Ask and we\'ll add it.</p>
      <a class="dl" href="/contact/" style="background:var(--accent)">Request one →</a>
    </div>
  </div>

  <h2 style="margin-top:44px">Asset libraries</h2>
  <p class="muted" style="max-width:680px">CAD and image assets you reuse on every project. Free, no sign-up.</p>
  <div class="grid cols-4" style="margin:22px 0">
    <a class="card" href="/resources/cad-blocks/"><div class="ico">📦</div><h3>CAD blocks</h3><p>Furniture, kitchen, sanitary, cars, trees, people &amp; symbols — DXF, drawn to scale.</p><span class="tag">37 blocks →</span></a>
    <a class="card" href="/resources/cutout-people/"><div class="ico">🚶</div><h3>Cutout people</h3><p>Transparent PNG + SVG scale figures for renders &amp; collage.</p><span class="tag">10 figures →</span></a>
    <a class="card" href="/resources/textures/"><div class="ico">🧱</div><h3>Seamless textures</h3><p>Tileable concrete, brick, wood, marble, water, paving &amp; more.</p><span class="tag">12 textures →</span></a>
    <a class="card" href="/building-codes/"><div class="ico">🌍</div><h3>Codes by country</h3><p>Official building codes &amp; regulations for 40+ countries.</p><span class="tag">40 countries →</span></a>
  </div>

  <div class="callout" style="margin-top:10px">Everything here stays free. New downloads are added regularly — <a href="/contact/">tell us what you need next</a>.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
