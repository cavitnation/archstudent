<?php
// Legacy token URLs no longer authorize actions. Sign in to the dashboard.
header('Cache-Control: no-store');
header('Referrer-Policy: no-referrer');
header('Location: /community/manage.php', true, 303);
exit;
