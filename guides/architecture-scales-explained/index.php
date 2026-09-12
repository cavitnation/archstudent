<?php
$PAGE_TITLE = 'Architecture Scales Explained: 1:50 to 1:1250 | ArchStudent';
$PAGE_DESC  = 'A clear guide to architectural drawing scales — 1:1, 1:20, 1:50, 1:100, 1:200 and beyond, when to use each, scale rulers and imperial equivalents.';
$CANONICAL  = '/guides/architecture-scales-explained/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/guides/">Guides</a> › Scales</p>
  <h1>Architecture scales explained</h1>
  <p class="lead muted">Every drawing you produce is drawn at a scale — picking the right one is half the battle of communicating a design clearly.</p>

  <figure class="fig"><div class="fig-body">
    <svg viewBox="0 0 640 260" role="img" aria-label="A scale ruler edge showing that the same 3 metre width is drawn larger at 1 to 50 than at 1 to 100, with a scaled human figure for reference">
      <!-- 1:50 bar -->
      <text x="20" y="52" font-family="sans-serif" font-size="13" fill="#8f351f">1:50 &mdash; 10&nbsp;mm on paper = 0.5&nbsp;m</text>
      <rect x="20" y="62" width="360" height="26" fill="#f0ece6" stroke="#1a1a1a" stroke-width="1.5"/>
      <g stroke="#1a1a1a" stroke-width="1">
        <line x1="80" y1="62" x2="80" y2="88"/><line x1="140" y1="62" x2="140" y2="88"/>
        <line x1="200" y1="62" x2="200" y2="88"/><line x1="260" y1="62" x2="260" y2="88"/>
        <line x1="320" y1="62" x2="320" y2="88"/>
      </g>
      <g fill="#55524c" font-family="sans-serif" font-size="11">
        <text x="16" y="102">0</text><text x="136" y="102">1m</text><text x="256" y="102">2m</text><text x="316" y="102">3m</text>
      </g>
      <!-- scaled figure sitting at 1:50 (approx 1.8m tall) -->
      <g stroke="#2f5a4c" stroke-width="2" fill="none" stroke-linecap="round">
        <circle cx="410" cy="52" r="6" fill="#2f5a4c" stroke="none"/>
        <line x1="410" y1="58" x2="410" y2="80"/>
        <line x1="410" y1="64" x2="400" y2="76"/><line x1="410" y1="64" x2="420" y2="76"/>
        <line x1="410" y1="80" x2="402" y2="98"/><line x1="410" y1="80" x2="418" y2="98"/>
      </g>
      <text x="436" y="80" font-family="sans-serif" font-size="11" fill="#55524c">1.8&nbsp;m person</text>
      <!-- 1:100 bar (same 3m, half as wide) -->
      <text x="20" y="164" font-family="sans-serif" font-size="13" fill="#8f351f">1:100 &mdash; 10&nbsp;mm on paper = 1&nbsp;m</text>
      <rect x="20" y="174" width="180" height="26" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="1.5"/>
      <g stroke="#1a1a1a" stroke-width="1">
        <line x1="80" y1="174" x2="80" y2="200"/><line x1="140" y1="174" x2="140" y2="200"/>
      </g>
      <g fill="#55524c" font-family="sans-serif" font-size="11">
        <text x="16" y="214">0</text><text x="136" y="214">1m</text><text x="176" y="214">2m</text><text x="196" y="214">3m</text>
      </g>
      <line x1="20" y1="232" x2="200" y2="232" stroke="#b8492e" stroke-width="3"/>
      <text x="210" y="236" font-family="sans-serif" font-size="11" fill="#55524c">same 3&nbsp;m, drawn half the size &mdash; a whole building now fits the sheet</text>
    </svg>
  </div><figcaption>The bigger the second number, the smaller and more zoomed-out the drawing: the same 3&nbsp;m reads at half the length at 1:100.</figcaption></figure>

  <div class="kfacts">
    <div class="k"><b>1:50 / 1:100</b><span>the studio workhorse scales</span></div>
    <div class="k"><b>1:1 – 1:20</b><span>details &amp; construction</span></div>
    <div class="k"><b>1:200 – 1:1250</b><span>site &amp; location plans</span></div>
    <div class="k"><b>100%</b><span>print setting or the scale breaks</span></div>
  </div>

  <h2>What scale actually means</h2>
  <p>A scale is simply a ratio between the drawing and the real world. A drawing at 1:100 means one unit on paper represents one hundred units on site — so 10&nbsp;mm on the page equals 1&nbsp;metre in reality. The larger the second number, the smaller and more zoomed-out the drawing; 1:1000 shows a whole neighbourhood, while 1:5 shows a single junction almost life-size. Choosing a scale is really choosing how much of the building you want to describe and how much detail you can afford to show.</p>

  <h2>Common scales and when to use them</h2>
  <p>Different stages of a project call for different scales. Detail and construction drawings live at the large end (1:1 to 1:20), general arrangement drawings sit in the middle (1:50 to 1:100), and context or location plans occupy the small end (1:200 to 1:1250). The table below is a working reference for what each scale is typically used for.</p>

  <table class="data">
    <thead>
      <tr><th>Scale</th><th>Typical use</th><th>1&nbsp;m on site equals</th></tr>
    </thead>
    <tbody>
      <tr><td>1:1</td><td>Full-size details, mock-ups, joinery and profiles drawn at real size</td><td>1000&nbsp;mm</td></tr>
      <tr><td>1:5</td><td>Construction details, junctions, window and wall build-ups</td><td>200&nbsp;mm</td></tr>
      <tr><td>1:20</td><td>Detailed sections, bathroom and kitchen layouts, stair details</td><td>50&nbsp;mm</td></tr>
      <tr><td>1:50</td><td>Room plans, small building plans and sections, technical studio drawings</td><td>20&nbsp;mm</td></tr>
      <tr><td>1:100</td><td>General arrangement plans, sections and elevations of a whole building</td><td>10&nbsp;mm</td></tr>
      <tr><td>1:200</td><td>Large buildings, overall plans, early design and massing drawings</td><td>5&nbsp;mm</td></tr>
      <tr><td>1:500</td><td>Site plans, landscape layouts, groups of buildings in context</td><td>2&nbsp;mm</td></tr>
      <tr><td>1:1000</td><td>Wider site and urban context, masterplans</td><td>1&nbsp;mm</td></tr>
      <tr><td>1:1250</td><td>Location plans required for UK planning applications</td><td>0.8&nbsp;mm</td></tr>
    </tbody>
  </table>

  <div class="callout"><strong>Tip.</strong> 1:50 and 1:100 are the workhorses of studio life. If you are unsure what scale to draw a plan at, start with one of these and adjust once you see how much fits on the sheet.</div>

  <h2>Using a scale ruler</h2>
  <p>A triangular scale ruler carries several scales along its edges so you can measure a drawing without doing arithmetic. To read a 1:50 plan, use the edge marked 1:50 and read distances directly in metres — the ruler has already done the conversion. The same physical ruler can double up: the 1:100 edge reads a 1:200 drawing if you simply double the numbers, and the 1:20 edge reads 1:40 if you halve. Always confirm which scale a drawing was issued at before measuring, because a PDF printed "to fit" will quietly break the scale.</p>
  <div class="callout warn"><strong>Watch out.</strong> Never scale off a drawing marked "do not scale" or one you have resized. Printing at anything other than 100% throws every measurement out — check the printed scale bar against a ruler before trusting a dimension.</div>

  <h2>Imperial equivalents</h2>
  <p>Older UK drawings and most US practice use imperial scales, expressed as a fraction of an inch to the foot rather than a pure ratio. The nearest imperial equivalents are worth knowing when you meet legacy drawings or work with American offices.</p>

  <table class="data">
    <thead>
      <tr><th>Metric scale</th><th>Nearest imperial scale</th><th>Reads as</th></tr>
    </thead>
    <tbody>
      <tr><td>1:12 (approx)</td><td>1&nbsp;inch = 1&nbsp;foot</td><td>Full detail work</td></tr>
      <tr><td>1:24 (approx)</td><td>1/2&nbsp;inch = 1&nbsp;foot</td><td>Detailed plans</td></tr>
      <tr><td>1:48 (approx)</td><td>1/4&nbsp;inch = 1&nbsp;foot</td><td>General plans (near 1:50)</td></tr>
      <tr><td>1:96 (approx)</td><td>1/8&nbsp;inch = 1&nbsp;foot</td><td>Whole-building plans (near 1:100)</td></tr>
      <tr><td>1:192 (approx)</td><td>1/16&nbsp;inch = 1&nbsp;foot</td><td>Large buildings (near 1:200)</td></tr>
    </tbody>
  </table>

  <h2>Picking the right scale</h2>
  <p>Let the information decide. If a detail cannot be read at the scale you have chosen, go larger; if a plan will not fit the sheet with room to annotate, go smaller. Keep related drawings at consistent scales so a reader can compare a plan and its section without recalculating, and always place a graphic scale bar on the sheet — it survives photocopying and rescaling when a written ratio does not.</p>

  <div class="related"><h2>Related</h2><div class="rgrid">
    <a href="/guides/types-of-architectural-drawings/"><b>Types of architectural drawings →</b><span>What each scaled view shows</span></a>
    <a href="/guides/architectural-drawing-conventions/"><b>Drawing conventions →</b><span>Line weights, hatching &amp; scale bars</span></a>
    <a href="/guides/architecture-glossary/"><b>Architecture glossary →</b><span>Key terms explained in plain English</span></a>
    <a href="/guides/"><b>All guides →</b><span>The full list</span></a>
  </div></div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"Architecture scales explained","description":"A clear guide to architectural drawing scales — 1:1, 1:20, 1:50, 1:100, 1:200 and beyond, when to use each, scale rulers and imperial equivalents.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/guides/architecture-scales-explained/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
