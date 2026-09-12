<?php
$PAGE_TITLE = 'Ramp Gradients — accessible slopes & landings | ArchStudent';
$PAGE_DESC  = 'Accessible ramp gradients for students: maximum slopes, going lengths per gradient, landing sizes and handrail guidance from UK Approved Document M, with a section diagram.';
$CANONICAL  = '/standards/ramp-gradients/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Ramp gradients</p>
  <h1>Ramp gradients</h1>
  <p class="lead muted">How steep an accessible ramp can be — and how long each run is allowed to get before it needs a landing.</p>

  <div class="kfacts">
    <div class="k"><b>1:12</b><span>Steepest allowed (short run)</span></div>
    <div class="k"><b>1:20</b><span>Most comfortable</span></div>
    <div class="k"><b>≥ 1500</b><span>Landing length (mm)</span></div>
    <div class="k"><b>≥ 1500</b><span>Ramp width (mm)</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 300" role="img" aria-label="Section of an accessible ramp showing gradient as rise over going, with level landings top and bottom">
        <defs>
          <marker id="ra" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <!-- bottom landing -->
        <line x1="40" y1="230" x2="150" y2="230" stroke="#1a1a1a" stroke-width="2.4"/>
        <!-- ramp slope -->
        <line x1="150" y1="230" x2="470" y2="120" stroke="#1a1a1a" stroke-width="2.4"/>
        <!-- top landing -->
        <line x1="470" y1="120" x2="600" y2="120" stroke="#1a1a1a" stroke-width="2.4"/>
        <!-- fill under ramp -->
        <path d="M150,230 L470,120 L470,230 Z" fill="#f0ece6" opacity=".7"/>
        <!-- rise -->
        <line x1="470" y1="230" x2="470" y2="120" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ra)" marker-end="url(#ra)"/>
        <text x="478" y="180" font-size="13" fill="#8f351f" font-weight="600">rise (1)</text>
        <!-- going -->
        <line x1="150" y1="255" x2="470" y2="255" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ra)" marker-end="url(#ra)"/>
        <text x="270" y="273" font-size="13" fill="#8f351f" font-weight="600">going (12–20)</text>
        <!-- landing labels -->
        <text x="55" y="222" font-size="12.5" fill="#2f5a4c">level landing</text>
        <text x="490" y="112" font-size="12.5" fill="#2f5a4c">level landing</text>
        <!-- gradient callout -->
        <text x="230" y="165" font-size="13.5" fill="#55524c" transform="rotate(-19 230 165)">gradient = rise ÷ going</text>
      </svg>
    </div>
    <figcaption>A ramp's gradient is simply <strong>rise ÷ going</strong>. 1:12 means 1&nbsp;unit up for every 12 along. Every ramp needs a level landing top and bottom.</figcaption>
  </figure>

  <h2>Maximum gradient and going</h2>
  <p>The steeper the ramp, the shorter each individual run must be. UK Approved Document M pairs gradient with a maximum going (horizontal length of one run):</p>
  <table class="data">
    <tr><th>Gradient</th><th>As a percentage</th><th>Max going (one run)</th><th>Max rise (one run)</th></tr>
    <tr><td>1 : 20</td><td>5.0%</td><td>10 m</td><td>500 mm</td></tr>
    <tr><td>1 : 15</td><td>6.7%</td><td>5 m</td><td>333 mm</td></tr>
    <tr><td>1 : 12</td><td>8.3%</td><td>2 m</td><td>166 mm</td></tr>
  </table>
  <div class="callout">Never exceed <strong>1:12</strong> on an accessible ramp. Gentler is always better — 1:20 is the most comfortable and needs no intermediate landing up to 10&nbsp;m.</div>

  <h2>Worked example</h2>
  <p>To climb <strong>600&nbsp;mm</strong> at a comfortable <strong>1:15</strong>: total going = 600 × 15 = <strong>9&nbsp;m</strong>. Because 1:15 caps a single run at 5&nbsp;m (333&nbsp;mm rise), you split it into <strong>two runs</strong> with a 1500&nbsp;mm landing between — plus landings top and bottom. Total length ≈ 9&nbsp;m ramp + 3 × 1.5&nbsp;m landings.</p>

  <h2>Landings</h2>
  <ul>
    <li>Provide a level landing at the <strong>top and bottom</strong> of every ramp, at least <strong>1200 mm</strong> long, clear of door swings.</li>
    <li>Add an intermediate landing (min <strong>1500 mm</strong> long) between runs wherever the going limit is reached.</li>
    <li>Ramp surface width: at least <strong>1500 mm</strong> between walls or kerbs.</li>
  </ul>

  <h2>Other requirements</h2>
  <ul>
    <li><strong>Handrails</strong> both sides on ramps rising more than 500&nbsp;mm, at 900–1000&nbsp;mm height.</li>
    <li><strong>Kerbs / upstands</strong> at least 100&nbsp;mm to stop wheels running off the edge.</li>
    <li><strong>Slip-resistant</strong> surface, with good colour contrast at the edges and landings.</li>
    <li>Provide a ramp <em>and</em> steps where you can — many ambulant people find steps easier than a long ramp.</li>
  </ul>

  <div class="callout warn"><strong>Always verify.</strong> Figures follow UK Approved Document M; the US ADA uses a 1:12 maximum with a 30&nbsp;ft (9&nbsp;m) max run and its own landing rules. Confirm the standard for your location.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/staircase-dimensions/"><b>Staircase dimensions →</b><span>The stepped alternative</span></a>
      <a href="/standards/door-sizes/"><b>Door sizes →</b><span>Accessible clear openings</span></a>
      <a href="/standards/car-parking-dimensions/"><b>Car parking dimensions →</b><span>Including accessible bays</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Ramp gradients","description":"Accessible ramp gradients, maximum going lengths and landing requirements, with a section diagram.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/ramp-gradients/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
