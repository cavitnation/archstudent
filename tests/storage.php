<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
require_once dirname(__DIR__) . '/_private.php';
function check(bool $condition, string $message): void { if (!$condition) throw new RuntimeException($message); }
$dir = sys_get_temp_dir() . '/archstudent-test-' . bin2hex(random_bytes(8));
putenv('ARCHSTUDENT_DATA_DIR=' . $dir);
try {
    $file = as_data_file('community.json');
    check(as_read_records($file) === [], 'Fresh storage must be empty.');
    as_update_records($file, function (array &$records): void { $records[] = ['id' => 'fixture', 'status' => 'pending']; });
    check(as_read_records($file)[0]['id'] === 'fixture', 'Records must survive a read/write round trip.');
    $before = file_get_contents($file);
    try { as_update_records($file, function (array &$records): void { $records = []; throw new RuntimeException('simulated failure'); }); } catch (RuntimeException $e) {}
    check(file_get_contents($file) === $before, 'Failed updates must retain previous records.');
    check((fileperms($file) & 0777) === 0600, 'Records must have private permissions.');
    $_SESSION = ['csrf' => 'fixture', 'auth_until' => time() + 20, 'auth_version' => hash('sha256', 'hash')];
    check(as_csrf_valid('fixture') && !as_csrf_valid('wrong') && !as_csrf_valid(null), 'CSRF validation failed.');
    check(as_admin_authenticated('hash') && !as_admin_authenticated('newhash'), 'Credential changes must invalidate sessions.');
    $_SESSION['auth_until'] = time() - 1;
    check(!as_admin_authenticated('hash'), 'Expired sessions must be rejected.');
    putenv('ARCHSTUDENT_DATA_DIR=' . dirname(__DIR__) . '/data');
    $rejected = false; try { as_data_dir(); } catch (RuntimeException $e) { $rejected = true; }
    check($rejected, 'Web-accessible storage must be rejected.');
    echo "Storage, atomic failure recovery, permissions, CSRF and session expiry passed.\n";
} finally {
    foreach (glob($dir . '/*') ?: [] as $file) unlink($file);
    if (is_dir($dir)) rmdir($dir);
}
