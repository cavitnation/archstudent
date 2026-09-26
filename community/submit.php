<?php
require_once dirname(__DIR__) . '/_private.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /community/'); exit; }
function clean_input(string $key, int $max): string {
    $s = $_POST[$key] ?? '';
    if (!is_string($s)) return '';
    return mb_substr(trim(preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', strip_tags($s))), 0, $max);
}
$name = clean_input('name', 40); $school = clean_input('school', 60); $message = clean_input('message', 600);
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$bad = !empty($_POST['website']) || mb_strlen($message) < 3
    || preg_match('~https?://|www\.|\[url~i', $message . $name . $school)
    || preg_match('~\b(viagra|casino|crypto|loan|porn|escort|seo services)\b~i', $message);
$saved = false;
if (!$bad) {
    try {
        as_update_records(as_data_file('community.json'), function (array &$list) use ($name, $school, $message, $ip, &$saved): void {
            foreach ($list as $record) {
                if (($record['ip'] ?? '') === $ip && time() - strtotime($record['ts'] ?? '@0') < 45) return;
            }
            $list[] = ['id' => bin2hex(random_bytes(12)), 'name' => $name, 'school' => $school,
                'message' => $message, 'ts' => date('c'), 'ip' => $ip, 'status' => 'pending'];
            $saved = true;
        });
    } catch (Throwable $e) { error_log('ArchStudent community write failed.'); http_response_code(503); exit('Unable to save your message. Please try again later.'); }
}
if ($saved) {
    @mail('info@archstudent.com', 'ArchStudent: message awaiting review',
        "A student-wall message is waiting. Sign in to review it:\nhttps://archstudent.com/community/manage.php\n",
        "From: ArchStudent <info@archstudent.com>\r\n", '-f info@archstudent.com');
}
header('Location: /community/?sent=1', true, 303);
