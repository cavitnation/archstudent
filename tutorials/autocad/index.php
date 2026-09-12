<?php
$PAGE_TITLE = 'AutoCAD for Architecture Students: 2D Drafting | ArchStudent';
$PAGE_DESC  = 'Learn essential 2D AutoCAD for architecture: units, layers, core commands, blocks, and plotting a scaled PDF from a layout tab.';
$CANONICAL  = '/tutorials/autocad/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/tutorials/">Tutorials</a> › AutoCAD</p>
  <h1>AutoCAD for architecture students</h1>
  <p class="lead muted">The essential 2D drafting workflow, from drawing your first accurate line to plotting a scaled PDF ready for hand-in.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="AutoCAD workflow: draw at full size in model space, frame it in a scaled layout viewport, then plot a scaled PDF">
      <rect x="24" y="40" width="160" height="150" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
      <line x1="48" y1="150" x2="160" y2="150" stroke="#1a1a1a" stroke-width="3"/>
      <line x1="48" y1="60" x2="48" y2="150" stroke="#1a1a1a" stroke-width="3"/>
      <line x1="48" y1="120" x2="120" y2="120" stroke="#b8492e" stroke-width="2"/>
      <text x="104" y="30" text-anchor="middle" font-size="12" fill="#55524c">Model space (1:1)</text>
      <text x="104" y="182" text-anchor="middle" font-size="11" fill="#8f351f">3000 units = 3 m</text>
      <path d="M198 115 h44" stroke="#2f5a4c" stroke-width="2" fill="none" marker-end="url(#ar)"/>
      <rect x="256" y="40" width="160" height="150" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
      <rect x="276" y="60" width="120" height="110" fill="none" stroke="#2f5a4c" stroke-width="2" stroke-dasharray="5 4"/>
      <line x1="292" y1="150" x2="380" y2="150" stroke="#1a1a1a" stroke-width="2"/>
      <line x1="292" y1="90" x2="292" y2="150" stroke="#1a1a1a" stroke-width="2"/>
      <text x="336" y="30" text-anchor="middle" font-size="12" fill="#55524c">Layout viewport (1:100)</text>
      <path d="M430 115 h44" stroke="#2f5a4c" stroke-width="2" fill="none" marker-end="url(#ar)"/>
      <rect x="488" y="40" width="128" height="150" fill="#fff" stroke="#1a1a1a" stroke-width="2"/>
      <rect x="504" y="56" width="96" height="88" fill="none" stroke="#1a1a1a" stroke-width="1.5"/>
      <rect x="504" y="150" width="96" height="24" fill="#f0ece6" stroke="#1a1a1a" stroke-width="1.5"/>
      <text x="552" y="30" text-anchor="middle" font-size="12" fill="#8f351f">Scaled PDF</text>
      <defs><marker id="ar" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto"><path d="M0 0 L6 3 L0 6 z" fill="#2f5a4c"/></marker></defs>
    </svg>
  </div><figcaption>Draw everything full size in model space, frame it in a scaled layout viewport, then plot to a correctly scaled PDF.</figcaption></figure>

  <div class="kfacts"><div class="k"><b>.DWG</b><span>native drawing file</span></div><div class="k"><b>.DXF</b><span>exchange format</span></div><div class="k"><b>1:1</b><span>always draw full size</span></div><div class="k"><b>CTB</b><span>colour-to-pen plot style</span></div></div>

  <h2>Why AutoCAD still matters</h2>
  <p>Even in a BIM world, AutoCAD remains the standard for precise 2D drafting, detail drawings and quick technical work. It is line-based, which means you are in full control of every entity you draw. For students, learning AutoCAD teaches drawing discipline: accurate coordinates, sensible layers and printing to scale, all skills that carry across every other program you will use.</p>
  <div class="callout"><strong>Student tip.</strong> AutoCAD is free for students through the Autodesk Education plan. Register with your university email to get a named educational licence you can renew each year while you study.</div>

  <h2>Set your units first</h2>
  <p>Before drawing anything, type <strong>UNITS</strong> and set the drawing units to match your studio, usually millimetres for architecture in the UK. AutoCAD is unitless internally, so the golden rule is: <em>draw everything at full size (1:1) in real-world units</em>. A 3-metre wall is drawn 3000 units long. You handle scale later, at plotting time, not while drawing.</p>

  <h2>The core commands</h2>
  <p>You can do most architectural drafting with a small toolkit. Type the command or its shortcut and press Enter or Space.</p>
  <ul>
    <li><strong>L</strong> Line, <strong>PL</strong> Polyline (connected segments as one object)</li>
    <li><strong>C</strong> Circle, <strong>REC</strong> Rectangle, <strong>A</strong> Arc</li>
    <li><strong>O</strong> Offset (parallel copies, ideal for wall thicknesses), <strong>TR</strong> Trim, <strong>EX</strong> Extend</li>
    <li><strong>M</strong> Move, <strong>CO</strong> Copy, <strong>RO</strong> Rotate, <strong>MI</strong> Mirror, <strong>SC</strong> Scale</li>
    <li><strong>F</strong> Fillet (set radius 0 to make clean corners), <strong>H</strong> Hatch</li>
    <li><strong>DI</strong> Distance / measure, <strong>E</strong> Erase</li>
  </ul>
  <p>Enable running <strong>Object Snaps</strong> (F3) so your cursor locks to endpoints, midpoints and intersections. Precise snapping is what separates a clean drawing from a messy one. Toggle <strong>Ortho</strong> (F8) to force horizontal and vertical lines, and use dynamic input to type exact lengths as you draw.</p>

  <h2>Work in layers</h2>
  <p>Layers keep a drawing organised and control what prints and how thick. Open the <strong>Layer Properties</strong> manager (type <strong>LA</strong>) and set up a logical set before you draw:</p>
  <ol>
    <li>Create layers such as A-WALL, A-DOOR, A-GLAZ, A-FURN, A-DIMS and A-TEXT.</li>
    <li>Give each a colour, because in AutoCAD colour usually drives line weight at plot time.</li>
    <li>Assign a linetype (continuous, dashed, centre) per layer.</li>
    <li>Draw each element on its correct layer, never everything on Layer 0.</li>
  </ol>
  <div class="callout warn"><strong>Avoid the Layer 0 trap.</strong> If everything is on one layer you cannot control line weights or switch elements off for different drawings. Set layers up first, it saves a painful clean-up later.</div>

  <h2>Blocks for repeated content</h2>
  <p>A <strong>block</strong> is a reusable group of geometry, perfect for doors, furniture, trees, north points and titleblocks. Draw the object once, type <strong>B</strong> to define it as a block with a sensible name and insertion point, then use <strong>I</strong> to insert copies. Edit the block definition once and every instance updates. Many students build a small personal library of blocks they reuse across projects.</p>

  <h2>Layouts and plotting to scale</h2>
  <p>This is the part students find confusing, so take it slowly. You draw in <strong>Model space</strong> at 1:1, but you print from a <strong>Layout</strong> (paper space) tab, where a <em>viewport</em> shows your model at a chosen scale.</p>
  <ol>
    <li>Click a <strong>Layout</strong> tab at the bottom and set the paper size (for example A1) in the Page Setup.</li>
    <li>Insert your titleblock block onto the sheet.</li>
    <li>Create a viewport (type <strong>MV</strong>) to frame your drawing.</li>
    <li>Double-click inside the viewport, then set its scale from the scale list, for example 1:100.</li>
    <li>Lock the viewport scale so you do not knock it off by scrolling.</li>
    <li>Type <strong>PLOT</strong>, choose the <em>DWG To PDF</em> plotter, select the layout, tick Fit to paper only if you are printing a non-scaled sheet, and export.</li>
  </ol>
  <p>Line weights on the PDF come from a plot style table (CTB file) that maps each colour to a pen thickness. Pick a standard monochrome CTB so everything prints black at correct weights.</p>

  <h2>A quick first-drawing routine</h2>
  <ol>
    <li>Set UNITS to millimetres.</li>
    <li>Build your layers.</li>
    <li>Draw walls with Line and Offset, snap on, ortho on.</li>
    <li>Trim and fillet corners clean.</li>
    <li>Add doors and furniture as blocks.</li>
    <li>Dimension and add text on their own layers.</li>
    <li>Set up a layout, scale the viewport, plot to a scaled PDF.</li>
  </ol>
  <p>Master that loop and you can produce clean, accurate, correctly scaled architectural drawings, which is exactly what tutors and practices expect from AutoCAD.</p>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/tutorials/revit/"><b>Revit →</b><span>Move from 2D lines to a full BIM model</span></a>
    <a href="/tutorials/sketchup/"><b>SketchUp →</b><span>Fast 3D massing from your plans</span></a>
    <a href="/tutorials/photoshop-for-architects/"><b>Photoshop →</b><span>Render plans and sections into presentation drawings</span></a>
    <a href="/tutorials/"><b>All tutorials →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"AutoCAD for architecture students","description":"Essential 2D AutoCAD for architecture: units, layers, core commands, blocks, and plotting a scaled PDF from a layout tab.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/tutorials/autocad/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
