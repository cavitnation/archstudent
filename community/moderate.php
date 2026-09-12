<?php
/* One-click moderation from the notification email: approve or delete a
   pending community message. Secured by the per-message random token. */
$id  = $_GET['id'] ?? '';
$tok = $_GET['t']  ?? '';
$do  = $_GET['do'] ?? '';
$f   = $_SERVER['DOCUMENT_ROOT'].'/data/community.json';

$result = 'Not found or link expired.';
if ($id && $tok && in_array($do, ['approve','delete'], true) && is_file($f)) {
  $fp = fopen($f, 'c+');
  if ($fp) {
    flock($fp, LOCK_EX);
    $list = json_decode(stream_get_contents($fp), true) ?: [];
    $changed = false;
    foreach ($list as $k => $c) {
      if (($c['id'] ?? '') === $id && hash_equals((string)($c['token'] ?? ''), (string)$tok)) {
        if ($do === 'approve') { $list[$k]['status'] = 'approved'; $result = 'Approved — it is now live on the wall.'; }
        else { array_splice($list, $k, 1); $result = 'Deleted — it will not appear.'; }
        $changed = true; break;
      }
    }
    if ($changed) { ftruncate($fp, 0); rewind($fp); fwrite($fp, json_encode($list, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE)); }
    flock($fp, LOCK_UN); fclose($fp);
  }
}
$PAGE_TITLE = 'Moderate — Student wall | ArchStudent';
$PAGE_DESC  = 'Comment moderation.';
$CANONICAL  = '/community/moderate.php';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose" style="text-align:center;padding:50px 0">
  <h1>Student wall</h1>
  <p class="lead muted" style="margin:0 auto"><?= htmlspecialchars($result, ENT_QUOTES, 'UTF-8') ?></p>
  <div class="actions" style="justify-content:center;margin-top:22px"><a class="btn primary" href="/community/">Back to the wall</a></div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
