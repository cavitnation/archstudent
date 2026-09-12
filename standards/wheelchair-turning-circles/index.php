<?php
$PAGE_TITLE = 'Wheelchair Turning Circles & Clearances — 1500mm turning space | ArchStudent';
$PAGE_DESC  = 'Wheelchair turning circles and manoeuvring space: the 1500mm turning circle, 1500x1500 turning space, 1800x1800 passing places, clear widths and door approach clearances, with a labelled plan and UK Approved Document M guidance.';
$CANONICAL  = '/standards/wheelchair-turning-circles/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Wheelchair turning circles</p>
  <h1>Wheelchair turning circles &amp; clearances</h1>
  <p class="lead muted">The space a wheelchair user needs to turn, pass and get through a door — the handful of numbers that carry most everyday accessible layouts.</p>

  <div class="kfacts">
    <div class="k"><b>1500</b><span>Turning circle dia (mm)</span></div>
    <div class="k"><b>1500 × 1500</b><span>Turning space (mm)</span></div>
    <div class="k"><b>1800 × 1800</b><span>Passing place (mm)</span></div>
    <div class="k"><b>≥ 800</b><span>Clear door opening (mm)</span></div>
  </div>

  <p>Accessible design starts with one question: can a wheelchair user move, turn and reach without getting stuck? Most UK guidance builds from a small set of manoeuvring spaces. Learn these and you can lay out corridors, lobbies and rooms that work for everyone, not just for standard reference figures.</p>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 360" role="img" aria-label="Plan of a room with a 1500mm wheelchair turning circle clear of the door swing and latch-side clearance">
        <defs>
          <marker id="ar" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <!-- room -->
        <rect x="120" y="34" width="400" height="288" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="2.2"/>
        <!-- turning circle -->
        <circle cx="316" cy="178" r="130" fill="#f0ece6" stroke="#b8492e" stroke-width="1.8" stroke-dasharray="7 5"/>
        <text x="316" y="182" font-size="13" fill="#8f351f" text-anchor="middle" font-weight="600">1500 turning circle</text>
        <!-- diameter dim -->
        <line x1="186" y1="178" x2="446" y2="178" stroke="#b8492e" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="316" y="167" font-size="12.5" fill="#8f351f" text-anchor="middle">Ø 1500</text>
        <!-- door opening bottom -->
        <line x1="150" y1="322" x2="238" y2="322" stroke="#f4f1ea" stroke-width="4"/>
        <line x1="150" y1="322" x2="150" y2="234" stroke="#2f5a4c" stroke-width="3"/>
        <path d="M150,234 A88,88 0 0 1 238,322" fill="none" stroke="#2f5a4c" stroke-width="1.4" stroke-dasharray="4 4"/>
        <text x="196" y="342" font-size="12" fill="#2f5a4c" text-anchor="middle">Door ≥ 800</text>
        <!-- latch side clearance -->
        <line x1="238" y1="300" x2="278" y2="300" stroke="#2f5a4c" stroke-width="1.3" marker-start="url(#ar)" marker-end="url(#ar)"/>
        <text x="300" y="304" font-size="11.5" fill="#2f5a4c">latch-side ~300</text>
      </svg>
    </div>
    <figcaption>A 1500&nbsp;mm turning circle dropped into a room as a test object. If it fits clear of the door swing, furniture and radiators — and the door has latch-side room — the space usually works. All dimensions in mm.</figcaption>
  </figure>

  <h2>The reference wheelchair</h2>
  <p>UK Approved Document M and BS 8300 base clearances on a reference wheelchair roughly 700&nbsp;mm wide and 1200&nbsp;mm long, plus the person's hands, feet and any attendant. Occupied electric wheelchairs and mobility scooters can be larger, so the standards add generous manoeuvring space around this footprint. Always design for the space, not just the chair.</p>

  <h2>Turning spaces</h2>
  <p>Two shapes dominate. A 1500&nbsp;mm diameter turning circle — a 1500 × 1500&nbsp;mm clear square in a rectangular room — lets a user rotate a full 360° on the spot; the classic figure for accessible WCs and lobbies. Where a full circle will not fit, a turning ellipse of about 1400 × 1700&nbsp;mm allows a three-point (K-turn) manoeuvre in a tighter footprint, typically used in corridors and confined rooms.</p>
  <table class="data">
    <tr><th>Movement</th><th>Space required</th></tr>
    <tr><td>360° turning circle</td><td>1500 mm diameter (or 1500 × 1500 mm square)</td></tr>
    <tr><td>Turning ellipse (K-turn)</td><td>1400 × 1700 mm</td></tr>
    <tr><td>90° turn in a corridor</td><td>typically 1200 × 1200 mm minimum</td></tr>
    <tr><td>180° turn</td><td>1500 mm circle preferred</td></tr>
  </table>

  <div class="callout"><strong>Design tip.</strong> Draw the 1500&nbsp;mm circle as a reusable block and drop it into every accessible room and lobby. It must land clear of door swings, furniture and heaters — overlapping any of them means the space fails in use, even if the room looks big enough on paper.</div>

  <h2>Clear widths for movement</h2>
  <p>A single wheelchair needs a clear width of at least 900&nbsp;mm along an accessible route, with 1000&nbsp;mm preferred. For two wheelchairs to pass, allow 1800&nbsp;mm; where a continuous 1800&nbsp;mm corridor is impractical, provide passing places of 1800 × 1800&nbsp;mm at intervals, typically no more than 10&nbsp;m apart. Pinch points at columns or radiators reduce the effective width, so measure to the narrowest obstruction.</p>
  <table class="data">
    <tr><th>Condition</th><th>Clear width</th></tr>
    <tr><td>Single wheelchair, accessible route</td><td>900 mm min (1000 mm preferred)</td></tr>
    <tr><td>Two wheelchairs passing</td><td>1800 mm</td></tr>
    <tr><td>Passing place</td><td>1800 × 1800 mm, typically ≤ 10 m apart</td></tr>
    <tr><td>Wheelchair and ambulant person</td><td>typically 1200 mm</td></tr>
  </table>

  <h2>Door approaches and clear openings</h2>
  <p>Doors are where layouts fail. A wheelchair user needs unobstructed space to the leading edge (latch side) of the door to reach the handle and pull the door past themselves. On the pull side of a straight-on approach, allow around 300&nbsp;mm beside the leading edge; more is needed for oblique approaches. The clear opening width through the doorway itself should be at least 800&nbsp;mm for a straight-on approach, rising to 825&nbsp;mm or more where the approach is at an angle.</p>
  <table class="data">
    <tr><th>Door situation</th><th>Guidance</th></tr>
    <tr><td>Clear opening, straight approach</td><td>800 mm min</td></tr>
    <tr><td>Clear opening, oblique approach</td><td>825 mm + typical</td></tr>
    <tr><td>Latch-side space, pull side</td><td>~300 mm min beside leading edge</td></tr>
    <tr><td>Level landing outside door</td><td>1500 × 1500 mm typical</td></tr>
  </table>

  <h2>Putting it together</h2>
  <p>When you sketch an accessible room, overlay the 1500&nbsp;mm turning circle as a test object. If it fits clear of door swings, furniture and radiators, the space usually works. In corridors, check the 1800&nbsp;mm passing rule and confirm doors have latch-side room. These few numbers — 1500, 1400 × 1700, 900, 1800, 800 — carry most everyday accessibility layouts.</p>

  <div class="callout warn"><strong>Always verify.</strong> Figures reflect UK Approved Document M and BS 8300 as general accessibility guidance. Codes vary by building type and by country (e.g. the ADA in the US uses a 60&nbsp;inch / 1525&nbsp;mm turning space and its own door clearances). Confirm the rules for your project and location.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/accessible-toilet-dimensions/"><b>Accessible toilet dimensions →</b><span>The turning circle inside a Doc M WC</span></a>
      <a href="/standards/corridor-widths/"><b>Corridor widths →</b><span>Passing places and clear routes</span></a>
      <a href="/standards/door-sizes/"><b>Door sizes →</b><span>Clear opening widths and leaf sizes</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Wheelchair turning circles and clearances","description":"Wheelchair turning circles, turning space, passing places, clear widths and door approach clearances explained for architecture students.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/wheelchair-turning-circles/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
