<?php
$PAGE_TITLE = 'FAQ — ArchStudent for architecture students';
$PAGE_DESC  = 'Frequently asked questions about ArchStudent: is it free, who it is for, using the CAD blocks and textures, how accurate the standards are, and more.';
$CANONICAL  = '/faq/';
$FAQ = [
  ['Is ArchStudent free?','Yes. Every page, guide, tutorial and download is completely free, with no account required. We may add optional premium packs later, but the core resource stays free.'],
  ['Who is ArchStudent for?','Architecture students at any stage, from first year to thesis — plus anyone learning architectural design, drawing and software. The focus is on teaching the design process and giving practical reference material.'],
  ['Can I use the CAD blocks, textures and cutout people in my projects?','Yes — they are free to use in student and professional work, including commercial projects, with no attribution required. You just can\'t resell or redistribute the files themselves as a competing library.'],
  ['Which country do the standards and dimensions apply to?','Our dimension guides reflect widely-used general practice and UK Approved Documents as a starting point. Requirements vary by country and building type, so always confirm against the building regulations that apply to your project.'],
  ['How accurate is the information?','We aim for accurate, well-established figures and clearly label everything as general reference. It is guidance for learning and early design — not a substitute for the official codes or a qualified professional.'],
  ['How often is the world news section updated?','The news feed refreshes automatically through the day, pulling the latest architecture stories from leading publications and grouping them by country and region.'],
  ['What software tutorials do you cover?','Revit, AutoCAD, SketchUp, Rhino + Grasshopper, Lumion/Enscape and Photoshop for architects — practical workflows aimed at studio deadlines rather than long certification courses.'],
  ['Can I request a tutorial, guide or resource?','Absolutely. Email info@archstudent.com with what you need — student requests directly shape what we build next.'],
  ['What is the student wall?','The student wall is a friendly community page where you can leave feedback, a tip, a request for what to cover next, or just say hi — signed or anonymous. Messages are reviewed before they appear, to keep out spam. Visit archstudent.com/community to post.'],
  ['How do I find architecture schools by country?','Our schools directory lists 260+ public and leading architecture schools across 70+ countries, each with a campus photo, a one-line description and a link to its official site. Use the country index at the top to jump straight to a country.'],
  ['Can I submit my thesis or portfolio to the showcase?','Yes — if your thesis or final-year portfolio is publicly viewable online (for example on Issuu), email us the link and your school, and we may add it to the thesis showcase so other students can learn from it.'],
  ['Do you cover schools and standards outside the UK?','The schools directory and news are global. Dimension guides use UK Approved Documents and common practice as a clear starting point, but the principles travel — always confirm the exact figures against the code for your own country.'],
  ['Is my email or message safe?','We only store what you deliberately submit (a newsletter email, or a wall message), never sell your data, and let you remove it any time. See our privacy policy for the full detail of what we keep and why.'],
  ['How can I support or contribute to ArchStudent?','The most useful things are free: tell a classmate, request the topics you want, and leave feedback on the student wall. If you spot an error on any page, email us — we fix things quickly.'],
];
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div class="wrap prose">
  <p class="breadcrumb"><a href="/">Home</a> › FAQ</p>
  <h1>Frequently asked questions</h1>
  <p class="lead muted">Everything students ask about using ArchStudent.</p>
  <?php foreach($FAQ as [$q,$a]): ?>
    <h2><?= htmlspecialchars($q) ?></h2>
    <p><?= htmlspecialchars($a) ?></p>
  <?php endforeach; ?>
  <div class="callout">Still stuck? Email <a href="mailto:info@archstudent.com">info@archstudent.com</a> — we're happy to help.</div>
</div>
<script type="application/ld+json">
<?= json_encode([
  '@context'=>'https://schema.org','@type'=>'FAQPage',
  'mainEntity'=>array_map(fn($f)=>[
    '@type'=>'Question','name'=>$f[0],
    'acceptedAnswer'=>['@type'=>'Answer','text'=>$f[1]]], $FAQ)
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?>
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
