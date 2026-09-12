<?php
$PAGE_TITLE = 'About ArchStudent — who we are and why we built it';
$PAGE_DESC  = 'ArchStudent is a free learning resource that teaches architecture students how to design — frameworks, standards, software tutorials and downloadable resources. Built by a UET Lahore architecture graduate.';
$CANONICAL  = '/about/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<style>
  .who-grid{display:grid;grid-template-columns:1.9fr 0.8fr;gap:38px;align-items:center;margin-top:8px}
  .who-text p:first-child{margin-top:0}
  .founders{margin:0;max-width:330px;margin-left:auto}
  .founders .fimg{display:block;border-radius:12px;overflow:hidden;border:1px solid #e3e6ea;box-shadow:0 8px 26px rgba(20,30,45,.18)}
  .founders .fimg img{width:100%;height:auto;display:block;filter:grayscale(100%) contrast(1.03);transition:filter .55s ease}
  .founders:hover .fimg img{filter:grayscale(0) saturate(1.06)}
  .founders figcaption{font-size:12.5px;color:#7a8699;margin-top:11px;text-align:center;font-style:italic}
  @media(max-width:760px){.who-grid{grid-template-columns:1fr;gap:22px}}
  .wrap.prose{max-width:var(--wrap)}
</style>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › About</p>
  <h1>About ArchStudent</h1>
  <p class="lead" style="max-width:730px;font-size:19px;line-height:1.5"><strong>ArchStudent is a free learning platform for architecture students</strong> — the design process, standards &amp; dimensions, building codes, software tutorials, real student thesis work, architecture news and free downloads, all in one place.</p>
  <p class="lead muted" style="max-width:720px">We built it because architecture school teaches you to <em>present</em> long before it teaches you to <em>design</em>. The drawings look great — but getting to a good idea in the first place still feels like guesswork. This is the resource we wish we’d had.</p>

  <h2>What we cover</h2>
  <p>One place for a student’s whole degree, from first-year confusion to final-year thesis:</p>
  <ul>
    <li><strong><a href="/process/">Design process</a></strong> — repeatable frameworks for going from a blank brief to a resolved scheme.</li>
    <li><strong><a href="/standards/">Standards &amp; dimensions</a></strong> — the reference numbers you look up on every project: stairs, ramps, doors, parking, circulation.</li>
    <li><strong><a href="/building-codes/">Building codes by country</a></strong> — the official regulations that change depending on where you build.</li>
    <li><strong><a href="/tutorials/">Software tutorials</a></strong> — Revit, AutoCAD, Rhino, SketchUp and more, aimed at studio deadlines.</li>
    <li><strong><a href="/student-work/">Thesis &amp; portfolios</a></strong> — real student work from around the world, so you can see how a thesis is actually built.</li>
    <li><strong><a href="/resources/">Free resources</a></strong> — CAD blocks, cutout people, textures and templates you can download right now.</li>
  </ul>

  <h2>Why it’s different</h2>
  <ul>
    <li><strong>Process-first, not picture-first.</strong> Every other site shows you finished, pretty projects. We teach the messy middle — the part studio never quite explains.</li>
    <li><strong>Global.</strong> Architecture students face the same struggles in Lahore, London or Lima. The method travels; only the codes change (which is why we cover them by country).</li>
    <li><strong>Free, no gatekeeping.</strong> The basics stay free. Just the method and the material, for architecture students worldwide.</li>
  </ul>

  <h2>How to use this site</h2>
  <ol>
    <li><strong>Stuck on a project?</strong> Start with the <a href="/process/">Design Process</a> frameworks.</li>
    <li><strong>Need a number?</strong> Search <a href="/standards/">Standards &amp; Dimensions</a> — it’s the page students reach for again and again.</li>
    <li><strong>Building somewhere specific?</strong> Check the <a href="/building-codes/">code for that country</a>.</li>
    <li><strong>Learning software?</strong> Work through a <a href="/tutorials/">tutorial</a>.</li>
    <li><strong>Building a portfolio or thesis?</strong> Study real <a href="/student-work/">student work</a> and grab a <a href="/resources/">template</a>.</li>
  </ol>

  <h2>Who’s behind it — and how it started</h2>
  <div class="who-grid">
    <div class="who-text">
      <p>ArchStudent is built by <strong>Azeem Javed</strong>, an architecture student from the <strong>2005–2010 B.Arch session</strong> at the <a href="/schools/uet-lahore-architecture/">Department of Architecture, UET Lahore</a>, and is designed and maintained by his architecture studio, <a href="https://jeemmo.com/" target="_blank" rel="noopener">jeemmo.com</a>.</p>
      <p>The site began, of all places, with a <strong>WhatsApp group</strong>. A few years after graduating, a small donation collection among old classmates turned into a group chat that quietly pulled the entire ’05 session back together. Reconnecting brought the studio years rushing back — the all-nighters, the crits, the site trips, the friendships. ArchStudent grew out of that reunion: a way to <strong>recall those old memories</strong>, and to hand what that education gave us to the next generation of architecture students, for free.</p>
      <p>Like most students, we learned the hard way that the leap from a brief to a good scheme is where architecture actually happens — and that almost nobody teaches it directly. This site is the attempt to write that method down. Read more about the school that started it all: <a href="/schools/uet-lahore-architecture/">Architecture at UET Lahore →</a></p>
    </div>
    <?php if (file_exists($_SERVER['DOCUMENT_ROOT'].'/assets/founders-uet.jpg')): ?>
    <figure class="founders">
      <span class="fimg"><img src="/assets/founders-uet.jpg?v=2" alt="Touseef, Zohaib, Azeem Javed and Mohammad Younas during their architecture-student years" loading="lazy"></span>
      <figcaption>From left: Touseef, Zohaib, Azeem Javed and Mohammad Younas — friends from our student days</figcaption>
    </figure>
    <?php endif; ?>
  </div>

  <div class="callout">Got feedback, a correction, or something you wish existed? <a href="/contact/">We’d love to hear it.</a></div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
