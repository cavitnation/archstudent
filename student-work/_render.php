<?php
$SW = include $_SERVER['DOCUMENT_ROOT'].'/student-work/_sources.php';
$slug = $SW_SLUG ?? '';
$d = $SW[$slug] ?? null;
if(!$d){ http_response_code(404); include $_SERVER['DOCUMENT_ROOT'].'/404.php'; exit; }
$country = $d['country'];
$PAGE_TITLE = 'Free architecture theses & portfolios in '.$country.' — open-access archives | ArchStudent';
$PAGE_DESC  = 'Where architecture students in '.$country.' can read and download real theses, final projects and portfolios for free: verified open-access university repositories and national archives.';
$CANONICAL  = '/student-work/'.$slug.'/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
$hasCode = is_dir($_SERVER['DOCUMENT_ROOT'].'/building-codes/'.$slug);
?>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/student-work/">Student Work</a> › <?= htmlspecialchars($country) ?></p>
  <h1>Free architecture student work in <?= htmlspecialchars($country) ?></h1>
  <p class="lead muted" style="max-width:740px">Real theses, final-year projects and dissertations from <?= htmlspecialchars($country) ?>'s architecture schools — free to read and, in most cases, download. These are verified open-access repositories, so you can study how students there structure a thesis, present drawings and argue a concept.</p>

  <div class="grid" style="grid-template-columns:1fr;gap:14px;margin:26px 0 8px;max-width:820px">
    <?php foreach($d['resources'] as $r): ?>
      <a class="card" href="<?= htmlspecialchars($r['url']) ?>" target="_blank" rel="noopener noreferrer" style="display:block">
        <div style="display:flex;justify-content:space-between;gap:12px;align-items:baseline;flex-wrap:wrap">
          <h3 style="margin:0"><?= htmlspecialchars($r['name']) ?> ↗</h3>
          <span class="tag" style="background:#eef1f5;color:#3a4658;border-radius:999px;padding:2px 10px;font-size:12px;white-space:nowrap"><?= htmlspecialchars($r['type']) ?></span>
        </div>
        <p style="margin:8px 0 0;color:#3a4658"><?= htmlspecialchars($r['note']) ?></p>
      </a>
    <?php endforeach; ?>
  </div>

  <?php if($hasCode): ?>
    <p style="margin-top:22px"><a href="/building-codes/<?= $slug ?>/">See the building codes &amp; regulations for <?= htmlspecialchars($country) ?> →</a></p>
  <?php endif; ?>

  <div class="callout warn" style="margin-top:26px"><strong>How to use these.</strong> Access is open, but individual authors may embargo a file or reserve some rights — check each item's licence before reusing drawings or text. Great for seeing real thesis structure, presentation and scope; always credit the author.</div>

  <p style="margin-top:22px"><a href="/student-work/">← All countries</a></p>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
