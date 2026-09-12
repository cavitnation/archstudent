<?php
$PAGE_TITLE = 'Architecture at UET Lahore — Pakistan’s first B.Arch program | ArchStudent';
$PAGE_DESC  = 'A profile of the Department of Architecture at UET Lahore: established 1962 as Pakistan’s first five-year Bachelor of Architecture, its programs, PCATP accreditation, campus and studio culture — plus an alumnus’s note.';
$CANONICAL  = '/schools/uet-lahore-architecture/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/schools/">Schools</a> › UET Lahore</p>
  <h1>Architecture at UET Lahore</h1>
  <p class="lead muted" style="max-width:740px">The Department of Architecture at the University of Engineering and Technology (UET) Lahore is one of the oldest architecture schools in Pakistan — and the place that launched the country’s first professional degree in the discipline.</p>

  <?php
  $uf = __DIR__ . '/updates.json';
  $ud = is_file($uf) ? json_decode(file_get_contents($uf), true) : null;
  $uitems = $ud['items'] ?? [];
  if ($uitems): ?>
  <div style="background:#fbf3ef;border:1px solid #f0dcd2;border-radius:12px;padding:20px 22px;margin:26px 0 8px">
    <div style="display:flex;align-items:baseline;justify-content:space-between;gap:12px;flex-wrap:wrap">
      <h2 style="margin:0;font-size:20px"><span style="color:#e0362c">&#9679;</span> Latest from the department</h2>
      <a href="https://architecture.uet.edu.pk/" target="_blank" rel="noopener noreferrer" style="font-weight:600;font-size:13px">Department site &#8599;</a>
    </div>
    <p class="muted" style="margin:4px 0 14px;font-size:13px">Live updates pulled from the UET Lahore Department of Architecture &mdash; awards, events, juries and announcements.</p>
    <ul style="list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:12px">
      <?php foreach (array_slice($uitems, 0, 10) as $it): $k=$it['kind']??''; $kb=($k==='Event')?['#e6f2f0','#0b6b60']:['#fbeae3','#a9451f']; ?>
      <li style="border-top:1px solid #f0dcd2;padding-top:12px">
        <a href="<?= htmlspecialchars($it['link']) ?>" target="_blank" rel="noopener noreferrer" style="font-weight:600"><?= htmlspecialchars($it['title']) ?> &#8599;</a>
        <div style="display:flex;gap:8px;align-items:center;margin-top:3px;flex-wrap:wrap">
          <?php if($k): ?><span style="background:<?= $kb[0] ?>;color:<?= $kb[1] ?>;border-radius:999px;padding:1px 8px;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:.03em"><?= htmlspecialchars($k) ?></span><?php endif; ?>
          <span class="muted" style="font-size:12px"><?= $it['ts'] ? date('j M Y', $it['ts']) : '' ?></span>
        </div>
        <?php if (!empty($it['excerpt'])): ?><p style="margin:5px 0 0;font-size:13.5px;color:#3a4658"><?= htmlspecialchars($it['excerpt']) ?></p><?php endif; ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php if (!empty($ud['fetched'])): ?><p class="muted" style="font-size:11px;margin:12px 0 0">Updated <?= date('j M Y, H:i', $ud['fetched']) ?> UTC &middot; refreshed daily</p><?php endif; ?>
  </div>
  <?php endif; ?>

  <h2>A short history</h2>
  <p>The <strong>Department of Architecture was established in 1962</strong>, offering <strong>Pakistan’s first professional five-year Bachelor of Architecture (B.Arch)</strong>. Six decades on, it has grown into a full department awarding degrees from bachelor’s to doctorate, and sits within UET Lahore’s <strong>Faculty of Architecture and Planning</strong> alongside the Department of City &amp; Regional Planning.</p>
  <p>The university around it is older still. UET Lahore traces back to <strong>1921</strong>, when it opened as <em>Mughalpura Technical College</em>. It became <em>MacLagan Engineering College</em> (1923), the <em>Punjab College of Engineering and Technology</em> (1939), and a full university in 1962 — adopting its present name, the <strong>University of Engineering and Technology, Lahore, in 1972</strong>.</p>

  <h2>Degrees offered</h2>
  <div style="overflow-x:auto">
  <table class="tbl" style="width:100%;border-collapse:collapse;margin:8px 0 4px">
    <thead><tr>
      <th style="text-align:left;border-bottom:2px solid #e3e6ea;padding:8px">Program</th>
      <th style="text-align:left;border-bottom:2px solid #e3e6ea;padding:8px">Level</th>
      <th style="text-align:left;border-bottom:2px solid #e3e6ea;padding:8px">Duration</th>
    </tr></thead>
    <tbody>
      <tr><td style="padding:8px;border-bottom:1px solid #eef1f3"><strong>Bachelor of Architecture (B.Arch)</strong></td><td style="padding:8px;border-bottom:1px solid #eef1f3">Undergraduate, professional</td><td style="padding:8px;border-bottom:1px solid #eef1f3">5 years (incl. 6–8 weeks professional internship)</td></tr>
      <tr><td style="padding:8px;border-bottom:1px solid #eef1f3"><strong>Bachelor of Interior Design (BID)</strong></td><td style="padding:8px;border-bottom:1px solid #eef1f3">Undergraduate, professional (new, Fall 2025)</td><td style="padding:8px;border-bottom:1px solid #eef1f3">4 years</td></tr>
      <tr><td style="padding:8px;border-bottom:1px solid #eef1f3"><strong>Master of Architecture (M.Arch)</strong></td><td style="padding:8px;border-bottom:1px solid #eef1f3">Postgraduate (since 1990)</td><td style="padding:8px;border-bottom:1px solid #eef1f3">1.5–4 years (coursework + dissertation)</td></tr>
      <tr><td style="padding:8px"><strong>PhD in Architecture</strong></td><td style="padding:8px">Doctoral</td><td style="padding:8px">5–7 years (courses + thesis)</td></tr>
    </tbody>
  </table>
  </div>

  <h2>Accreditation &amp; recognition</h2>
  <ul>
    <li>B.Arch graduates meet the licensing requirements of the <strong>Pakistan Council of Architects and Town Planners (PCATP)</strong> and, once registered, are eligible to practise architecture across Pakistan.</li>
    <li>Student activities run under the patronage of the <strong>PCATP</strong> and the <strong>Institute of Architects of Pakistan (IAP)</strong>.</li>
    <li>UET Lahore is a public university under the oversight of Pakistan’s <strong>Higher Education Commission (HEC)</strong>.</li>
  </ul>

  <h2>Campus &amp; studio culture</h2>
  <p>The department is housed on UET Lahore’s <strong>main campus on the Grand Trunk (GT) Road</strong>, a few kilometres from the Mughal-era Shalimar Gardens. Its facilities include design studios, lecture theatres, a well-stocked library with a dedicated section of B.Arch/M.Arch theses and PhD dissertations, a computer laboratory, environmental-studies labs, and a historic internal courtyard that doubles as social and review space.</p>
  <p>Teaching is <strong>studio-based with a deliberately low intake</strong>, giving high student–faculty interaction, and leans heavily on fieldwork — site visits, surveys and study tours. Roughly <strong>1,700 architects</strong> have graduated from the department, many of whom have shaped Pakistan’s built environment; the department is also working to establish a Centre for Architecture in Pakistan.</p>

  <style>
    .uet-gwrap{background:linear-gradient(135deg,#eaf6f3,#fbf1ec 58%,#f3f7ea);border:1px solid #e9ece2;border-radius:16px;padding:22px 22px 16px;margin:26px 0}
    .uet-gwrap h2{margin:0}
    .uet-gal{column-count:4;column-gap:12px;margin-top:14px}
    @media(max-width:900px){.uet-gal{column-count:3}}
    @media(max-width:560px){.uet-gal{column-count:2}}
    .uet-ph{display:block;margin:0 0 12px;break-inside:avoid;border-radius:12px;overflow:hidden;position:relative;box-shadow:0 2px 10px rgba(20,30,45,.10);transition:transform .22s,box-shadow .22s;cursor:zoom-in}
    .uet-ph img{width:100%;height:auto;display:block;filter:grayscale(45%) saturate(.9);transition:transform .4s, filter .35s}
    .uet-ph::after{content:"";position:absolute;inset:0;border-radius:12px;opacity:0;transition:opacity .3s;mix-blend-mode:soft-light;background:linear-gradient(135deg,#16b8a6,#f0b429 45%,#e0662f)}
    .uet-ph:hover{transform:translateY(-4px) scale(1.04);box-shadow:0 10px 26px rgba(14,148,136,.42),0 10px 26px rgba(224,85,43,.30)}
    .uet-ph:hover img{transform:scale(1.06);filter:grayscale(0) saturate(1.35) contrast(1.05)}
    .uet-ph:hover::after{opacity:.6}
    .uet-lb{display:none;position:fixed;inset:0;background:rgba(15,20,28,.93);z-index:1000;align-items:center;justify-content:center;padding:24px;cursor:zoom-out}
    .uet-lb img{max-width:96%;max-height:92%;border-radius:8px;box-shadow:0 12px 44px rgba(0,0,0,.55)}
  </style>
  <?php
  $cpf = __DIR__ . '/campus-photos.json';
  $cphotos = is_file($cpf) ? json_decode(file_get_contents($cpf), true) : [];
  if ($cphotos): ?>
  <div class="uet-gwrap">
    <div style="display:flex;align-items:baseline;justify-content:space-between;gap:12px;flex-wrap:wrap">
      <h2>&#128248; Inside the campus</h2>
      <a href="https://architecture.uet.edu.pk/architecture-campus/" target="_blank" rel="noopener noreferrer" style="font-weight:600;font-size:13px">View on department site &#8599;</a>
    </div>
    <p class="muted" style="margin:4px 0 0">Studios, labs, the library, collaborative-studio work and campus life at the Department of Architecture.</p>
    <div class="uet-gal">
      <?php foreach ($cphotos as $i => $ph): ?>
        <a class="uet-ph" href="<?= htmlspecialchars($ph['full']) ?>" data-full="<?= htmlspecialchars($ph['full']) ?>" onclick="return uetLB(this)">
          <img loading="lazy" src="<?= htmlspecialchars($ph['thumb']) ?>" alt="UET Lahore Department of Architecture campus photo <?= $i+1 ?>">
        </a>
      <?php endforeach; ?>
    </div>
    <p class="muted" style="font-size:12px;margin-top:12px">Photos &copy; Department of Architecture, UET Lahore &mdash; embedded from the department&rsquo;s own site, with thanks.</p>
  </div>
  <div class="uet-lb" id="uetlb" onclick="this.style.display='none'"><img id="uetlbimg" src="" alt="UET Lahore campus photo"></div>
  <script>
    function uetLB(el){ var i=document.getElementById('uetlbimg'); i.src=el.getAttribute('data-full'); document.getElementById('uetlb').style.display='flex'; return false; }
    document.addEventListener('keydown',function(e){ if(e.key==='Escape'){var l=document.getElementById('uetlb'); if(l) l.style.display='none';} });
  </script>
  <?php endif; ?>

  <h2>Labs &amp; facilities</h2>
  <p class="muted" style="max-width:720px">Beyond the studios, the department runs specialist labs that tie theory to practice.</p>
  <div class="grid cols-3" style="margin:16px 0 8px">
    <div class="card">
      <h3>&#129521; Materials &amp; Construction Lab</h3>
      <p>Samples of real building components and materials; lectures are paired with lab visits, and practising architects present construction techniques first-hand.</p>
    </div>
    <div class="card">
      <h3>&#128187; Computer Laboratory</h3>
      <p>40 Core-i5 workstations with printing/plotting, plus lecture theatres fitted with multimedia projectors and audio-visual aids.</p>
    </div>
    <div class="card">
      <h3>&#9728; Physical &amp; Environmental Lab</h3>
      <p>For climate-responsive, energy-efficient design &mdash; lux meters, sound meters, anemometers and infra-red thermometers, with Ecotect, Weather Tool, WinAir4 and HTB2 for lighting, CFD and thermal analysis.</p>
    </div>
  </div>
  <p class="muted" style="font-size:12px;margin-top:4px"><a href="https://architecture.uet.edu.pk/lab-facilities/" target="_blank" rel="noopener noreferrer">See the labs on the department site &#8599;</a></p>

  <h2 style="margin-top:34px">Research &amp; student life</h2>
  <p class="muted" style="max-width:720px">The department hosts dedicated research groups and a lively, student-run society.</p>
  <div class="grid cols-4" style="margin:16px 0 8px">
    <a class="card" href="https://architecture.uet.edu.pk/research/architectural-history-research-group/" target="_blank" rel="noopener noreferrer"><h3>AHRG</h3><p>Architectural History Research Group &mdash; studying the region&rsquo;s built heritage and histories.</p><span class="tag">Research &#8599;</span></a>
    <a class="card" href="https://architecture.uet.edu.pk/research/cusp/" target="_blank" rel="noopener noreferrer"><h3>CUSP</h3><p>Consortium for Urbanism &amp; Socio-Spatial Practices &mdash; cities, communities and space.</p><span class="tag">Research &#8599;</span></a>
    <a class="card" href="https://architecture.uet.edu.pk/research/research-groups/" target="_blank" rel="noopener noreferrer"><h3>DRC</h3><p>Design Research Collective &mdash; design-led research across the department.</p><span class="tag">Research &#8599;</span></a>
    <a class="card" href="https://architecture.uet.edu.pk/technical-societies/" target="_blank" rel="noopener noreferrer"><h3>ArchiHub</h3><p>Student-led society running design competitions, workshops and exhibitions.</p><span class="tag">Society &#8599;</span></a>
  </div>

  <div class="callout" style="border-left:4px solid #0e9488;background:#eef7f5;margin-top:26px">
    <p style="margin:0;font-style:italic;font-size:1.05rem">&ldquo;We envision a world where architecture plays a key role for the wellbeing of people and safeguarding the environment.&rdquo;</p>
    <p style="margin:6px 0 0;color:#7a8699;font-size:13px">&mdash; Department of Architecture, UET Lahore</p>
  </div>

  <div class="callout" style="border-left:4px solid #b8492e;background:#fbf3ef">
    <h3 style="margin-top:0">An alumnus’s note</h3>
    <p style="margin-bottom:6px">I studied for my <strong>Bachelor of Architecture at UET Lahore from 2005 to 2010</strong>. Five years in those studios taught me the thing this whole site is built around: that the leap from a brief to a good idea is where architecture actually happens — and that you learn it by doing, reviewing, and doing again. The late nights, the crits, the site visits, the courtyard between classes — that’s where the real education lived. ArchStudent is my attempt to pass some of that on to students everywhere, for free.</p>
    <p style="margin:0;color:#7a8699">— Azeem Javed, B.Arch (UET Lahore, 2005–2010), founder of ArchStudent</p>
  </div>

  <h2>Useful links</h2>
  <ul>
    <li>Department of Architecture, UET Lahore — <a href="https://architecture.uet.edu.pk/" target="_blank" rel="noopener noreferrer">architecture.uet.edu.pk ↗</a></li>
    <li>University of Engineering and Technology, Lahore — <a href="https://www.uet.edu.pk/" target="_blank" rel="noopener noreferrer">uet.edu.pk ↗</a></li>
    <li>Studying or building in Pakistan? See the <a href="/building-codes/pakistan/">Pakistan building codes</a> and real <a href="/student-work/">student thesis work</a>.</li>
  </ul>

  <p class="muted" style="font-size:13px;margin-top:18px">Institutional facts above are drawn from the department’s and university’s own published information. If you spot something out of date, <a href="/contact/">let us know</a>.</p>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
