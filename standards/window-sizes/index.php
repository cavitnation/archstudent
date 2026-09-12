<?php
$PAGE_TITLE = 'Window Sizes & Sill Heights — standards | ArchStudent';
$PAGE_DESC  = 'Standard window sizes, sill and head heights, daylight and opening-area rules of thumb, plus minimum openable areas for fire escape windows.';
$CANONICAL  = '/standards/window-sizes/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Window sizes &amp; sill heights</p>
  <h1>Window sizes &amp; sill heights</h1>
  <p class="lead muted">Common window dimensions, sill and head heights, and the daylight, ventilation and escape rules that drive them.</p>

  <div class="kfacts">
    <div class="k"><b>800–900</b><span>General sill height (mm)</span></div>
    <div class="k"><b>~2100</b><span>Head height (mm)</span></div>
    <div class="k"><b>≥ 0.33</b><span>Escape opening (m²)</span></div>
    <div class="k"><b>~20%</b><span>Glazing for daylight</span></div>
  </div>

  <p class="lead">Windows are rarely sized by looks alone. Their width and height are set by the daylight and ventilation a room needs, their sill height by furniture and safety, and their head height by the ceiling and the depth of daylight you want to push into the room. Treat the numbers below as sensible defaults, then check them against the room's function.</p>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 380" role="img" aria-label="Section and elevation of a window showing sill height, head height and escape opening">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <!-- floor and ceiling -->
        <line x1="60" y1="330" x2="580" y2="330" stroke="#1a1a1a" stroke-width="2.4"/>
        <text x="70" y="348" font-size="12" fill="#55524c">Finished floor level</text>
        <line x1="60" y1="40" x2="580" y2="40" stroke="#c9c4bd" stroke-width="1.5"/>
        <!-- wall (elevation of window) -->
        <rect x="220" y="120" width="200" height="150" fill="#f0ece6" opacity=".55" stroke="#1a1a1a" stroke-width="2.2"/>
        <!-- window mullion / transom -->
        <line x1="320" y1="120" x2="320" y2="270" stroke="#1a1a1a" stroke-width="1.6"/>
        <line x1="220" y1="170" x2="420" y2="170" stroke="#1a1a1a" stroke-width="1.6"/>
        <!-- opening light hatch (escape) -->
        <rect x="322" y="172" width="96" height="96" fill="#f4f1ea" stroke="#8f351f" stroke-width="1.6"/>
        <text x="370" y="224" font-size="11.5" fill="#8f351f" text-anchor="middle">openable</text>
        <text x="370" y="240" font-size="11.5" fill="#8f351f" text-anchor="middle">≥ 0.33 m²</text>
        <!-- sill height dim -->
        <line x1="150" y1="270" x2="150" y2="330" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="90" y="305" font-size="12.5" fill="#8f351f" font-weight="600">sill 800–900</text>
        <!-- head height dim -->
        <line x1="480" y1="120" x2="480" y2="330" stroke="#2f5a4c" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="490" y="228" font-size="12.5" fill="#2f5a4c" font-weight="600">head ≈ 2100</text>
        <!-- escape bottom-of-opening dim -->
        <line x1="440" y1="268" x2="440" y2="330" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="450" y="302" font-size="11.5" fill="#8f351f">≤ 1100 to cill</text>
        <!-- clear min dimension arrow -->
        <line x1="322" y1="285" x2="418" y2="285" stroke="#55524c" stroke-width="1.2" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="370" y="300" font-size="11" fill="#55524c" text-anchor="middle">≥ 450 clear</text>
      </svg>
    </div>
    <figcaption>Window elevation with a first-floor escape light. Sill and head heights are measured from finished floor level; the escape opening needs ≥ 0.33 m², ≥ 450 mm each way, with its base ≤ 1100 mm above the floor. All dimensions in mm.</figcaption>
  </figure>

  <h2>Standard window sizes</h2>
  <p>Manufactured windows come in modular sizes, and it is good practice to design to a coordinating grid so units are off-the-shelf rather than bespoke. Typical residential heights run from about 450mm up to 1500mm and widths from roughly 500mm to 1800mm, with larger openings made by combining units into mullioned or transomed frames.</p>
  <table class="data">
    <tr><th>Window type</th><th>Typical size (W × H)</th><th>Notes</th></tr>
    <tr><td>Small / bathroom</td><td>500–600 × 450–900mm</td><td>Often obscured glass, top-opening</td></tr>
    <tr><td>Standard casement</td><td>900–1200 × 1050–1200mm</td><td>Common living-room and bedroom unit</td></tr>
    <tr><td>Tall / feature</td><td>600–900 × 1350–1500mm</td><td>Deeper daylight penetration</td></tr>
    <tr><td>Wide / combined</td><td>1500–1800 × 1050–1350mm</td><td>Two or three lights with mullions</td></tr>
  </table>

  <h2>Sill and head heights</h2>
  <p>A general-purpose sill sits about 800–900mm above finished floor level — clear of a worktop or radiator and comfortable to look out of while standing. In kitchens the sill usually aligns with the worktop at around 900–1000mm. Head height (top of the opening) is commonly set at about 2100mm to line through with door heads, though pushing it toward the ceiling improves how far daylight reaches into the room.</p>
  <table class="data">
    <tr><th>Element</th><th>Typical height (FFL)</th><th>Notes</th></tr>
    <tr><td>General sill height</td><td>800–900mm</td><td>Clears furniture, comfortable outlook</td></tr>
    <tr><td>Kitchen sill</td><td>900–1000mm</td><td>Aligns above worktop</td></tr>
    <tr><td>Low sill (near floor)</td><td>Below ~800mm</td><td>Needs guarding — see below</td></tr>
    <tr><td>Head height</td><td>~2100mm</td><td>Often lines through with doors</td></tr>
  </table>

  <h2>Low sills and guarding</h2>
  <p>Where a window sill is low enough that a person could fall out — typically taken as below about 800mm above the floor at first-floor level or above — the glazing or an added guard must protect the opening. As a rule of thumb, provide protection up to roughly 1100mm above the floor. Glass used as guarding must be a suitable safety glass. This overlaps with balustrade rules, so check both together.</p>

  <h2>Daylight and ventilation rules of thumb</h2>
  <p>A widely used quick check is that glazed area should be around 20% (one fifth) of the floor area of a habitable room to give reasonable daylight, though the true figure depends on orientation and obstructions. For natural ventilation, a common rule of thumb is an openable area of about 5% of the floor area of the room. Deeper rooms benefit from taller windows because daylight reaches roughly 1.5–2 times the head height into the space.</p>
  <table class="data">
    <tr><th>Rule of thumb</th><th>Typical value</th><th>Notes</th></tr>
    <tr><td>Glazed area for daylight</td><td>~20% of floor area</td><td>Depends on orientation/obstruction</td></tr>
    <tr><td>Openable area for ventilation</td><td>~5% of floor area</td><td>Purge ventilation guidance</td></tr>
    <tr><td>Daylight penetration depth</td><td>~1.5–2 × head height</td><td>Taller windows reach deeper</td></tr>
  </table>

  <h2>Fire escape windows</h2>
  <p>Some habitable rooms, especially first-floor bedrooms in houses, may rely on a window as an emergency escape. Such windows are typically required to have an unobstructed openable area of at least 0.33m² with a minimum clear width and height each of about 450mm, and the bottom of the openable area is generally between about 800mm and 1100mm above the floor so it can be reached and climbed through. Always confirm the exact requirement for your building type.</p>
  <table class="data">
    <tr><th>Escape window rule</th><th>Typical value</th><th>Notes</th></tr>
    <tr><td>Clear openable area</td><td>≥ 0.33m²</td><td>Unobstructed opening</td></tr>
    <tr><td>Min clear width / height</td><td>~450mm each</td><td>Neither dimension below this</td></tr>
    <tr><td>Bottom of opening (FFL)</td><td>~800–1100mm</td><td>Reachable and climbable</td></tr>
  </table>

  <div class="callout warn"><strong>Always verify.</strong> These figures reflect UK guidance / general practice; confirm against the standards for your project and country.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/ceiling-heights/"><b>Ceiling heights →</b><span>Head height and room proportions</span></a>
      <a href="/standards/handrail-and-balustrade-heights/"><b>Handrail &amp; balustrade heights →</b><span>Guarding low sills and openings</span></a>
      <a href="/standards/minimum-room-sizes/"><b>Minimum room sizes →</b><span>Daylight and habitable-room area</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Window sizes & sill heights","description":"Standard window sizes, sill and head heights, daylight and ventilation rules of thumb, and minimum openable areas for fire escape windows.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/window-sizes/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
