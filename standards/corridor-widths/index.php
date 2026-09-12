<?php
$PAGE_TITLE = 'Corridor & Circulation Widths — minimum sizes & clearances | ArchStudent';
$PAGE_DESC  = 'Standard corridor and circulation widths for architecture students: domestic, office, public, wheelchair access and means of escape, with a labelled plan diagram.';
$CANONICAL  = '/standards/corridor-widths/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Corridor widths</p>
  <h1>Corridor &amp; circulation widths</h1>
  <p class="lead muted">Minimum corridor widths for homes, offices and public buildings — clear clearances, wheelchair turning, passing places, and means of escape requirements.</p>

  <div class="kfacts">
    <div class="k"><b>900–1000</b><span>Min domestic hallway (mm)</span></div>
    <div class="k"><b>≥ 1200</b><span>Min accessible corridor (mm)</span></div>
    <div class="k"><b>1500–1800</b><span>Passing place / 2-way (mm)</span></div>
    <div class="k"><b>≥ 1500</b><span>Wheelchair turning circle (mm)</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 320" role="img" aria-label="Plan of an accessible corridor showing clear width, passing bay and wheelchair turning circle">
        <defs>
          <marker id="da" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
          <marker id="dg" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#4a7a6a"/></marker>
        </defs>
        <!-- Top Wall -->
        <rect x="40" y="30" width="560" height="24" fill="#d9d2c8" stroke="#1a1a1a" stroke-width="1.4"/>
        
        <!-- Bottom Wall with Passing Bay -->
        <path d="M40,194 H200 V254 H440 V194 H600 V218 H416 V278 H224 V218 H40 Z" fill="#d9d2c8" stroke="#1a1a1a" stroke-width="1.4" stroke-linejoin="round"/>

        <!-- Turning Circle -->
        <circle cx="320" cy="124" r="70" fill="none" stroke="#9a948a" stroke-width="1.2" stroke-dasharray="5 5"/>
        <text x="320" y="128" font-size="12" fill="#55524c" text-anchor="middle">1500 mm turning circle</text>

        <!-- Standard Corridor Clear Width Dimension (Green) -->
        <line x1="120" y1="58" x2="120" y2="190" stroke="#4a7a6a" stroke-width="1.4" marker-start="url(#dg)" marker-end="url(#dg)"/>
        <text x="110" y="128" font-size="12.5" fill="#2f5a4c" font-weight="600" text-anchor="end">1200 min clear</text>

        <!-- Passing Bay Clear Width Dimension (Red/Terracotta) -->
        <line x1="520" y1="58" x2="520" y2="190" stroke="#b8492e" stroke-width="1.4" marker-start="url(#da)" marker-end="url(#da)"/>
        <text x="530" y="128" font-size="12.5" fill="#8f351f" font-weight="600">1500–1800 bay</text>

        <!-- Door opening into corridor indication -->
        <path d="M570,54 A40,40 0 0 1 530,94" fill="none" stroke="#9a948a" stroke-width="1" stroke-dasharray="4 4"/>
        <line x1="570" y1="54" x2="530" y2="94" stroke="#b8492e" stroke-width="1.8"/>
        <text x="500" y="48" font-size="11" fill="#8f351f">door encroachment</text>

        <!-- Radiator / projection indicator -->
        <rect x="180" y="54" width="40" height="8" fill="#b8492e" opacity="0.8"/>
        <line x1="180" y1="66" x2="220" y2="66" stroke="#b8492e" stroke-width="0.8" stroke-dasharray="2 2"/>
        <text x="200" y="78" font-size="11" fill="#8f351f" text-anchor="middle">radiator (deduct from clear width)</text>
      </svg>
    </div>
    <figcaption>Plan view of an accessible corridor. Clear width (green) is measured between finished wall faces or projecting obstructions such as radiators. A <strong>1500 × 1800 mm passing bay</strong> allows two wheelchair users to pass.</figcaption>
  </figure>

  <h2>Key concepts</h2>
  <ul>
    <li><strong>Clear width</strong> — the unobstructed width available for walking or wheelchair travel, measured between finished wall surfaces, skirtings, handrails, or radiators.</li>
    <li><strong>Passing place</strong> — a widened section of corridor (minimum 1500 × 1800&nbsp;mm) allowing two wheelchair users or people carrying large items to pass.</li>
    <li><strong>Turning space</strong> — a 1500&nbsp;mm diameter turning circle (or 1400 × 1700&nbsp;mm ellipse) required at corridor ends, junctions, and doors for a wheelchair to make a 180° turn.</li>
    <li><strong>Encroachment</strong> — objects projecting into circulation space (doors opening inward, radiators, fire extinguishers) that reduce effective clear width.</li>
  </ul>

  <h2>Typical minimum widths</h2>
  <table class="data">
    <tr><th>Situation</th><th>Typical minimum clear width</th><th>UK Code / Guidance (Approved Doc M &amp; B)</th></tr>
    <tr><td>Domestic hallway (dwelling)</td><td>900–1000 mm</td><td>Min 900 mm; can reduce to 750 mm at single localized pinch points (e.g. radiator)</td></tr>
    <tr><td>Accessible corridor (general)</td><td>1200 mm</td><td>Approved Doc M Vol 2 min clear width (requires passing places if &lt;1800 mm)</td></tr>
    <tr><td>Preferred accessible / office</td><td>1500 mm</td><td>Allows a wheelchair user and a standing person to comfortably pass</td></tr>
    <tr><td>Public building / school / hospital</td><td>1800–2400 mm</td><td>1800 mm allows two wheelchair users to pass without stopping</td></tr>
    <tr><td>Means of escape (fire route)</td><td>1050–1800 mm+</td><td>Approved Doc B: scales with occupant load (e.g. 1050 mm for &lt;110 people, 1200 mm for &lt;220)</td></tr>
  </table>

  <div class="callout"><strong>Measure the clear width:</strong> Minimum corridor dimensions apply to net usable space. Always measure after deducting skirtings, radiators, handrails, wall-mounted equipment, and door frame projections.</div>

  <h2>Design considerations &amp; rules of thumb</h2>
  <ul>
    <li><strong>Passing place frequency:</strong> Where corridors are less than 1800&nbsp;mm wide, provide 1500 × 1800&nbsp;mm passing bays at reasonable intervals (typically within 25&nbsp;m) and at corridor junctions.</li>
    <li><strong>Doors opening into corridors:</strong> Avoid swinging doors directly into main circulation routes. If unavoidable, recess the doorway so the open door leaf does not reduce the required corridor escape width.</li>
    <li><strong>Level circulation &amp; ramps:</strong> Corridors should have level floors. Any slope steeper than 1:20 is classified as a ramp and must comply with ramp standards (maximum gradient 1:12 to 1:20 with landings).</li>
    <li><strong>Headroom:</strong> Maintain a minimum clear headroom of <strong>2100 mm</strong> (preferably 2300&nbsp;mm+ in commercial/public buildings) along all circulation routes.</li>
  </ul>

  <div class="callout warn"><strong>Always verify.</strong> These figures reflect UK Approved Documents M (Access) and B (Fire Safety) as general guidance. Minimum corridor widths for means of escape depend on occupant load, travel distances, and fire strategy — always confirm with your project's fire consultant and local building codes (e.g., IBC in the US).</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/door-sizes/"><b>Door sizes →</b><span>Clear opening widths and leaf dimensions</span></a>
      <a href="/standards/ramp-gradients/"><b>Ramp gradients →</b><span>Accessible slopes, going lengths and landings</span></a>
      <a href="/standards/wheelchair-turning-circles/"><b>Wheelchair turning circles →</b><span>Turning space, clearances and door approaches</span></a>
      <a href="/standards/staircase-dimensions/"><b>Staircase dimensions →</b><span>Riser, going, pitch and headroom</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Corridor & circulation widths","description":"Standard corridor and circulation widths: domestic, office, public, wheelchair access and means of escape, with a labelled plan diagram.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/corridor-widths/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
