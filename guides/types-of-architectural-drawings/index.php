<?php
$PAGE_TITLE = 'Types of Architectural Drawings Explained | ArchStudent';
$PAGE_DESC  = 'Plans, sections, elevations, axonometrics, perspectives, details, site plans and exploded drawings — what each architectural drawing type shows.';
$CANONICAL  = '/guides/types-of-architectural-drawings/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/guides/">Guides</a> › Drawings</p>
  <h1>Types of architectural drawings</h1>
  <p class="lead muted">Architecture has its own visual language — knowing what each drawing type shows lets you choose the right one to explain an idea.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="Four small icons showing the same house drawn as a plan, a section, an elevation and an axonometric">
      <g font-family="sans-serif" font-size="12" fill="#8f351f" text-anchor="middle">
        <text x="90" y="30">PLAN</text><text x="240" y="30">SECTION</text><text x="390" y="30">ELEVATION</text><text x="540" y="30">AXONOMETRIC</text>
      </g>
      <!-- PLAN: rooms from above, walls poché -->
      <g stroke="#1a1a1a" fill="none">
        <rect x="40" y="50" width="100" height="90" stroke-width="4"/>
        <line x1="90" y1="50" x2="90" y2="140" stroke-width="4"/>
        <path d="M90 95 A18 18 0 0 1 108 113" stroke-width="1"/>
        <line x1="40" y1="72" x2="40" y2="88" stroke="#f0ece6" stroke-width="5"/>
      </g>
      <!-- SECTION: cut ground + volume, poché slab -->
      <g stroke="#1a1a1a" fill="none">
        <path d="M190 130 L190 70 L240 45 L290 70 L290 130" stroke-width="4"/>
        <rect x="190" y="130" width="100" height="10" fill="#1a1a1a" stroke="none"/>
        <line x1="200" y1="130" x2="200" y2="95" stroke-width="1"/>
        <line x1="280" y1="130" x2="280" y2="95" stroke-width="1"/>
      </g>
      <text x="240" y="158" font-family="sans-serif" font-size="10" fill="#55524c" text-anchor="middle">poché = cut solid</text>
      <!-- ELEVATION: flat face, no perspective -->
      <g stroke="#1a1a1a" fill="none" stroke-width="2">
        <path d="M340 130 L340 70 L390 45 L440 70 L440 130 Z"/>
        <rect x="352" y="88" width="18" height="22" fill="#f4f1ea"/>
        <rect x="410" y="88" width="18" height="22" fill="#f4f1ea"/>
        <rect x="382" y="96" width="16" height="34" fill="#2f5a4c"/>
      </g>
      <!-- AXONOMETRIC: parallel 3D -->
      <g stroke="#1a1a1a" fill="none" stroke-width="2">
        <path d="M500 120 L540 100 L580 120 L580 70 L540 50 L500 70 Z"/>
        <path d="M500 70 L540 90 L580 70" />
        <path d="M540 90 L540 140" />
        <path d="M500 120 L540 140 L580 120" stroke="#b8492e"/>
      </g>
      <line x1="20" y1="180" x2="620" y2="180" stroke="#55524c" stroke-width="1" stroke-dasharray="3 4"/>
      <text x="320" y="204" font-family="sans-serif" font-size="12" fill="#55524c" text-anchor="middle">Plans &amp; sections cut the building; elevations &amp; axonometrics show how it looks.</text>
    </svg>
  </div><figcaption>The same house told four ways — no single drawing describes a three-dimensional building on its own.</figcaption></figure>

  <h2>Why so many drawing types</h2>
  <p>No single drawing can describe a three-dimensional building completely, so architects use a family of standardised views, each answering a different question. Plans and sections cut through the building to reveal how it works; elevations and perspectives show how it looks; details zoom in on how it is made. A good set works together, letting a reader reconstruct the whole from complementary views. Learn to read them fluently and you will design faster, because you will know exactly which drawing will test the idea in your head.</p>

  <h2>Plan</h2>
  <p>A plan is a horizontal cut through the building, conventionally taken about 1.2&nbsp;metres above the floor, viewed from above. It shows the arrangement of walls, rooms, doors, windows and circulation — the fundamental organisation of space. Plans are where you resolve how people move through a building and how rooms relate, which is why tutors return to them again and again. Anything cut by the plane (walls, columns) is drawn as a heavy line; things below it are lighter.</p>

  <h2>Section</h2>
  <p>A section is a vertical cut through the building, revealing floor-to-floor heights, the relationship between levels, roof form and how spaces stack. It is the drawing that exposes the experiential quality of a space — a double-height hall or a compressed entrance only becomes legible in section. Sections also carry crucial technical information about construction and structure, making them indispensable at both concept and detail stages.</p>
  <div class="callout"><strong>Tip.</strong> If a project feels flat, draw a section early. It forces you to think about height, light and the vertical experience that plans alone hide.</div>

  <h2>Elevation</h2>
  <p>An elevation is a flat, head-on view of one face of the building, drawn without perspective so that proportions and dimensions stay true. Elevations describe the external appearance — the rhythm of openings, materials, and the composition of the facade. Because they keep true scale, they are used to study proportion and to communicate the look of a building to planners and clients.</p>

  <h2>Axonometric and isometric</h2>
  <p>Axonometric drawings (often shortened to "axo") show the building in three dimensions while keeping lines parallel rather than converging, so measurements remain readable along each axis. They give an objective, almost diagrammatic three-dimensional view that is excellent for explaining spatial relationships and construction sequence without the distortion of perspective. The worm's-eye axo, drawn looking up, is a favourite for revealing ceilings and structure.</p>

  <h2>Perspective</h2>
  <p>A perspective mimics how the human eye sees, with parallel lines converging toward vanishing points, giving a realistic impression of depth. It is the drawing that sells an atmosphere — how a space will feel to stand in — and is central to renders and presentation images. Because it distorts true dimensions, a perspective is for persuasion and experience, never for measuring.</p>

  <h2>Detail</h2>
  <p>A detail is a large-scale drawing (typically 1:1 to 1:20) of a specific junction — where wall meets roof, or a window sits in an opening. Details describe exactly how elements are assembled: materials, layers, fixings and thicknesses. They prove a design can actually be built and are the drawings a contractor relies on most, so precision and clear annotation matter more here than anywhere else.</p>

  <h2>Site plan</h2>
  <p>A site plan zooms out to show the building in its wider context — its footprint on the plot, boundaries, access, landscape, neighbouring structures and orientation. Drawn at small scales such as 1:200 or 1:500, it explains how a proposal sits in its surroundings and is a required drawing for planning applications. A north point and levels are almost always included.</p>

  <h2>Exploded drawing</h2>
  <p>An exploded view separates the components of a building or assembly and floats them apart along their axes, as if pausing mid-construction. It is a powerful way to communicate how parts fit together — structure, envelope, services and interior peeled into layers — and is widely used to explain systems, prefabrication and design logic in a single image.</p>
  <div class="callout warn"><strong>Watch out.</strong> Always label the scale, orientation and cut line of a drawing. A brilliant section is useless if the reader cannot tell where it was cut or which way it faces.</div>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/guides/architectural-drawing-conventions/"><b>Drawing conventions →</b><span>Line weights, hatching &amp; symbols</span></a>
    <a href="/guides/architecture-scales-explained/"><b>Architecture scales →</b><span>Which scale suits each drawing</span></a>
    <a href="/guides/architecture-glossary/"><b>Architecture glossary →</b><span>Key terms explained plainly</span></a>
    <a href="/guides/"><b>All guides →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Types of architectural drawings","description":"Plans, sections, elevations, axonometrics, perspectives, details, site plans and exploded drawings — what each architectural drawing type shows.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/guides/types-of-architectural-drawings/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
