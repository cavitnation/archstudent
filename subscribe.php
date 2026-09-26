<?php
/* Newsletter signup endpoint. Stores emails outside the document root. */
$BASE = 'https://archstudent.com';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /'); exit; }

$email = is_string($_POST['email'] ?? null) ? trim($_POST['email']) : '';
$hp    = is_string($_POST['website'] ?? null) ? trim($_POST['website']) : 'invalid';   // honeypot: bots fill this
$ok = ($hp === '' && filter_var($email, FILTER_VALIDATE_EMAIL));

if ($ok) {
  $new = false;
  require_once __DIR__ . '/_private.php';
  try {
    as_update_records(as_data_file('subscribers.json'), function (array &$list) use ($email, &$new): void {
      $emails = array_map('strtolower', array_column($list, 'email'));
      if (!in_array(strtolower($email), $emails, true)) {
        $list[] = ['email'=>$email, 'ts'=>date('c'), 'ip'=>($_SERVER['REMOTE_ADDR'] ?? '')];
        $new = true;
      }
    });
  } catch (Throwable $e) { $new = false; $ok = false; http_response_code(503); error_log('ArchStudent subscriber storage unavailable.'); }
  if ($new) {
    $from = 'ArchStudent <info@archstudent.com>';
    $dash = "\xE2\x80\x94"; // em dash (UTF-8)

    // Plain-text part (fallback)
    $text = "Hi,\n\n"
          . "Thanks for subscribing to ArchStudent {$dash} the free process school for architecture students.\n\n"
          . "We'll email you when we add new guides, tutorials, standards and free downloads. No spam, and you can unsubscribe any time by replying to this email.\n\n"
          . "A few good places to start:\n"
          . "  - Free resources & downloads: https://archstudent.com/resources/\n"
          . "  - The design process, step by step: https://archstudent.com/process/\n"
          . "  - Standards & dimensions: https://archstudent.com/standards/\n\n"
          . "See you in your inbox,\nThe ArchStudent team\nhttps://archstudent.com";

    // HTML part (branded template)
    $html = '<!doctype html><html><body style="margin:0;padding:0;background:#f4f1ec;">'
      . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f4f1ec;padding:28px 12px;">'
      . '<tr><td align="center">'
      . '<table role="presentation" width="560" cellpadding="0" cellspacing="0" style="max-width:560px;width:100%;background:#ffffff;border:1px solid #e7e2da;border-radius:14px;overflow:hidden;font-family:-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;">'
      // header
      . '<tr><td style="background:#1f2b33;padding:22px 30px;">'
      . '<span style="font-family:Georgia,serif;font-size:22px;font-weight:700;color:#ffffff;">Arch<span style="color:#d9673f;">Student</span></span>'
      . '</td></tr>'
      . '<tr><td style="height:4px;background:#b8492e;"></td></tr>'
      // body
      . '<tr><td style="padding:32px 30px 8px;">'
      . '<h1 style="margin:0 0 6px;font-size:22px;color:#1a1a1a;">You&rsquo;re on the list &#127881;</h1>'
      . '<p style="margin:14px 0;font-size:15px;line-height:1.6;color:#3a3a3a;">Thanks for subscribing to <strong>ArchStudent</strong> '.$dash.' the free learning resource that teaches architecture students how to <em>design</em>, not just what to copy.</p>'
      . '<p style="margin:14px 0;font-size:15px;line-height:1.6;color:#3a3a3a;">We&rsquo;ll drop you a note when we publish new guides, tutorials, standards and free downloads. No spam, and you can unsubscribe any time by just replying to this email.</p>'
      // CTA
      . '<table role="presentation" cellpadding="0" cellspacing="0" style="margin:22px 0 10px;"><tr>'
      . '<td style="border-radius:999px;background:#b8492e;"><a href="https://archstudent.com/resources/" style="display:inline-block;padding:13px 26px;font-size:15px;font-weight:700;color:#ffffff;text-decoration:none;border-radius:999px;">Grab some free resources &rarr;</a></td>'
      . '</tr></table>'
      . '</td></tr>'
      // quick links
      . '<tr><td style="padding:6px 30px 26px;">'
      . '<p style="margin:18px 0 8px;font-size:12px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:#8a8378;">Good places to start</p>'
      . '<p style="margin:6px 0;font-size:15px;line-height:1.5;"><a href="https://archstudent.com/process/" style="color:#8f351f;text-decoration:none;">The design process, step by step</a></p>'
      . '<p style="margin:6px 0;font-size:15px;line-height:1.5;"><a href="https://archstudent.com/standards/" style="color:#8f351f;text-decoration:none;">Standards &amp; dimensions</a></p>'
      . '<p style="margin:6px 0;font-size:15px;line-height:1.5;"><a href="https://archstudent.com/tutorials/" style="color:#8f351f;text-decoration:none;">Software tutorials (Revit, Rhino, SketchUp&hellip;)</a></p>'
      . '</td></tr>'
      // footer
      . '<tr><td style="padding:20px 30px;background:#faf8f4;border-top:1px solid #eee7dd;">'
      . '<p style="margin:0;font-size:12px;line-height:1.5;color:#9a9488;">You&rsquo;re receiving this because you subscribed at archstudent.com. Reply &ldquo;unsubscribe&rdquo; to stop. &copy; '.date('Y').' ArchStudent &middot; made for architecture students, worldwide.</p>'
      . '</td></tr>'
      . '</table></td></tr></table></body></html>';

    // Multipart/alternative
    $b = 'ascb_'.bin2hex(random_bytes(8));
    $hdr = "From: $from\r\nReply-To: info@archstudent.com\r\nMIME-Version: 1.0\r\n"
         . "Content-Type: multipart/alternative; boundary=\"$b\"\r\n";
    $body = "--$b\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n$text\r\n\r\n"
          . "--$b\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n$html\r\n\r\n"
          . "--$b--";
    @mail($email, 'Welcome to ArchStudent', $body, $hdr, '-f info@archstudent.com');
    @mail('info@archstudent.com', 'New ArchStudent subscriber', "New subscriber: $email\nWhen: ".date('c')."\nIP: ".($_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['REMOTE_ADDR'] ?? ''), "From: $from\r\n", '-f info@archstudent.com');
  }
}

