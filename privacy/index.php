<?php
$PAGE_TITLE = 'Privacy Policy | ArchStudent';
$PAGE_DESC  = 'How ArchStudent handles data: we collect almost nothing, use privacy-friendly infrastructure, never sell your information, and let you remove anything you share.';
$CANONICAL  = '/privacy/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › Privacy</p>
  <h1>Privacy Policy</h1>
  <p class="lead muted">Last updated <?= date('F Y') ?>. In short: you can use almost all of ArchStudent without giving us anything, we only store what you deliberately submit, we never sell your data, and you can ask us to delete it at any time.</p>

  <div class="callout"><strong>The one-line version.</strong> No account needed to read anything or download resources. The only personal data we hold is what you <em>choose</em> to send us — a newsletter email, or a message on the student wall — plus the basic technical logs every website keeps.</div>

  <h2>What we collect, and why</h2>
  <table class="data">
    <tr><th>Data</th><th>When</th><th>Why</th><th>Kept</th></tr>
    <tr><td>Nothing</td><td>Browsing &amp; downloading</td><td>You can read every page and download every resource with no account and no personal data.</td><td>—</td></tr>
    <tr><td>Email address</td><td>If you subscribe</td><td>To send occasional updates about new guides, tutorials and downloads.</td><td>Until you unsubscribe</td></tr>
    <tr><td>Name (optional), school/city (optional), message</td><td>If you post to the <a href="/community/">student wall</a></td><td>To review and, once approved, publish your message publicly on that page.</td><td>Until you ask us to remove it</td></tr>
    <tr><td>IP address (with a wall post or subscribe)</td><td>On submission</td><td>Spam prevention and rate-limiting only — not used to profile you.</td><td>Stored with the record; not shared</td></tr>
    <tr><td>Standard server logs</td><td>Every request</td><td>Security, reliability and abuse prevention, like any website.</td><td>Rotated automatically</td></tr>
  </table>

  <h2>The student wall is public</h2>
  <p>Anything you post to the <a href="/community/">student wall</a> is intended to be shown publicly on that page once we've reviewed it. Please don't include private or sensitive information in a message. Leaving the name field blank posts you as &ldquo;Anonymous&rdquo;. You can ask us to take any message down at any time — just email us with roughly what it said.</p>

  <h2>Email &amp; the newsletter</h2>
  <p>If you subscribe, your address is stored so we can email you. Messages are sent through our email provider's mail servers. Every email can be unsubscribed from by replying, and we don't add you to anything you didn't ask for. We don't share the list with anyone.</p>

  <h2>Cookies &amp; analytics</h2>
  <p>ArchStudent sets <strong>no advertising or cross-site tracking cookies</strong>. We don't build advertising profiles. We may use privacy-friendly, aggregate analytics to see which pages are useful — that measures pages, not people, and doesn't identify you.</p>

  <h2>Third parties we rely on</h2>
  <ul>
    <li><strong>Cloudflare</strong> — CDN, DNS and security; traffic passes through their network, so they process request metadata (e.g. IP) on our behalf.</li>
    <li><strong>Our hosting &amp; email provider</strong> — runs the server and relays the newsletter and notification emails.</li>
    <li><strong>Wikimedia Commons</strong> — the campus photos in the <a href="/schools/">schools directory</a> are shown from Commons; loading them tells Wikimedia your browser requested an image, as with any embedded image.</li>
    <li><strong>News &amp; drawing sources.</strong> Our <a href="/news/">news section</a> shows headlines and short summaries and links out to the original publishers; when you click through you're subject to that site's own privacy policy. Thesis pages may embed documents from Issuu.</li>
  </ul>
  <p>We don't sell, rent or trade your personal data to anyone, ever.</p>

  <h2>Your rights &amp; choices</h2>
  <ul>
    <li><strong>Unsubscribe</strong> any time by replying to a newsletter email.</li>
    <li><strong>Remove a wall message</strong> — email us and we'll delete it.</li>
    <li><strong>Access or delete</strong> any data you've given us — just ask at the address below.</li>
  </ul>

  <h2>Children &amp; general audience</h2>
  <p>ArchStudent is aimed at university-level architecture students and the general public. It isn't directed at children, and we don't knowingly collect data from anyone under the age required by their local law.</p>

  <h2>Changes</h2>
  <p>If this policy changes materially we'll update the date above. Continued use means you accept the current version.</p>

  <h2>Contact</h2>
  <p>Any privacy question, or a deletion request? Email <a href="mailto:info@archstudent.com">info@archstudent.com</a>.</p>

  <div class="related">
    <h2>Related</h2>
    <div class="rgrid">
      <a href="/terms/"><b>Terms of Use →</b><span>How you can use the site &amp; resources</span></a>
      <a href="/faq/"><b>FAQ →</b><span>Common questions answered</span></a>
      <a href="/about/"><b>About →</b><span>Who's behind ArchStudent</span></a>
      <a href="/contact/"><b>Contact →</b><span>Get in touch</span></a>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
