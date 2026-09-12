<?php
$PAGE_TITLE = 'Restaurant & Cafe Seating Dimensions — tables, covers & circulation | ArchStudent';
$PAGE_DESC  = 'Restaurant and cafe layout dimensions for students: table sizes per cover, seat spacing, aisle and circulation widths, m² per cover (~1.5–1.9), plus bar and banquette sizes, with a labelled dining layout plan.';
$CANONICAL  = '/standards/restaurant-seating-dimensions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Restaurant seating dimensions</p>
  <h1>Restaurant &amp; cafe seating dimensions</h1>
  <p class="lead muted">Table sizes, space per cover, aisles and bar dimensions for a plan that reads as realistic — packing in covers without cramping diners or blocking service.</p>

  <div class="kfacts">
    <div class="k"><b>~1.5–1.9</b><span>m² per cover (seating)</span></div>
    <div class="k"><b>600×400</b><span>Place setting (mm)</span></div>
    <div class="k"><b>~1200</b><span>Between chair backs (mm)</span></div>
    <div class="k"><b>1350–1500</b><span>Service aisle (mm)</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 380" role="img" aria-label="Plan of a restaurant dining layout showing table sizes, seat spacing and aisles">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <rect x="30" y="24" width="580" height="332" fill="#f4f1ea" stroke="#c9c4bd" stroke-width="1.5"/>
        <!-- two two-tops on the left -->
        <g>
          <rect x="70" y="70" width="80" height="80" rx="4" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
          <circle cx="55" cy="110" r="16" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
          <circle cx="165" cy="110" r="16" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
          <text x="110" y="115" font-size="11" fill="#55524c" text-anchor="middle">700²</text>
        </g>
        <g>
          <rect x="70" y="230" width="80" height="80" rx="4" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
          <circle cx="55" cy="270" r="16" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
          <circle cx="165" cy="270" r="16" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
        </g>
        <!-- gap between chair backs -->
        <line x1="110" y1="166" x2="110" y2="214" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="118" y="194" font-size="11.5" fill="#8f351f">~1200</text>
        <!-- four-top -->
        <rect x="300" y="130" width="120" height="80" rx="4" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
        <text x="360" y="175" font-size="12" fill="#55524c" text-anchor="middle">4-top 1200×750</text>
        <circle cx="330" cy="112" r="15" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
        <circle cx="390" cy="112" r="15" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
        <circle cx="330" cy="228" r="15" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
        <circle cx="390" cy="228" r="15" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.2"/>
        <!-- service aisle on right -->
        <line x1="470" y1="60" x2="470" y2="320" stroke="#2f5a4c" stroke-width="12" stroke-linecap="round" opacity=".25"/>
        <line x1="450" y1="325" x2="490" y2="325" stroke="#2f5a4c" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="470" y="345" font-size="11.5" fill="#2f5a4c" text-anchor="middle">Service aisle 1350–1500</text>
        <text x="46" y="352" font-size="11.5" fill="#55524c">mm · plan view</text>
      </svg>
    </div>
    <figcaption>A dining layout in plan. The <strong>gap between the backs of chairs</strong> at adjacent tables and a clear <strong>service aisle</strong> are what let staff and diners move. All dimensions in mm.</figcaption>
  </figure>

  <p>Restaurant planning is a balancing act between packing in covers and keeping the room comfortable. Too tight and diners feel cramped and staff cannot serve; too generous and the business fails on rent per seat.</p>

  <h2>Space per cover</h2>
  <p>A common rule of thumb is to allow roughly <strong>1.1–1.5m²</strong> per diner for the seating area alone in a casual restaurant, rising to <strong>1.8m²</strong> or more for fine dining — a working mid-range of about <strong>1.5–1.9m² per cover</strong> — before you add kitchen, servery, WCs and circulation. The gross area per cover, including back-of-house, is usually far larger.</p>
  <table class="data">
    <tr><th>Setting</th><th>Seating area per cover</th></tr>
    <tr><td>Cafe / fast casual</td><td>~1.1–1.4 m²</td></tr>
    <tr><td>Casual restaurant</td><td>~1.4–1.7 m²</td></tr>
    <tr><td>Fine dining</td><td>~1.8–2.2 m²</td></tr>
  </table>

  <h2>Table sizes per covers</h2>
  <p>Each diner needs a place setting about <strong>600&nbsp;mm wide and 400&nbsp;mm deep</strong> to eat comfortably, with shared dishes in the middle. Table sizes follow from that. Square two-tops start around 700&nbsp;mm; four-tops around 900&nbsp;mm square or 1200 × 750&nbsp;mm rectangular. Round tables read as more sociable but pack awkwardly, so they suit looser layouts.</p>
  <table class="data">
    <tr><th>Covers</th><th>Typical table size</th></tr>
    <tr><td>2 (square)</td><td>700 × 700 mm</td></tr>
    <tr><td>4 (square)</td><td>900 × 900 mm</td></tr>
    <tr><td>4 (rectangular)</td><td>1200 × 750 mm</td></tr>
    <tr><td>6 (rectangular)</td><td>1800 × 900 mm</td></tr>
    <tr><td>Round, 4 covers</td><td>Ø ~1000 mm</td></tr>
    <tr><td>Place setting per diner</td><td>600 × 400 mm</td></tr>
  </table>

  <h2>Seat spacing, aisles &amp; circulation</h2>
  <p>Circulation is where layouts fail. Between the backs of chairs at two tables you need enough for a person to pass, so allow around <strong>1200&nbsp;mm</strong> centre gap where a chair pulls back roughly 450&nbsp;mm each side. Main service aisles that staff use with trays should be wider, around <strong>1350–1500&nbsp;mm</strong>, and at least one route through the room must meet accessibility clear widths of 900&nbsp;mm plus.</p>
  <table class="data">
    <tr><th>Route</th><th>Clear width</th></tr>
    <tr><td>Chair pull-out (per side)</td><td>~450 mm</td></tr>
    <tr><td>Between backs of chairs</td><td>~1200 mm total</td></tr>
    <tr><td>Main service aisle</td><td>1350–1500 mm</td></tr>
    <tr><td>Accessible route</td><td>900 mm+ clear</td></tr>
  </table>

  <h2>Bar dimensions</h2>
  <table class="data">
    <tr><th>Bar element</th><th>Dimension</th></tr>
    <tr><td>Bar counter height</td><td>1050–1100 mm</td></tr>
    <tr><td>Bar stool seat height</td><td>750–800 mm</td></tr>
    <tr><td>Customer counter depth</td><td>~600 mm</td></tr>
    <tr><td>Staff working zone behind</td><td>~900 mm</td></tr>
  </table>
  <p>A standing bar counter is typically 1050–1100&nbsp;mm high, paired with bar stools around 750–800&nbsp;mm seat height. Allow standing room of at least 900–1200&nbsp;mm in front of the bar, clear of any passing aisle.</p>

  <h2>Banquette seating</h2>
  <p>Fixed banquette (bench) seating along a wall is space-efficient because it removes the chair pull-out on one side. Allow a seat depth of about 600&nbsp;mm and a seat height of 450&nbsp;mm, with the table pushed close so diners slide in. Banquettes let you seat more covers in a narrow room and are a favourite trick in tight cafe plans.</p>

  <div class="callout warn"><strong>Always verify.</strong> These are planning rules of thumb; area-per-cover and aisle figures vary with the concept, licensing and local codes. Confirm against the operator's brief and the accessibility standards for your project and country (e.g. UK Approved Document M, or ADA in the US).</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/furniture-dimensions/"><b>Furniture dimensions →</b><span>Tables, chairs and clearances</span></a>
      <a href="/standards/office-workstation-dimensions/"><b>Office workstation dimensions →</b><span>Meeting-room and per-person area figures</span></a>
      <a href="/standards/human-scale-anthropometrics/"><b>Human scale &amp; anthropometrics →</b><span>The body dimensions behind seating</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Restaurant and cafe seating dimensions","description":"Table sizes per cover, seat spacing, aisle widths, m2 per cover, bar heights and banquette depths for restaurant and cafe layouts, with a labelled dining plan.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/restaurant-seating-dimensions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