$PAGE_TITLE = ($ok?'You\'re subscribed':'Subscription').' | ArchStudent';
$PAGE_DESC  = 'Newsletter signup confirmation for ArchStudent.';
$CANONICAL  = '/subscribe/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose" style="text-align:center;padding:50px 0">
  <?php if($ok): ?>
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" style="margin:0 auto 6px;display:block" aria-hidden="true">
      <circle cx="30" cy="30" r="28" fill="none" stroke="#b4472e" stroke-width="2.5" opacity="0.35"/>
      <path d="M19 30.5 L26.5 38 L41.5 22.5" fill="none" stroke="#b4472e" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <h1>You're on the list</h1>
    <p class="lead muted" style="margin:0 auto">Thanks for subscribing. We'll email you when new guides, tutorials and free downloads land — no spam, unsubscribe any time.</p>
    <div class="actions" style="justify-content:center;margin-top:22px"><a class="btn primary" href="/resources/">Grab some free resources</a></div>
  <?php else: ?>
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" style="margin:0 auto 6px;display:block" aria-hidden="true">
      <circle cx="30" cy="30" r="28" fill="none" stroke="#8894a6" stroke-width="2.5" opacity="0.35"/>
      <path d="M30 17 V33" stroke="#8894a6" stroke-width="3.5" stroke-linecap="round"/>
      <circle cx="30" cy="41.5" r="2.2" fill="#8894a6"/>
    </svg>
    <h1>Hmm, that didn't work</h1>
    <p class="lead muted" style="margin:0 auto">Please check the email address and try again.</p>
    <div class="actions" style="justify-content:center;margin-top:22px"><a class="btn ghost" href="/">Back home</a></div>
  <?php endif; ?>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
