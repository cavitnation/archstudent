<?php
$PAGE_TITLE = 'Revit for Beginners: BIM Basics for Students | ArchStudent';
$PAGE_DESC  = 'A student guide to Revit: what BIM is, the interface, levels &amp; grids, walls, doors, views, sheets and schedules for your first project.';
$CANONICAL  = '/tutorials/revit/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/tutorials/">Tutorials</a> › Revit</p>
  <h1>Revit for beginners</h1>
  <p class="lead muted">Everything an architecture student needs to model a first project in Revit, from understanding BIM to putting drawings on sheets.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="One Revit wall element feeding a plan view, a section view and a door schedule from a single model">
      <rect x="256" y="104" width="128" height="52" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
      <rect x="288" y="104" width="18" height="52" fill="#b8492e" stroke="#1a1a1a" stroke-width="2"/>
      <text x="320" y="176" text-anchor="middle" font-size="12" fill="#8f351f">Wall element (one object)</text>
      <line x1="256" y1="130" x2="120" y2="70" stroke="#2f5a4c" stroke-width="1.5"/>
      <line x1="384" y1="130" x2="520" y2="70" stroke="#2f5a4c" stroke-width="1.5"/>
      <line x1="320" y1="156" x2="320" y2="196" stroke="#2f5a4c" stroke-width="1.5"/>
      <rect x="30" y="28" width="180" height="72" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
      <line x1="48" y1="56" x2="192" y2="56" stroke="#1a1a1a" stroke-width="3"/>
      <line x1="48" y1="72" x2="192" y2="72" stroke="#1a1a1a" stroke-width="3"/>
      <rect x="108" y="56" width="16" height="16" fill="#b8492e"/>
      <text x="120" y="20" text-anchor="middle" font-size="12" fill="#55524c">Plan</text>
      <rect x="430" y="28" width="180" height="72" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
      <rect x="452" y="44" width="26" height="44" fill="none" stroke="#1a1a1a" stroke-width="2"/>
      <rect x="562" y="44" width="26" height="44" fill="none" stroke="#1a1a1a" stroke-width="2"/>
      <line x1="478" y1="88" x2="562" y2="88" stroke="#1a1a1a" stroke-width="2"/>
      <text x="520" y="20" text-anchor="middle" font-size="12" fill="#55524c">Section</text>
      <rect x="250" y="196" width="140" height="52" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2"/>
      <line x1="250" y1="214" x2="390" y2="214" stroke="#1a1a1a" stroke-width="1.5"/>
      <line x1="296" y1="196" x2="296" y2="248" stroke="#1a1a1a" stroke-width="1.5"/>
      <text x="320" y="192" text-anchor="middle" font-size="12" fill="#55524c">Schedule</text>
    </svg>
  </div><figcaption>Every plan, section and schedule is just a view of the same smart model, so a change in one updates them all.</figcaption></figure>

  <div class="kfacts"><div class="k"><b>.RVT</b><span>native model file</span></div><div class="k"><b>BIM</b><span>smart objects, not lines</span></div><div class="k"><b>IFC</b><span>open exchange format</span></div><div class="k"><b>Free</b><span>student licence</span></div></div>

  <h2>What BIM actually means</h2>
  <p>Revit is a Building Information Modelling (BIM) tool, which is a different way of thinking from line-based CAD. Instead of drawing a wall as two parallel lines, you place a real <em>wall object</em> that knows its height, material, thickness and cost. Because every element is a smart object living in a single model, your plans, sections, elevations and 3D views are all views of the same building. Change a door in plan and it updates everywhere automatically. That single-source-of-truth idea is the whole point of BIM, and it is why studios and practices use it for coordinated documentation.</p>
  <div class="callout"><strong>Student tip.</strong> Revit is free for students through the Autodesk Education plan. Sign up with your university email at the Autodesk Education site and you get a named educational licence, usually for a year at a time and renewable while you study.</div>

  <h2>Getting around the interface</h2>
  <p>Spend ten minutes learning the layout before you model anything. The key regions are:</p>
  <ul>
    <li><strong>Ribbon</strong> at the top, grouped into tabs (Architecture, Structure, Insert, Annotate, View).</li>
    <li><strong>Properties</strong> palette on the left, where you edit the selected element or the current view.</li>
    <li><strong>Project Browser</strong>, your table of contents: every floor plan, elevation, section, 3D view, sheet and schedule is listed here. Double-click to open a view.</li>
    <li><strong>View Control Bar</strong> at the bottom, controlling scale, detail level and visual style.</li>
  </ul>
  <p>Learn these shortcuts early: <strong>WA</strong> (wall), <strong>DR</strong> (door), <strong>WN</strong> (window), <strong>LL</strong> (level), <strong>GR</strong> (grid), <strong>VG</strong> (visibility/graphics), <strong>ZE</strong> (zoom to fit) and typing <strong>Esc</strong> twice to deselect.</p>

  <h2>Start with levels and grids</h2>
  <p>Good Revit models begin with structure, not walls. In an elevation view, set your <strong>levels</strong> first (Level 1, Level 2, roof) because levels drive floor-to-floor heights and host your plans. Then place <strong>grids</strong> in plan to organise your column and wall positions. Getting levels and grids right at the start saves hours later.</p>
  <ol>
    <li>Open a South or East elevation from the Project Browser.</li>
    <li>Architecture tab → <strong>Level</strong>, and draw your storey heights.</li>
    <li>Back in a plan view, Architecture tab → <strong>Grid</strong>, and lay out your structural lines.</li>
  </ol>

  <h2>Walls, doors and windows</h2>
  <p>Now build the shell. Placing elements is consistent across Revit: pick the tool, choose a <em>type</em> from the Properties dropdown, set constraints, then click in the view.</p>
  <ol>
    <li>Architecture → <strong>Wall</strong>. In Properties choose a wall type (for example Generic 200mm), set the Base Constraint to Level 1 and Top Constraint to Level 2, then draw.</li>
    <li>Architecture → <strong>Door</strong>. Hover over a wall and click; the door hosts itself in the wall and cuts the opening automatically.</li>
    <li>Architecture → <strong>Window</strong>. Same idea, set the sill height in Properties before placing.</li>
    <li>Add a <strong>Floor</strong> and a <strong>Roof</strong> by sketching their boundary on the correct level.</li>
  </ol>
  <div class="callout warn"><strong>Watch the constraints.</strong> If a wall looks the wrong height, it is almost always the Base or Top Constraint, not the geometry. Check Properties before you redraw anything.</div>

  <h2>Views and sheets</h2>
  <p>The reason to use Revit is coordinated output. Every plan, section and elevation is generated live from the model. To make a section, use View → <strong>Section</strong> and drag the cut line across your building; a new section view appears in the Project Browser. When your views are ready, you assemble them onto <strong>sheets</strong>:</p>
  <ol>
    <li>Right-click <strong>Sheets</strong> in the Project Browser → New Sheet, and pick a titleblock.</li>
    <li>Drag views from the browser straight onto the sheet.</li>
    <li>Set each view's scale in the View Control Bar so it reads properly at, say, 1:100.</li>
    <li>Print or export the sheet to PDF for hand-in.</li>
  </ol>

  <h2>Schedules: data that draws itself</h2>
  <p>Because elements carry information, Revit can count them for you. View → <strong>Schedules/Quantities</strong> → choose a category such as Doors, pick the fields (Mark, Width, Height, Type) and Revit builds a live table. Add a door in plan and the schedule updates. This is a great way to show tutors you understand BIM rather than just drawing.</p>

  <h2>A first-project workflow</h2>
  <ol>
    <li>Set up levels and grids.</li>
    <li>Model walls, then floors and roof.</li>
    <li>Place doors and windows.</li>
    <li>Cut sections and set up elevations.</li>
    <li>Create sheets and drop views on at the right scale.</li>
    <li>Add a door or window schedule.</li>
    <li>Export sheets to PDF.</li>
  </ol>
  <p>Follow that order on a small project such as a single-storey studio and you will have a coordinated set of drawings that all stay in sync, which is exactly what Revit is built to do.</p>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/tutorials/autocad/"><b>AutoCAD →</b><span>Precise 2D drafting and plotting to scale</span></a>
    <a href="/tutorials/rhino-grasshopper/"><b>Rhino &amp; Grasshopper →</b><span>Free-form and parametric geometry</span></a>
    <a href="/tutorials/lumion-enscape/"><b>Lumion &amp; Enscape →</b><span>Render your Revit model in real time</span></a>
    <a href="/tutorials/"><b>All tutorials →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Revit for beginners","description":"A student guide to Revit: what BIM is, the interface, levels and grids, walls, doors, views, sheets and schedules for a first project.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/tutorials/revit/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
