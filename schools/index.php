<?php
$DIR = include $_SERVER['DOCUMENT_ROOT'].'/schools/_directory.php';
$MEDIA = @json_decode(@file_get_contents($_SERVER['DOCUMENT_ROOT'].'/schools/media.json'), true) ?: [];
$nCountries = count(array_unique(array_column($DIR, 'country')));
$nSchools   = count($DIR);
$PAGE_TITLE = 'Architecture schools by country — '.$nSchools.'+ worldwide directory | ArchStudent';
$PAGE_DESC  = 'A directory of '.$nSchools.'+ public and leading architecture schools across '.$nCountries.' countries — campus photos, official websites and what each is known for, grouped by region and country.';
$CANONICAL  = '/schools/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

$byreg = [];
foreach ($DIR as $s) { $byreg[$s['region']][$s['country']][] = $s; }
$order = ['Americas','Europe','Asia','Middle East & Africa','Oceania','Other'];
$regEmoji = ['Americas'=>'&#127758;','Europe'=>'&#127757;','Asia'=>'&#127759;','Middle East & Africa'=>'&#128332;','Oceania'=>'&#127965;&#65039;','Other'=>'&#127760;'];
$nImg = count(array_filter($DIR, fn($s)=>!empty($MEDIA[$s['wiki'] ?? '']['img'])));

