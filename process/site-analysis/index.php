<?php
$PAGE_TITLE = 'How to Do Site Analysis in Architecture | ArchStudent';
$PAGE_DESC  = 'Turn sun, wind, noise, access, views and topography into a design driver. A storytelling method for site analysis, not a checklist.';
$CANONICAL  = '/process/site-analysis/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> &rsaquo; <a href="/process/">Design Process</a> &rsaquo; Site analysis</p>
  <h1>How to do site analysis</h1>
  <p class="lead muted">Good site analysis is not a folder of maps. It is an argument about what the place wants to become &mdash; and every diagram should be building that case.</p>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 300" role="img" aria-label="Site diagram showing sun, wind, noise, view and access forces resolving into an open edge and a protective shoulder">
        <defs>
          <marker id="sa" markerWidth="9" markerHeight="9" refX="7" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="currentColor"/></marker>
        </defs>
        <!-- road -->
        <rect x="40" y="252" width="560" height="22" fill="#d9d2c8"/>
        <text x="48" y="267" font-size="11.5" fill="#55524c">busy road</text>
        <!-- site -->
        <rect x="250" y="70" width="150" height="150" fill="#f4f1ea" stroke="#1a1a1a" stroke-width="1.6"/>
        <text x="300" y="150" font-size="13" fill="#8a8378">SITE</text>
        <!-- open edges (green) -->
        <path d="M250,70 H400 V150" fill="none" stroke="#2f8f6a" stroke-width="4"/>
        <!-- shoulder to road (terracotta) -->
        <line x1="250" y1="220" x2="400" y2="220" stroke="#b8492e" stroke-width="4"/>
        <!-- sun -->
        <g color="#e0a020"><circle cx="590" cy="46" r="12" fill="#e0a020"/>
          <line x1="575" y1="58" x2="408" y2="112" stroke="#e0a020" stroke-width="2" marker-end="url(#sa)"/></g>
        <text x="548" y="30" font-size="11.5" fill="#a9631a">afternoon sun</text>
        <!-- wind -->
        <g color="#3a6ea5"><line x1="70" y1="52" x2="246" y2="104" stroke="#3a6ea5" stroke-width="2" marker-end="url(#sa)"/></g>
        <text x="60" y="44" font-size="11.5" fill="#3a6ea5">prevailing wind</text>
        <!-- view -->
        <g color="#2f8f6a"><line x1="402" y1="160" x2="560" y2="188" stroke="#2f8f6a" stroke-width="2" marker-end="url(#sa)"/></g>
        <text x="470" y="182" font-size="11.5" fill="#2f8f6a">best view</text>
        <!-- noise -->
        <g color="#c0392b"><line x1="300" y1="250" x2="300" y2="224" stroke="#c0392b" stroke-width="2" marker-end="url(#sa)"/>
          <line x1="330" y1="250" x2="330" y2="224" stroke="#c0392b" stroke-width="2" marker-end="url(#sa)"/></g>
        <text x="345" y="243" font-size="11.5" fill="#c0392b">road noise</text>
        <!-- labels for edges -->
        <text x="405" y="96" font-size="11" fill="#2f8f6a">open to sun &amp; view</text>
        <!-- protective shoulder: labelled from the left with a short leader -->
        <line x1="180" y1="232" x2="248" y2="221" stroke="#b8492e" stroke-width="0.8"/>
        <text x="44" y="236" font-size="11" fill="#b8492e">protective shoulder</text>
      </svg>
    </div>
    <figcaption>The payoff drawing: when sun, view and quiet all point the same way, that convergence becomes the <strong>design driver</strong> — open the building to the good edge, turn a shoulder to the road.</figcaption>
  </figure>

  <h2>Stop collecting, start listening</h2>
  <p>Most students treat site analysis as a scavenger hunt: grab the sun path, the wind rose, the flood map, the bus routes, drop them on a board and move on. Tutors see straight through this. A collection of facts is not analysis &mdash; analysis is what happens when you decide which of those facts <em>matter</em> and why. The goal is to arrive at a small number of insights so strong that your building could not honestly ignore them.</p>
  <p>So begin with a question, not a data set: <strong>what is this site already trying to tell me?</strong> Walk it (or Street View it) before you download anything. Notice where you naturally want to stand, where you feel exposed, where the noise drops away, where the light lands in the afternoon. Those instincts are data too, and they will help you know which technical layers to chase.</p>

  <h2>The layers worth reading</h2>
  <p>Work through the site as a set of overlapping stories rather than boxes to tick. For each one, ask &ldquo;so what?&rdquo; until you reach a design consequence.</p>
  <ul>
    <li><strong>Sun.</strong> Where does light arrive in morning, noon and late afternoon? Which faces are cold and north-lit, which overheat? This decides where you put living space, glazing, shading and outdoor rooms.</li>
    <li><strong>Wind.</strong> The prevailing direction and the cold, unwelcome one. Wind shapes entrances, sheltered courtyards, natural ventilation and where planting earns its keep.</li>
    <li><strong>Noise.</strong> A busy road, a railway, a school. Noise pushes quiet uses to the back and lets you buffer the front with circulation, storage or a thickened wall.</li>
    <li><strong>Access &amp; movement.</strong> How people, cars, bikes and deliveries currently reach and cross the site. Desire lines are gold &mdash; the path people actually take, not the one that is paved.</li>
    <li><strong>Views.</strong> Both the ones to frame and the ones to hide. A single good view can organise an entire plan.</li>
    <li><strong>Topography.</strong> Slope, levels and drainage. A fall across the site is not a problem, it is a section waiting to happen &mdash; split levels, buried plinths, ramps that become the idea.</li>
    <li><strong>Context.</strong> Materials, grain, heights, thresholds and rhythms of the surrounding fabric. This tells you how your building should behave as a neighbour.</li>
  </ul>

  <div class="callout"><strong>Studio tip.</strong> After every layer, write one sentence beginning &ldquo;Therefore the building should&hellip;&rdquo;. If you can't finish the sentence, you haven't analysed it yet &mdash; you've just recorded it.</div>

  <h2>Synthesis: from many facts to one driver</h2>
  <p>This is the step that separates a pass from a strong project. Lay your &ldquo;therefore&rdquo; sentences side by side and look for the ones that agree with each other. Often three or four layers all point the same way &mdash; the sun is good on the south edge, the best view is there, the noise is on the opposite side, and the slope falls toward it. That convergence is your <strong>design driver</strong>: a single, defensible idea about how the building sits on the land.</p>
  <p>A good driver is specific and directional. &ldquo;Respond to context&rdquo; is not a driver. &ldquo;Open the building to the quiet, sunlit, downhill south-west edge and turn a protective shoulder to the road&rdquo; is. Notice it already implies a plan, a section and a massing. When the driver does that work, the rest of the design starts to feel almost inevitable &mdash; which is exactly how tutors judge whether your analysis was real.</p>

  <h2>Making the deliverables earn their place</h2>
  <p>Present analysis as a sequence that argues, not a wall of maps. Each drawing should have a headline, a takeaway and a clear visual hierarchy &mdash; grey the context down, colour up only the thing you want read.</p>
  <ul>
    <li><strong>Site plan with annotation</strong> &mdash; the one drawing that carries access, entrances and immediate context.</li>
    <li><strong>Sun and shadow study</strong> &mdash; three moments, not twelve; show the decision it forces.</li>
    <li><strong>Movement and desire-line diagram</strong> &mdash; how people actually flow through and around.</li>
    <li><strong>Section through the topography</strong> &mdash; the honest levels, exaggerated only if it clarifies.</li>
    <li><strong>A single synthesis diagram</strong> &mdash; the payoff drawing that shows the design driver on the site.</li>
  </ul>
  <p>Keep the graphic language consistent across all of them: same north point, same colours meaning the same things, same weight of line. A reader should be able to move through your analysis and feel the argument tightening toward one conclusion.</p>

  <div class="callout warn"><strong>Common trap.</strong> Analysis that never changes the design. If your building would look identical without the site study, the study was decoration. Keep one board showing the direct line from a site fact to a design move &mdash; it is the most convincing thing you can present.</div>

  <h2>Where to go next</h2>
  <p>Site analysis feeds straight into <a href="/process/concept-development/">concept development</a>: your design driver is the raw material a concept refines. Pair it with sharp <a href="/process/architectural-diagramming/">diagramming</a> so the argument reads at a glance, and use <a href="/process/precedent-studies/">precedent studies</a> to see how other architects answered similar sites.</p>

  <div class="related">
    <h2>Continue the process</h2>
    <div class="rgrid">
      <a href="/process/how-to-read-a-brief/"><b>Reading a brief →</b><span>Where the project starts</span></a>
      <a href="/process/concept-development/"><b>Concept development →</b><span>Turn the driver into an idea</span></a>
      <a href="/process/architectural-diagramming/"><b>Diagramming →</b><span>Make the argument read at a glance</span></a>
      <a href="/process/"><b>The full process →</b><span>Every step, start to finish</span></a>
    </div>
  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","headline":"How to do site analysis","description":"A storytelling method for architectural site analysis: read sun, wind, noise, access, views and topography, then synthesise them into a single design driver.","author":{"@type":"Organization","name":"ArchStudent"},"publisher":{"@type":"Organization","name":"ArchStudent"},"mainEntityOfPage":"https://archstudent.com/process/site-analysis/"}
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
