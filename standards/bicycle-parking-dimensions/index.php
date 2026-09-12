<?php
$PAGE_TITLE = 'Bicycle Parking Dimensions — Sheffield stand spacing & cycle stores | ArchStudent';
$PAGE_DESC  = 'Cycle parking sizing: the 2000x700mm cycle space, Sheffield stand spacing (~1000mm), two-tier racks, aisle widths and provision ratios, with a labelled plan.';
$CANONICAL  = '/standards/bicycle-parking-dimensions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Bicycle parking dimensions</p>
  <h1>Bicycle parking dimensions</h1>
  <p class="lead muted">Sizing Sheffield stands, two-tier racks and cycle stores that people will actually use — the footprint, the spacing and the aisles.</p>

  <div class="kfacts">
    <div class="k"><b>2000 × 700</b><span>Space per cycle (mm)</span></div>
    <div class="k"><b>~1000</b><span>Stand spacing (mm)</span></div>
    <div class="k"><b>2</b><span>Bikes per Sheffield stand</span></div>
    <div class="k"><b>~2700</b><span>Headroom, two-tier (mm)</span></div>
  </div>

  <p>Cycle parking is now a planning requirement on most projects, and undersized stores are a common reason schemes get pushback. Good cycle parking is secure, sheltered, easy to reach and correctly spaced. Cram stands too close and half of them become unusable. These figures keep a store realistic.</p>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 340" role="img" aria-label="Plan of a row of Sheffield cycle stands showing the 2000 by 700 cycle space, 1000mm stand spacing and the access aisle">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <!-- wall -->
        <rect x="60" y="28" width="520" height="14" fill="#f0ece6" stroke="#1a1a1a" stroke-width="1.4"/>
        <text x="70" y="24" font-size="11.5" fill="#55524c">wall</text>
        <!-- four bike spaces + Sheffield hoops -->
        <!-- positions centres: 150, 270, 390, 510 -->
        <g fill="#f4f1ea" stroke="#c9c4bd" stroke-width="1.3">
          <rect x="124" y="52" width="52" height="150"/>
          <rect x="244" y="52" width="52" height="150"/>
          <rect x="364" y="52" width="52" height="150"/>
          <rect x="484" y="52" width="52" height="150"/>
        </g>
        <!-- Sheffield hoops (plan = arch near wall) -->
        <g fill="none" stroke="#1a1a1a" stroke-width="3">
          <path d="M138,64 A12,12 0 0 1 162,64 L162,150 M138,64 L138,150"/>
          <path d="M258,64 A12,12 0 0 1 282,64 L282,150 M258,64 L258,150"/>
          <path d="M378,64 A12,12 0 0 1 402,64 L402,150 M378,64 L378,150"/>
          <path d="M498,64 A12,12 0 0 1 522,64 L522,150 M498,64 L498,150"/>
        </g>
        <!-- wheels to suggest bikes -->
        <g fill="none" stroke="#8f351f" stroke-width="1.5">
          <circle cx="150" cy="120" r="9"/><circle cx="150" cy="178" r="9"/>
          <circle cx="270" cy="120" r="9"/><circle cx="270" cy="178" r="9"/>
          <circle cx="390" cy="120" r="9"/><circle cx="390" cy="178" r="9"/>
          <circle cx="510" cy="120" r="9"/><circle cx="510" cy="178" r="9"/>
        </g>
        <!-- aisle -->
        <rect x="60" y="212" width="520" height="90" fill="#f4f1ea" stroke="#c9c4bd" stroke-width="1.2" stroke-dasharray="5 4"/>
        <text x="320" y="262" font-size="12.5" fill="#55524c" text-anchor="middle">Access aisle ~1200</text>
        <!-- spacing dim between stands -->
        <line x1="150" y1="216" x2="270" y2="216" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="210" y="230" font-size="11.5" fill="#8f351f" text-anchor="middle">~1000</text>
        <!-- bike space dims -->
        <line x1="124" y1="48" x2="176" y2="48" stroke="#2f5a4c" stroke-width="1.2" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="150" y="44" font-size="10.5" fill="#2f5a4c" text-anchor="middle">700</text>
        <line x1="548" y1="52" x2="548" y2="202" stroke="#2f5a4c" stroke-width="1.2" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="556" y="127" font-size="10.5" fill="#2f5a4c" transform="rotate(-90 556 127)">2000</text>
      </svg>
    </div>
    <figcaption>Plan of a row of Sheffield stands. Each hoop parks <strong>two bikes</strong>; a parked cycle occupies about <strong>2000 × 700&nbsp;mm</strong>; stands sit about <strong>1000&nbsp;mm</strong> apart with an access aisle behind. All dimensions in mm.</figcaption>
  </figure>

  <h2>The cycle footprint</h2>
  <p>Plan a single parked bicycle as occupying roughly 2000 × 700&nbsp;mm on plan, with about 1200&nbsp;mm of vertical clearance if it stands upright. That footprint includes the bike plus room to lock it. Cargo bikes, e-bikes and bikes with trailers need more, so larger schemes should set aside a proportion of oversized spaces.</p>
  <table class="data">
    <tr><th>Item</th><th>Space</th></tr>
    <tr><td>Cycle parking space</td><td>2000 × 700 mm</td></tr>
    <tr><td>Vertical clearance</td><td>~1200 mm (more for upright / hanging)</td></tr>
    <tr><td>Oversized / cargo space</td><td>2500 mm + × 1000 mm typical</td></tr>
  </table>

  <h2>Sheffield stands</h2>
  <p>The Sheffield stand — a simple inverted-U hoop — is the reference stand because it supports the frame and lets you lock both a wheel and the frame. Each stand parks two bikes, one each side. Spacing between stands is the number people get wrong: too tight and bikes clash handlebars. Allow around 1000&nbsp;mm between stands (800&nbsp;mm minimum), and keep stands clear of walls so a bike can lean without scraping.</p>
  <table class="data">
    <tr><th>Dimension</th><th>Guidance</th></tr>
    <tr><td>Stand height</td><td>~750 mm above ground</td></tr>
    <tr><td>Stand length</td><td>~750 mm</td></tr>
    <tr><td>Spacing between stands</td><td>1000 mm (800 mm min)</td></tr>
    <tr><td>Stand to wall (parallel)</td><td>~700 mm min</td></tr>
    <tr><td>Bikes per stand</td><td>2</td></tr>
  </table>

  <div class="callout"><strong>Spacing is everything.</strong> Two bikes per stand only works if the stands are far enough apart. At 800&nbsp;mm you are at the minimum; at 1000&nbsp;mm handlebars and pedals clear comfortably. Squeeze below 800&nbsp;mm and every other space quietly stops being used.</div>

  <h2>Aisle and access widths</h2>
  <p>Users have to wheel a bike in and out, so aisles need width for the bike plus the person. Allow around 1200&nbsp;mm for access behind a single row of stands, and about 2000&nbsp;mm where users manoeuvre between two rows facing each other. Doors and ramps into a cycle store should let a laden bike pass without lifting.</p>
  <table class="data">
    <tr><th>Access condition</th><th>Width</th></tr>
    <tr><td>Aisle, single row</td><td>~1200 mm</td></tr>
    <tr><td>Aisle, two rows facing</td><td>~2000 mm</td></tr>
    <tr><td>Door clear width</td><td>1000 mm + preferred</td></tr>
  </table>

  <h2>Two-tier racks</h2>
  <p>Where floor area is tight — basements, dense residential — two-tier racks stack bikes on upper trays with a gas-assisted lift. They roughly double capacity but need more headroom, typically around 2700&nbsp;mm floor to ceiling, and a clear aisle in front (about 2000&nbsp;mm) so the upper tray can pull down fully. They suit commuters more than families, so mix them with ground-level Sheffield stands.</p>

  <h2>How much to provide</h2>
  <p>Provision is set by local planning policy and varies by city, so always check the local plan. As a feel for scale, residential standards often ask for around one to two spaces per dwelling, and offices commonly work to something like one space per 100–250&nbsp;m² of floor area, plus visitor spaces. Short-stay visitor parking goes near entrances; long-stay commuter parking goes in a secure, covered store.</p>

  <div class="callout warn"><strong>Always verify.</strong> Dimensions here follow common UK guidance (LTN 1/20, TfL and local cycle-parking standards). Provision ratios in particular are set by the local plan and vary widely between authorities. Confirm the standards for your project and location before sizing a store.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/car-parking-dimensions/"><b>Car parking dimensions →</b><span>Bay sizes and aisle widths</span></a>
      <a href="/standards/ramp-gradients/"><b>Ramp gradients →</b><span>Wheeling ramps into a cycle store</span></a>
      <a href="/standards/door-sizes/"><b>Door sizes →</b><span>Clear widths for a laden bike</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Bicycle parking dimensions","description":"Cycle parking sizing: the cycle space footprint, Sheffield stand spacing, two-tier racks, aisle widths and provision ratios.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/bicycle-parking-dimensions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
