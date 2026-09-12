<?php
$PAGE_TITLE = 'Building Codes & Regulations by Country — worldwide index | ArchStudent';
$PAGE_DESC  = 'Building codes and regulations by country: the official code name, governing authority and official source for 40+ countries — a reference for architecture students worldwide.';
$CANONICAL  = '/building-codes/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
$CODES = include $_SERVER['DOCUMENT_ROOT'].'/building-codes/_codes.php';
$byreg = [];
foreach($CODES as $c){ $byreg[$c['region']][] = $c; }
$order = ['Europe','Asia','Middle East','Africa','Americas','Oceania'];
$flag = ['Europe'=>'🇪🇺','Asia'=>'🌏','Middle East'=>'🕌','Africa'=>'🌍','Americas'=>'🌎','Oceania'=>'🏝️'];
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Building Codes</p>
  <h1>Building codes &amp; regulations by country</h1>
  <p class="lead muted" style="max-width:730px">Every country sets its own building regulations — so the standards you design to change depending on where you build. This growing index gives the official code name, the governing authority and the official source for <strong><?= count($CODES) ?> countries</strong>, so you know exactly where to look.</p>

  <?php foreach($order as $reg): if(empty($byreg[$reg])) continue; $list=$byreg[$reg]; usort($list, fn($a,$b)=>strcmp($a['country'],$b['country'])); ?>
    <h2 style="margin-top:34px"><?= ($flag[$reg]??'').' '.htmlspecialchars($reg) ?></h2>
    <div class="grid cols-3" style="margin:16px 0 8px">
      <?php foreach($list as $c): ?>
        <a class="card" href="/building-codes/<?= $c['slug'] ?>/">
          <h3><?= htmlspecialchars($c['country']) ?></h3>
          <p><?= htmlspecialchars(mb_strimwidth($c['code_name'], 0, 90, '…')) ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>

  <div class="callout warn" style="margin-top:30px"><strong>Reference index, not legal advice.</strong> Building codes are updated regularly and are often adopted or amended at state, provincial or municipal level. Always confirm the current requirements for your project on the official source linked on each country page.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
