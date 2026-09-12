<?php
$PAGE_TITLE = 'Human Scale & Anthropometrics — key body dimensions | ArchStudent';
$PAGE_DESC  = 'Key human body dimensions for design: eye height (~1500–1600mm), reach, standing and seated measurements, the 5th–95th percentile range, and why anthropometrics drive architecture. Neufert and Modulor context, with a labelled human figure.';
$CANONICAL  = '/standards/human-scale-anthropometrics/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Human scale &amp; anthropometrics</p>
  <h1>Human scale &amp; anthropometrics</h1>
  <p class="lead muted">The body dimensions behind every worktop height, handrail and doorway — and why you design for a population range, not one "average" person.</p>

  <div class="kfacts">
    <div class="k"><b>~1500–1600</b><span>Standing eye height (mm)</span></div>
    <div class="k"><b>~1750</b><span>Median stature (mm)</span></div>
    <div class="k"><b>~450</b><span>Seat height (mm)</span></div>
    <div class="k"><b>5th–95th</b><span>Design percentile range</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 400" role="img" aria-label="Standing human figure with labelled body dimensions">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <line x1="60" y1="360" x2="600" y2="360" stroke="#c9c4bd" stroke-width="1.5"/>
        <!-- figure -->
        <g fill="#f0ece6" stroke="#1a1a1a" stroke-width="2">
          <circle cx="240" cy="70" r="26"/>
          <path d="M214,110 h52 v120 h-52 z" fill="#f4f1ea"/>
        </g>
        <!-- arm raised -->
        <path d="M258,120 L300,40" fill="none" stroke="#1a1a1a" stroke-width="6" stroke-linecap="round"/>
        <!-- arm reach forward -->
        <path d="M222,140 L150,150" fill="none" stroke="#1a1a1a" stroke-width="6" stroke-linecap="round"/>
        <!-- legs -->
        <path d="M226,230 L222,358 M254,230 L258,358" fill="none" stroke="#1a1a1a" stroke-width="7" stroke-linecap="round"/>
        <!-- stature -->
        <line x1="360" y1="44" x2="360" y2="360" stroke="#b8492e" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="368" y="210" font-size="13" fill="#8f351f" font-weight="600">Stature 1500–1900</text>
        <!-- eye height -->
        <line x1="420" y1="66" x2="420" y2="360" stroke="#2f5a4c" stroke-width="1.4" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="428" y="220" font-size="13" fill="#2f5a4c" font-weight="600">Eye height ~1500–1600</text>
        <!-- reach up -->
        <line x1="300" y1="40" x2="120" y2="40" stroke="#b8492e" stroke-width="1.2" stroke-dasharray="5 4"/>
        <line x1="150" y1="40" x2="150" y2="360" stroke="#b8492e" stroke-width="1.2" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="70" y="200" font-size="12.5" fill="#8f351f">Reach up ~1900–2100</text>
        <!-- shoulder height -->
        <line x1="510" y1="120" x2="510" y2="360" stroke="#55524c" stroke-width="1.2" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="518" y="240" font-size="12.5" fill="#55524c">Shoulder 1250–1550</text>
        <!-- reach forward -->
        <text x="60" y="140" font-size="12" fill="#8f351f">Reach fwd 600–750</text>
        <text x="360" y="382" font-size="11.5" fill="#55524c" text-anchor="middle">All dimensions in mm · adult population range</text>
      </svg>
    </div>
    <figcaption>A standing adult with the dimensions designers use most. You design <strong>reach</strong> for the smaller (5th-percentile) user and <strong>clearance</strong> for the larger (95th-percentile) user so a space fits nearly everyone. All dimensions in mm.</figcaption>
  </figure>

  <h2>Why anthropometrics drives design</h2>
  <p>Anthropometrics is the study of human body measurements, and it is the hidden logic under almost every dimension in architecture. A worktop at 900&nbsp;mm, a handrail at 900&nbsp;mm, a door at 2000&nbsp;mm — none are arbitrary; they come from the range of bodies that must use the building. Buildings fail when they ignore the body: a shelf out of reach, a step too high, a desk too low. Designers work not from a single average person but from a population range described by <strong>percentiles</strong>.</p>

  <h2>The 5th–95th percentile rule</h2>
  <div class="callout"><strong>Design for the range, not the mean.</strong> The <strong>5th-percentile female</strong> and <strong>95th-percentile male</strong> bracket roughly 90% of adults. Size <em>reach</em> (shelves, controls, switches) so the smallest user can manage; size <em>clearance</em> (doorways, headroom, seat width) so the largest user fits. Designing to the 50th-percentile "average" quietly excludes half the population on one side of every dimension.</div>

  <h2>Key standing dimensions</h2>
  <p>These figures describe an adult population range. Individual bodies vary widely by age, sex and region, so treat them as design bands, not fixed truths. Eye height matters for sightlines, signage and windows; reach limits set shelf and control heights.</p>
  <table class="data">
    <tr><th>Dimension</th><th>5th percentile</th><th>95th percentile</th></tr>
    <tr><td>Standing height (stature)</td><td>~1500 mm</td><td>~1900 mm</td></tr>
    <tr><td>Standing eye height</td><td>~1400 mm</td><td>~1750 mm</td></tr>
    <tr><td>Shoulder height</td><td>~1250 mm</td><td>~1550 mm</td></tr>
    <tr><td>Comfortable reach up</td><td>~1800 mm</td><td>~2100 mm</td></tr>
    <tr><td>Comfortable reach forward</td><td>~600 mm</td><td>~750 mm</td></tr>
    <tr><td>Shoulder width</td><td>~420 mm</td><td>~550 mm</td></tr>
  </table>

  <h2>Key seated dimensions</h2>
  <p>Seated measurements govern desks, dining, transport and lecture halls. Seat height, seated eye height and knee clearance decide whether furniture fits. A standard chair seat sits around 450&nbsp;mm and a desk around 720–750&nbsp;mm, giving the clearance a seated person needs for their thighs.</p>
  <table class="data">
    <tr><th>Dimension</th><th>Typical value</th></tr>
    <tr><td>Seat height</td><td>~450 mm</td></tr>
    <tr><td>Desk / table height</td><td>720–750 mm</td></tr>
    <tr><td>Seated eye height (above seat)</td><td>~700–800 mm</td></tr>
    <tr><td>Knee clearance under table</td><td>~600 mm min</td></tr>
    <tr><td>Elbow rest height (above seat)</td><td>~200–250 mm</td></tr>
  </table>

  <h2>From body to building</h2>
  <p>These numbers cascade into everyday standards. A worktop at 900&nbsp;mm suits a standing adult's comfortable working height; a handrail at 900–1000&nbsp;mm meets the hand naturally; a door leaf at 2000&nbsp;mm+ clears the tallest users. When a dimension feels wrong on site, it usually conflicts with the body it should serve.</p>
  <table class="data">
    <tr><th>Element</th><th>Common height</th></tr>
    <tr><td>Kitchen worktop</td><td>~900 mm</td></tr>
    <tr><td>Handrail</td><td>900–1000 mm</td></tr>
    <tr><td>Light switch</td><td>~1000–1200 mm</td></tr>
    <tr><td>Door head</td><td>2000 mm+</td></tr>
  </table>

  <h2>Neufert &amp; Le Corbusier's Modulor</h2>
  <p>Two references shaped how architects use body data. Ernst Neufert's <em>Architects' Data</em>, first published in 1936, collected human dimensions and space standards into the profession's default handbook — still the go-to for quick reference. Le Corbusier's Modulor, developed in the 1940s, went further and tried to build a proportional system from the human body and the golden ratio, based on a 1.83&nbsp;m figure with a raised arm reaching 2.26&nbsp;m. Neufert gives you the practical numbers; the Modulor is the theory of proportion behind them.</p>

  <div class="callout warn"><strong>Always verify.</strong> Anthropometric figures vary by source, population and survey date, and the values here are rounded design bands. Confirm against a recognised data set (e.g. PeopleSize, Neufert, or national anthropometric surveys) and against the accessibility standards for your project and country — UK Approved Document M, or ADA in the US.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/furniture-dimensions/"><b>Furniture dimensions →</b><span>Sizes and clearances that follow the body</span></a>
      <a href="/standards/office-workstation-dimensions/"><b>Office workstation dimensions →</b><span>Desks, seating and space per person</span></a>
      <a href="/standards/wheelchair-turning-circles/"><b>Wheelchair turning circles →</b><span>Accessible clearances and turning space</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Human scale and anthropometrics","description":"Key body dimensions: eye height, reach, standing and seated measurements, the 5th-95th percentile range, and why anthropometrics drive design, with a labelled human figure.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/human-scale-anthropometrics/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
