<?php
$PAGE_TITLE = 'Photoshop for Architects: Post-Production Basics | ArchStudent';
$PAGE_DESC  = 'Photoshop for architecture students: render post-production, entourage and cutouts, diagrams, plan rendering and a clean layer workflow.';
$CANONICAL  = '/tutorials/photoshop-for-architects/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/tutorials/">Tutorials</a> › Photoshop for Architects</p>
  <h1>Photoshop for architects</h1>
  <p class="lead muted">Turn a raw render or a flat CAD export into a polished presentation image with post-production, entourage, diagrams and rendered plans.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="A Photoshop layer stack for an architectural image: base render at the bottom, then sky, entourage and adjustment layers stacked above">
      <g>
        <path d="M120 200 l180 -40 l200 0 l-180 40 z" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
        <text x="540" y="196" font-size="12" fill="#55524c">Base render</text>
        <path d="M120 158 l180 -40 l200 0 l-180 40 z" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
        <text x="540" y="154" font-size="12" fill="#55524c">Sky</text>
        <path d="M120 116 l180 -40 l200 0 l-180 40 z" fill="#e6ded2" stroke="#1a1a1a" stroke-width="2"/>
        <text x="540" y="112" font-size="12" fill="#55524c">Entourage</text>
        <path d="M120 74 l180 -40 l200 0 l-180 40 z" fill="#b8492e" opacity="0.4" stroke="#1a1a1a" stroke-width="2"/>
        <text x="540" y="70" font-size="12" fill="#8f351f">Adjustments</text>
      </g>
      <path d="M96 210 v-150" fill="none" stroke="#2f5a4c" stroke-width="2" marker-end="url(#ps)"/>
      <text x="70" y="140" text-anchor="middle" font-size="11" fill="#2f5a4c" transform="rotate(-90 70 140)">stack up</text>
      <defs><marker id="ps" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto"><path d="M0 0 L6 3 L0 6 z" fill="#2f5a4c"/></marker></defs>
    </svg>
  </div><figcaption>Everything sits on its own layer, so the base render stays untouched while sky, entourage and adjustments stack above it.</figcaption></figure>

  <div class="kfacts"><div class="k"><b>.PSD</b><span>layered master file</span></div><div class="k"><b>300 dpi</b><span>print resolution</span></div><div class="k"><b>Non-destructive</b><span>adjustment layers + masks</span></div><div class="k"><b>Free</b><span>Photopea / GIMP</span></div></div>

  <h2>Where Photoshop fits</h2>
  <p>Photoshop is where architectural images are finished. A render out of Enscape or a line drawing out of AutoCAD is only a starting point; post-production is what makes an image read clearly and look considered. Architects use Photoshop for four main jobs: polishing renders, adding people and planting (entourage), building diagrams, and rendering plans and sections into atmospheric drawings. The single skill underneath all of them is a disciplined <strong>layer workflow</strong>.</p>
  <div class="callout"><strong>Student tip.</strong> Photoshop is a paid Adobe app, but most universities provide Creative Cloud access to enrolled students, so check your IT services before buying. If not, the free tools <strong>Photopea</strong> (browser-based, near-identical interface) or <strong>GIMP</strong> cover almost everything below.</div>

  <h2>Work non-destructively in layers</h2>
  <p>The golden rule: never paint on your original image. Keep everything on separate layers so you can undo, re-order and adjust endlessly.</p>
  <ul>
    <li>Put the render or drawing on its own <strong>base layer</strong> and lock it.</li>
    <li>Use <strong>Adjustment Layers</strong> (Curves, Levels, Hue/Saturation, Color Balance) rather than editing pixels directly, they sit above and can be dialled back any time.</li>
    <li>Use <strong>Masks</strong> to hide parts of a layer with black/white paint instead of erasing.</li>
    <li>Group related layers into <strong>folders</strong> (sky, entourage, adjustments) and name them.</li>
    <li>Convert imported images to <strong>Smart Objects</strong> so scaling stays lossless.</li>
  </ul>
  <div class="callout warn"><strong>Never flatten early.</strong> Keep your layered PSD as the master and only flatten a copy for export. A flattened file cannot be edited back apart, and you will always need one more tweak.</div>

  <h2>Render post-production</h2>
  <p>A few quick moves lift almost any render:</p>
  <ol>
    <li>Set the tone with a <strong>Curves</strong> layer, gently lift shadows and control highlights.</li>
    <li>Balance colour with <strong>Color Balance</strong> or a photo filter for a consistent mood.</li>
    <li>Replace or enhance the sky by masking in a better sky image behind the building.</li>
    <li>Add depth with a subtle <strong>gradient</strong> or light atmospheric haze toward the horizon.</li>
    <li>Finish with light <strong>vignette</strong> and a touch of contrast to focus the eye.</li>
  </ol>

  <h2>Adding entourage and cutouts</h2>
  <p>Entourage, people, trees, cars and furniture, gives scale and life. Use cutout PNGs (many are free for students) and place them thoughtfully:</p>
  <ul>
    <li>Match the <strong>perspective and eye level</strong>, people's heads should sit near your horizon line.</li>
    <li>Match the <strong>lighting direction</strong>, if your sun is from the left, entourage highlights must be too.</li>
    <li>Add a soft <strong>drop shadow</strong> under each figure so they sit on the ground, not float.</li>
    <li>Vary scale correctly with distance, and desaturate distant items slightly for depth.</li>
    <li>Do not overcrowd, a few well-placed figures beat a busy crowd.</li>
  </ul>

  <h2>Making diagrams</h2>
  <p>Photoshop is excellent for clear concept and analysis diagrams over a plan or axonometric. Import a clean line drawing, then use <strong>Shape</strong> and <strong>Pen</strong> layers for coloured zones, arrows for circulation and movement, and <strong>Opacity</strong> to layer information without hiding the base. Keep a limited palette and consistent line weights so a set of diagrams reads as a family. Text on separate <strong>Type layers</strong> keeps labels crisp and editable.</p>

  <h2>Rendering plans and sections</h2>
  <p>A rendered plan turns a technical drawing into something atmospheric and legible. Starting from a clean CAD or Revit line export:</p>
  <ol>
    <li>Place the linework on the top layer set to <strong>Multiply</strong> so the black lines stay visible while colour shows through beneath.</li>
    <li>On layers below, block in <strong>materials and textures</strong>, timber floors, paving, grass, water, using clipping masks to stay inside each room.</li>
    <li>Add <strong>furniture and trees</strong> as cutouts in plan view for scale and readability.</li>
    <li>Paint soft <strong>shadows</strong> along walls (a grey layer at low opacity) to give depth.</li>
    <li>Add <strong>poché</strong>, solid or hatched fill to cut walls, so the plan reads instantly.</li>
  </ol>

  <h2>Exporting for hand-in</h2>
  <p>Work at print resolution, 300 dpi at final print size, and in RGB while editing. Export a flattened copy as a high-quality JPEG or PNG for placing into InDesign or a portfolio, and keep the layered PSD as your master. Set colour and contrast on screen close to how it will print, and if you can, do a test print early to catch anything too dark. Stay non-destructive, respect perspective and light, and Photoshop will consistently turn rough outputs into presentation-quality images.</p>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/tutorials/lumion-enscape/"><b>Lumion &amp; Enscape →</b><span>Produce the render you post-produce here</span></a>
    <a href="/tutorials/sketchup/"><b>SketchUp →</b><span>Export views to take into Photoshop</span></a>
    <a href="/tutorials/autocad/"><b>AutoCAD →</b><span>Line exports for rendered plans</span></a>
    <a href="/tutorials/"><b>All tutorials →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Photoshop for architects","description":"Photoshop for architecture students: render post-production, entourage and cutouts, diagrams, plan rendering and a clean layer workflow.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/tutorials/photoshop-for-architects/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
