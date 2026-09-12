<?php
/* Community wall submission handler. Saves comments as 'pending' and emails
   info@archstudent.com one-click approve / delete links. */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /community/'); exit; }

$name    = trim($_POST['name'] ?? '');
$school  = trim($_POST['school'] ?? '');
$message = trim($_POST['message'] ?? '');
$hp      = trim($_POST['website'] ?? '');   // honeypot
$ip      = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? ($_SERVER['REMOTE_ADDR'] ?? '');

function clean($s, $max){ $s = strip_tags($s); $s = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F]/', '', $s); return mb_substr(trim($s), 0, $max); }
$name = clean($name, 40); $school = clean($school, 60); $message = clean($message, 600);

// --- validation / spam gates ---
$bad = false;
if ($hp !== '') $bad = true;                                   // honeypot tripped
if (mb_strlen($message) < 3) $bad = true;                       // too short
if (preg_match('~https?://|www\.|\[url~i', $message.' '.$name.' '.$school)) $bad = true; // links = spam
if (preg_match('~\b(viagra|casino|crypto|loan|porn|escort|seo services)\b~i', $message)) $bad = true;

$dir = $_SERVER['DOCUMENT_ROOT'].'/data';
@mkdir($dir, 0775, true);
$f = $dir.'/community.json';

if (!$bad) {
  $fp = fopen($f, 'c+');
  if ($fp) {
    flock($fp, LOCK_EX);
    $raw = stream_get_contents($fp);
    $list = $raw ? (json_decode($raw, true) ?: []) : [];
    // simple rate-limit: ignore if this IP posted within the last 45s
    $now = time(); $recent = false;
    foreach ($list as $c) { if (($c['ip'] ?? '')===$ip && ($now - strtotime($c['ts'] ?? '@0')) < 45) { $recent = true; break; } }
    if (!$recent) {
      $id = bin2hex(random_bytes(6));
      $token = bin2hex(random_bytes(12));
      $list[] = ['id'=>$id,'name'=>$name,'school'=>$school,'message'=>$message,
                 'ts'=>date('c'),'ip'=>$ip,'status'=>'pending','token'=>$token];
      ftruncate($fp, 0); rewind($fp);
      fwrite($fp, json_encode($list, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
      flock($fp, LOCK_UN); fclose($fp);

      // notify moderator with one-click links
      $base = 'https://archstudent.com/community/moderate.php?id='.$id.'&t='.$token;
      $who  = ($name ?: 'Anonymous').($school ? ' ('.$school.')' : '');
      $body = "New student-wall message awaiting review:\n\n"
            . "From: $who\nIP: $ip\n\n\"$message\"\n\n"
            . "APPROVE (publish):  {$base}&do=approve\n"
            . "DELETE (bin it):    {$base}&do=delete\n";
      @mail('info@archstudent.com', 'ArchStudent wall: new message to review',
            $body, "From: ArchStudent <info@archstudent.com>\r\nReply-To: info@archstudent.com\r\n", '-f info@archstudent.com');
    } else { flock($fp, LOCK_UN); fclose($fp); }
  }
}
// Always thank the user (don't reveal spam detection)
header('Location: /community/?sent=1');
exit;