function initials($name) {
  $n = preg_replace('/^(The|Department of|School of|Faculty of|College of)\s+/i', '', $name);
  $parts = preg_split('/[\s\-—,]+/', trim($n));
  $ini = '';
  foreach ($parts as $p) { if ($p !== '' && ctype_alpha($p[0])) { $ini .= mb_strtoupper($p[0]); if (mb_strlen($ini) >= 2) break; } }
  return $ini ?: 'AR';
}
function hue($str) { $h = 0; for ($i=0;$i<strlen($str);$i++) $h = (ord($str[$i]) + $h*31) % 360; return $h; }
function cslug($c) { return 'c-'.preg_replace('/[^a-z0-9]+/','-', strtolower($c)); }
?>
<style>
  .sch-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(196px,1fr));gap:13px;margin:9px 0}
  .sch-card{display:flex;flex-direction:column;padding:0;overflow:hidden;gap:0}
  .sch-photo{position:relative;aspect-ratio:16/10;background:linear-gradient(135deg,#eef1f6,#dbe2ec);overflow:hidden;display:flex;align-items:center;justify-content:center}
  .sch-photo img{width:100%;height:100%;object-fit:cover;display:block;filter:grayscale(45%) contrast(1.02);transition:filter .5s ease, transform .6s ease}
  .sch-card:hover .sch-photo img{filter:grayscale(0) saturate(1.08);transform:scale(1.04)}
  .sch-photo .init{font-size:26px;font-weight:800;letter-spacing:1px;color:#fff;text-shadow:0 1px 3px rgba(0,0,0,.25)}
  .sch-badge{position:absolute;top:7px;left:7px;background:rgba(20,30,45,.72);color:#fff;font-size:9.5px;font-weight:700;letter-spacing:.3px;text-transform:uppercase;padding:2px 7px;border-radius:999px;backdrop-filter:blur(2px)}
  .sch-body{padding:10px 12px 12px;display:flex;flex-direction:column;gap:3px;flex:1}
  .sch-body h3{margin:0;font-size:13.5px;line-height:1.28}
  .sch-body .city{color:#7a8699;font-size:11.5px}
  .sch-body p{margin:2px 0 0;color:#3a4658;font-size:11.8px;line-height:1.45}
  .sch-body .go{margin-top:auto;font-size:11.5px;color:#2f6df6;font-weight:600;padding-top:6px}
  .sch-body .cred{font-size:9.5px;color:#9aa4b3;margin-top:5px;line-height:1.3}
  .sch-body .cred a{color:#9aa4b3}
  .ctry-h{margin:20px 0 3px;font-size:15px;display:flex;align-items:center;gap:8px;scroll-margin-top:16px}
  .ctry-h .n{color:#7a8699;font-size:12.5px;font-weight:400}
  @media(max-width:520px){.sch-grid{grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:10px}}
  /* jump-nav */
  .cnav{margin:16px 0 6px;border:1px solid #e6e9ef;border-radius:12px;background:#fafbfd;overflow:hidden}
  .cnav>summary{cursor:pointer;list-style:none;padding:11px 16px;font-weight:600;font-size:13.5px;color:#2a3547;display:flex;align-items:center;gap:9px}
  .cnav>summary::-webkit-details-marker{display:none}
  .cnav>summary::after{content:"⌄";margin-left:auto;font-size:17px;line-height:1;color:#8894a6;transition:transform .2s}
  .cnav[open]>summary::after{transform:rotate(180deg)}
  .cnav>summary .n{background:#eef1f5;color:#54607a;border-radius:999px;padding:1px 9px;font-size:11.5px;font-weight:700}
  .cnav-body{padding:2px 15px 13px}
  .cnav-reg{margin:11px 0 6px;font-size:11.5px;font-weight:700;letter-spacing:.4px;text-transform:uppercase;color:#8894a6}
  .cnav-reg:first-child{margin-top:2px}
  .cnav-list{display:flex;flex-wrap:wrap;gap:6px}
  .cchip{display:inline-flex;align-items:center;gap:5px;background:#fff;border:1px solid #e3e7ee;border-radius:999px;padding:3px 10px;font-size:12px;color:#2a3547;text-decoration:none;transition:border-color .15s,background .15s}
  .cchip:hover{border-color:#2f6df6;background:#f0f5ff}
  .cchip .cc{color:#8894a6;font-size:10.5px;font-weight:700}
</style>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Architecture schools</p>
  <h1>Architecture schools by country</h1>
  <p class="lead muted" style="max-width:770px">Where you study shapes how you think. This is a hand-checked directory of <strong><?= $nSchools ?> architecture schools</strong> — public national departments and leading private ones alike — across <strong><?= $nCountries ?> countries</strong>. Each card shows a campus photo, what the school is known for, and a link to its official site.</p>

  <style>
    .pgsearch{position:relative;max-width:440px;margin:16px 0 4px}
    .pgsearch>svg{position:absolute;left:15px;top:50%;transform:translateY(-50%);width:18px;height:18px;color:#8a94a3;pointer-events:none}
    .pgsearch input{width:100%;padding:12px 42px 12px 44px;border:1px solid #e6e9ef;border-radius:999px;font:inherit;font-size:.95rem;background:#fff;color:#1a1a1a;transition:border-color .15s,box-shadow .15s}
    .pgsearch input:focus{outline:none;border-color:var(--accent);box-shadow:0 0 0 3px rgba(184,73,46,.13)}
    .pgsearch input::-webkit-search-cancel-button{display:none}
    .pgsearch .clr{position:absolute;right:9px;top:50%;transform:translateY(-50%);background:none;border:0;font-size:1.5rem;line-height:1;color:#8a94a3;cursor:pointer;padding:2px 9px}
    .pgsearch .clr:hover{color:var(--accent)}
    .pgsearch-none{color:#55524c;margin:12px 0}
  </style>
  <div class="pgsearch">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M20 20l-3.4-3.4"/></svg>
    <input type="search" id="schSearch" placeholder="Search schools by name, city or country…" autocomplete="off" aria-label="Search architecture schools">
    <button type="button" class="clr" id="schClr" aria-label="Clear search" hidden>&times;</button>
  </div>
  <p class="pgsearch-none" id="schNone" hidden>No schools match “<span></span>”. Try a city, country or school name.</p>

  <details class="cnav">
    <summary>🌍 Jump to a country <span class="n"><?= $nCountries ?></span></summary>
    <div class="cnav-body">
    <?php foreach ($order as $reg): if (empty($byreg[$reg])) continue; $countries = $byreg[$reg]; ksort($countries); ?>
      <div class="cnav-reg"><?= ($regEmoji[$reg] ?? '').' '.htmlspecialchars($reg) ?></div>
      <div class="cnav-list">
        <?php foreach ($countries as $country => $list): ?>
          <a class="cchip" href="#<?= cslug($country) ?>"><?= ($list[0]['flag'] ?? '').' '.htmlspecialchars($country) ?> <span class="cc"><?= count($list) ?></span></a>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
    </div>
  </details>

  <?php foreach ($order as $reg): if (empty($byreg[$reg])) continue; $countries = $byreg[$reg]; ksort($countries); ?>
    <h2 style="margin-top:36px"><?= ($regEmoji[$reg] ?? '').' '.htmlspecialchars($reg) ?></h2>
    <?php foreach ($countries as $country => $list):
            usort($list, fn($a,$b)=>strcmp($a['name'],$b['name'])); ?>
      <h3 class="ctry-h" id="<?= cslug($country) ?>"><?= ($list[0]['flag'] ?? '').' '.htmlspecialchars($country) ?> <span class="n">· <?= count($list) ?></span></h3>
      <div class="sch-grid">
        <?php foreach ($list as $s):
                $internal = (($s['url'][0] ?? '') === '/');
                $m = $MEDIA[$s['wiki'] ?? ''] ?? [];
                $img = $m['img'] ?? '';
                $isPublic = !empty($s['public']); ?>
          <a class="card sch-card" data-s="<?= htmlspecialchars(mb_strtolower($s['name'].' '.$s['city'].' '.$country.' '.($s['desc'] ?? ''))) ?>" href="<?= htmlspecialchars($s['url']) ?>"<?= $internal ? '' : ' target="_blank" rel="noopener noreferrer"' ?>>
            <div class="sch-photo"<?= $img ? '' : ' style="background:linear-gradient(135deg,hsl('.hue($s['name']).' 42% 62%),hsl('.((hue($s['name'])+40)%360).' 46% 48%))"' ?>>
              <?php if ($img): ?>
                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($s['name']) ?> campus" loading="lazy">
              <?php else: ?>
                <span class="init"><?= htmlspecialchars(initials($s['name'])) ?></span>
              <?php endif; ?>
              <?php if ($isPublic): ?><span class="sch-badge">Public</span><?php endif; ?>
            </div>
            <div class="sch-body">
              <h3><?= htmlspecialchars($s['name']) ?></h3>
              <span class="city"><?= htmlspecialchars($s['city']) ?></span>
              <p><?= htmlspecialchars($s['desc']) ?></p>
              <span class="go"><?= $internal ? 'Full profile →' : 'Official site ↗' ?></span>
              <?php if ($img && (!empty($m['artist']) || !empty($m['license']))): $src = (strpos($img,'upload.wikimedia.org')!==false) ? 'Wikimedia' : parse_url($img, PHP_URL_HOST); ?>
                <span class="cred">Photo: <?= htmlspecialchars(trim(($m['artist'] ?? '').(!empty($m['artist'])&&!empty($m['license'])?' · ':'').($m['license'] ?? ''))) ?> — <?= htmlspecialchars($src) ?></span>
              <?php endif; ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  <?php endforeach; ?>

  <div class="callout" style="margin-top:32px">Studied somewhere you’d like profiled in depth, or a great school we’ve missed? <a href="/contact/">Tell us</a> and we’ll add it. Campus photos via Wikimedia Commons; each links to its source.</div>
</div>
<script>
(function(){
  var inp=document.getElementById('schSearch'),clr=document.getElementById('schClr'),none=document.getElementById('schNone');
  if(!inp)return; var wrap=inp.closest('.wrap');
  var cards=[].slice.call(wrap.querySelectorAll('.sch-card'));
  function run(){
    var q=inp.value.trim().toLowerCase(); clr.hidden=!q; var any=false;
    cards.forEach(function(c){var t=c.getAttribute('data-s')||c.textContent.toLowerCase();var m=!q||t.indexOf(q)>-1;c.style.display=m?'':'none';if(m)any=true;});
    var curRegion=null,regionVis=false,curCountry=null;
    [].forEach.call(wrap.children,function(el){
      if(el.tagName==='H2'){if(curRegion)curRegion.style.display=regionVis?'':'none';curRegion=el;regionVis=false;curCountry=null;}
      else if(el.classList.contains('ctry-h')){curCountry=el;}
      else if(el.classList.contains('sch-grid')){
        var vis=[].some.call(el.querySelectorAll('.sch-card'),function(c){return c.style.display!=='none';});
        el.style.display=vis?'':'none';
        if(curCountry)curCountry.style.display=vis?'':'none';
        if(vis)regionVis=true;
      }
    });
    if(curRegion)curRegion.style.display=regionVis?'':'none';
    if(none){none.hidden=!(q&&!any);if(q&&!any)none.querySelector('span').textContent=inp.value.trim();}
  }
  inp.addEventListener('input',run);
  clr.addEventListener('click',function(){inp.value='';inp.focus();run();});
})();
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
