<?php
$PAGE_TITLE = 'SketchUp for Architecture: Fast Massing Basics | ArchStudent';
$PAGE_DESC  = 'Learn SketchUp for architecture: fast massing, push/pull, groups &amp; components, sections, handy extensions and exporting for presentation.';
$CANONICAL  = '/tutorials/sketchup/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/tutorials/">Tutorials</a> › SketchUp</p>
  <h1>SketchUp for architecture</h1>
  <p class="lead muted">The fastest way to turn a sketch into a 3D massing model, with the core tools, good habits and export tricks students actually need.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="SketchUp Push/Pull: a flat rectangular face is pushed up into a 3D volume">
      <rect x="40" y="120" width="130" height="70" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
      <text x="105" y="212" text-anchor="middle" font-size="12" fill="#55524c">1. Draw a face</text>
      <path d="M204 155 h48" stroke="#b8492e" stroke-width="2" fill="none" marker-end="url(#su)"/>
      <text x="228" y="140" text-anchor="middle" font-size="11" fill="#8f351f">Push/Pull</text>
      <path d="M300 150 l90 0 l40 -34 l-90 0 z" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
      <path d="M300 150 l0 60 l90 0 l0 -60 z" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
      <path d="M390 150 l40 -34 l0 60 l-40 34 z" fill="#e6ded2" stroke="#1a1a1a" stroke-width="2"/>
      <path d="M330 210 l0 -40 l30 0 l0 40" fill="#fff" stroke="#b8492e" stroke-width="2"/>
      <text x="365" y="238" text-anchor="middle" font-size="12" fill="#55524c">2. Push into 3D volume</text>
      <path d="M470 150 h34" stroke="#2f5a4c" stroke-width="2" fill="none" marker-end="url(#su)"/>
      <rect x="520" y="112" width="96" height="90" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
      <path d="M536 178 l24 -20 l16 14 l20 -26 v40 h-60 z" fill="#2f5a4c" opacity="0.5"/>
      <text x="568" y="222" text-anchor="middle" font-size="12" fill="#8f351f">3. Export image</text>
      <defs><marker id="su" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto"><path d="M0 0 L6 3 L0 6 z" fill="#b8492e"/></marker></defs>
    </svg>
  </div><figcaption>The SketchUp loop in three moves: draw a flat face, push it into a volume, then export a clean image.</figcaption></figure>

  <div class="kfacts"><div class="k"><b>.SKP</b><span>native model file</span></div><div class="k"><b>Surface</b><span>modeller, not BIM</span></div><div class="k"><b>Free</b><span>browser version</span></div><div class="k"><b>Massing</b><span>concept-stage strength</span></div></div>

  <h2>Why students love SketchUp</h2>
  <p>SketchUp is the go-to tool for early-stage design because it is genuinely fast and intuitive. Where Revit wants a fully considered building and Rhino wants precise geometry, SketchUp lets you block out volumes, test massing options and study space in minutes. It is perfect for concept design, quick studies and presentation models. The trade-off is that it is a surface modeller, not a BIM tool, so it is about form and communication rather than documentation.</p>
  <div class="callout"><strong>Student tip.</strong> SketchUp Free runs in your browser at no cost and is plenty for learning and massing. Many universities also provide SketchUp Studio through an education plan, so check with your department before paying for anything.</div>

  <h2>The core tools</h2>
  <p>You can model most things with a handful of tools. Learn these shortcuts:</p>
  <ul>
    <li><strong>L</strong> Line, <strong>R</strong> Rectangle, <strong>C</strong> Circle, <strong>A</strong> Arc for drawing faces</li>
    <li><strong>P</strong> Push/Pull, the tool that makes SketchUp famous</li>
    <li><strong>M</strong> Move, <strong>Q</strong> Rotate, <strong>S</strong> Scale</li>
    <li><strong>O</strong> Offset (parallel edges for wall thickness), <strong>T</strong> Tape Measure for guides</li>
    <li><strong>Spacebar</strong> Select, <strong>E</strong> Eraser, <strong>B</strong> Paint Bucket for materials</li>
  </ul>
  <p>The workflow is simple: draw a flat face, then push it into 3D. Get comfortable typing exact dimensions, after starting a Push/Pull just type the value (for example 3000 and Enter) to make a wall exactly 3 metres tall. Watch for SketchUp's coloured <strong>inference</strong> cues (red, green, blue axes) that lock you to a direction.</p>

  <h2>Fast massing workflow</h2>
  <ol>
    <li>Draw the footprint as a rectangle at real size.</li>
    <li>Push/Pull it up to storey height.</li>
    <li>Copy the volume upward or offset faces to test setbacks and stepping.</li>
    <li>Cut openings by drawing a rectangle on a face and pushing it inward or through.</li>
    <li>Duplicate and nudge masses to compare design options side by side.</li>
  </ol>
  <p>Because it is so quick, treat SketchUp like a digital sketchbook: make several massing options rather than perfecting one.</p>

  <h2>Groups and components: the habit that saves you</h2>
  <p>Raw SketchUp geometry is "sticky", new faces glue themselves to whatever they touch, and edits bleed across your model. The fix is to wrap geometry in <strong>groups</strong> and <strong>components</strong> immediately.</p>
  <ul>
    <li>A <strong>group</strong> isolates geometry so it stops sticking to everything else.</li>
    <li>A <strong>component</strong> is a group that is linked, so editing one instance updates all copies. Use components for anything repeated: windows, columns, trees, a repeated flat.</li>
  </ul>
  <div class="callout warn"><strong>Group as you go.</strong> The single most common beginner mistake is modelling everything loose. Select geometry, right-click, Make Group or Make Component before moving on. Your future self will thank you.</div>

  <h2>Sections and scenes</h2>
  <p>To cut through your model, use a <strong>Section Plane</strong> (Tools menu). Drop it on a face and drag it to slice the building, giving you instant sections and cutaway views, excellent for showing internal space. Save useful viewpoints as <strong>Scenes</strong> (View → Animation → Add Scene). Scenes remember camera position, style and which layers/tags are visible, so you can flick between agreed presentation views and even export a walkthrough.</p>

  <h2>Useful extensions</h2>
  <p>The Extension Warehouse adds serious capability. A few students rely on:</p>
  <ul>
    <li><strong>Curic Section</strong> or <strong>Skalp</strong> for better section fills and hatching.</li>
    <li><strong>Fredo6 tools</strong> and <strong>Curic</strong> suites for cleaner modelling and mirroring.</li>
    <li><strong>Enscape</strong> as a live rendering plug-in when you want quick realistic images.</li>
  </ul>
  <p>Install only what you need, because too many extensions slow SketchUp down.</p>

  <h2>Exporting for presentation</h2>
  <ol>
    <li>Set a clean <strong>Style</strong> (View → Styles). A simple white style with subtle edges reads well and is easy to post-produce.</li>
    <li>Set the camera to <strong>Parallel Projection</strong> for true elevations and axonometrics, or two-point perspective for eye-level views.</li>
    <li>Export a raster image with File → Export → 2D Graphic, and push the resolution up for print quality PNGs.</li>
    <li>For line drawings, install <strong>LayOut</strong> (bundled with SketchUp Pro/Studio) to place scaled views and titleblocks on sheets.</li>
    <li>Take the exported PNG into Photoshop to add entourage, sky and shadows for a finished presentation image.</li>
  </ol>
  <p>Model fast, group everything, and export clean images, and SketchUp becomes the quickest route from idea to a communicable design.</p>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/tutorials/lumion-enscape/"><b>Lumion &amp; Enscape →</b><span>Render your SketchUp model in real time</span></a>
    <a href="/tutorials/photoshop-for-architects/"><b>Photoshop →</b><span>Post-produce your exported views</span></a>
    <a href="/tutorials/revit/"><b>Revit →</b><span>When the project needs full BIM documentation</span></a>
    <a href="/tutorials/"><b>All tutorials →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"SketchUp for architecture","description":"Learn SketchUp for architecture: fast massing, push/pull, groups and components, sections, useful extensions and exporting for presentation.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/tutorials/sketchup/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
