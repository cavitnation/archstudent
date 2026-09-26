<?php
$PAGE_TITLE = 'Student Wall — feedback & shout-outs | ArchStudent';
$PAGE_DESC  = 'Leave feedback, a tip, or a shout-out for fellow architecture students. A friendly community wall — tell us what helped, what you want next, or just say hi.';
$CANONICAL  = '/community/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

require_once dirname(__DIR__) . '/_private.php';
try { $all = as_read_records(as_data_file('community.json')); }
catch (Throwable $e) { $all = []; error_log('ArchStudent community storage unavailable.'); }
$approved = array_values(array_filter($all, fn($c)=>($c['status'] ?? '')==='approved'));
usort($approved, fn($a,$b)=>strcmp($b['ts'] ?? '', $a['ts'] ?? ''));
$sent = isset($_GET['sent']);
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
?>
<style>
  .cw-form{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:22px;margin:6px 0 8px}
  .cw-form .row{display:flex;gap:12px;flex-wrap:wrap}
  .cw-form .row>div{flex:1;min-width:180px}
  .cw-form label{display:block;font-size:.82rem;font-weight:600;color:var(--ink-soft);margin:0 0 5px}
  .cw-form input,.cw-form textarea{width:100%;box-sizing:border-box;border:1px solid var(--line);border-radius:10px;
    padding:11px 13px;font:inherit;font-size:.95rem;background:#fdfdfc}
  .cw-form textarea{min-height:110px;resize:vertical}
  .cw-form .hp{position:absolute;left:-9999px}
  .cw-form button{background:var(--accent);color:#fff;border:0;border-radius:999px;
    padding:12px 26px;font-size:.95rem;font-weight:700;cursor:pointer;white-space:nowrap}
  .cw-form button:hover{background:var(--accent-ink)}
  .cw-actions{display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-top:16px}
  .cw-actions .hint{font-size:.8rem;color:var(--ink-soft)}
  @media(max-width:520px){.cw-actions{flex-direction:column;align-items:stretch}
    .cw-form button{width:100%}.cw-actions .hint{text-align:center}}
  .cw-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:14px;margin:16px 0}
  .cw-note{background:#fff;border:1px solid var(--line);border-radius:14px;padding:16px 18px;display:flex;flex-direction:column}
  .cw-note .msg{color:var(--ink);font-size:.98rem;line-height:1.55}
  .cw-note .who{margin-top:12px;font-size:.8rem;color:var(--ink-soft)}
  .cw-note .who b{color:var(--ink)}
  .cw-empty{color:var(--ink-soft)}
</style>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › Student wall</p>
  <h1>Student wall</h1>
  <p class="lead muted" style="max-width:720px">Feedback, a tip that helped you, a request for what to cover next, or just a hello from your studio — this wall is for architecture students, everywhere. Signed or anonymous, all welcome.</p>

  <?php if ($sent): ?>
    <div class="callout"><strong>Thanks — got it!</strong> Your message is in the queue and will appear on the wall once we've had a quick look (we moderate to keep out spam).</div>
  <?php endif; ?>

  <form class="cw-form" method="post" action="/community/submit.php">
    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
    <div class="row">
      <div><label for="name">Name <span style="font-weight:400">(optional)</span></label><input id="name" name="name" maxlength="40" placeholder="Your name — or stay anonymous"></div>
      <div><label for="school">School / city <span style="font-weight:400">(optional)</span></label><input id="school" name="school" maxlength="60" placeholder="Your school or city"></div>
    </div>
    <div style="margin-top:12px"><label for="message">Your message</label><textarea id="message" name="message" maxlength="600" required placeholder="What helped, what you'd like us to add next, or just say hi…"></textarea></div>
    <div class="cw-actions">
      <button type="submit">Post to the wall</button>
      <span class="hint">✓ Reviewed before it appears &nbsp;·&nbsp; please don't include links</span>
    </div>
  </form>

  <h2 style="margin-top:30px">From the community<?php if($approved): ?> <span class="muted" style="font-size:1rem;font-weight:400">· <?= count($approved) ?></span><?php endif; ?></h2>
  <?php if (!$approved): ?>
    <p class="cw-empty">No messages on the wall yet — be the first to leave one. 👋</p>
  <?php else: ?>
    <div class="cw-grid">
      <?php foreach ($approved as $c): ?>
        <div class="cw-note">
          <div class="msg"><?= nl2br(e($c['message'] ?? '')) ?></div>
          <div class="who">— <b><?= $c['name'] ? e($c['name']) : 'Anonymous' ?></b><?php if(!empty($c['school'])): ?>, <?= e($c['school']) ?><?php endif; ?> · <?= e(date('j M Y', strtotime($c['ts'] ?? 'now'))) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <div class="callout warn" style="margin-top:24px">Be kind and keep it about architecture &amp; studying. We remove anything abusive, off-topic or spammy. By posting you agree it can be shown publicly on this page.</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
