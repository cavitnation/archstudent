<?php
/* Private moderation dashboard for the student wall. Gated by a secret key.
   Lists pending + published messages with one-click approve / delete. */
$KEY = 'p0SXo6yVcaan';
$key = $_GET['key'] ?? ($_POST['key'] ?? '');
if (!hash_equals($KEY, (string)$key)) { http_response_code(404); exit('Not Found'); }

$f = $_SERVER['DOCUMENT_ROOT'].'/data/community.json';
$msg = '';
// handle an action
if (($_GET['do'] ?? '') && ($_GET['id'] ?? '') && is_file($f)) {
  $id = $_GET['id']; $do = $_GET['do'];
  $fp = fopen($f, 'c+');
  if ($fp) { flock($fp, LOCK_EX);
    $list = json_decode(stream_get_contents($fp), true) ?: [];
    foreach ($list as $k => $c) {
      if (($c['id'] ?? '') === $id) {
        if ($do === 'approve') { $list[$k]['status']='approved'; $msg='Approved.'; }
        elseif ($do === 'pending') { $list[$k]['status']='pending'; $msg='Moved back to pending.'; }
        elseif ($do === 'delete') { array_splice($list, $k, 1); $msg='Deleted.'; }
        break;
      }
    }
    ftruncate($fp, 0); rewind($fp); fwrite($fp, json_encode($list, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
    flock($fp, LOCK_UN); fclose($fp);
  }
}
$all = is_file($f) ? (json_decode(file_get_contents($f), true) ?: []) : [];
usort($all, fn($a,$b)=>strcmp($b['ts']??'', $a['ts']??''));
$pending  = array_filter($all, fn($c)=>($c['status']??'')==='pending');
$approved = array_filter($all, fn($c)=>($c['status']??'')==='approved');
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
$L = function($c,$do,$label,$col) use($KEY){ return '<a href="?key='.$KEY.'&id='.e($c['id']).'&do='.$do.'" style="color:'.$col.';font-weight:600;margin-right:14px;font-size:13px">'.$label.'</a>'; };
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Wall moderation</title><meta name="robots" content="noindex,nofollow">
<style>body{font-family:system-ui,-apple-system,Segoe UI,Roboto,sans-serif;max-width:760px;margin:32px auto;padding:0 18px;color:#1f2733}
h1{font-size:22px}h2{font-size:15px;text-transform:uppercase;letter-spacing:.05em;color:#8a8378;margin:28px 0 10px}
.card{border:1px solid #e3e7ee;border-radius:12px;padding:14px 16px;margin:10px 0;background:#fff}
.card .m{font-size:15px;line-height:1.5;white-space:pre-wrap}
.card .who{font-size:12.5px;color:#7a8699;margin:8px 0 10px}
.ok{background:#e6f4ea;border:1px solid #97d4ab;color:#1a7a43;padding:10px 14px;border-radius:8px}
.empty{color:#8a8378}</style></head><body>
<h1>Student wall — moderation</h1>
<?php if($msg): ?><div class="ok"><?=e($msg)?></div><?php endif; ?>

<h2>Pending (<?=count($pending)?>)</h2>
<?php if(!$pending): ?><p class="empty">Nothing waiting. 🎉</p><?php else: foreach($pending as $c): ?>
  <div class="card">
    <div class="m"><?=e($c['message']??'')?></div>
    <div class="who">— <?= $c['name']?e($c['name']):'Anonymous' ?><?= !empty($c['school'])?', '.e($c['school']):'' ?> · <?=e(date('j M Y H:i', strtotime($c['ts']??'now')))?> · IP <?=e($c['ip']??'')?></div>
    <?= $L($c,'approve','✓ Approve','#1a7a43') ?><?= $L($c,'delete','✕ Delete','#b3261e') ?>
  </div>
<?php endforeach; endif; ?>

<h2>Published (<?=count($approved)?>)</h2>
<?php if(!$approved): ?><p class="empty">None yet.</p><?php else: foreach($approved as $c): ?>
  <div class="card">
    <div class="m"><?=e($c['message']??'')?></div>
    <div class="who">— <?= $c['name']?e($c['name']):'Anonymous' ?><?= !empty($c['school'])?', '.e($c['school']):'' ?> · <?=e(date('j M Y', strtotime($c['ts']??'now')))?></div>
    <?= $L($c,'pending','↩ Unpublish','#a9631a') ?><?= $L($c,'delete','✕ Delete','#b3261e') ?>
  </div>
<?php endforeach; endif; ?>
<p style="margin-top:24px"><a href="/community/">← View the public wall</a></p>
</body></html>
