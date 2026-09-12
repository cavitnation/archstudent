<?php
$PAGE_TITLE = 'ArchStudent — the process school for architecture students';
$PAGE_DESC  = 'Free frameworks, software tutorials, and standards & dimension guides that teach architecture students how to design — not just what to copy.';
$CANONICAL  = '/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/architecture/_lib.php';
$__arch = @json_decode(@file_get_contents($_SERVER['DOCUMENT_ROOT'].'/architecture/_data.json'), true) ?: [];
$__byName = []; foreach ($__arch as $p) $__byName[$p['name']] = $p;
$heroPics = [];
foreach (['Eiffel Tower','Sydney Opera House','Fallingwater'] as $n) if (!empty($__byName[$n]['img'])) $heroPics[] = $__byName[$n];
foreach ($__arch as $p) { if (count($heroPics)>=3) break; if (!empty($p['img']) && ($p['era']??'')==='iconic' && !in_array($p['name'], array_column($heroPics,'name'), true)) $heroPics[]=$p; }
$__curated = ['Sagrada Familia','Colosseum','Taj Mahal','Burj Khalifa','Neuschwanstein Castle','Marina Bay Sands','Cathedral of Brasília',"Beijing National Stadium (Bird's Nest)",'Louvre Pyramid','Badshahi Mosque','Dongdaemun Design Plaza','Oslo Opera House','Hagia Sophia','Tower Bridge','Habitat 67','Tokyo Tower','Museo Soumaya','Parthenon'];
$showPics = [];
foreach ($__curated as $n) { if (!empty($__byName[$n]['img'])) $showPics[] = $__byName[$n]; if (count($showPics) >= 18) break; }
if (count($showPics) < 12) { $__seenC=[]; foreach ($showPics as $p) $__seenC[$p['country']]=1; foreach ($__arch as $p) { if (empty($p['img']) || ($p['era']??'')!=='iconic') continue; if (isset($__seenC[$p['country']])) continue; $__seenC[$p['country']]=1; $showPics[]=$p; if (count($showPics)>=12) break; } }
?>
<style>
  /* hero photo collage */
  .hero-photos{position:relative;display:grid;grid-template-columns:1.25fr 1fr;grid-template-rows:1fr 1fr;gap:12px;min-height:380px}
  .hero-photos a{position:relative;display:block;border-radius:16px;overflow:hidden;box-shadow:0 14px 36px rgba(30,20,10,.17)}
  .hero-photos a img{width:100%;height:100%;object-fit:cover;display:block;filter:grayscale(100%) contrast(1.04);transition:transform .6s ease,filter .6s ease}
  .hero-photos a:hover img{transform:scale(1.05);filter:grayscale(0) saturate(1.08)}
  .hero-photos .hp-main{grid-row:1 / span 2}
  .hero-photos .hp-cap{position:absolute;left:0;right:0;bottom:0;padding:28px 14px 11px;background:linear-gradient(transparent,rgba(18,24,36,.82));color:#fff;font-size:13px;font-weight:700;line-height:1.25}
  .hero-photos .hp-cap small{display:block;font-weight:400;opacity:.88;font-size:11px;margin-top:2px}
  .hero-photos .hp-badge{position:absolute;right:12px;top:12px;background:rgba(255,255,255,.95);color:var(--accent-ink);border-radius:999px;padding:7px 14px;font-size:12.5px;font-weight:700;box-shadow:0 4px 14px rgba(30,20,10,.2);z-index:3}
  .hero-photos .hp-badge:hover{background:#fff}
  @media(max-width:820px){.hero-photos{min-height:300px;margin-top:6px}}
  @media(max-width:420px){.hero-photos{min-height:250px}}
  /* hero "what is this" feature pills */
  .hero-def{font-size:1.06rem;line-height:1.55;color:var(--ink-soft);margin:14px 0 0;max-width:540px}
  .hero-def strong{color:var(--ink)}
  .hero-feats{display:flex;flex-wrap:wrap;gap:9px;margin:18px 0 2px;max-width:560px}
  .hero-feats .hf{display:inline-flex;align-items:center;gap:7px;background:#fff;border:1px solid var(--line);border-radius:999px;padding:7px 13px 7px 11px;font-size:.85rem;font-weight:600;color:var(--ink);text-decoration:none;transition:border-color .15s,box-shadow .15s,transform .15s}
  .hero-feats .hf:hover{border-color:var(--accent);box-shadow:0 5px 13px rgba(30,20,10,.08);transform:translateY(-1px)}
  .hero-feats .hf svg{width:17px;height:17px;color:var(--accent);flex:none}
  @media(max-width:560px){.hero-feats .hf{font-size:.8rem;padding:6px 11px 6px 9px}}
  /* famous buildings showcase */
  .row-head{display:flex;justify-content:space-between;align-items:baseline;gap:12px;flex-wrap:wrap}
  .row-head a{font-weight:600;color:var(--accent);white-space:nowrap}
  .famous-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(155px,1fr));gap:13px;margin:20px 0 0}
  .famous-grid a{position:relative;display:block;aspect-ratio:3/4;border-radius:13px;overflow:hidden;box-shadow:0 7px 20px rgba(30,20,10,.11)}
  .famous-grid img{width:100%;height:100%;object-fit:cover;filter:grayscale(22%);transition:transform .55s ease,filter .55s ease}
  .famous-grid a:hover img{transform:scale(1.07);filter:grayscale(0) saturate(1.1)}
  .famous-grid .cap{position:absolute;left:0;right:0;bottom:0;padding:24px 10px 9px;background:linear-gradient(transparent,rgba(18,24,36,.82));color:#fff;font-size:12px;font-weight:600;line-height:1.28}
  .famous-grid .cap small{display:block;font-weight:400;opacity:.85;font-size:11px}
  @media(max-width:520px){.famous-grid{grid-template-columns:repeat(2,1fr)}}
</style>
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-copy">
      <div class="eyebrow">Free · for architecture students worldwide</div>
      <h1>Learn how to <em>design</em>,<br>not just what to copy.</h1>
      <p class="hero-def"><strong>ArchStudent is a free learning platform for architecture students</strong> — everything for your degree in one place, from your first sketch to final thesis:</p>
      <div class="hero-feats">
        <a class="hf" href="/process/" title="Design process">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><polygon points="15.5 8.5 13.5 13.5 8.5 15.5 10.5 10.5"/></svg>
          Design process</a>
        <a class="hf" href="/standards/" title="Standards &amp; dimensions">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="9" width="18" height="6" rx="1"/><path d="M7 9v2.4M11 9v3.4M15 9v2.4M19 9v3.4"/></svg>
          Standards &amp; dimensions</a>
        <a class="hf" href="/tutorials/" title="Software tutorials">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="12" rx="1.5"/><path d="M8.5 20h7M12 16.5V20"/></svg>
          Software tutorials</a>
        <a class="hf" href="/architecture/" title="Famous architecture">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9.5 12 4.5l8 5"/><path d="M6 9.5V17M10 9.5V17M14 9.5V17M18 9.5V17"/><path d="M4.5 20h15M5.5 17h13"/></svg>
          Famous architecture</a>
        <a class="hf" href="/architects/" title="Famous architects">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="3.3"/><path d="M5.5 20a6.5 6.5 0 0 1 13 0"/></svg>
          Famous architects</a>
        <a class="hf" href="/resources/" title="Free downloads">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v10"/><path d="M8 10.5l4 4 4-4"/><path d="M5 19h14"/></svg>
          Free downloads</a>
      </div>
      <div class="actions" style="margin-top:22px">
        <a class="btn primary" href="/process/">Start with the design process</a>
        <a class="btn ghost" href="/news/">Read architecture news</a>
      </div>
    </div>
    <?php if (count($heroPics) >= 3): ?>
    <div class="hero-photos">
      <?php foreach ([0,1,2] as $__i): $hp = $heroPics[$__i]; ?>
      <a class="<?= $__i===0 ? 'hp-main' : '' ?>" href="/architecture/<?= arch_slug($hp['country']) ?>/">
        <img src="<?= htmlspecialchars($hp['img']) ?>" alt="<?= htmlspecialchars($hp['name']) ?>">
        <span class="hp-cap"><?= htmlspecialchars($hp['name']) ?><?php if(!empty($hp['architect'])): ?><small><?= htmlspecialchars($hp['architect']) ?></small><?php endif; ?></span>
      </a>
      <?php endforeach; ?>
      <a class="hp-badge" href="/architecture/">🏛️ Famous architecture · 24 countries →</a>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php
  // live counts for the scale band (kept accurate from the data files)
  $__schJson = @json_decode(@file_get_contents($_SERVER['DOCUMENT_ROOT'].'/schools/_schools.json'), true) ?: [];
  $__schArr  = isset($__schJson['schools']) ? $__schJson['schools'] : $__schJson;
  $__schN    = count($__schArr);
  $__schC    = count(array_unique(array_filter(array_map(fn($x)=>$x['country'] ?? '', $__schArr))));
  $__arcJson = @json_decode(@file_get_contents($_SERVER['DOCUMENT_ROOT'].'/architects/_data.json'), true) ?: [];
  $__arcN    = count($__arcJson);
  $__bldN    = count($__arch);
  $__bcN     = count(glob($_SERVER['DOCUMENT_ROOT'].'/building-codes/*', GLOB_ONLYDIR));
  $__stats = [
    [$__schN ?: 268, 'Architecture schools'],
    [$__schC ?: 72,  'Countries covered'],
    [$__arcN ?: 118, 'Famous architects'],
    [$__bldN ?: 171, 'Iconic buildings'],
    [$__bcN  ?: 40,  'Building codes by country'],
    ['100%',         'Free — no paywall'],
  ];
?>
<style>
  .scaleband{background:linear-gradient(135deg,#1f4e7a,#122f4d);color:#fff;padding:54px 0}
  .scaleband .sb-h{color:#fff;margin:0;text-align:center;font-size:clamp(1.5rem,3.2vw,2.05rem);line-height:1.2}
  .scaleband .sb-sub{color:#cfe0f2;text-align:center;margin:.6em auto 0;max-width:640px}
  .sb-grid{display:grid;grid-template-columns:repeat(6,1fr);gap:14px;margin-top:36px}
  .sb-item{background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.20);border-radius:14px;padding:22px 12px;text-align:center}
  .sb-n{display:block;font-size:2.35rem;font-weight:800;line-height:1;font-family:Georgia,'Times New Roman',serif}
  .sb-l{display:block;margin-top:9px;font-size:.85rem;color:#bcd2ea;line-height:1.3}
  @media(max-width:860px){.sb-grid{grid-template-columns:repeat(3,1fr)}}
  @media(max-width:460px){.sb-grid{grid-template-columns:repeat(2,1fr)}.sb-n{font-size:2rem}}
</style>
<section class="scaleband">
  <div class="wrap">
    <h2 class="sb-h">The whole degree, in one free place</h2>
    <p class="sb-sub">Years of built-up reference, tutorials and real-world examples — growing every week, and free to every student.</p>
    <div class="sb-grid">
      <?php foreach ($__stats as [$n,$l]): ?>
        <div class="sb-item"><span class="sb-n"><?= htmlspecialchars((string)$n) ?></span><span class="sb-l"><?= htmlspecialchars($l) ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if (!empty($showPics)): ?>
<section class="section alt">
  <div class="wrap">
    <div class="row-head">
      <h2 style="margin:0">The buildings that define architecture</h2>
      <a href="/architecture/">Explore all 24 countries →</a>
    </div>
    <p class="muted" style="max-width:700px;margin:.5em 0 0">Iconic landmarks and the latest hits, country by country — real photos, the architects behind them, and what makes each one matter.</p>
    <div class="famous-grid">
      <?php foreach ($showPics as $p): ?>
        <a href="/architecture/<?= arch_slug($p['country']) ?>/" title="<?= htmlspecialchars($p['name'].' — '.$p['country']) ?>">
          <img src="<?= htmlspecialchars($p['img']) ?>" alt="<?= htmlspecialchars($p['name']) ?>" loading="lazy" onerror="this.closest('a').style.display='none'">
          <span class="cap"><?= htmlspecialchars($p['name']) ?><small><?= arch_flag($ARCH_ISO[$p['country']] ?? '').' '.htmlspecialchars($p['country']) ?></small></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="section">
  <div class="wrap">
    <h2>Four things every student needs</h2>
    <p class="muted" style="max-width:640px">Built around what students actually struggle with — the parts studio never quite teaches.</p>
    <div class="grid cols-4" style="margin-top:30px">
      <a class="card" href="/process/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><polygon points="15.5 8.5 13.5 13.5 8.5 15.5 10.5 10.5"/></svg></div>
        <h3>Design Process</h3>
        <p>Step-by-step frameworks: brief → site analysis → concept → development. The rules no one gives you.</p>
        <span class="tag">Frameworks</span>
      </a>
      <a class="card" href="/standards/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="9" width="18" height="6" rx="1"/><path d="M7 9v2.4M11 9v3.4M15 9v2.4M19 9v3.4"/></svg></div>
        <h3>Standards &amp; Dimensions</h3>
        <p>Stairs, ramps, doors, parking, corridors — the numbers you Google on every project, in one place.</p>
        <span class="tag">Reference</span>
      </a>
      <a class="card" href="/tutorials/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="12" rx="1.5"/><path d="M8.5 20h7M12 16.5V20"/></svg></div>
        <h3>Software Tutorials</h3>
        <p>Revit, AutoCAD, Rhino, SketchUp, Lumion — practical workflows aimed at studio deadlines.</p>
        <span class="tag">Skills</span>
      </a>
      <a class="card" href="/resources/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 4 7v10l8 4 8-4V7z"/><path d="M4 7l8 4 8-4M12 11v10"/></svg></div>
        <h3>Free Resources</h3>
        <p>CAD blocks, cutout people, textures and portfolio templates. Download, drop in, keep working.</p>
        <span class="tag">Downloads</span>
      </a>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="wrap">
    <h2>More to explore</h2>
    <p class="muted" style="max-width:660px">Beyond the basics — real student work, the rules by country, the schools, and the best free assets on the web.</p>
    <div class="grid cols-4" style="margin-top:30px">
      <a class="card" href="/student-work/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3.5h7l5 5V20.5H6z"/><path d="M13 3.5V9h5"/><path d="M9 13h6M9 16h6M9 19h4"/></svg></div>
        <h3>Thesis &amp; Portfolios</h3>
        <p>Real architecture thesis projects from around the world — read the drawings and see how a thesis is actually built.</p>
        <span class="tag">Student work →</span>
      </a>
      <a class="card" href="/building-codes/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8.5"/><path d="M3.5 12h17"/><path d="M12 3.5c2.4 2.4 2.4 14.6 0 17M12 3.5c-2.4 2.4-2.4 14.6 0 17"/></svg></div>
        <h3>Building Codes by Country</h3>
        <p>The official code, authority and source for 40+ countries — the rules change wherever you build.</p>
        <span class="tag">40+ countries →</span>
      </a>
      <a class="card" href="/schools/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9.5 12 4.5l8 5"/><path d="M6 9.5V17M10 9.5V17M14 9.5V17M18 9.5V17"/><path d="M4.5 20h15M5.5 17h13"/></svg></div>
        <h3>Architecture Schools</h3>
        <p>A world directory of public &amp; leading architecture schools by country — with campus photos, official links and what each is known for.</p>
        <span class="tag">Schools →</span>
      </a>
      <a class="card" href="/resources/free-download-sites/">
        <div class="ico"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#b8492e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v10"/><path d="M8 10.5l4 4 4-4"/><path d="M5 19h14"/></svg></div>
        <h3>Free Download Sites</h3>
        <p>40+ hand-checked sites for free 3D models, CAD blocks, textures, entourage, fonts and mockups.</p>
        <span class="tag">Directory →</span>
      </a>
    </div>
  </div>
</section>

<?php
  // feature cards (news / architecture / architects) + browse-everything
  $__hn = $__byName['Dongdaemun Design Plaza']['img'] ?? $__byName['Marina Bay Sands']['img'] ?? $__byName['Louvre Pyramid']['img'] ?? '';
  $__ha = $__byName['Taj Mahal']['img'] ?? $__byName['Colosseum']['img'] ?? $__byName['Marina Bay Sands']['img'] ?? $__byName['Sydney Opera House']['img'] ?? '';
  $__hpArr = @json_decode(@file_get_contents($_SERVER['DOCUMENT_ROOT'].'/architects/_data.json'), true) ?: [];
  $__hpByN = []; foreach ($__hpArr as $p) if (!empty($p['photo'])) $__hpByN[$p['name']] = $p['photo'];
  $__hp = '';
  foreach (['Le Corbusier','Antoni Gaudí','Zaha Hadid','Frank Lloyd Wright'] as $n) { if (!empty($__hpByN[$n])) { $__hp = $__hpByN[$n]; break; } }
  if (!$__hp && $__hpByN) $__hp = reset($__hpByN);
?>
<style>
  .home-feat{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
  .hfc{position:relative;display:block;border-radius:16px;overflow:hidden;aspect-ratio:16/10;background:#26303c;box-shadow:0 10px 26px rgba(10,15,25,.16);text-decoration:none}
  .hfc img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;filter:grayscale(28%) brightness(.94);transition:transform .6s ease,filter .6s ease}
  .hfc.hfc-p img{object-position:center top}
  .hfc:hover img{transform:scale(1.05);filter:grayscale(0) brightness(1)}
  .hfc .cap{position:absolute;left:0;right:0;bottom:0;padding:38px 18px 16px;background:linear-gradient(transparent,rgba(12,16,24,.86));color:#fff;font-weight:700;font-size:1.14rem;line-height:1.2}
  .hfc .cap small{display:block;font-weight:400;opacity:.86;font-size:.82rem;margin-top:3px}
  .home-browse{display:inline-flex;align-items:center;gap:12px;background:#fff;color:var(--ink);border:1px solid var(--line);border-radius:999px;padding:13px 24px;font-size:1rem;font-weight:600;cursor:pointer;transition:border-color .2s,box-shadow .2s,transform .2s}
  .home-browse:hover{border-color:var(--accent);box-shadow:0 6px 16px rgba(30,20,10,.08);transform:translateY(-1px)}
  .home-browse .bars{display:inline-flex;flex-direction:column;gap:3px}
  .home-browse .bars span{display:block;width:18px;height:2px;background:var(--accent);border-radius:2px}
  @media(max-width:640px){.home-feat{grid-template-columns:1fr}.hfc{aspect-ratio:16/9}}
</style>
<section class="section">
  <div class="wrap">
    <div class="home-feat">
      <a class="hfc" href="/news/">
        <?php if($__hn): ?><img src="<?= htmlspecialchars($__hn) ?>" alt="" loading="lazy" onerror="this.style.display='none'"><?php endif; ?>
        <span class="cap">Architecture news<small>What’s happening worldwide, updated daily</small></span>
      </a>
      <a class="hfc" href="/architecture/">
        <?php if($__ha): ?><img src="<?= htmlspecialchars($__ha) ?>" alt="" loading="lazy" onerror="this.style.display='none'"><?php endif; ?>
        <span class="cap">Famous architecture<small>Iconic buildings, country by country</small></span>
      </a>
      <a class="hfc hfc-p" href="/architects/">
        <?php if($__hp): ?><img src="<?= htmlspecialchars($__hp) ?>" alt="" loading="lazy" onerror="this.style.display='none'"><?php endif; ?>
        <span class="cap">Famous architects<small>The masters &amp; their built work</small></span>
      </a>
    </div>
    <div style="text-align:center;margin-top:24px">
      <button class="home-browse" data-drawer-open aria-haspopup="true" aria-controls="drawer">
        <span class="bars"><span></span><span></span><span></span></span>
        Browse everything on ArchStudent
      </button>
    </div>
  </div>
</section>

<?php
$nf = $_SERVER['DOCUMENT_ROOT'].'/data/news.json';
$nd = is_file($nf) ? json_decode(file_get_contents($nf), true) : null;
$__items = $nd["items"] ?? [];
$latest  = array_slice($__items, 0, 7);
if (!function_exists('_https')) { function _https($u){return preg_replace('#^http://#','https://',$u);} }
if (!function_exists('_ago'))   { function _ago($ts){$d=time()-(int)$ts; if($d<3600)return max(1,(int)round($d/60)).'m ago'; if($d<86400)return (int)round($d/3600).'h ago'; return (int)round($d/86400).'d ago';} }
if ($latest):
  // decorative fallback photos (real famous buildings) for stories the feed gave no image
  $__fb = array_values(array_filter(array_map(fn($p)=>$p['img'] ?? '', $showPics)));
  $__fbi = 0;
  $newsimg = function($it) use (&$__fbi, $__fb) {
    if (!empty($it['img'])) return _https($it['img']);
    if ($__fb) { $u = $__fb[$__fbi % count($__fb)]; $__fbi++; return $u; }
    return '/assets/news-placeholder.svg';
  };
  // prefer a lead story that actually has its own photo
  $__leadIdx = 0;
  foreach ($latest as $__k => $__it) { if (!empty($__it['img'])) { $__leadIdx = $__k; break; } }
  $lead = $latest[$__leadIdx];
  $rest = array_values(array_filter($latest, fn($k) => $k !== $__leadIdx, ARRAY_FILTER_USE_KEY));
  $rest = array_slice($rest, 0, 6);
  // trending countries from the whole feed → link to their /architecture/<country>/ page when it exists
  $__cc = [];
  foreach ($__items as $it) { if (!empty($it['country'])) $__cc[$it['country']] = ($__cc[$it['country']] ?? 0) + 1; }
  arsort($__cc);
  $__trend = [];
  foreach ($__cc as $c => $n) {
    $slug = arch_slug($c);
    if (is_file($_SERVER['DOCUMENT_ROOT'].'/architecture/'.$slug.'/index.php')) $__trend[$c] = ['n'=>$n,'slug'=>$slug];
    if (count($__trend) >= 6) break;
  }
?>
<style>
  .newshead{display:flex;align-items:baseline;justify-content:space-between;gap:16px;flex-wrap:wrap}
  .newshead .upd{font-size:.8rem;color:var(--ink-soft);font-weight:500}
  .newshead .upd .dot{display:inline-block;width:7px;height:7px;border-radius:50%;background:#3fa66a;margin-right:6px;vertical-align:middle;box-shadow:0 0 0 3px rgba(63,166,106,.18)}
  .newsx{display:grid;grid-template-columns:1.35fr 1fr;gap:28px;margin-top:22px;align-items:start}
  .nx-lead,.nx-list{min-width:0}
  .nx-lead h3,.nx-item .tx h4{overflow-wrap:break-word}
  .nx-lead{display:block;background:#fff;border:1px solid var(--line);border-radius:16px;overflow:hidden;box-shadow:0 4px 16px rgba(30,20,10,.06);transition:transform .2s,box-shadow .2s}
  .nx-lead:hover{transform:translateY(-3px);box-shadow:0 14px 32px rgba(30,20,10,.1)}
  .nx-lead .ph{display:block;aspect-ratio:16/9;background:var(--bg-alt);overflow:hidden}
  .nx-lead .ph img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s ease}
  .nx-lead:hover .ph img{transform:scale(1.04)}
  .nx-lead .body{display:block;padding:19px 22px 22px}
  .nx-lead .src,.nx-lead .meta{display:block}
  .nx-lead .src{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:var(--accent)}
  .nx-lead h3{font-family:var(--serif);font-size:1.5rem;line-height:1.24;margin:8px 0 9px;color:var(--ink)}
  .nx-lead p{margin:0;color:var(--ink-soft);font-size:.95rem;line-height:1.5}
  .nx-lead .meta{margin-top:13px;font-size:.8rem;color:var(--ink-soft);display:flex;gap:10px;align-items:center}
  .nx-lead .meta .ctry{font-weight:700;color:var(--navy)}
  .nx-list{border-top:1px solid var(--line)}
  .nx-item{display:grid;grid-template-columns:92px minmax(0,1fr);gap:14px;padding:14px 0;border-bottom:1px solid var(--line);align-items:center}
  .nx-item .tx{min-width:0}
  .nx-item .th{aspect-ratio:1/1;border-radius:10px;overflow:hidden;background:var(--bg-alt)}
  .nx-item .th img{width:100%;height:100%;object-fit:cover;display:block}
  .nx-item .tx .src{font-size:.66rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:var(--accent)}
  .nx-item .tx h4{margin:3px 0 4px;font-size:.98rem;line-height:1.28;font-weight:600}
  .nx-item .tx h4 a{color:var(--ink)}
  .nx-item .tx h4 a:hover{color:var(--accent-ink)}
  .nx-item .tx .t{font-size:.76rem;color:var(--ink-soft)}
  .nx-trend{margin-top:22px;padding-top:18px;border-top:1px solid var(--line);display:flex;flex-wrap:wrap;align-items:center;gap:9px}
  .nx-trend .lbl{font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:var(--ink-soft)}
  .nx-trend a{display:inline-flex;align-items:center;gap:6px;background:#fff;border:1px solid var(--line);border-radius:999px;padding:5px 13px;font-size:.86rem;font-weight:600;color:var(--ink);text-decoration:none;transition:border-color .15s,background .15s}
  .nx-trend a:hover{border-color:var(--accent);background:#fff7f4;color:var(--accent-ink)}
  .nx-trend a .c{color:var(--ink-soft);font-weight:700;font-size:.76rem}
  @media(max-width:820px){.newsx{grid-template-columns:1fr;gap:22px}}
</style>
<section class="section alt">
  <div class="wrap">
    <div class="newshead">
      <h2 style="margin-bottom:0">🌍 What's happening in architecture</h2>
      <a href="/news/" style="font-weight:600">See all news →</a>
    </div>
    <p class="muted" style="margin:.4em 0 0">Fresh from ArchDaily, Dezeen, Designboom and more — the projects, ideas and debates shaping architecture around the world right now.<?php if(!empty($nd['updated'])): ?> <span class="upd"><span class="dot"></span>Updated <?= htmlspecialchars(_ago($nd['updated'])) ?></span><?php endif; ?></p>
    <div class="newsx">
      <a class="nx-lead" href="<?= htmlspecialchars($lead['link']) ?>" target="_blank" rel="noopener nofollow">
        <span class="ph"><img src="<?= htmlspecialchars($newsimg($lead)) ?>" alt="<?= htmlspecialchars($lead['title']) ?>" loading="lazy" onerror="this.onerror=null;this.src='/assets/news-placeholder.svg'"></span>
        <span class="body">
          <span class="src"><?= htmlspecialchars($lead['source']) ?></span>
          <h3><?= htmlspecialchars($lead['title']) ?></h3>
          <?php if(!empty($lead['excerpt'])): ?><p><?= htmlspecialchars($lead['excerpt']) ?></p><?php endif; ?>
          <span class="meta"><?php if(!empty($lead['country'])): ?><span class="ctry"><?= htmlspecialchars($lead['country']) ?></span> · <?php endif; ?><span><?= htmlspecialchars(_ago($lead['date'])) ?></span></span>
        </span>
      </a>
      <div class="nx-list">
        <?php foreach($rest as $it): ?>
        <div class="nx-item">
          <a class="th" href="<?= htmlspecialchars($it['link']) ?>" target="_blank" rel="noopener nofollow"><img src="<?= htmlspecialchars($newsimg($it)) ?>" alt="" loading="lazy" onerror="this.onerror=null;this.src='/assets/news-placeholder.svg'"></a>
          <div class="tx">
            <span class="src"><?= htmlspecialchars($it['source']) ?></span>
            <h4><a href="<?= htmlspecialchars($it['link']) ?>" target="_blank" rel="noopener nofollow"><?= htmlspecialchars($it['title']) ?></a></h4>
            <span class="t"><?php if(!empty($it['country'])): ?><?= htmlspecialchars($it['country']) ?> · <?php endif; ?><?= htmlspecialchars(_ago($it['date'])) ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php if($__trend): ?>
    <div class="nx-trend">
      <span class="lbl">In the news</span>
      <?php foreach($__trend as $c => $d): ?>
        <a href="/architecture/<?= htmlspecialchars($d['slug']) ?>/" title="Famous architecture in <?= htmlspecialchars($c) ?>"><?= arch_flag($ARCH_ISO[$c] ?? '') ?> <?= htmlspecialchars($c) ?> <span class="c"><?= (int)$d['n'] ?></span></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<section class="section alt">
  <div class="wrap">
    <h2>Popular dimension guides</h2>
    <p class="muted">The reference pages students reach for again and again.</p>
    <div class="grid cols-3" style="margin-top:26px">
      <a class="card" href="/standards/staircase-dimensions/"><h3>Staircase dimensions</h3><p>Riser, going, pitch, headroom and the rise-and-go rule.</p></a>
      <a class="card" href="/standards/door-sizes/"><h3>Standard door sizes</h3><p>Internal, external and accessible clear-opening widths.</p></a>
      <a class="card" href="/standards/car-parking-dimensions/"><h3>Car parking dimensions</h3><p>Bay sizes, aisle widths and accessible bays.</p></a>
      <a class="card" href="/standards/ramp-gradients/"><h3>Ramp gradients</h3><p>Accessible slopes, going lengths and landings.</p></a>
      <a class="card" href="/standards/corridor-widths/"><h3>Corridor widths</h3><p>Minimum circulation widths for different uses.</p></a>
      <a class="card" href="/standards/"><h3>See all standards →</h3><p>The full, growing dimensions reference.</p></a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Guides for getting through the degree</h2>
    <p class="muted">Practical, no-nonsense help beyond the drawing board.</p>
    <div class="grid cols-4" style="margin-top:26px">
      <a class="card" href="/guides/how-to-make-an-architecture-portfolio/"><h3>Make a portfolio</h3><p>What to include and how to curate it.</p></a>
      <a class="card" href="/guides/architecture-scales-explained/"><h3>Scales explained</h3><p>1:50, 1:100, 1:200 — when to use each.</p></a>
      <a class="card" href="/guides/types-of-architectural-drawings/"><h3>Types of drawings</h3><p>Plan, section, elevation, axo and more.</p></a>
      <a class="card" href="/guides/architecture-glossary/"><h3>Glossary</h3><p>Key terms every student should know.</p></a>
    </div>
  </div>
</section>

<style>
  .joinband{background:#fff;border:1px solid var(--line);border-radius:18px;padding:34px 34px;display:flex;gap:30px;align-items:center;justify-content:space-between;flex-wrap:wrap;box-shadow:0 12px 32px rgba(30,20,10,.06)}
  .joinband .jb-copy{flex:1 1 340px}
  .joinband .jb-copy h2{margin:0 0 .35em}
  .joinband .jb-copy p{margin:0;color:var(--ink-soft);max-width:470px}
  .jb-form{display:flex;gap:10px;flex:1 1 320px;max-width:450px;position:relative}
  .jb-form input[type=email]{flex:1;padding:13px 16px;border:1px solid var(--line);border-radius:10px;font-size:1rem;min-width:0;background:var(--bg)}
  .jb-form input[type=email]:focus{outline:none;border-color:var(--accent)}
  .jb-form .hp{position:absolute;left:-9999px;width:1px;height:1px;opacity:0}
  .jb-form button{white-space:nowrap}
  @media(max-width:560px){.jb-form{flex-direction:column}.jb-form button{width:100%}}
</style>
<section class="section">
  <div class="wrap">
    <div class="joinband">
      <div class="jb-copy">
        <h2>Get new guides in your inbox</h2>
        <p>Fresh tutorials, standards, dimension guides and free downloads — sent only when we publish something worth your time. No spam, unsubscribe any time.</p>
      </div>
      <form class="jb-form" action="/subscribe.php" method="post">
        <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="you@university.edu" required aria-label="Email address">
        <button class="btn primary" type="submit">Subscribe free</button>
      </form>
    </div>
  </div>
</section>

<section class="section alt">
  <div class="wrap" style="max-width:760px">
    <h2>Why ArchStudent?</h2>
    <p>Architecture school is long on theory and short on method. Students tell us the same thing everywhere: <em>“I can draw it beautifully — I just don’t know how to get to a good idea in the first place.”</em></p>
    <p>So we start with process. Then we back it with the reference data and software skills you need to actually build the drawings. No paywalls on the basics, no gatekeeping — just the resource we wish we’d had.</p>
    <div class="actions" style="margin-top:8px">
      <a class="btn primary" href="/process/">Begin the design process guide</a>
    </div>
  </div>
</section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
