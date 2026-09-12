<?php
$PAGE_TITLE = 'Architecture Career Guides — become an architect, internships, CV | ArchStudent';
$PAGE_DESC  = 'Career guides for architecture students: how to become an architect, getting an internship, writing your CV, what architects do and salary expectations.';
$CANONICAL  = '/career/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Career</p>
  <h1>Career</h1>
  <p class="lead muted" style="max-width:720px">From your first internship to full qualification — and beyond. This is the practical side of building an architecture career: how the path is structured, how long each stage takes, how to get hired, and the many directions an architecture education can actually take you.</p>

  <div class="kfacts" style="max-width:720px">
    <div class="k"><b>~5–7 yrs</b><span>Study + practice to qualify</span></div>
    <div class="k"><b>3 stages</b><span>UK: RIBA Parts 1·2·3</span></div>
    <div class="k"><b>Portfolio</b><span>Your most important asset</span></div>
    <div class="k"><b>Many paths</b><span>Not just a 9-to-5 in practice</span></div>
  </div>

  <figure class="fig" style="max-width:720px">
    <div class="fig-body">
      <svg viewBox="0 0 640 270" role="img" aria-label="An architecture degree branching into registered practice, specialisms, freelance and remote work, and adjacent design fields">
        <defs><marker id="cb" markerWidth="9" markerHeight="9" refX="6" refY="4.5" orient="auto"><path d="M0,0 L9,4.5 L0,9 z" fill="#c7b8ae"/></marker></defs>
        <rect x="24" y="100" width="150" height="66" rx="12" fill="#faf0ec" stroke="#b8492e" stroke-width="1.6"/>
        <text x="99" y="128" text-anchor="middle" font-size="13" font-weight="700" fill="#8f351f">Architecture</text>
        <text x="99" y="146" text-anchor="middle" font-size="13" font-weight="700" fill="#8f351f">degree</text>
        <?php
          $branches = [
            [34,'Registered architect','practice, RIBA/ARB route'],
            [98,'Specialisms','urban · conservation · landscape'],
            [162,'Freelance & remote','viz · BIM · competitions'],
            [226,'Adjacent design fields','interior · product · academia'],
          ];
          foreach ($branches as [$y,$t,$s]) {
            echo '<path d="M174,133 C250,133 300,'.($y+22).' 360,'.($y+22).'" fill="none" stroke="#c7b8ae" stroke-width="1.6" marker-end="url(#cb)"/>';
            echo '<rect x="362" y="'.$y.'" width="256" height="44" rx="10" fill="#f4f1ea" stroke="#e2ddd4"/>';
            echo '<text x="376" y="'.($y+20).'" font-size="12.5" font-weight="600" fill="#2a2a2a">'.$t.'</text>';
            echo '<text x="376" y="'.($y+35).'" font-size="10.5" fill="#7a756c">'.$s.'</text>';
          }
        ?>
      </svg>
    </div>
    <figcaption>An architecture education is a launchpad, not a single track. Registration and practice is the classic route — but the same skills open specialisms, freelance and remote work, and neighbouring design fields.</figcaption>
  </figure>

  <div class="grid cols-3" style="margin:32px 0">
    <a class="card" href="/career/how-to-become-an-architect/"><h3>How to become an architect</h3><p>Routes, RIBA parts and the timeline.</p></a>
    <a class="card" href="/career/architecture-internship/"><h3>Get an internship</h3><p>When and how to land your first placement.</p></a>
    <a class="card" href="/career/architecture-cv/"><h3>Architecture CV tips</h3><p>A CV that gets you the interview.</p></a>
    <a class="card" href="/career/what-does-an-architect-do/"><h3>What architects do</h3><p>Work stages, day-to-day and specialisms.</p></a>
    <a class="card" href="/career/architecture-salaries/"><h3>Salaries &amp; career path</h3><p>What to expect at each stage.</p></a>
  </div>

  <h2 style="margin-top:8px">The path, in order</h2>
  <p class="muted" style="max-width:700px">Most students walk roughly the same road. Here’s the sequence, with where to read more:</p>
  <ol style="max-width:720px;line-height:1.9">
    <li><strong>Understand the job</strong> — before you commit, know <a href="/career/what-does-an-architect-do/">what architects actually do</a> day to day.</li>
    <li><strong>Study &amp; build skills</strong> — the degree, plus the <a href="/process/">design process</a>, <a href="/standards/">standards</a> and <a href="/tutorials/">software</a> studio expects.</li>
    <li><strong>Get experience early</strong> — land your first <a href="/career/architecture-internship/">internship</a> and keep a portfolio of everything you make.</li>
    <li><strong>Qualify</strong> — follow the <a href="/career/how-to-become-an-architect/">route to registration</a> in your country (parts/exams and logged experience).</li>
    <li><strong>Get hired</strong> — a sharp <a href="/career/architecture-cv/">CV</a> and portfolio, and realistic <a href="/career/architecture-salaries/">salary</a> expectations.</li>
  </ol>
  <h2 style="margin-top:34px">Where an architecture education can take you</h2>
  <p class="muted" style="max-width:720px">Registration and private practice is the classic route — but the same training opens several directions. Most architects move between them over a career.</p>
  <ul style="max-width:760px;line-height:1.75">
    <li><strong>Registered architect, in practice.</strong> Qualify and work up through a studio — Part 1 assistant → Part 2 → qualified architect → project architect → associate/director. This is the route the <a href="/career/how-to-become-an-architect/">qualification guide</a> maps out.</li>
    <li><strong>Specialisms.</strong> As you gain experience you can lean into a field — urban design, conservation and heritage, landscape, sustainability and low-energy design, healthcare or education buildings, or technical/facade design.</li>
    <li><strong>Freelance &amp; remote work.</strong> The skills travel well from home: architectural visualisation and 3D rendering, BIM/Revit drafting, competition entries, planning drawings, and selling digital resources or templates. Build the <a href="/tutorials/">software skills</a> and a strong portfolio, then pick a specialism you can offer remotely.</li>
    <li><strong>Adjacent design fields.</strong> An architecture degree is respected well beyond buildings — interior, product, exhibition and set design, urban planning, real estate and development, teaching and research. The design-thinking transfers.</li>
  </ul>

  <div class="callout" style="margin-top:22px"><strong>Whichever path you take, two things carry you.</strong> A <strong>portfolio</strong> that shows how you think (not just pretty renders), and <strong>software fluency</strong> employers can use on day one. Everything else — the <a href="/process/">design process</a>, <a href="/standards/">standards</a> and <a href="/tutorials/">tutorials</a> on this site — is here to build both.</div>

  <div class="related">
    <h2>Start here</h2>
    <div class="rgrid">
      <a href="/career/what-does-an-architect-do/"><b>What architects do →</b><span>The day-to-day and work stages</span></a>
      <a href="/career/architecture-internship/"><b>Get an internship →</b><span>Land your first placement</span></a>
      <a href="/career/architecture-cv/"><b>CV tips →</b><span>Get to the interview</span></a>
      <a href="/career/how-to-become-an-architect/"><b>Become an architect →</b><span>The route to registration</span></a>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
