<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
require_once dirname(__DIR__) . '/_private.php';
// Run against the deployed tree BEFORE updating code that removes tracked data.
if (($argv[1] ?? '') !== '--apply') { fwrite(STDERR, "Back up the deployment privately, stop writes, then run: php scripts/migrate-private-data.php --apply\n"); exit(1); }
foreach (['community.json', 'subscribers.json'] as $name) {
    $source = dirname(__DIR__) . '/data/' . $name;
    $target = as_data_dir() . '/' . $name;
    if (!is_file($source)) continue;
    if (file_exists($target)) throw new RuntimeException('Destination already exists; reconcile manually.');
    $records = as_read_records($source);
    foreach ($records as &$record) unset($record['token']);
    unset($record);
    as_update_records($target, function (array &$out) use ($records): void { $out = $records; });
    if (as_read_records($target) !== $records) throw new RuntimeException('Verification failed; source retained.');
    if (!unlink($source)) throw new RuntimeException('Copy verified; remove the old public file manually.');
    echo $name . ': migrated ' . count($records) . " records; legacy tokens invalidated.\n";
}
