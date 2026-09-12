<?php
/* Shared header. Set these before include:
   $PAGE_TITLE, $PAGE_DESC, $CANONICAL (path, e.g. "/standards/"), optional $OG_TYPE */
$SITE_NAME = 'ArchStudent';
$BASE = 'https://archstudent.com';
$PAGE_TITLE = $PAGE_TITLE ?? 'ArchStudent — the process school for architecture students';
$PAGE_DESC  = $PAGE_DESC  ?? 'Frameworks, tutorials, standards and free resources that teach architecture students how to design — not just what to copy.';
$CANONICAL  = $BASE . ($CANONICAL ?? '/');
$OG_TYPE    = $OG_TYPE ?? 'website';
$OG_IMAGE   = $OG_IMAGE ?? '/assets/og-default.png';
$OG_IMAGE_DEFAULT = (strpos($OG_IMAGE, 'http') !== 0);   // page-supplied full URLs (e.g. Wikimedia) pass through
if ($OG_IMAGE_DEFAULT) $OG_IMAGE = $BASE . $OG_IMAGE;
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($PAGE_TITLE) ?></title>
<meta name="description" content="<?= htmlspecialchars($PAGE_DESC) ?>">
<link rel="canonical" href="<?= htmlspecialchars($CANONICAL) ?>">
<meta property="og:site_name" content="ArchStudent">
<meta property="og:type" content="<?= htmlspecialchars($OG_TYPE) ?>">
<meta property="og:title" content="<?= htmlspecialchars($PAGE_TITLE) ?>">
<meta property="og:description" content="<?= htmlspecialchars($PAGE_DESC) ?>">
<meta property="og:url" content="<?= htmlspecialchars($CANONICAL) ?>">
<meta property="og:image" content="<?= htmlspecialchars($OG_IMAGE) ?>">
<?php if ($OG_IMAGE_DEFAULT): ?>
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?= htmlspecialchars($OG_IMAGE) ?>">
<?php
$__p = trim(parse_url($CANONICAL, PHP_URL_PATH), '/');
if ($__p === '') {
  echo '<script type="application/ld+json">'.json_encode([
    '@context'=>'https://schema.org','@type'=>'Organization','name'=>'ArchStudent',
    'url'=>$BASE.'/','logo'=>$BASE.'/assets/og-default.png',
    'description'=>'A free learning resource that teaches architecture students how to design — frameworks, standards, software tutorials, world news and downloadable resources.'
  ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>'."\n";
  echo '<script type="application/ld+json">'.json_encode([
    '@context'=>'https://schema.org','@type'=>'WebSite','name'=>'ArchStudent','url'=>$BASE.'/'
  ], JSON_UNESCAPED_SLASHES).'</script>'."\n";
} else {
  $__seg = explode('/', $__p); $__acc=$BASE; $__pos=2;
  $__items=[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>$BASE.'/']];
  foreach($__seg as $__s){ $__acc.='/'.$__s;
    $__items[]=['@type'=>'ListItem','position'=>$__pos++,
      'name'=>ucwords(str_replace('-',' ',$__s)),'item'=>$__acc.'/']; }
  echo '<script type="application/ld+json">'.json_encode([
    '@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>$__items
  ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE).'</script>'."\n";
}
?>
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%231a1a1a'/><text x='50' y='70' font-size='60' font-family='Georgia,serif' fill='%23b8492e' text-anchor='middle'>A</text></svg>">
<link rel="stylesheet" href="/assets/style.css?v=11">
<style>
  .nav .links{margin-left:auto;gap:24px}
  .nav-right{display:flex;align-items:center;gap:14px}
  .navburger{display:inline-flex;flex-direction:column;justify-content:center;align-items:center;gap:5px;
    width:44px;height:44px;background:none;border:1px solid var(--line);border-radius:11px;cursor:pointer;padding:0;
    transition:background .2s,border-color .2s}
  .navburger:hover{background:#fff;border-color:#d9cebf}
  .navburger span{display:block;width:20px;height:2px;background:var(--ink);border-radius:2px}
  @media(max-width:860px){
    .nav .links{display:none}
    .nav-right{margin-left:auto}
  }
  @media(max-width:430px){ .nav-right .cta{display:none} }
</style>
</head>
<body>
<header class="site">
  <div class="wrap nav">
    <a class="brand" href="/">Arch<b>Student</b></a>
    <nav class="links" id="nav-links">
      <a href="/process/">Process</a>
      <a href="/standards/">Standards</a>
      <a href="/tutorials/">Tutorials</a>
      <a href="/architecture/">Architecture</a>
    </nav>
    <div class="nav-right">
      <a class="cta" href="/resources/">Get resources</a>
      <button class="navburger" data-drawer-open aria-label="Open menu" aria-controls="drawer" aria-haspopup="true"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>
<main>
