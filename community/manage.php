<?php
declare(strict_types=1);
require_once dirname(__DIR__) . '/_private.php';
as_start_session();
$hash = getenv('ARCHSTUDENT_ADMIN_PASSWORD_HASH') ?: '';
if ($hash === '' || (password_get_info($hash)['algoName'] ?? 'unknown') === 'unknown') {
    http_response_code(503); exit('Moderation is unavailable until an administrator configures access.');
}
function e($s): string { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!as_csrf_valid(is_string($_POST['csrf'] ?? null) ? $_POST['csrf'] : null)) { http_response_code(403); exit('Invalid request.'); }
    $action = $_POST['action'] ?? '';
    if ($action === 'login') {
        if (($_SESSION['login_after'] ?? 0) > time()) { http_response_code(429); exit('Please wait before trying again.'); }
        $_SESSION['login_after'] = time() + 3;
        if (is_string($_POST['password'] ?? null) && password_verify($_POST['password'], $hash)) {
            session_regenerate_id(true);
            $_SESSION['auth_version'] = hash('sha256', $hash);
            $_SESSION['auth_until'] = time() + 1200;
            $_SESSION['csrf'] = bin2hex(random_bytes(32));
            header('Location: /community/manage.php', true, 303); exit;
        }
        $message = 'Sign-in failed.';
    } elseif ($action === 'logout') {
        $_SESSION = []; session_destroy(); header('Location: /community/manage.php', true, 303); exit;
    } else {
        if (!as_admin_authenticated($hash)) { http_response_code(403); exit('Sign in first.'); }
        if (!in_array($action, ['approve', 'pending', 'delete'], true) || !is_string($_POST['id'] ?? null)) { http_response_code(400); exit('Invalid action.'); }
        try {
            as_update_records(as_data_file('community.json'), function (array &$records) use ($action): void {
                foreach ($records as $i => $record) {
                    if (($record['id'] ?? '') !== $_POST['id']) continue;
                    if ($action === 'delete') array_splice($records, $i, 1);
                    else { $records[$i]['status'] = $action === 'approve' ? 'approved' : 'pending'; unset($records[$i]['token']); }
                    break;
                }
            });
        } catch (Throwable $e) { error_log('ArchStudent moderation storage failure.'); http_response_code(503); exit('Storage is unavailable.'); }
        header('Location: /community/manage.php', true, 303); exit;
    }
}
$authenticated = as_admin_authenticated($hash);
$records = [];
if ($authenticated) {
    try { $records = as_read_records(as_data_file('community.json')); }
    catch (Throwable $e) { http_response_code(503); exit('Storage is unavailable.'); }
    usort($records, fn($a, $b) => strcmp($b['ts'] ?? '', $a['ts'] ?? ''));
}
?><!doctype html><html lang="en"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Student wall moderation</title>
<style>body{font:16px system-ui;max-width:760px;margin:40px auto;padding:0 20px}article{border:1px solid #ddd;padding:16px;margin:16px 0}form.actions{display:inline}button,input{font:inherit;padding:8px;margin:4px}label{display:block}</style>
<h1>Student wall moderation</h1><p><?= e($message) ?></p>
<?php if (!$authenticated): ?>
<form method="post"><input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>"><input type="hidden" name="action" value="login">
<label>Password <input type="password" name="password" autocomplete="current-password" required></label><button>Sign in</button></form>
<?php else: ?>
<form method="post"><input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>"><button name="action" value="logout">Sign out</button></form>
<?php foreach ($records as $record): ?>
<article><p><?= nl2br(e($record['message'] ?? '')) ?></p><p><?= e($record['name'] ?? 'Anonymous') ?> · <?= e($record['status'] ?? 'pending') ?></p>
<?php foreach (['approve' => 'Approve', 'pending' => 'Unpublish', 'delete' => 'Delete'] as $action => $label): ?>
<form method="post" class="actions"><input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>"><input type="hidden" name="id" value="<?= e($record['id'] ?? '') ?>"><button name="action" value="<?= e($action) ?>"><?= e($label) ?></button></form>
<?php endforeach; ?></article><?php endforeach; ?>
<?php endif; ?></html>
