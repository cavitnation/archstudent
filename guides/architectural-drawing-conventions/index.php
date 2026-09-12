<?php
$PAGE_TITLE = 'Architectural Drawing Conventions Explained | ArchStudent';
$PAGE_DESC  = 'Line weights, hatching, dimensioning, symbols, north points and title blocks: a clear guide to the drawing conventions every architecture student needs.';
$CANONICAL  = '/guides/architectural-drawing-conventions/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> &rsaquo; <a href="/guides/">Guides</a> &rsaquo; Drawing conventions</p>
  <h1>Architectural drawing conventions</h1>
  <p class="lead muted">Architectural drawings are a visual language. Once you know the conventions, a plan or section reads instantly &amp; consistently, whoever drew it.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="A line-weight hierarchy from heavy to fine, a dashed hidden line, and a small section showing a wall poché filled solid black at the cut">
      <!-- line weight samples -->
      <text x="20" y="34" font-family="sans-serif" font-size="12" fill="#8f351f">Line-weight hierarchy</text>
      <line x1="20" y1="56" x2="240" y2="56" stroke="#1a1a1a" stroke-width="5"/>
      <text x="256" y="60" font-family="sans-serif" font-size="11" fill="#55524c">Heavy — cut walls, columns</text>
      <line x1="20" y1="84" x2="240" y2="84" stroke="#1a1a1a" stroke-width="2.5"/>
      <text x="256" y="88" font-family="sans-serif" font-size="11" fill="#55524c">Medium — seen, not cut</text>
      <line x1="20" y1="112" x2="240" y2="112" stroke="#1a1a1a" stroke-width="1"/>
      <text x="256" y="116" font-family="sans-serif" font-size="11" fill="#55524c">Fine — surfaces, detail</text>
      <line x1="20" y1="140" x2="240" y2="140" stroke="#1a1a1a" stroke-width="1.5" stroke-dasharray="9 6"/>
      <text x="256" y="144" font-family="sans-serif" font-size="11" fill="#55524c">Dashed — hidden / above the cut</text>
      <!-- section with poché -->
      <text x="20" y="184" font-family="sans-serif" font-size="12" fill="#8f351f">Wall cut in section (poché)</text>
      <g>
        <rect x="40" y="196" width="16" height="48" fill="#1a1a1a"/>
        <rect x="140" y="196" width="16" height="48" fill="#1a1a1a"/>
        <rect x="56" y="238" width="84" height="6" fill="#1a1a1a"/>
        <line x1="48" y1="196" x2="148" y2="196" stroke="#1a1a1a" stroke-width="1"/>
      </g>
      <path d="M200 220 l16 0 m0 0 l-6 -4 m6 4 l-6 4" stroke="#b8492e" stroke-width="1.5" fill="none"/>
      <text x="224" y="224" font-family="sans-serif" font-size="11" fill="#8f351f">solid fill at the cut reads solid-versus-void at a glance</text>
    </svg>
  </div><figcaption>The closer something is to the cut or the viewer, the heavier its line — hierarchy, not rendering, is what makes a drawing look resolved.</figcaption></figure>

  <p>A construction or design drawing is not a picture; it is a set of instructions. Conventions exist so that anyone in the industry &mdash; tutor, contractor, engineer or fellow student &mdash; can read your intent without guessing. Master the handful of rules below &amp; your studio drawings will look professional almost immediately.</p>

  <h2>Line weights</h2>
  <p>Line weight (thickness) is the single most important thing that separates a flat student drawing from a legible one. The rule is simple: the closer something is to the cut or to the viewer, the heavier the line. In a plan, everything is imagined as a horizontal slice roughly 1.2m above the floor, so anything the slice passes through is drawn boldest.</p>
  <table class="data"><tr><th>Weight</th><th>Used for</th></tr>
    <tr><td>Heavy (0.5&ndash;0.7mm)</td><td>Cut elements: walls, columns, the ground in section</td></tr>
    <tr><td>Medium (0.35mm)</td><td>Elements seen but not cut: furniture, stairs, sills</td></tr>
    <tr><td>Fine (0.18&ndash;0.25mm)</td><td>Surface lines, floor patterns, minor detail</td></tr>
    <tr><td>Dashed</td><td>Objects hidden or above the cut plane (e.g. overhead beams)</td></tr>
  </table>

  <h2>Line types</h2>
  <p>Beyond weight, the style of a line carries meaning. A continuous line is something solid &amp; visible. A dashed line shows something hidden from view or above the section cut, such as a canopy over an entrance. A dash-dot chain line marks a centreline or grid axis. A dotted line often shows an item to be removed or a projection. Keep these consistent across a set &mdash; mixing them up is a common way to confuse a marker.</p>

  <h2>Hatching &amp; poche</h2>
  <p>Hatching is the patterning used to indicate materials where they are cut. Brick is drawn with diagonal lines, concrete with a stippled or triangular fill, insulation as a soft zig-zag, earth with a broken batched pattern. Poche (from the French for pocket) is the practice of filling cut walls solid black or dark grey so the figure of the building &mdash; the solid versus the void &mdash; reads at a glance. Poche is especially powerful in plan drawings of masonry buildings.</p>

  <h2>Dimensioning</h2>
  <p>Dimensions run along thin extension &amp; dimension lines, with the measurement written above an unbroken line, reading from the bottom or the right-hand side of the sheet. Work in millimetres on technical drawings (the UK construction standard), string related dimensions together in a continuous chain, &amp; give an overall dimension on the outermost line. Never make the reader add figures up to find a total.</p>

  <h2>Section cut lines &amp; symbols</h2>
  <p>A section is indicated on the plan by a cut line with arrows showing the direction of view, labelled with a letter (Section A&ndash;A). Doors are drawn as a leaf with a quarter-circle swing; windows as a break in the wall with thin lines for the glazing. A grid of lettered &amp; numbered reference bubbles locates structure. Levels are shown with a small arrow or target symbol &amp; a figure such as +3.600.</p>

  <h2>North point &amp; title block</h2>
  <p>Every plan carries a north point so orientation is never in doubt &mdash; keep it consistent across all plans in a set. The title block, usually down the right edge or along the bottom, records the project name, drawing title, scale, drawing number, revision, date &amp; author. Always state the scale &amp; the sheet size, because a drawing printed at the wrong size becomes meaningless.</p>

  <table class="data"><tr><th>Convention</th><th>Meaning</th></tr>
    <tr><td>Chain line (dash-dot)</td><td>Centreline or structural grid axis</td></tr>
    <tr><td>Quarter-circle at a door</td><td>Door swing &amp; hinge side</td></tr>
    <tr><td>Arrowed cut line + letter</td><td>Position &amp; direction of a section</td></tr>
    <tr><td>Triangle / target with figure</td><td>Spot level or floor level</td></tr>
    <tr><td>Solid black fill (poche)</td><td>Solid material cut in plan or section</td></tr>
  </table>

  <div class="callout"><strong>Tip.</strong> Before you print, set up three or four pen weights &amp; assign every line to one of them. Consistent hierarchy, not fancy rendering, is what makes a drawing look resolved.</div>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/guides/types-of-architectural-drawings/"><b>Types of architectural drawings →</b><span>Plans, sections, elevations &amp; more</span></a>
    <a href="/guides/architecture-scales-explained/"><b>Architecture scales →</b><span>Choosing 1:50, 1:100 and beyond</span></a>
    <a href="/guides/architecture-glossary/"><b>Architecture glossary →</b><span>Poché, datum, fenestration explained</span></a>
    <a href="/guides/"><b>All guides →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Architectural drawing conventions","description":"Line weights, hatching, dimensioning, symbols, north points and title blocks explained for architecture students.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/guides/architectural-drawing-conventions/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
