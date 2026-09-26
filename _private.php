<?php
declare(strict_types=1);

// Private runtime data must never be stored in the public checkout.
function as_data_dir(): string {
    $path = getenv('ARCHSTUDENT_DATA_DIR') ?: dirname(__DIR__) . '/archstudent-private';
    if ($path[0] !== '/') throw new RuntimeException('ARCHSTUDENT_DATA_DIR must be absolute.');
    if (!is_dir($path) && !mkdir($path, 0700, true) && !is_dir($path)) throw new RuntimeException('Cannot create private storage.');
    $real = realpath($path);
    $root = realpath(__DIR__);
    if ($real === false || $real === $root || str_starts_with($real, $root . '/')) throw new RuntimeException('Private storage must be outside the document root.');
    $documentRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? __DIR__);
    if ($documentRoot && ($real === $documentRoot || str_starts_with($real, $documentRoot . '/'))) throw new RuntimeException('Private storage must be outside the document root.');
    return $real;
}

function as_data_file(string $name): string {
    if (!in_array($name, ['community.json', 'subscribers.json'], true)) throw new InvalidArgumentException('Unknown data file.');
    $file = as_data_dir() . '/' . $name;
    if (!is_file($file) && is_file(__DIR__ . '/data/' . $name)) throw new RuntimeException('Migrate existing records before enabling writes.');
    return $file;
}

function as_read_records(string $file): array {
    if (!is_file($file)) return [];
    $records = json_decode((string)file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
    if (!is_array($records) || !array_is_list($records)) throw new RuntimeException('Invalid records file.');
    return $records;
}

function as_update_records(string $file, callable $update): void {
    $lock = fopen($file . '.lock', 'c');
    if (!$lock || !flock($lock, LOCK_EX)) throw new RuntimeException('Cannot lock private storage.');
    $tmp = null;
    try {
        $records = as_read_records($file);
        $update($records);
        $json = json_encode(array_values($records), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        $tmp = tempnam(dirname($file), '.records-');
        if (!$tmp || !chmod($tmp, 0600) || file_put_contents($tmp, $json) !== strlen($json) || !rename($tmp, $file)) throw new RuntimeException('Cannot save private records.');
    } finally {
        if ($tmp && is_file($tmp)) unlink($tmp);
        flock($lock, LOCK_UN);
        fclose($lock);
    }
}

function as_start_session(): void {
    if (session_status() === PHP_SESSION_ACTIVE) return;
    ini_set('session.use_strict_mode', '1');
    session_name('archstudent_admin');
    session_set_cookie_params(['httponly' => true, 'secure' => true, 'samesite' => 'Strict', 'path' => '/community/']);
    session_start();
    header('Cache-Control: no-store');
    header('Referrer-Policy: no-referrer');
    header('X-Robots-Tag: noindex, nofollow');
    $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
}

function as_csrf_valid(?string $token): bool {
    return is_string($token) && isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token);
}

function as_admin_authenticated(string $hash): bool {
    return $hash !== '' && ($_SESSION['auth_version'] ?? '') === hash('sha256', $hash)
        && ($_SESSION['auth_until'] ?? 0) > time();
}
