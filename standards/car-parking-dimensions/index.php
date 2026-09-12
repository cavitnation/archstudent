<?php
$PAGE_TITLE = 'Car Parking Dimensions — bay sizes & aisle widths | ArchStudent';
$PAGE_DESC  = 'Standard car parking dimensions for students: bay sizes, aisle widths for 90°/45° layouts, parallel bays and accessible (disabled) parking bays, with a plan diagram.';
$CANONICAL  = '/standards/car-parking-dimensions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Car parking dimensions</p>
  <h1>Car parking dimensions</h1>
  <p class="lead muted">Bay sizes and aisle widths for laying out car parks that actually work — plus the accessible bay everyone forgets.</p>

  <div class="kfacts">
    <div class="k"><b>2.4 × 4.8</b><span>Standard bay (m)</span></div>
    <div class="k"><b>6.0</b><span>Two-way aisle, 90° (m)</span></div>
    <div class="k"><b>3.6</b><span>Accessible bay width (m)</span></div>
    <div class="k"><b>1.2</b><span>Access zone each side (m)</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 320" role="img" aria-label="Plan of perpendicular parking bays with aisle width and an accessible bay with side access zone">
        <defs>
          <marker id="pa" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <g stroke="#1a1a1a" stroke-width="1.6" fill="#fff">
          <rect x="60" y="40" width="52" height="104"/>
          <rect x="112" y="40" width="52" height="104"/>
          <rect x="164" y="40" width="52" height="104"/>
          <rect x="216" y="40" width="52" height="104"/>
        </g>
        <rect x="288" y="40" width="52" height="104" fill="#eef4f1" stroke="#2f5a4c" stroke-width="1.6"/>
        <rect x="340" y="40" width="26" height="104" fill="#e2ece7" stroke="#2f5a4c" stroke-width="1" stroke-dasharray="4 3"/>
        <text x="300" y="98" font-size="16" fill="#2f5a4c" font-weight="700">&#9855;</text>
        <text x="343" y="150" font-size="10.5" fill="#2f5a4c">1.2 m</text>
        <rect x="60" y="150" width="306" height="70" fill="#f5f1ea"/>
        <text x="185" y="190" font-size="13" fill="#55524c">aisle</text>
        <line x1="60" y1="30" x2="112" y2="30" stroke="#b8492e" stroke-width="1.3" marker-start="url(#pa)" marker-end="url(#pa)"/>
        <text x="66" y="24" font-size="12" fill="#8f351f" font-weight="600">2.4 m</text>
        <line x1="46" y1="40" x2="46" y2="144" stroke="#b8492e" stroke-width="1.3" marker-start="url(#pa)" marker-end="url(#pa)"/>
        <text x="14" y="96" font-size="12" fill="#8f351f" font-weight="600">4.8 m</text>
        <line x1="400" y1="150" x2="400" y2="220" stroke="#b8492e" stroke-width="1.3" marker-start="url(#pa)" marker-end="url(#pa)"/>
        <text x="408" y="190" font-size="12" fill="#8f351f" font-weight="600">6.0 m aisle (90°)</text>
        <text x="290" y="34" font-size="11" fill="#2f5a4c">accessible bay</text>
      </svg>
    </div>
    <figcaption>Perpendicular (90°) bays with a 6&nbsp;m two-way aisle. An accessible bay adds a <strong>1.2&nbsp;m access zone</strong> so a wheelchair user can transfer beside the car.</figcaption>
  </figure>

  <h2>Standard bay size (UK)</h2>
  <div class="callout"><strong>2.4 m wide × 4.8 m long</strong> is the standard UK parking bay. Aim for 2.5&nbsp;m width where you can — it's far more usable next to walls, columns or other cars.</div>

  <h2>Aisle widths by parking angle</h2>
  <table class="data">
    <tr><th>Parking angle</th><th>Bay depth</th><th>Aisle width (two-way / manoeuvring)</th></tr>
    <tr><td>90° (perpendicular)</td><td>4.8 m</td><td>6.0 m</td></tr>
    <tr><td>60°</td><td>~5.0 m</td><td>4.2 m</td></tr>
    <tr><td>45°</td><td>~4.8 m</td><td>3.6 m</td></tr>
    <tr><td>Parallel</td><td>2.4 m</td><td>3.6 m</td></tr>
  </table>
  <p>Parallel bays are longer — typically <strong>6.0 m × 2.4 m</strong> to allow room to pull in and out. Angled (45°/60°) bays waste some land but need narrower aisles and are easier to enter, so they suit tight one-way layouts.</p>

  <h2>Accessible (disabled) parking bays</h2>
  <ul>
    <li><strong>Bay:</strong> 2.4 m × 4.8 m, with a <strong>1.2 m access zone</strong> to the side and rear.</li>
    <li>An end bay effectively needs <strong>3.6 m width</strong> (2.4 + 1.2 transfer zone); two bays can share a central zone.</li>
    <li>Locate close to the accessible entrance, on firm, level ground, with a dropped kerb onto the footway.</li>
    <li>Provision commonly ~<strong>5%</strong> of spaces (more for some uses) — check local planning standards.</li>
  </ul>

  <h2>Quick rules of thumb</h2>
  <ul>
    <li>A 90° layout is the most space-efficient for a given site width.</li>
    <li>One module (bay + aisle + bay) is about <strong>15.6 m</strong> deep at 90° (4.8 + 6.0 + 4.8).</li>
    <li>Allow at least one accessible space, even on small schemes.</li>
    <li>Add circulation, landscaping, EV bays and turning heads on top of the raw bay grid.</li>
  </ul>

  <div class="callout warn"><strong>Always verify.</strong> Values reflect common UK design guidance; local highway authorities and other countries set their own standards. Confirm the figures for your site.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/ramp-gradients/"><b>Ramp gradients →</b><span>Accessible routes from the car park</span></a>
      <a href="/standards/door-sizes/"><b>Door sizes →</b><span>Accessible entrances</span></a>
      <a href="/building-codes/"><b>Building codes by country →</b><span>Local planning standards</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Car parking dimensions","description":"Standard parking bay sizes, aisle widths and accessible bay dimensions, with a plan diagram.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/car-parking-dimensions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
