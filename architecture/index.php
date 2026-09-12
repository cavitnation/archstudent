<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/architecture/_lib.php';
$byc = arch_by_country();
$nCountries = count($byc);
$nProjects  = count(arch_load());
$PAGE_TITLE = 'Famous Architecture by Country — Iconic Buildings & Landmark Projects | ArchStudent';
$PAGE_DESC  = "Explore the world's most famous architecture country by country — iconic all-time landmarks and recent standout buildings, with photos, architects and dates.";
$CANONICAL  = '/architecture/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

$byreg = [];
foreach ($byc as $c => $ps) { $iso = $ARCH_ISO[$c] ?? ''; $reg = $ARCH_REGION[$iso] ?? 'Other'; $byreg[$reg][$c] = $ps; }
$order = ['Europe','Americas','Asia','Middle East & Africa','Oceania','Other'];
$regEmoji = ['Europe'=>'&#127757;','Americas'=>'&#127758;','Asia'=>'&#127759;','Middle East & Africa'=>'&#128332;','Oceania'=>'&#127965;&#65039;','Other'=>'&#127760;'];
?>
<style>
  .ac-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px;margin:14px 0 8px}
  .ac{display:flex;flex-direction:column;padding:0;overflow:hidden}
  .ac .ph{position:relative;aspect-ratio:16/9;overflow:hidden;background:linear-gradient(135deg,#e8ecf3,#d3dbe6)}
  .ac .ph img{width:100%;height:100%;object-fit:cover;display:block;filter:grayscale(35%);transition:filter .5s,transform .6s}
  .ac:hover .ph img{filter:grayscale(0) saturate(1.08);transform:scale(1.04)}
  .ac .ph .cap{position:absolute;left:0;right:0;bottom:0;padding:16px 12px 8px;background:linear-gradient(transparent,rgba(20,28,40,.72));color:#fff}
  .ac .ph .cap b{font-size:16px}
  .ac .body{padding:10px 14px 12px;display:flex;justify-content:space-between;align-items:center;gap:8px}
  .ac .body .n{color:#7a8699;font-size:12.5px}
  .ac .body .go{font-size:12px;color:#2f6df6;font-weight:600}
  @media(max-width:600px){.ac-grid{grid-template-columns:1fr 1fr}}
</style>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Architecture</p>
  <h1>Famous architecture by country</h1>
  <p class="lead muted" style="max-width:770px">The buildings that define each country — <strong>all-time icons</strong> and the <strong>latest landmark projects</strong>, with real photos, the architects behind them and the dates. A visual reference for architecture students, growing country by country.<?php if($nProjects): ?> <strong><?= $nProjects ?> projects</strong> across <strong><?= $nCountries ?> countries</strong> so far.<?php endif; ?></p>

  <?php if (!$byc): ?>
    <div class="callout">The country guides are being built now — check back shortly. Meanwhile, browse <a href="/schools/">architecture schools by country</a>.</div>
  <?php endif; ?>

  <?php foreach ($order as $reg): if (empty($byreg[$reg])) continue; $countries = $byreg[$reg]; ksort($countries); ?>
    <h2 style="margin-top:30px"><?= ($regEmoji[$reg] ?? '').' '.htmlspecialchars($reg) ?></h2>
    <div class="ac-grid">
      <?php foreach ($countries as $c => $ps):
              $slug = arch_slug($c); $iso = $ARCH_ISO[$c] ?? ''; $flag = arch_flag($iso);
              $hero = ''; foreach ($ps as $p) { if (!empty($p['img'])) { $hero = $p['img']; break; } } ?>
        <a class="card ac" href="/architecture/<?= $slug ?>/">
          <div class="ph">
            <?php if ($hero): ?><img src="<?= htmlspecialchars($hero) ?>" alt="<?= htmlspecialchars($c) ?> architecture" loading="lazy" onerror="this.remove()"><?php endif; ?>
            <div class="cap"><b><?= $flag ?> <?= htmlspecialchars($c) ?></b></div>
          </div>
          <div class="body"><span class="n"><?= count($ps) ?> projects</span><span class="go">Explore →</span></div>
        </a>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>

  <h2 style="margin-top:44px">Why study the world’s famous buildings</h2>
  <p>Looking at great architecture isn’t sightseeing — it’s how you build a designer’s visual library. Every landmark here is a worked answer to a real problem: how to hold a public space, span a huge room, sit quietly in a landscape, or carry meaning in a facade. The more of these answers you’ve studied, the more you have to draw on when you face a blank site of your own.</p>
  <p>Use these pages as <strong>precedents</strong>. When a project stalls, find a building that solved something similar and ask <em>how</em> it did it — the section, the structure, the way people move through it — not just what it looks like. That’s the difference between copying a picture and learning from a building. (More on that in <a href="/process/precedent-studies/">precedent studies</a>.)</p>

  <h3>What’s on each country page</h3>
  <ul>
    <li><strong>Iconic (all-time)</strong> — the landmarks that defined that country’s architecture, from the ancient to the modern.</li>
    <li><strong>Recent &amp; notable</strong> — the standout buildings of the last few decades.</li>
    <li>For every project: a real photo, the <strong>architect</strong>, the city and year, a line on <strong>why it matters</strong>, and a link to read more.</li>
  </ul>
  <p>Want the people behind the buildings? Browse <a href="/architects/">famous architects by country</a> — their lives, ideas and complete built work — and see where each one studied in our <a href="/schools/">architecture schools directory</a>.</p>

  <div class="callout" style="margin-top:28px">Know a landmark we should feature, or a country you’d like added next? <a href="/community/">Tell us on the student wall</a>.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
