<?php
/* /architects/ — great architects of the world, grouped by region and country. */
require_once $_SERVER['DOCUMENT_ROOT'].'/architects/_lib.php';

$byc = arcx_by_country();
$nArch = 0; foreach ($byc as $l) $nArch += count($l);
$nCountries = count($byc);

$PAGE_TITLE = 'Famous Architects of the World, by Country — Portraits & Buildings | ArchStudent';
$PAGE_DESC  = 'A directory of '.$nArch.' of the world’s most influential architects across '.$nCountries.' countries — portraits, life dates, styles and their most famous buildings, grouped by country.';
$CANONICAL  = '/architects/';
foreach ($byc as $l) foreach ($l as $a) { if (!empty($a['photo'])) { $OG_IMAGE = $a['photo']; break 2; } }
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
arcx_styles();

$order = ['Europe','Americas','Asia','Middle East & Africa','Oceania','Other'];
$regEmoji = ['Europe'=>'🏛️','Americas'=>'🌎','Asia'=>'🌏','Middle East & Africa'=>'🕌','Oceania'=>'🏝️','Other'=>'🌐'];
$byreg = [];
foreach ($byc as $country => $list) {
  $iso = $ARCH_ISO[$country] ?? '';
  $reg = $ARCH_REGION[$iso] ?? 'Other';
  $byreg[$reg][$country] = $list;
}
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Architects</p>
  <h1>Famous architects of the world</h1>
  <p class="lead muted arc-lead">The people behind the buildings. This is a growing directory of <strong><?= $nArch ?> of the most influential architects</strong> across <strong><?= $nCountries ?> countries</strong> — with a portrait of each, when they worked, the ideas they’re known for, and their most important buildings. Pick a country, or jump straight to an architect.</p>

  <style>
    .pgsearch{position:relative;max-width:440px;margin:22px 0 4px}
    .pgsearch>svg{position:absolute;left:15px;top:50%;transform:translateY(-50%);width:18px;height:18px;color:#8a94a3;pointer-events:none}
    .pgsearch input{width:100%;padding:12px 42px 12px 44px;border:1px solid var(--line);border-radius:999px;font:inherit;font-size:.95rem;background:#fff;color:var(--ink);transition:border-color .15s,box-shadow .15s}
    .pgsearch input:focus{outline:none;border-color:var(--accent);box-shadow:0 0 0 3px rgba(184,73,46,.13)}
    .pgsearch input::-webkit-search-cancel-button{display:none}
    .pgsearch .clr{position:absolute;right:9px;top:50%;transform:translateY(-50%);background:none;border:0;font-size:1.5rem;line-height:1;color:#8a94a3;cursor:pointer;padding:2px 9px}
    .pgsearch .clr:hover{color:var(--accent)}
    .pgsearch-none{color:var(--ink-soft);margin:12px 0}
  </style>
  <div class="pgsearch">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M20 20l-3.4-3.4"/></svg>
    <input type="search" id="arcSearch" placeholder="Search architects by name or country…" autocomplete="off" aria-label="Search architects">
    <button type="button" class="clr" id="arcClr" aria-label="Clear search" hidden>&times;</button>
  </div>
  <p class="pgsearch-none" id="arcNone" hidden>No architects match “<span></span>”. Try a surname or a country.</p>

  <?php foreach ($order as $reg): if (empty($byreg[$reg])) continue; $countries = $byreg[$reg]; ksort($countries); ?>
    <h2 class="arc-region"><?= ($regEmoji[$reg] ?? '').' '.htmlspecialchars($reg) ?></h2>
    <?php foreach ($countries as $country => $list):
      usort($list, fn($a,$b)=>strcmp($a['name'],$b['name']));
      $iso = $ARCH_ISO[$country] ?? ''; $flag = arch_flag($iso); $cslug = arch_slug($country); ?>
      <div class="arc-cgroup">
        <h3 class="arc-ch"><a href="/architects/<?= $cslug ?>/"><?= $flag ?> <?= htmlspecialchars($country) ?></a> <span class="n">· <?= count($list) ?></span></h3>
        <div class="arc-grid">
          <?php foreach ($list as $a) arcx_card($a, $cslug); ?>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endforeach; ?>

  <div class="callout" style="margin-top:34px">Think we’ve missed a great architect from your country? <a href="/contact/">Tell us</a> and we’ll research and add them. Portraits via Wikimedia Commons; building photos link to our <a href="/architecture/">famous architecture</a> pages.</div>
</div>
<script>
(function(){
  var inp=document.getElementById('arcSearch'),clr=document.getElementById('arcClr'),none=document.getElementById('arcNone');
  if(!inp)return; var wrap=inp.closest('.wrap');
  var cards=[].slice.call(wrap.querySelectorAll('.arc-card'));
  function run(){
    var q=inp.value.trim().toLowerCase(); clr.hidden=!q; var any=false;
    cards.forEach(function(c){var t=c.getAttribute('data-s')||c.textContent.toLowerCase();var m=!q||t.indexOf(q)>-1;c.style.display=m?'':'none';if(m)any=true;});
    wrap.querySelectorAll('.arc-cgroup').forEach(function(g){
      var vis=[].some.call(g.querySelectorAll('.arc-card'),function(c){return c.style.display!=='none';});
      g.style.display=vis?'':'none';
    });
    var cur=null,rv=false;
    [].forEach.call(wrap.children,function(el){
      if(el.classList.contains('arc-region')){if(cur)cur.style.display=rv?'':'none';cur=el;rv=false;}
      else if(el.classList.contains('arc-cgroup')){if(el.style.display!=='none')rv=true;}
    });
    if(cur)cur.style.display=rv?'':'none';
    if(none){none.hidden=!(q&&!any);if(q&&!any)none.querySelector('span').textContent=inp.value.trim();}
  }
  inp.addEventListener('input',run);
  clr.addEventListener('click',function(){inp.value='';inp.focus();run();});
})();
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
