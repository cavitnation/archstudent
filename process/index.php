<?php
$PAGE_TITLE = 'The Architecture Design Process — a step-by-step framework | ArchStudent';
$PAGE_DESC  = 'A clear, repeatable architecture design process for students: brief, site analysis, concept, development, resolution and communication — with what to do at each stage, common mistakes and deep-dive guides.';
$CANONICAL  = '/process/';
$FAQ = [
  ['Is there one correct architecture design process?','No single process is "correct" — but a reliable scaffold helps you start and finish. The six stages here (brief, site, concept, develop, resolve, communicate) are a proven order to work in. Real design is non-linear: expect to loop back, especially between concept and development.'],
  ['How long should each stage take?','It varies with the project and your deadline, but a common student mistake is rushing the front end. Protect time for the brief, site analysis and concept — decisions made there shape everything after. A rough split for a semester project is 25% understanding (brief + site), 25% concept, 35% development + resolution, 15% communication.'],
  ['What do I do when I get stuck at the concept stage?','Go back, don\'t push forward. Re-read your site analysis for a driver you haven\'t used, look at two or three precedents for how others solved a similar problem, and try to state your idea in a single sentence. If you can\'t, you don\'t have a concept yet — you have a shape.'],
  ['Do professional architects use a process like this?','Yes. Practices follow structured frameworks such as the RIBA Plan of Work, which maps closely onto these stages (strategic definition, preparation and brief, concept design, developed design, technical design). Learning to work in stages now is exactly what studio and practice expect.'],
  ['Is the process the same for every project type?','The stages stay the same; the emphasis shifts. A dense urban infill leans harder on site analysis and context; a rural pavilion on concept and materials; a hospital on the brief, standards and circulation. Learn the framework, then flex where each project needs the most attention.'],
];
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose" style="max-width:var(--wrap)">
  <p class="breadcrumb"><a href="/">Home</a> › Design Process</p>
  <h1>The architecture design process, step by step</h1>
  <p class="lead muted">Most students can render beautifully but freeze at the blank page. This is the framework for getting from a brief to a resolved scheme — the messy middle that studio rarely teaches, made repeatable. Six stages, what to actually do in each, and the mistakes to avoid.</p>

  <figure class="fig">
    <div class="fig-body">
      <svg viewBox="0 0 640 240" role="img" aria-label="The six-stage design process shown as a loop: brief, site, concept, develop, resolve, communicate, with iteration looping back">
        <defs>
          <marker id="pf" markerWidth="9" markerHeight="9" refX="6" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#c7b8ae"/></marker>
          <marker id="pl" markerWidth="9" markerHeight="9" refX="6" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#b8492e"/></marker>
        </defs>
        <?php
          $stages = [['1','Brief'],['2','Site'],['3','Concept'],['4','Develop'],['5','Resolve'],['6','Communicate']];
          $xs = [60,160,260,360,460,560];
          // connectors
          for ($i=0;$i<5;$i++) echo '<line x1="'.($xs[$i]+24).'" y1="120" x2="'.($xs[$i+1]-24).'" y2="120" stroke="#c7b8ae" stroke-width="2" marker-end="url(#pf)"/>';
          // loop-back arc (Resolve -> Concept)
          echo '<path d="M460,98 C420,40 300,40 260,98" fill="none" stroke="#b8492e" stroke-width="1.8" stroke-dasharray="6 5" marker-end="url(#pl)"/>';
          echo '<text x="360" y="44" font-size="12.5" fill="#8f351f" text-anchor="middle">iterate — loop back</text>';
          foreach ($stages as $i=>[$n,$lab]) {
            $x=$xs[$i];
            echo '<circle cx="'.$x.'" cy="120" r="24" fill="#b8492e"/>';
            echo '<text x="'.$x.'" y="128" font-size="17" font-weight="700" fill="#fff" text-anchor="middle">'.$n.'</text>';
            echo '<text x="'.$x.'" y="168" font-size="12.5" fill="#3a3a3a" text-anchor="middle">'.$lab.'</text>';
          }
        ?>
      </svg>
    </div>
    <figcaption>Six stages, worked in order — but a <strong>loop, not a line</strong>. A problem in <em>Develop</em> or <em>Resolve</em> often sends you back to the <em>Concept</em> or the <em>Site</em>. That's the process working, not failing.</figcaption>
  </figure>

  <div class="proc-flow">
    <a href="#brief"><span class="pn">1</span><b>Brief</b>understand the problem</a>
    <a href="#site"><span class="pn">2</span><b>Site</b>read the context</a>
    <a href="#concept"><span class="pn">3</span><b>Concept</b>one strong idea</a>
    <a href="#develop"><span class="pn">4</span><b>Develop</b>test through options</a>
    <a href="#resolve"><span class="pn">5</span><b>Resolve</b>make it real</a>
    <a href="#communicate"><span class="pn">6</span><b>Communicate</b>tell the story</a>
  </div>

  <div class="callout"><strong>Work along as you go.</strong> Grab the free <a href="/downloads/design-process-checklist.pdf" download>Design Process Checklist (PDF)</a> and the <a href="/downloads/site-analysis-checklist.pdf" download>Site Analysis Checklist</a> — print them and tick off each stage.</div>

  <!-- 1 -->
  <div class="pstep" id="brief">
    <div class="pstep-num">1</div>
    <div class="pstep-body">
      <h2>Read the brief like a designer</h2>
      <p class="meta">Stage 1 · Understand the problem</p>
      <p>Before a single line is drawn, work out what is <em>really</em> being asked. A brief is never just a list of rooms — it carries intentions about who the building is for and how it should feel. Separate the two: the hard <strong>requirements</strong> (spaces, areas, budget, rules) and the softer <strong>intentions</strong> (character, experience, values). The gap between them is where the design lives.</p>
      <p class="do">Do this:</p>
      <ul>
        <li>Split the brief into <strong>requirements</strong> and <strong>intentions</strong> on two lists.</li>
        <li>Build an <strong>accommodation schedule</strong> — every space with its area and key relationships.</li>
        <li>Name the <strong>real users</strong> and what a good day looks like for them.</li>
        <li>List every <strong>constraint</strong> and every <strong>opportunity</strong> you already know.</li>
        <li>Rewrite the brief <strong>in your own words</strong> — and note what it does <em>not</em> say.</li>
      </ul>
      <div class="callout warn"><strong>Common mistake:</strong> jumping to floor plans before you understand the problem. If you can't say what the project is <em>about</em> in a sentence, you're not ready to design it.</div>
      <a class="deep" href="/process/how-to-read-a-brief/">Deep dive: How to read a brief →</a>
    </div>
  </div>

  <!-- 2 -->
  <div class="pstep" id="site">
    <div class="pstep-num">2</div>
    <div class="pstep-body">
      <h2>Site analysis as a story, not a checklist</h2>
      <p class="meta">Stage 2 · Read the context</p>
      <p>Don't just tick "sun, access, views." Ask what the site is <em>telling you to do</em>: where it wants the entrance, what it wants to face, what it wants to hide. Analysis only matters if it changes a decision — so every observation should point toward a design move.</p>
      <p class="do">Record on and around the site:</p>
      <ul>
        <li><strong>Environmental</strong> — sun path (summer and winter), prevailing wind, noise, overshadowing.</li>
        <li><strong>Physical</strong> — boundaries, levels and topography, trees and features to keep, ground conditions.</li>
        <li><strong>Movement</strong> — vehicle and pedestrian access, desire lines, transport, where the entrance wants to be.</li>
        <li><strong>Context</strong> — surrounding scale, materials and character, key views in and out, history of the place.</li>
        <li><strong>Regulatory</strong> — planning constraints, rights of way, and the <a href="/building-codes/">building code for the country</a>.</li>
      </ul>
      <p>Then <strong>synthesise</strong>: turn the data into three or four design drivers and finish with one sentence — <em>"This site wants a building that…"</em></p>
      <div class="callout warn"><strong>Common mistake:</strong> collecting pages of data you never use. If an analysis drawing doesn't change your design, cut it.</div>
      <a class="deep" href="/process/site-analysis/">Deep dive: How to do site analysis →</a>
    </div>
  </div>

  <!-- 3 -->
  <div class="pstep" id="concept">
    <div class="pstep-num">3</div>
    <div class="pstep-body">
      <h2>Concept: one strong idea</h2>
      <p class="meta">Stage 3 · The organising idea</p>
      <p>A concept is a single organising idea that every later decision can hang off — a response to the site and brief, not a shape you happen to like. It is the answer to "what is this building <em>about</em>?" and it should make the next ten decisions easier, not harder.</p>
      <p class="do">Test your concept:</p>
      <ul>
        <li>Can you explain it in <strong>one clear sentence</strong>?</li>
        <li>Does it <strong>respond</strong> to something specific in the brief or site?</li>
        <li>Does it help you <strong>decide</strong> — where the entrance goes, how it's organised, what it's made of?</li>
        <li>Can you <strong>diagram</strong> it simply, and give it a name you'd defend in a crit?</li>
      </ul>
      <div class="callout warn"><strong>Common mistake:</strong> mistaking a form or a style ("a curvy roof", "very minimalist") for a concept. A concept is an idea, not an image.</div>
      <a class="deep" href="/process/concept-development/">Deep dive: Concept development →</a>
    </div>
  </div>

  <!-- 4 -->
  <div class="pstep" id="develop">
    <div class="pstep-num">4</div>
    <div class="pstep-body">
      <h2>Develop through iteration</h2>
      <p class="meta">Stage 4 · Test through options</p>
      <p>First ideas are rarely the best. Development is where you push the concept through real options and models until it earns its place. Work fast, cheap and rough — the goal is to learn, not to make it pretty yet.</p>
      <p class="do">Do this:</p>
      <ul>
        <li>Sketch <strong>three genuinely different</strong> options, not three versions of one.</li>
        <li><strong>Model early and often</strong> — card, massing, foam, digital — whatever is quickest.</li>
        <li>Study it in <strong>section</strong>, not just plan.</li>
        <li>Test each option <strong>against the concept</strong> and the site drivers.</li>
        <li><strong>Kill your darlings</strong>: push each option until it breaks, then combine what worked.</li>
        <li>Use <strong>precedents</strong> to see how others solved the hard parts — learn, don't copy.</li>
      </ul>
      <div class="callout warn"><strong>Common mistake:</strong> falling in love with the first idea, or polishing a render before the design is resolved.</div>
      <p><a class="deep" href="/process/precedent-studies/">Deep dive: Precedent studies →</a> &nbsp;·&nbsp; <a class="deep" href="/process/architectural-diagramming/">Diagramming →</a></p>
    </div>
  </div>

  <!-- 5 -->
  <div class="pstep" id="resolve">
    <div class="pstep-num">5</div>
    <div class="pstep-body">
      <h2>Resolve: plan, section and the human</h2>
      <p class="meta">Stage 5 · Make it real</p>
      <p>Bring the idea down to earth. A resolved scheme stands up, can be built, works for the person inside, and holds together in plan <em>and</em> section. This is where good concepts either become architecture or fall apart.</p>
      <p class="do">Do this:</p>
      <ul>
        <li>Draw the <strong>section early</strong> — it exposes what plans hide (light, height, structure, level changes).</li>
        <li>Check <strong>structure and buildability</strong>: how does it stand up, and how is it made?</li>
        <li><strong>Coordinate</strong> plan and section so they tell the same story.</li>
        <li><strong>Walk it at eye level</strong> — is the experience what you promised?</li>
        <li>Test against <a href="/standards/">standards &amp; dimensions</a> and the relevant <a href="/building-codes/">code</a> — stairs, ramps, accessibility, circulation.</li>
      </ul>
      <div class="callout warn"><strong>Common mistake:</strong> leaving the section and structure until the last week. Resolve them alongside the plan, not after it.</div>
      <a class="deep" href="/standards/">Browse standards &amp; dimensions →</a>
    </div>
  </div>

  <!-- 6 -->
  <div class="pstep" id="communicate">
    <div class="pstep-num">6</div>
    <div class="pstep-body">
      <h2>Communicate the idea</h2>
      <p class="meta">Stage 6 · Tell the story</p>
      <p>Presentation is the last step, not the first. When the thinking is resolved, the drawings almost choose themselves — and you can defend every move. Your job in a crit is to make people understand the idea, then judge it fairly.</p>
      <p class="do">Do this:</p>
      <ul>
        <li>Build a <strong>narrative</strong>: brief → site → concept → development → resolution.</li>
        <li>Choose the <strong>drawings that prove the idea</strong>, not every drawing you made.</li>
        <li>Keep <strong>graphics consistent</strong> — line weights, scale, type, layout.</li>
        <li><strong>Rehearse out loud, timed</strong>, and prepare for the obvious question.</li>
      </ul>
      <div class="callout warn"><strong>Common mistake:</strong> presenting decoration instead of thinking, or reading your sheets aloud. Point at the drawing and tell the story.</div>
      <p><a class="deep" href="/guides/how-to-make-an-architecture-portfolio/">Portfolio guide →</a> &nbsp;·&nbsp; <a class="deep" href="/guides/surviving-your-first-crit/">Surviving your first crit →</a></p>
    </div>
  </div>

  <h2 style="margin-top:44px">Principles behind the process</h2>
  <ul>
    <li><strong>It's a loop, not a line.</strong> Expect to jump back — a development problem often sends you back to the concept or the site.</li>
    <li><strong>Make ideas cheap to test.</strong> A sketch or a piece of card tells you in minutes what a polished model tells you in days.</li>
    <li><strong>The section is your best friend.</strong> Most spatial ideas live or die in section — draw it early and often.</li>
    <li><strong>Design for a real person.</strong> Keep asking "who is standing here, and what do they feel?"</li>
    <li><strong>Constraints are fuel.</strong> Sun, budget, code and context aren't walls — they're the things that make a design specific.</li>
  </ul>

  <h2 style="margin-top:36px">Go deeper on each stage</h2>
  <div class="grid cols-3" style="margin:18px 0">
    <a class="card" href="/process/how-to-read-a-brief/"><h3>How to read a brief</h3><p>Requirements vs intentions, and the right questions to ask.</p></a>
    <a class="card" href="/process/site-analysis/"><h3>Site analysis</h3><p>Turn site data into design drivers, as a story not a checklist.</p></a>
    <a class="card" href="/process/concept-development/"><h3>Concept development</h3><p>What a concept really is, and how to generate and test one.</p></a>
    <a class="card" href="/process/precedent-studies/"><h3>Precedent studies</h3><p>Learn from built work without copying it.</p></a>
    <a class="card" href="/process/architectural-diagramming/"><h3>Architectural diagramming</h3><p>Concept, circulation and massing diagrams that read clearly.</p></a>
    <a class="card" href="/resources/"><h3>Free checklists</h3><p>Printable process and site-analysis checklists to work along with.</p></a>
  </div>

  <h2 style="margin-top:36px">Design process FAQ</h2>
  <?php foreach($FAQ as [$q,$a]): ?>
    <h3><?= htmlspecialchars($q) ?></h3>
    <p><?= $a ?></p>
  <?php endforeach; ?>

  <div class="callout" style="margin-top:30px"><strong>Ready to start?</strong> Begin with <a href="/process/how-to-read-a-brief/">reading your brief</a>, keep the <a href="/downloads/design-process-checklist.pdf" download>checklist</a> beside you, and remember: the goal isn't a pretty picture — it's a resolved idea you can defend.</div>
</div>
<script type="application/ld+json">
<?= json_encode([
  '@context'=>'https://schema.org','@type'=>'FAQPage',
  'mainEntity'=>array_map(fn($f)=>['@type'=>'Question','name'=>$f[0],
    'acceptedAnswer'=>['@type'=>'Answer','text'=>strip_tags($f[1])]], $FAQ)
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?>
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
