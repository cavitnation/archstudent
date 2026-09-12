<?php
/* Renders one architect. A per-person stub sets $ARC_COUNTRY + $ARC_PERSON_SLUG then includes this. */
require_once $_SERVER['DOCUMENT_ROOT'].'/architects/_lib.php';

$country = $ARC_COUNTRY ?? '';
$pslug   = $ARC_PERSON_SLUG ?? '';
$cslug   = arch_slug($country);
$list = arcx_by_country()[$country] ?? [];
$A = null;
foreach ($list as $a) { if (arcx_person_slug($a['name']) === $pslug) { $A = $a; break; } }
if (!$A) { http_response_code(404); $PAGE_TITLE='Not found | ArchStudent'; include $_SERVER['DOCUMENT_ROOT'].'/_header.php'; echo '<div class="wrap"><h1>Architect not found</h1><p><a href="/architects/">Back to all architects →</a></p></div>'; include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; exit; }

$iso   = $ARCH_ISO[$country] ?? '';
$flag  = arch_flag($iso);
$life  = arcx_life($A);
$works = arcx_resolve_works($A['works'] ?? []);
$nWithImg = count(array_filter($works, fn($w)=>!empty($w['img'])));
$heroImg = $A['photo'] ?? ''; $heroFace = ($heroImg !== ''); $heroWork = '';
if (!$heroFace) { foreach ($works as $w) { if (!empty($w['img'])) { $heroImg = $w['img']; $heroWork = $w['name']; break; } } }
if (!$heroFace && $heroImg === '' && !empty($A['workphoto'])) { $heroImg = $A['workphoto']; $heroWork = $A['workname'] ?? ''; }
$heroImg = arcx_thumb($heroImg, 560);

$PAGE_TITLE = htmlspecialchars($A['name']).' — '.$country.' Architect, Life & Buildings | ArchStudent';
$PAGE_DESC  = $A['name'].($life?' ('.$life.')':'').' — '.($A['blurb'] ?? ('Famous architect from '.$country.'.')).' Signature works: '.implode(', ', array_slice(array_column($works,'name'),0,4)).'.';
$CANONICAL  = '/architects/'.$cslug.'/'.$pslug.'/';
if (!empty($A['photo'])) $OG_IMAGE = $A['photo'];
elseif ($nWithImg) { foreach($works as $w){ if(!empty($w['img'])){ $OG_IMAGE=$w['img']; break; } } }
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
arcx_styles();

/* Person structured data */
$__ld = ['@context'=>'https://schema.org','@type'=>'Person','name'=>$A['name'],'jobTitle'=>'Architect','nationality'=>$country];
if (!empty($A['photo'])) $__ld['image'] = $A['photo'];
if (!empty($A['born']))  $__ld['birthDate'] = $A['born'];
if (!empty($A['died']))  $__ld['deathDate'] = $A['died'];
if (!empty($A['wiki']))  $__ld['sameAs'] = $A['wiki'];
if ($works) $__ld['knowsAbout'] = array_values(array_column($works,'name'));
?>
<script type="application/ld+json"><?= json_encode($__ld, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/architects/">Architects</a> › <a href="/architects/<?= $cslug ?>/"><?= $flag ?> <?= htmlspecialchars($country) ?></a> › <?= htmlspecialchars($A['name']) ?></p>

  <div class="arc-hero">
    <div>
      <div class="pf <?= $heroFace ? 'is-face' : 'is-bldg' ?>"<?= $heroImg === '' ? ' style="background:hsl('.arcx_hue($A['name']).' 34% 55%)"' : '' ?>>
        <?php if ($heroImg !== ''): ?>
          <img src="<?= htmlspecialchars($heroImg) ?>" alt="<?= $heroFace ? 'Portrait of '.htmlspecialchars($A['name']) : htmlspecialchars($heroWork) ?>">
        <?php else: ?>
          <span class="mono"><?= htmlspecialchars(arcx_initials($A['name'])) ?></span>
        <?php endif; ?>
      </div>
      <?php if ($heroFace && (!empty($A['credit']) || !empty($A['license']))): ?>
        <p class="cred">Portrait: <?= htmlspecialchars(trim(($A['credit'] ?? '').(!empty($A['credit'])&&!empty($A['license'])?' · ':'').($A['license'] ?? ''))) ?> — Wikimedia Commons</p>
      <?php elseif (!$heroFace && $heroWork): ?>
        <p class="cred">Shown: <?= htmlspecialchars($heroWork) ?><?php if (!empty($A['workcredit']) || !empty($A['worklicense'])): ?> — <?= htmlspecialchars(trim(($A['workcredit'] ?? '').(!empty($A['workcredit'])&&!empty($A['worklicense'])?' · ':'').($A['worklicense'] ?? ''))) ?>, Wikimedia<?php endif; ?>. No free portrait of the architect is available.</p>
      <?php endif; ?>
    </div>
    <div>
      <h1 style="margin-bottom:2px"><?= htmlspecialchars($A['name']) ?></h1>
      <p class="arc-life"><span class="arc-flag"><?= $flag ?></span> <a href="/architects/<?= $cslug ?>/"><?= htmlspecialchars($country) ?></a><?php if($A['city']??''): ?> · <?= htmlspecialchars($A['city']) ?><?php endif; ?><?php if($life): ?> · <?= htmlspecialchars($life) ?><?php endif; ?></p>
      <?php if(!empty($A['blurb'])): ?><p class="arc-lede"><?= htmlspecialchars($A['blurb']) ?></p><?php endif; ?>
      <?php if(!empty($A['wiki'])): ?><p style="margin-top:14px"><a href="<?= htmlspecialchars($A['wiki']) ?>" target="_blank" rel="noopener nofollow">Full biography on Wikipedia ↗</a></p><?php endif; ?>
    </div>
  </div>

  <?php if ($works): ?>
  <div class="arc-works">
    <h2>Signature works</h2>
    <?php $wImg = array_values(array_filter($works, fn($w)=>!empty($w['img'])));
          $wTxt = array_values(array_filter($works, fn($w)=>empty($w['img']))); ?>
    <?php if ($wImg): ?>
    <div class="arc-wgrid">
      <?php foreach ($wImg as $w): $wc = $w['country'] ?: $country; $wcslug = arch_slug($wc); ?>
        <a class="arc-wcard" href="/architecture/<?= $wcslug ?>/" title="<?= htmlspecialchars($w['name']) ?>">
          <span class="wph"><img src="<?= htmlspecialchars(arcx_thumb($w['img'], 420)) ?>" alt="<?= htmlspecialchars($w['name']) ?>" loading="lazy" onerror="this.closest('.arc-wcard').style.display='none'"></span>
          <span class="wb"><b><?= htmlspecialchars($w['name']) ?></b><span><?= htmlspecialchars($wc) ?></span></span>
        </a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($wTxt): ?>
    <div class="arc-wtext">
      <?php foreach ($wTxt as $w): ?><span><?= htmlspecialchars($w['name']) ?></span><?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <div class="related" style="margin-top:34px">
    <h3>More from <?= htmlspecialchars($country) ?></h3>
    <ul>
      <li><a href="/architects/<?= $cslug ?>/">All famous architects of <?= htmlspecialchars($country) ?> →</a></li>
      <li><a href="/architecture/<?= $cslug ?>/">Famous buildings in <?= htmlspecialchars($country) ?> →</a></li>
      <li><a href="/architects/">Great architects of every country →</a></li>
    </ul>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
