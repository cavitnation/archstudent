<?php
$region  = isset($_GET['region'])  ? trim($_GET['region'])  : '';
$country = isset($_GET['country']) ? trim($_GET['country']) : '';
$PAGE_TITLE = 'World Architecture News — latest from around the globe | ArchStudent';
if ($country) $PAGE_TITLE = htmlspecialchars($country).' Architecture News | ArchStudent';
elseif ($region) $PAGE_TITLE = htmlspecialchars($region).' Architecture News | ArchStudent';
$PAGE_DESC  = 'The latest architecture news from around the world — new buildings, competitions and ideas, aggregated from leading publications and grouped by country and region.';
$CANONICAL  = '/news/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

$file = $_SERVER['DOCUMENT_ROOT'].'/data/news.json';
$data = is_file($file) ? json_decode(file_get_contents($file), true) : null;
$items = $data['items'] ?? [];
$updated = $data['updated'] ?? 0;

$REGIONS = ['Europe','Asia','Middle East','Americas','Africa','Oceania'];
// counts
$rc = array_fill_keys($REGIONS, 0); $cc = [];
foreach ($items as $it){ if($it['region']) $rc[$it['region']]=($rc[$it['region']]??0)+1;
  if($it['country']) $cc[$it['country']]=($cc[$it['country']]??0)+1; }
arsort($cc);

// filter
$show = array_filter($items, function($it) use($region,$country){
  if ($country) return $it['country']===$country;
  if ($region)  return $it['region']===$region;
  return true;
});

function ago($t){ $d=time()-$t; if($d<3600) return max(1,intdiv($d,60)).'m ago';
  if($d<86400) return intdiv($d,3600).'h ago'; return intdiv($d,86400).'d ago'; }
function https($u){ return preg_replace('#^http://#','https://',$u); }
$qs = fn($k,$v)=> '/news/?'.$k.'='.urlencode($v);
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › News<?= $region?' › '.htmlspecialchars($region):'' ?><?= $country?' › '.htmlspecialchars($country):'' ?></p>
  <h1>World architecture news</h1>
  <p class="lead muted" style="max-width:720px">What's happening in architecture around the globe — new buildings, competitions and ideas from every continent, pulled from leading publications and updated through the day. Tap a region or country to filter.</p>

  <div class="chips">
    <a class="chip <?= (!$region&&!$country)?'on':'' ?>" href="/news/">🌍 All</a>
    <?php foreach($REGIONS as $r): if(($rc[$r]??0)<1) continue; ?>
      <a class="chip <?= $region===$r?'on':'' ?>" href="<?= $qs('region',$r) ?>"><?= htmlspecialchars($r) ?> <span class="muted"><?= $rc[$r] ?></span></a>
    <?php endforeach; ?>
  </div>
  <?php $topc = array_slice(array_keys($cc),0,14); if($topc): ?>
  <div class="chips" style="margin-top:-6px">
    <span class="muted small" style="align-self:center">By country:</span>
    <?php foreach($topc as $c): ?>
      <a class="chip <?= $country===$c?'on':'' ?>" href="<?= $qs('country',$c) ?>"><?= htmlspecialchars($c) ?> <span class="muted"><?= $cc[$c] ?></span></a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <?php if(!$items): ?>
    <div class="callout warn" style="margin-top:24px">The news feed is populating now — check back in a few minutes.</div>
  <?php else: ?>
    <p class="small muted" style="margin:6px 0 2px">Showing <?= count($show) ?> stories<?= $updated?' · updated '.ago($updated):'' ?> · headlines link to the original source.</p>
    <div class="news-grid">
      <?php foreach($show as $it): ?>
        <article class="news-card">
          <a class="ph" href="<?= htmlspecialchars($it['link']) ?>" target="_blank" rel="noopener nofollow">
            <img src="<?= htmlspecialchars(!empty($it['img']) ? https($it['img']) : '/assets/news-placeholder.svg') ?>" alt="" loading="lazy" onerror="this.onerror=null;this.src='/assets/news-placeholder.svg'">
          </a>
          <div class="body">
            <span class="src"><?= htmlspecialchars($it['source']) ?></span>
            <h3><a href="<?= htmlspecialchars($it['link']) ?>" target="_blank" rel="noopener nofollow"><?= htmlspecialchars($it['title']) ?></a></h3>
            <?php if(!empty($it['excerpt'])): ?><p class="ex"><?= htmlspecialchars($it['excerpt']) ?></p><?php endif; ?>
            <div class="foot">
              <span><?php if($it['country']): ?><a class="ctry" href="<?= $qs('country',$it['country']) ?>"><?= htmlspecialchars($it['country']) ?></a><?php endif; ?></span>
              <span><?= ago($it['date']) ?></span>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="callout">News is aggregated from leading architecture publications (ArchDaily, Dezeen, Designboom, Architizer and more). Headlines and short summaries link back to the original article on the publisher's site.</div>
  <?php endif; ?>

  <?php if (!$region && !$country): ?>
  <div class="prose" style="max-width:760px;margin-top:40px">
    <h2>About ArchStudent’s architecture news</h2>
    <p>ArchStudent pulls architecture headlines from the world’s leading publications into one fast, ad-free feed, tags each story by country and region, and refreshes it through the day. It’s the quickest way to see what’s being built, debated and awarded right now — without hopping between a dozen different sites.</p>

    <h3>Why students should follow architecture news</h3>
    <p>Keeping an eye on current projects is one of the easiest ways to build the visual library and vocabulary that studio rewards. You’ll start to spot the themes shaping the field — mass timber, adaptive reuse, climate-driven design, AI in the studio — collect precedents for your own projects, and walk into a crit able to place your work in a bigger conversation. Follow the <a href="/architecture/">famous architecture</a> and <a href="/architects/">famous architects</a> pages for the history; follow the news for what’s happening today.</p>

    <h3>Where the news comes from</h3>
    <p>Stories are aggregated from ArchDaily, Dezeen, Designboom, Architizer, Archpaper and Parametric Architecture, among others. We only show a headline and a short summary — the full article always opens on the publisher’s own site, so credit and traffic stay with the original writers. Use the region and country filters above to narrow the feed to the places you care about.</p>
  </div>
  <?php endif; ?>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
