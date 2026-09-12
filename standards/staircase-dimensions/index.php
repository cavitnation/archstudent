<?php
$PAGE_TITLE = 'Staircase Dimensions — riser, going, pitch & headroom | ArchStudent';
$PAGE_DESC  = 'Standard staircase dimensions for students: riser and going sizes, the 2R+G rule, maximum pitch, headroom and handrail heights, with a labelled section diagram and UK Approved Document K figures.';
$CANONICAL  = '/standards/staircase-dimensions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Staircase dimensions</p>
  <h1>Staircase dimensions</h1>
  <p class="lead muted">The core numbers for designing a comfortable, code-compliant stair — riser, going, pitch, headroom and handrail — plus the rule of thumb that ties them together.</p>

  <div class="kfacts">
    <div class="k"><b>150–180</b><span>Comfortable riser (mm)</span></div>
    <div class="k"><b>250–300</b><span>Comfortable going (mm)</span></div>
    <div class="k"><b>≈ 600</b><span>Ideal 2R + G (mm)</span></div>
    <div class="k"><b>≥ 2000</b><span>Min headroom (mm)</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 360" role="img" aria-label="Section through a staircase showing riser, going, pitch, headroom and handrail">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <line x1="40" y1="322" x2="600" y2="322" stroke="#c9c4bd" stroke-width="1.5"/>
        <path d="M110,322 V277 H190 V232 H270 V187 H350 V142 H430 V322 Z" fill="#f0ece6" opacity=".7"/>
        <path d="M110,322 V277 H190 V232 H270 V187 H350 V142 H430" fill="none" stroke="#1a1a1a" stroke-width="2.4" stroke-linejoin="round"/>
        <line x1="110" y1="322" x2="430" y2="142" stroke="#b8492e" stroke-width="1.6" stroke-dasharray="6 5"/>
        <line x1="120" y1="270" x2="440" y2="90" stroke="#2a2a2a" stroke-width="3"/>
        <line x1="120" y1="270" x2="120" y2="300" stroke="#2a2a2a" stroke-width="3"/>
        <line x1="440" y1="90" x2="440" y2="120" stroke="#2a2a2a" stroke-width="3"/>
        <line x1="205" y1="232" x2="205" y2="277" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="212" y="260" font-size="14" fill="#8f351f" font-weight="600">R</text>
        <line x1="270" y1="205" x2="350" y2="205" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="304" y="199" font-size="14" fill="#8f351f" font-weight="600">G</text>
        <line x1="360" y1="130" x2="360" y2="40" stroke="#4a7a6a" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="368" y="88" font-size="13" fill="#2f5a4c" font-weight="600">Headroom ≥ 2000</text>
        <path d="M150,322 A40,40 0 0 0 133,299" fill="none" stroke="#8f351f" stroke-width="1.3"/>
        <text x="150" y="312" font-size="12.5" fill="#8f351f">pitch</text>
        <text x="150" y="345" font-size="12.5" fill="#55524c">R = riser · G = going</text>
        <text x="452" y="104" font-size="12.5" fill="#2a2a2a">Handrail 900–1000</text>
      </svg>
    </div>
    <figcaption>Section through a stair. The <strong>pitch line</strong> joins the step nosings; headroom and handrail height are both measured from it. All dimensions in mm.</figcaption>
  </figure>

  <h2>Key terms</h2>
  <ul>
    <li><strong>Riser (R)</strong> — the vertical height of each step.</li>
    <li><strong>Going (G)</strong> — the horizontal depth of each step, nosing to nosing.</li>
    <li><strong>Pitch</strong> — the angle of the flight from horizontal.</li>
    <li><strong>Headroom</strong> — clear vertical height measured above the pitch line.</li>
    <li><strong>Nosing</strong> — the front edge of each tread, where it projects over the riser below.</li>
  </ul>

  <h2>Typical dimensions</h2>
  <table class="data">
    <tr><th>Element</th><th>Comfortable range</th><th>UK domestic limit (Approved Doc K)</th></tr>
    <tr><td>Riser height</td><td>150–180 mm</td><td>Max 220 mm</td></tr>
    <tr><td>Going depth</td><td>250–300 mm</td><td>Min 220 mm</td></tr>
    <tr><td>Pitch</td><td>30–37°</td><td>Max 42°</td></tr>
    <tr><td>Headroom</td><td>2000 mm+</td><td>Min 2000 mm</td></tr>
    <tr><td>Handrail height</td><td>900–1000 mm</td><td>900–1000 mm above pitch line</td></tr>
    <tr><td>Min stair width (domestic)</td><td>800–900 mm</td><td>~800 mm typical</td></tr>
  </table>

  <h2>The 2R + G rule</h2>
  <p>A comfortable stair keeps a consistent relationship between how far you step up and how far you step forward. The classic formula:</p>
  <div class="callout"><strong>2R + G = 550–700 mm</strong> &nbsp;(twice the riser plus the going should fall in this range; ~600&nbsp;mm is ideal.)</div>
  <p>Example: a 175&nbsp;mm riser with a 275&nbsp;mm going gives 2(175)+275 = <strong>625&nbsp;mm</strong> — comfortable. A steep 200&nbsp;mm riser with a shallow 220&nbsp;mm going still totals 620&nbsp;mm on paper, but the short going makes it feel cramped underfoot — which is why the going minimum matters too.</p>

  <h2>Working out the number of steps</h2>
  <ol>
    <li>Measure the <strong>total rise</strong> (floor-to-floor height), e.g. 2700&nbsp;mm.</li>
    <li>Divide by a target riser (~175&nbsp;mm): 2700 ÷ 175 = 15.4 → round to <strong>16 risers</strong>.</li>
    <li>Actual riser = 2700 ÷ 16 = <strong>168.75&nbsp;mm</strong> (every riser must be equal).</li>
    <li>Pick a going that satisfies 2R+G: with R≈169, aim G ≈ 262&nbsp;mm. A flight of 16 risers has <strong>15 goings</strong>, so plan length ≈ 15 × 262 = 3930&nbsp;mm.</li>
  </ol>

  <h2>Other things to check</h2>
  <ul>
    <li><strong>Consistency:</strong> every riser and every going in a flight must be equal — uneven steps are a trip hazard and fail inspection.</li>
    <li><strong>Flight length:</strong> public stairs limit risers per flight (commonly 12–16) before a landing is required.</li>
    <li><strong>Landings:</strong> provide a level landing top and bottom, at least as deep as the stair is wide.</li>
    <li><strong>Nosings:</strong> should be visually distinct for accessibility, and not overhang more than ~25&nbsp;mm.</li>
    <li><strong>Winders &amp; spirals:</strong> tapered treads measure the going at the centre (walking) line — keep it in range there.</li>
  </ul>

  <div class="callout warn"><strong>Always verify.</strong> These figures follow UK Approved Document K and general practice. Private, common and public stairs have different limits, and other countries use different codes (e.g. the IBC in the US, where a 7″ riser / 11″ going is typical). Confirm the rules for your project type and location.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/ramp-gradients/"><b>Ramp gradients →</b><span>The accessible alternative to steps</span></a>
      <a href="/standards/door-sizes/"><b>Door sizes →</b><span>Clear widths and door-leaf dimensions</span></a>
      <a href="/building-codes/"><b>Building codes by country →</b><span>Where the limits come from</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Staircase dimensions","description":"Standard staircase dimensions: riser, going, pitch, headroom and the 2R+G rule, with a labelled section diagram.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/staircase-dimensions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
