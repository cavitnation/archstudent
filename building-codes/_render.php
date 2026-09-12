<?php
/* Renders one country's building-code page. Expects $CODE_SLUG set by the stub. */
$CODES = include $_SERVER['DOCUMENT_ROOT'].'/building-codes/_codes.php';
$c = $CODES[$CODE_SLUG ?? ''] ?? null;
if (!$c) { include $_SERVER['DOCUMENT_ROOT'].'/404.php'; exit; }

$PAGE_TITLE = 'Building Codes & Regulations in '.$c['country'].' | ArchStudent';
$PAGE_DESC  = 'The official building regulations of '.$c['country'].' — code name, governing authority, how it applies and the official source. Reference for architecture students.';
$CANONICAL  = '/building-codes/'.$c['slug'].'/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

function host($u){ $h=parse_url($u,PHP_URL_HOST); return $h?:$u; }
// same-region siblings for cross-links
$sib=[]; foreach($CODES as $x){ if($x['region']===$c['region'] && $x['slug']!==$c['slug']) $sib[]=$x; }
usort($sib, fn($a,$b)=>strcmp($a['country'],$b['country']));
$rows = [
  ['Building code', $c['code_name']],
  ['Latest edition', $c['current_edition'] ?? ''],
  ['Governing authority', $c['authority']],
  ['How it applies', $c['adoption']],
  ['Accessibility', $c['accessibility']],
  ['Fire safety', $c['fire']],
  ['Seismic design', $c['seismic']],
];
?>
<div class="wrap prose" style="max-width:var(--wrap)">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/building-codes/">Building Codes</a> › <?= htmlspecialchars($c['country']) ?></p>
  <h1>Building codes &amp; regulations in <?= htmlspecialchars($c['country']) ?></h1>
  <p class="lead muted" style="max-width:820px"><?= htmlspecialchars($c['summary']) ?></p>

  <table class="data">
    <?php foreach($rows as [$k,$v]): if(trim((string)$v)==='') continue; ?>
      <tr><th style="width:34%"><?= htmlspecialchars($k) ?></th><td><?= htmlspecialchars($v) ?></td></tr>
    <?php endforeach; ?>
    <?php if(!empty($c['official_url'])): ?>
      <tr><th>Official source</th><td><a href="<?= htmlspecialchars($c['official_url']) ?>" target="_blank" rel="noopener nofollow"><?= htmlspecialchars(host($c['official_url'])) ?> ↗</a></td></tr>
    <?php endif; ?>
  </table>

  <?php if(!empty($c['key_docs'])): ?>
    <h2>Key documents &amp; standards</h2>
    <ul><?php foreach($c['key_docs'] as $d): ?><li><?= htmlspecialchars($d) ?></li><?php endforeach; ?></ul>
  <?php endif; ?>

  <div class="callout warn"><strong>Always verify at the official source.</strong> Codes are updated regularly and often adopted or amended at regional/state level. This page is a starting-point overview for students — confirm the current requirements for your project on the official site above.</div>

  <?php if($sib): ?>
    <h2>Other countries in <?= htmlspecialchars($c['region']) ?></h2>
    <div class="chips">
      <?php foreach($sib as $s): ?><a class="chip" href="/building-codes/<?= $s['slug'] ?>/"><?= htmlspecialchars($s['country']) ?></a><?php endforeach; ?>
    </div>
  <?php endif; ?>
  <p style="margin-top:20px"><a href="/building-codes/">← All countries</a></p>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
