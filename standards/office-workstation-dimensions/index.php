<?php
$PAGE_TITLE = 'Office Workstation Dimensions — desks, area per person & circulation | ArchStudent';
$PAGE_DESC  = 'Office planning dimensions for students: desk sizes (1400–1600 × 800mm), floor area per person (~8–12m² including circulation), meeting-room sizing, circulation widths and density benchmarks, with a labelled workstation plan.';
$CANONICAL  = '/standards/office-workstation-dimensions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Office workstation dimensions</p>
  <h1>Office workstation dimensions</h1>
  <p class="lead muted">Desk sizes, area per person, circulation and meeting-room figures for laying out an office — and how to test a layout against a target density.</p>

  <div class="kfacts">
    <div class="k"><b>1400–1600</b><span>Desk width (mm)</span></div>
    <div class="k"><b>800</b><span>Desk depth (mm)</span></div>
    <div class="k"><b>~10–12</b><span>m² per person (incl. circ.)</span></div>
    <div class="k"><b>~2</b><span>m² per meeting seat</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 380" role="img" aria-label="Plan of a workstation showing desk size, chair zone and circulation">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <rect x="30" y="24" width="580" height="332" fill="#f4f1ea" stroke="#c9c4bd" stroke-width="1.5"/>
        <!-- desk -->
        <rect x="120" y="70" width="300" height="130" rx="4" fill="#f0ece6" stroke="#1a1a1a" stroke-width="2"/>
        <text x="270" y="140" font-size="14" fill="#55524c" text-anchor="middle">Desk 1500 × 800</text>
        <!-- chair -->
        <circle cx="270" cy="245" r="34" fill="#e6e0d7" stroke="#1a1a1a" stroke-width="1.8"/>
        <path d="M240,238 a30,30 0 0 1 60,0" fill="none" stroke="#1a1a1a" stroke-width="1.8"/>
        <!-- desk width dim -->
        <line x1="120" y1="50" x2="420" y2="50" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="270" y="44" font-size="12.5" fill="#8f351f" text-anchor="middle">1400–1600</text>
        <!-- desk depth dim -->
        <line x1="100" y1="70" x2="100" y2="200" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="94" y="140" font-size="12.5" fill="#8f351f" text-anchor="end">800</text>
        <!-- chair zone -->
        <line x1="450" y1="200" x2="450" y2="290" stroke="#2f5a4c" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="458" y="248" font-size="12.5" fill="#2f5a4c">Chair zone ≥ 900</text>
        <!-- circulation -->
        <line x1="120" y1="325" x2="420" y2="325" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="270" y="345" font-size="12.5" fill="#8f351f" text-anchor="middle">Circulation route 1200–1500</text>
        <text x="46" y="356" font-size="11.5" fill="#55524c">mm · plan view</text>
      </svg>
    </div>
    <figcaption>A single workstation in plan. The desk footprint plus the chair zone behind it plus a share of the circulation route is what really sets the <strong>area per person</strong>. All dimensions in mm.</figcaption>
  </figure>

  <p>Planning an office balances three things: the desk each person works at, the shared space they move through and meet in, and the overall density. Get the per-desk numbers right, then test them against a target area per person.</p>

  <h2>Desk &amp; workstation sizes</h2>
  <table class="data">
    <tr><th>Item</th><th>Typical dimension</th><th>Notes</th></tr>
    <tr><td>Individual desk</td><td>1400–1600 × 800 mm</td><td>Height ~720–740 mm</td></tr>
    <tr><td>Compact / bench desk</td><td>1200 × 800 mm</td><td>Shared runs, denser layouts</td></tr>
    <tr><td>Chair zone behind desk</td><td>900 mm minimum</td><td>1000–1200 mm if a route passes</td></tr>
    <tr><td>Pedestal / storage</td><td>~400–600 mm wide</td><td>Under-desk or shared bank</td></tr>
  </table>
  <p>Bench desks share a run and a spine of power, so several people sit along a continuous top. Behind each desk allow at least 900&nbsp;mm from the desk edge for the chair, and more where circulation passes.</p>

  <h2>Floor area per person</h2>
  <p>A useful planning benchmark is the net internal area per workstation, including a share of circulation but excluding major shared facilities. Open-plan offices are typically planned at roughly <strong>10–12m²</strong> per person for a comfortable standard once circulation is counted, with dense fit-outs down toward 6–8m² and generous or cellular layouts nearer 12–15m². Occupational floor-space guidance also sets a minimum unoccupied volume per person — a separate check.</p>
  <table class="data">
    <tr><th>Density</th><th>Area per person</th><th>Notes</th></tr>
    <tr><td>Dense open-plan</td><td>~6–8 m²</td><td>Bench desks, hot-desking</td></tr>
    <tr><td>Standard open-plan</td><td>~10–12 m²</td><td>Comfortable typical target</td></tr>
    <tr><td>Generous / cellular</td><td>12–15 m²</td><td>Private offices, more storage</td></tr>
  </table>

  <h2>Circulation</h2>
  <table class="data">
    <tr><th>Route</th><th>Typical width</th><th>Notes</th></tr>
    <tr><td>Primary circulation</td><td>1200–1500 mm</td><td>Main route across the floor</td></tr>
    <tr><td>Secondary between rows</td><td>1000–1200 mm</td><td>Between banks of desks</td></tr>
    <tr><td>Access to one desk</td><td>700–800 mm</td><td>Minimum — do not overuse</td></tr>
  </table>
  <p>A minimum access way to reach a single workstation can be around 700–800&nbsp;mm, but avoid designing whole floors to the minimum — tight circulation is where offices feel cramped and where accessibility fails.</p>

  <h2>Meeting rooms</h2>
  <p>Size meeting rooms by seats plus the space to sit and pass behind chairs. Allow roughly <strong>2m² per person</strong> seated at a table as a quick figure, so a 6-person room is around 12–15m² and a small huddle room for 2–4 people around 6–9m². The table needs about 600&nbsp;mm of edge per person, plus the same ~750&nbsp;mm chair pull-out that dining layouts use.</p>
  <table class="data">
    <tr><th>Room</th><th>Typical area</th><th>Notes</th></tr>
    <tr><td>Huddle room (2–4)</td><td>6–9 m²</td><td>Informal, small screen</td></tr>
    <tr><td>Meeting room (6)</td><td>12–15 m²</td><td>~2 m² per person seated</td></tr>
    <tr><td>Boardroom (10–12)</td><td>25–35 m²</td><td>Circulation all around table</td></tr>
    <tr><td>Table edge per person</td><td>~600 mm</td><td>Plus 750 mm chair pull-out</td></tr>
  </table>

  <h2>Putting it together</h2>
  <p>Once desks, circulation and meeting rooms are drawn, divide the total net floor area by the number of workstations to find the real area per person and compare it with the benchmarks above. Below about 6m² the layout is likely too tight for comfort or accessibility; well above 12m², check whether the space is being used efficiently for the brief.</p>

  <div class="callout warn"><strong>Always verify.</strong> These figures reflect UK guidance and general practice, and density targets in particular vary widely by organisation and market. Confirm against the fit-out brief, occupational floor-space regulations (e.g. UK Workplace Regulations minimum volume per person) and the accessibility standards for your project and country.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/furniture-dimensions/"><b>Furniture dimensions →</b><span>Desks, chairs, storage and clearances</span></a>
      <a href="/standards/human-scale-anthropometrics/"><b>Human scale &amp; anthropometrics →</b><span>The seated body dimensions behind desks</span></a>
      <a href="/standards/corridor-widths/"><b>Corridor widths →</b><span>Circulation and escape-route widths</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Office workstation dimensions","description":"Desk sizes, floor area per person, circulation widths, meeting-room sizing and office density benchmarks, with a labelled workstation plan.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/office-workstation-dimensions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
