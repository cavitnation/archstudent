<?php
$PAGE_TITLE = 'Architecture Thesis Showcase — real student projects & drawings by country | ArchStudent';
$PAGE_DESC  = 'A curated, verified showcase of real architecture student thesis and final-year projects from around the world — read the drawings, plans and renders. Plus open-access repositories to find thousands more.';
$CANONICAL  = '/student-work/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
$PROJ = include $_SERVER['DOCUMENT_ROOT'].'/student-work/_projects.php';
$SW   = include $_SERVER['DOCUMENT_ROOT'].'/student-work/_sources.php';

$FLAG = ['United States'=>'🇺🇸','Canada'=>'🇨🇦','Mexico'=>'🇲🇽','Colombia'=>'🇨🇴','Brazil'=>'🇧🇷','Argentina'=>'🇦🇷','Chile'=>'🇨🇱',
  'United Kingdom'=>'🇬🇧','Ireland'=>'🇮🇪','France'=>'🇫🇷','Spain'=>'🇪🇸','Greece'=>'🇬🇷','Russia'=>'🇷🇺','Norway'=>'🇳🇴','Turkey'=>'🇹🇷',
  'India'=>'🇮🇳','Singapore'=>'🇸🇬','Vietnam'=>'🇻🇳','Indonesia'=>'🇮🇩','Philippines'=>'🇵🇭','Pakistan'=>'🇵🇰',
  'Egypt'=>'🇪🇬','Nigeria'=>'🇳🇬','Jordan'=>'🇯🇴','International'=>'🌍'];
$regionOrder = ['Europe','Americas','Asia','Middle East & Africa','Other'];
$regFlag = ['Europe'=>'🇪🇺','Americas'=>'🌎','Asia'=>'🌏','Middle East & Africa'=>'🕌','Oceania'=>'🏝️','Other'=>'🌐'];

