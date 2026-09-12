<?php
$PAGE_TITLE = 'Lift (Elevator) Dimensions — accessible car sizes, doors & lobby | ArchStudent';
$PAGE_DESC  = 'Minimum accessible passenger lift car sizes, larger car options, door clear widths, lobby manoeuvring space and when a lift is required, with a labelled plan and UK Approved Document M / EN 81-70 guidance.';
$CANONICAL  = '/standards/lift-dimensions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Lift (elevator) dimensions</p>
  <h1>Lift (elevator) dimensions</h1>
  <p class="lead muted">Accessible passenger lift car sizes, door clear widths, the lobby space in front of the doors, and when a building actually needs a lift.</p>

  <div class="kfacts">
    <div class="k"><b>1100 × 1400</b><span>Min accessible car (mm)</span></div>
    <div class="k"><b>≥ 800</b><span>Door clear width (mm)</span></div>
    <div class="k"><b>1500 × 1500</b><span>Clear lobby (mm)</span></div>
    <div class="k"><b>2000 × 1400</b><span>Wheelchair-turn car (mm)</span></div>
  </div>

  <p>A lift is planned as a system: the car itself, the doors, the lobby space in front of it, and the shaft and machinery around it. For students the most useful numbers are the accessible car sizes — because access requirements usually set the minimum — and the clear space you must leave outside the doors so a wheelchair user can turn and enter.</p>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 380" role="img" aria-label="Plan of an accessible passenger lift showing car size, door clear width and the clear lobby with a turning circle in front">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <!-- shaft -->
        <rect x="228" y="30" width="184" height="176" fill="#f0ece6" stroke="#1a1a1a" stroke-width="1.4"/>
        <!-- car -->
        <rect x="244" y="42" width="152" height="150" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2.2"/>
        <text x="320" y="120" font-size="13" fill="#55524c" text-anchor="middle">CAR</text>
        <!-- door opening at bottom of car -->
        <line x1="278" y1="192" x2="362" y2="192" stroke="#2f5a4c" stroke-width="4"/>
        <line x1="278" y1="200" x2="318" y2="200" stroke="#2f5a4c" stroke-width="2.4"/>
        <line x1="362" y1="200" x2="322" y2="200" stroke="#2f5a4c" stroke-width="2.4"/>
        <!-- lobby -->
        <rect x="222" y="212" width="196" height="150" fill="#f4f1ea" stroke="#c9c4bd" stroke-width="1.4" stroke-dasharray="5 4"/>
        <circle cx="320" cy="287" r="74" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-dasharray="6 5"/>
        <text x="320" y="291" font-size="12" fill="#8f351f" text-anchor="middle">1500 turning</text>
        <text x="320" y="352" font-size="12" fill="#55524c" text-anchor="middle">Clear lobby 1500 × 1500</text>
        <!-- car width dim -->
        <line x1="244" y1="24" x2="396" y2="24" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="320" y="18" font-size="12.5" fill="#8f351f" text-anchor="middle" font-weight="600">Car width 1100</text>
        <!-- car depth dim -->
        <line x1="236" y1="42" x2="236" y2="192" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="230" y="120" font-size="12.5" fill="#8f351f" text-anchor="middle" font-weight="600" transform="rotate(-90 230 120)">Car depth 1400</text>
        <!-- door dim -->
        <line x1="278" y1="206" x2="362" y2="206" stroke="#2f5a4c" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="320" y="220" font-size="12" fill="#2f5a4c" text-anchor="middle" font-weight="600">Door ≥ 800</text>
      </svg>
    </div>
    <figcaption>Plan of an accessible passenger lift. The car sets the internal size; the <strong>door clear width</strong> must let a wheelchair pass; and the level <strong>lobby</strong> in front holds a 1500&nbsp;mm turning circle clear of the doors. All dimensions in mm.</figcaption>
  </figure>

  <h2>Passenger lift car sizes</h2>
  <p>A minimum accessible passenger lift typically has an internal car of about 1100 × 1400&nbsp;mm, enough for a wheelchair user and one other person (the EN 81-70 "Type 2" car). Where the lift serves larger numbers or must let a wheelchair user turn inside, a car around 2000 × 1400&nbsp;mm is used. Smaller "8-person" cars around 1400 × 1100&nbsp;mm are common in general buildings, while goods and bed lifts are considerably larger.</p>
  <table class="data">
    <tr><th>Lift type</th><th>Internal car (W × D)</th><th>Notes</th></tr>
    <tr><td>Minimum accessible (EN 81-70 Type 2)</td><td>1100 × 1400 mm</td><td>Wheelchair user + companion</td></tr>
    <tr><td>Larger accessible (Type 3)</td><td>2000 × 1400 mm</td><td>Allows a wheelchair to turn inside</td></tr>
    <tr><td>General 8-person</td><td>~1400 × 1100 mm</td><td>Common commercial car</td></tr>
    <tr><td>13-person</td><td>~1600 × 1400 mm</td><td>Busier buildings</td></tr>
    <tr><td>Goods / bed lift</td><td>1800 × 2000 mm +</td><td>Sized to the load carried</td></tr>
  </table>

  <h2>Door widths</h2>
  <p>Lift entrance clear width matters as much as car size, because a car is useless if a wheelchair cannot get through the door. A common minimum accessible clear door width is about 800&nbsp;mm, with 900&nbsp;mm preferred on larger or busier lifts. Doors are normally power-operated sliding doors and should stay open long enough for slower users to enter.</p>
  <table class="data">
    <tr><th>Element</th><th>Typical dimension</th><th>Notes</th></tr>
    <tr><td>Min accessible door clear width</td><td>800 mm</td><td>Power-operated sliding</td></tr>
    <tr><td>Preferred door clear width</td><td>900 mm</td><td>Larger or busier lifts</td></tr>
    <tr><td>Door dwell time</td><td>Adjustable</td><td>Allow slower users to board</td></tr>
  </table>

  <div class="callout"><strong>Rule of thumb.</strong> Design the lift from the door outward: a wheelchair must clear the <strong>door</strong>, fit the <strong>car</strong>, and have a level <strong>1500&nbsp;mm</strong> space to turn in the lobby before entering. If any one of the three fails, the lift is not accessible.</div>

  <h2>Lobby and landing space</h2>
  <p>In front of the lift doors you need a clear, level landing so a wheelchair user can wait, manoeuvre and enter. A commonly used figure is an unobstructed space of at least 1500 × 1500&nbsp;mm, clear of any door swings and of the lift doors themselves. Control buttons at the landing and inside the car should sit within reach, generally between about 900&nbsp;mm and 1200&nbsp;mm above the floor.</p>
  <table class="data">
    <tr><th>Element</th><th>Typical dimension</th><th>Notes</th></tr>
    <tr><td>Clear lobby in front of lift</td><td>1500 × 1500 mm</td><td>Level, clear of door swings</td></tr>
    <tr><td>Call / control button height</td><td>900–1200 mm</td><td>Within reach range</td></tr>
    <tr><td>Shaft allowance</td><td>Car size + ~200–400 mm each side</td><td>For guide rails, counterweight, doors</td></tr>
  </table>

  <h2>When is a lift required?</h2>
  <p>Broadly, a lift is expected where people who cannot use stairs need to reach an upper (or lower) storey — that is, wherever step-free access between storeys is required. In practice this applies to most public and workplace buildings with more than one storey, and to many multi-storey dwellings such as flats. In small buildings a platform lift may be an acceptable alternative to a full passenger lift. The precise trigger depends on the building type, its use and the number of storeys, so confirm it for your project.</p>
  <table class="data">
    <tr><th>Situation</th><th>Lift typically expected?</th><th>Notes</th></tr>
    <tr><td>Multi-storey public / workplace building</td><td>Yes</td><td>Step-free access between storeys</td></tr>
    <tr><td>Flats above ground floor</td><td>Often yes</td><td>Depends on storeys and access</td></tr>
    <tr><td>Small building, few levels</td><td>Platform lift may suffice</td><td>Alternative to full passenger lift</td></tr>
  </table>

  <div class="callout warn"><strong>Always verify.</strong> These figures follow UK Approved Document M and EN 81-70 as general guidance. Requirements differ between new build and existing buildings, between dwellings and public buildings, and between countries (e.g. the ADA in the US sets its own car and clearance sizes). Confirm the rules for your project type and location.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/wheelchair-turning-circles/"><b>Wheelchair turning circles →</b><span>The 1500 mm space behind the lobby figure</span></a>
      <a href="/standards/staircase-dimensions/"><b>Staircase dimensions →</b><span>The stair the lift sits beside</span></a>
      <a href="/standards/ramp-gradients/"><b>Ramp gradients →</b><span>Step-free access without a lift</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Lift (elevator) dimensions","description":"Minimum accessible passenger lift car sizes, door clear widths, lobby manoeuvring space and when a lift is required.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/lift-dimensions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
