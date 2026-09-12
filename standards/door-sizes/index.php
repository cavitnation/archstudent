<?php
$PAGE_TITLE = 'Standard Door Sizes — internal, external & accessible | ArchStudent';
$PAGE_DESC  = 'Standard door sizes for architecture students: common internal and external door leaf dimensions, plus minimum accessible clear-opening widths, with a plan diagram.';
$CANONICAL  = '/standards/door-sizes/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/standards/">Standards</a> › Door sizes</p>
  <h1>Standard door sizes</h1>
  <p class="lead muted">Common door leaf sizes — and the clear-opening width that actually matters for access.</p>

  <div class="kfacts">
    <div class="k"><b>762</b><span>Most common leaf width (mm)</span></div>
    <div class="k"><b>1981</b><span>Standard leaf height (mm)</span></div>
    <div class="k"><b>≥ 800</b><span>Accessible clear opening (mm)</span></div>
    <div class="k"><b>44</b><span>External leaf thickness (mm)</span></div>
  </div>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 300" role="img" aria-label="Plan of a doorway showing leaf, swing and clear opening width versus structural opening">
        <defs>
          <marker id="da" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
          <marker id="dg" markerWidth="9" markerHeight="9" refX="5" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#4a7a6a"/></marker>
        </defs>
        <!-- walls -->
        <rect x="70" y="150" width="180" height="22" fill="#d9d2c8" stroke="#1a1a1a" stroke-width="1.4"/>
        <rect x="390" y="150" width="180" height="22" fill="#d9d2c8" stroke="#1a1a1a" stroke-width="1.4"/>
        <!-- swing arc -->
        <path d="M366,161 A116,116 0 0 0 250,45" fill="none" stroke="#9a948a" stroke-width="1.2" stroke-dasharray="5 5"/>
        <!-- open leaf -->
        <rect x="250" y="45" width="8" height="116" fill="#b8492e"/>
        <text x="266" y="60" font-size="12.5" fill="#8f351f">door leaf</text>
        <!-- hinge -->
        <circle cx="254" cy="161" r="4" fill="#1a1a1a"/>
        <!-- clear opening dim -->
        <line x1="258" y1="100" x2="390" y2="100" stroke="#4a7a6a" stroke-width="1.4" marker-start="url(#dg)" marker-end="url(#dg)"/>
        <text x="270" y="93" font-size="13" fill="#2f5a4c" font-weight="600">clear opening (≥ 800)</text>
        <!-- structural opening dim -->
        <line x1="250" y1="205" x2="390" y2="205" stroke="#b8492e" stroke-width="1.4" marker-start="url(#da)" marker-end="url(#da)"/>
        <text x="262" y="223" font-size="13" fill="#8f351f" font-weight="600">structural opening</text>
        <line x1="250" y1="172" x2="250" y2="210" stroke="#b8492e" stroke-width=".8" stroke-dasharray="3 3"/>
        <line x1="390" y1="172" x2="390" y2="210" stroke="#b8492e" stroke-width=".8" stroke-dasharray="3 3"/>
      </svg>
    </div>
    <figcaption>Plan of a door open 90°. The <strong>clear opening</strong> (green) is narrower than the structural opening because the open leaf and hinge eat into the gap — so leaf width alone doesn't guarantee access.</figcaption>
  </figure>

  <h2>Common UK internal door sizes (leaf)</h2>
  <table class="data">
    <tr><th>Width × Height</th><th>Imperial</th><th>Typical use</th></tr>
    <tr><td>610 × 1981 mm</td><td>2'0"</td><td>Small rooms, cupboards, WCs</td></tr>
    <tr><td>686 × 1981 mm</td><td>2'3"</td><td>Bedrooms, bathrooms</td></tr>
    <tr><td>762 × 1981 mm</td><td>2'6"</td><td>Most common general internal door</td></tr>
    <tr><td>838 × 1981 mm</td><td>2'9"</td><td>Wider access, main rooms</td></tr>
    <tr><td>926 × 2040 mm</td><td>—</td><td>Contemporary / accessible internal</td></tr>
  </table>

  <h2>External doors</h2>
  <p>External door leaves are typically <strong>838 × 1981 mm</strong> or <strong>914 × 2032 mm</strong>, and thicker (<strong>44&nbsp;mm</strong>) than internal doors (35&nbsp;mm) for weather resistance and security. Double doors and French doors combine two leaves — allow for the meeting stile and any rebate in your opening size.</p>

  <h2>Accessible clear opening — the number that counts</h2>
  <p>For wheelchair access, what matters is the <em>clear opening width</em> — the gap when the door is open 90°, not the leaf size. UK Approved Document M guidance:</p>
  <table class="data">
    <tr><th>Direction of approach</th><th>Min clear opening width</th></tr>
    <tr><td>Straight-on</td><td>800 mm</td></tr>
    <tr><td>At right angles, 1500 mm corridor</td><td>800 mm</td></tr>
    <tr><td>At right angles, 1200 mm corridor</td><td>825 mm</td></tr>
    <tr><td>External doors, new dwellings</td><td>775–800 mm</td></tr>
  </table>
  <div class="callout">A 762&nbsp;mm leaf does <strong>not</strong> give an 800&nbsp;mm clear opening. For accessible routes, specify an <strong>838&nbsp;mm+ leaf</strong> so the clear opening still meets the requirement after the hinge and stops.</div>

  <h2>Door heights</h2>
  <p>The UK standard height is <strong>1981&nbsp;mm</strong> (6'6"). Contemporary and commercial work often uses <strong>2040&nbsp;mm</strong> or full-height <strong>2100&nbsp;mm+</strong> doors for a cleaner, more generous look.</p>

  <h2>Don't forget the frame &amp; clearances</h2>
  <ul>
    <li><strong>Structural opening</strong> = leaf + frame + fitting tolerance. As a rule of thumb, add ~<strong>90–100&nbsp;mm</strong> to the leaf width and ~<strong>50&nbsp;mm</strong> to the height for the lining.</li>
    <li><strong>Threshold:</strong> accessible doors need a level or ≤15&nbsp;mm chamfered threshold.</li>
    <li><strong>Swing space:</strong> keep the door's swing clear of circulation and other doors.</li>
    <li><strong>Manoeuvring space:</strong> allow 300&nbsp;mm beside the leading edge of an accessible door for a wheelchair user to reach the handle.</li>
  </ul>

  <div class="callout warn"><strong>Always verify.</strong> Figures follow UK Approved Document M and common manufacturer sizes. Fire doors (FD30/FD60) and codes in other countries have their own requirements — confirm for your project.</div>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/standards/staircase-dimensions/"><b>Staircase dimensions →</b><span>Riser, going, pitch and headroom</span></a>
      <a href="/standards/ramp-gradients/"><b>Ramp gradients →</b><span>Accessible slopes and landings</span></a>
      <a href="/standards/kitchen-dimensions/"><b>Kitchen dimensions →</b><span>Worktops, clearances and the work triangle</span></a>
      <a href="/standards/"><b>All standards →</b><span>Every reference dimension in one place</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Standard door sizes","description":"Common internal and external door sizes plus accessible clear-opening widths, with a plan diagram.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/standards/door-sizes/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