$featured = array_values(array_filter($PROJ, fn($p)=>$p['featured']));
$rest = array_values(array_filter($PROJ, fn($p)=>!$p['featured']));
$byreg = [];
foreach ($rest as $p) { $byreg[$p['region']][] = $p; }
$total = count($PROJ);
?>
<style>
  .tz-embed{border:1px solid var(--line,#e3e6ea);border-radius:12px;overflow:hidden;background:#fff}
  .tz-embed iframe{display:block;width:100%;height:430px;border:0}
  .tz-cap{padding:10px 14px;font-size:13px;color:#3a4658;display:flex;justify-content:space-between;gap:10px;align-items:baseline;flex-wrap:wrap}
  .badge{display:inline-block;background:#eef1f5;color:#3a4658;border-radius:999px;padding:2px 10px;font-size:11.5px;font-weight:700;white-space:nowrap}
  .pcard{display:flex;flex-direction:column;padding:0;overflow:hidden}
  .pcard .pcov{display:block;height:172px;background:linear-gradient(135deg,#eef1f6,#dde4ee);overflow:hidden;position:relative}
  .pcard .pcov img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:top center;display:block;transition:transform .25s;background:linear-gradient(135deg,#eef1f6,#dde4ee)}
  .pcard:hover .pcov img{transform:scale(1.04)}
  .pcard .pcov .ph{display:flex;flex-direction:column;gap:5px;height:100%;align-items:center;justify-content:center}
  .pcard .pcov .ph .fl{font-size:34px;line-height:1}
  .pcard .pcov .ph .sr{color:#8a93a3;font-weight:700;font-size:11.5px;letter-spacing:.06em;text-transform:uppercase}
  .pcard .pbody{display:flex;flex-direction:column;gap:6px;padding:14px 16px 16px;flex:1}
  .pcard .top{display:flex;justify-content:space-between;gap:10px;align-items:baseline}
  .pcard h3{margin:2px 0 0;font-size:15.5px;line-height:1.3}
  .pcard .meta{color:#7a8699;font-size:13px;margin:0}
  .pcard .foot{margin-top:auto;font-size:13px;color:#2f6df6;font-weight:600}
  @media(max-width:600px){
    .books{grid-template-columns:1fr !important}
    .wrap .grid.cols-3, .wrap .grid.cols-4{grid-template-columns:1fr !important}
  }
  .books{display:grid;grid-template-columns:repeat(auto-fill,minmax(170px,1fr));gap:18px;margin:18px 0 8px}
  .book{display:flex;flex-direction:column;gap:7px;text-decoration:none;color:inherit}
  .book .cov{position:relative;border:1px solid var(--line,#e3e6ea);border-radius:8px;overflow:hidden;background:#f2f2f2;aspect-ratio:3/4;box-shadow:0 1px 3px rgba(20,30,45,.08)}
  .book .cov img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .25s}
  .book:hover .cov img{transform:scale(1.04)}
  .book .cov .view{position:absolute;left:0;right:0;bottom:0;background:linear-gradient(transparent,rgba(20,30,45,.72));color:#fff;font-size:12px;font-weight:700;padding:20px 10px 8px;opacity:0;transition:opacity .2s}
  .book:hover .cov .view{opacity:1}
  .book b{font-size:14px;line-height:1.3}
  .book .m{color:#7a8699;font-size:12px}
  .bookbox{display:none;position:fixed;inset:0;background:rgba(15,20,28,.92);z-index:1000}
  .bb-inner{max-width:900px;margin:0 auto;height:100%;display:flex;flex-direction:column}
  .bb-head{display:flex;justify-content:space-between;align-items:center;gap:12px;color:#fff;padding:12px 16px;font-weight:600}
  .bb-head a{color:#cfe0ff}
  .bb-head button{background:#ffffff22;color:#fff;border:0;border-radius:8px;width:34px;height:34px;font-size:18px;cursor:pointer}
  .bb-pages{flex:1;overflow-y:auto;padding:0 12px 40px;text-align:center}
  .bb-pages img{width:100%;max-width:820px;height:auto;display:block;margin:0 auto 12px;border-radius:4px;box-shadow:0 4px 18px rgba(0,0,0,.4);background:#fff}
  .bb-load{color:#9fb0c6;padding:24px;font-size:14px}
</style>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Student Work</p>
  <h1>Architecture thesis showcase</h1>
  <p class="lead muted" style="max-width:760px">Real thesis and final-year projects from architecture students around the world — the actual drawings, plans, sections and renders. Every project is linked to where its author published it, so you can study how a thesis is really put together. <strong><?= $total ?> projects</strong> and counting.</p>

  <h2 style="margin-top:36px">📐 Featured thesis books — view the drawings</h2>
  <p class="muted" style="max-width:720px">Real graduation booklets. Click any cover to open and flip through the full thesis — plans, sections and renders.</p>
  <div class="books">
    <?php foreach ($PROJ as $p): if ($p['source']!=='Issuu' || empty($p['cover'])) continue; ?>
      <a class="book" href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener noreferrer"
         data-base="<?= htmlspecialchars(str_replace('page_1.jpg','',$p['cover'])) ?>"
         data-title="<?= htmlspecialchars($p['title'].' — '.trim(($p['school']?:'').' · '.$p['country'].' · '.$p['year'],' ·')) ?>"
         data-src="<?= htmlspecialchars($p['url']) ?>" onclick="return openBook(this)">
        <span class="cov"><img loading="lazy" src="<?= htmlspecialchars($p['cover']) ?>" alt="<?= htmlspecialchars($p['title']) ?> — thesis book cover"><span class="view">📖 View the drawings →</span></span>
        <b><?= htmlspecialchars($p['title']) ?></b>
        <span class="m"><?= htmlspecialchars(trim(($p['school']?:'').' · '.$p['country'].' · '.$p['year'],' ·')) ?></span>
      </a>
    <?php endforeach; ?>
  </div>

  <?php foreach ($regionOrder as $reg): if (empty($byreg[$reg])) continue;
        $list=$byreg[$reg]; usort($list, fn($a,$b)=>[$a['country'],$a['title']]<=>[$b['country'],$b['title']]); ?>
    <h2 style="margin-top:38px"><?= ($regFlag[$reg]??'').' '.htmlspecialchars($reg) ?> <span class="muted" style="font-size:15px;font-weight:400">· <?= count($list) ?> projects</span></h2>
    <div class="grid cols-3" style="margin:16px 0 8px">
      <?php foreach ($list as $p): ?>
        <a class="card pcard" href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener noreferrer">
          <span class="pcov">
            <span class="ph"><span class="fl"><?= $FLAG[$p['country']] ?? '🎓' ?></span><span class="sr"><?= htmlspecialchars($p['source']) ?></span></span>
            <?php if(!empty($p['cover'])): ?><img loading="lazy" src="<?= htmlspecialchars($p['cover']) ?>" alt="<?= htmlspecialchars($p['title']) ?> cover" onerror="this.remove()"><?php endif; ?>
          </span>
          <div class="pbody">
            <div class="top">
              <span class="badge"><?= htmlspecialchars($p['source']) ?></span>
              <?php if($p['year']): ?><span class="muted" style="font-size:12px"><?= htmlspecialchars($p['year']) ?></span><?php endif; ?>
            </div>
            <h3><?= htmlspecialchars($p['title']) ?></h3>
            <p class="meta"><?= htmlspecialchars(trim(($p['author']?:'').($p['school']?' · '.$p['school']:''),' ·')) ?></p>
            <div class="foot"><?= ($FLAG[$p['country']]??'').' '.htmlspecialchars($p['country']) ?> · View drawings →</div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>

  <div class="callout warn" style="margin-top:30px"><strong>Credit where it's due.</strong> Every project links to the student's own published work — copyright stays with the author. Study their structure, drawing style and storytelling; never copy or re-present it as your own.</div>

  <!-- secondary: full repositories -->
  <h2 style="margin-top:44px">🗂️ Find thousands more — open-access archives by country</h2>
  <p class="muted" style="max-width:740px">Want to dig deeper? These are the free university repositories and national thesis portals where whole faculties publish their theses.</p>
  <?php
    $byregR=[]; foreach($SW as $d){ $byregR[$d['region']][]=$d; }
    $ord2=['Europe','Americas','Asia','Middle East & Africa','Oceania'];
    foreach($ord2 as $reg): if(empty($byregR[$reg])) continue; $list=$byregR[$reg]; usort($list, fn($a,$b)=>strcmp($a['country'],$b['country'])); ?>
    <h3 style="margin-top:22px"><?= ($regFlag[$reg]??'').' '.htmlspecialchars($reg) ?></h3>
    <div class="grid cols-4" style="margin:12px 0 6px">
      <?php foreach($list as $d): ?>
        <a class="card" href="/student-work/<?= $d['slug'] ?>/" style="padding:12px 15px"><strong><?= htmlspecialchars($d['country']) ?></strong> <span class="muted" style="font-size:12px">· <?= count($d['resources']) ?></span></a>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>

<!-- in-page thesis viewer (loads the booklet pages as images) -->
<div id="bookbox" class="bookbox" onclick="if(event.target===this)closeBook()">
  <div class="bb-inner">
    <div class="bb-head">
      <span id="bb-title"></span>
      <span><a id="bb-src" href="#" target="_blank" rel="noopener noreferrer">Open on Issuu ↗</a> &nbsp; <button type="button" onclick="closeBook()" aria-label="Close">✕</button></span>
    </div>
    <div id="bb-pages" class="bb-pages"><div class="bb-load">Loading the drawings…</div></div>
  </div>
</div>
<script>
function openBook(el){
  var base=el.getAttribute('data-base');
  document.getElementById('bb-title').textContent=el.getAttribute('data-title')||'Thesis';
  document.getElementById('bb-src').href=el.getAttribute('data-src')||'#';
  var pages=document.getElementById('bb-pages'); pages.innerHTML='<div class="bb-load">Loading the drawings…</div>';
  document.getElementById('bookbox').style.display='block';
  document.body.style.overflow='hidden';
  var loaded=0;
  (function load(i){
    if(i>80) return;
    var img=new Image();
    img.onload=function(){ if(loaded===0) pages.innerHTML=''; loaded++; img.className='bb-pg'; pages.appendChild(img); load(i+1); };
    img.onerror=function(){ if(loaded===0) pages.innerHTML='<div class="bb-load">Couldn’t load pages — <a style="color:#cfe0ff" href="'+el.getAttribute('data-src')+'" target="_blank" rel="noopener">open on Issuu ↗</a></div>'; };
    img.alt='page '+i; img.src=base+'page_'+i+'.jpg';
  })(1);
  return false;
}
function closeBook(){ document.getElementById('bookbox').style.display='none'; document.body.style.overflow=''; }
document.addEventListener('keydown',function(e){ if(e.key==='Escape')closeBook(); });
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
