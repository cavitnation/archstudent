<?php
$PAGE_TITLE = 'Best free download sites for architecture students — models, CAD, textures, entourage | ArchStudent';
$PAGE_DESC  = 'A curated, verified directory of the best free download sites for architecture students: 3D models, Revit/BIM families, CAD blocks, PBR textures, HDRIs, cutout people, fonts and portfolio mockups — with licence noted for each.';
$CANONICAL  = '/resources/free-download-sites/';
include $_SERVER['DOCUMENT_ROOT'].'/_header.php';

// access => [label, background, text-color]
$ACC = [
  'cc0'          => ['CC0 · public domain', '#e6f4ea', '#1a7a43'],
  'free'         => ['Free',                '#e8f0fe', '#1a56c4'],
  'free account' => ['Free · sign-up',      '#fdf1e3', '#a9631a'],
  'freemium'     => ['Free tier',           '#eef1f5', '#54607a'],
];

// category => [emoji, blurb, [ [name, url, access, desc], ... ] ]
$CATS = [
 '3D models & BIM / Revit families' => ['🧊','Ready-made 3D objects and BIM components you can drop straight into your model.', [
   ['Poly Haven — Models','https://polyhaven.com/models','cc0','Public-domain furniture, architecture &amp; nature models (Blender/FBX/glTF), no account.'],
   ['Sketchfab','https://sketchfab.com/features/free-3d-models','free account','Huge community library of downloadable Creative-Commons models; free account to download.'],
   ['CGTrader — Free','https://www.cgtrader.com/free-3d-models','free account','Thousands of import-ready free models (FBX/OBJ/BLEND/MAX), many with PBR textures.'],
   ['Free3D','https://free3d.io/','free','Archive3D’s successor — 100,000+ free models, strong on furniture and fixtures.'],
   ['3DSky — Free filter','https://3dsky.org/3dmodels?free=1','freemium','Interior/furniture catalogue for V-Ray/Corona; the Free filter finds genuinely free models.'],
   ['Dimensions.com','https://www.dimensions.com/','freemium','Dimensioned reference database with scaled drawings and downloadable 3D models (free tier).'],
   ['SketchUp 3D Warehouse','https://3dwarehouse.sketchup.com/','free','Trimble’s official library of ready-made SketchUp models, free to download.'],
   ['RevitCity','https://www.revitcity.com/downloads.php','free account','23,000+ Revit families organised by CSI division; free with a login.'],
   ['NBS BIM Library','https://source.thenbs.com/bimlibrary','free','Generic and manufacturer BIM objects, all free, with a Revit plug-in.'],
   ['BIMsmith','https://www.bimsmith.com/','free account','Free Revit/AutoCAD/SketchUp downloads, plus tools to build wall/floor/roof assemblies.'],
   ['Bimstore','https://www.bimstore.co/','free account','UK library of free manufacturer BIM objects for Revit.'],
   ['Arcat','https://www.arcat.com/content-type/bim','free','Thousands of free Revit (RFA), SketchUp (SKP) and DWG/IFC objects, no registration.'],
 ]],
 'CAD blocks &amp; site data (DWG/DXF)' => ['📐','2D blocks, hatches and real site geometry for your drawings.', [
   ['cad-blocks.net','https://cad-blocks.net','free','5,000+ free DWG blocks — furniture, vegetation, vehicles, people, stairs — no signup.'],
   ['CAD Blocks Download','https://www.cadblocksdownload.com','freemium','20,000+ DWG downloads with a genuine free-blocks section.'],
   ['CADHatch','https://www.cadhatch.com','free','300+ free AutoCAD hatch patterns and 800+ free seamless texture fills.'],
   ['CADMapper','https://cadmapper.com','free','Free 2D city CAD files; site files up to 1 km² for SketchUp/Rhino/AutoCAD with a free signup.'],
 ]],
 'Textures, PBR materials &amp; HDRIs' => ['🧱','Surfaces and lighting for your renders — much of it CC0, so free even commercially.', [
   ['ambientCG','https://ambientcg.com','cc0','Thousands of CC0 PBR textures, decals and HDRIs — free even commercially, no attribution.'],
   ['Poly Haven','https://polyhaven.com','cc0','16k HDRIs plus photoscanned PBR textures (and models), no signup or paywall.'],
   ['cgbookcase','https://www.cgbookcase.com','free','Photoscanned PBR textures with full map sets, plus a free seamless-texture tool.'],
   ['ShareTextures','https://www.sharetextures.com','free','1,700+ copyright-free PBR textures and some furniture models, commercial use OK.'],
   ['3DTextures.me','https://3dtextures.me','cc0','Free seamless CC0 PBR materials for Blender/Unreal/Unity.'],
   ['TextureCan','https://texturecan.com','cc0','650+ free CC0 PBR textures (brick, concrete, wood, metal) plus some 3D models.'],
   ['FreePBR','https://freepbr.com','free','600+ free PBR material sets ready for any renderer.'],
   ['Free Stock Textures','https://freestocktextures.com','free','A browsable free texture library — concrete, wood, metal, abstract.'],
   ['SketchUp Texture Club','https://www.sketchuptextureclub.com','freemium','Free seamless architecture textures and some models; membership adds more.'],
   ['HDRMAPS','https://hdrmaps.com','freemium','Free HDRIs and photogrammetry in the freebies section; most packs paid.'],
 ]],
 'Entourage — cutout people, trees &amp; cars' => ['🚶','Scale figures and props that make renders and collages feel alive.', [
   ['Skalgubbar','https://skalgubbar.se','free','Candid transparent-PNG scale figures for renders and collage; check the read-me licence.'],
   ['Nonscandinavia','http://www.nonscandinavia.com','free','Diverse high-res cut-out people; free for student/educational use (commercial needs permission).'],
   ['Mr. Cutout','https://www.mrcutout.com','free account','People, trees and cars as PNGs, with a free tier of model-released cutouts.'],
   ['VIShopper','https://www.vishopper.com','freemium','Cut-out people and trees for architectural viz, with a rotating set of free images.'],
   ['CleanPNG','https://www.cleanpng.com','free','12M+ transparent PNGs incl. people, trees and cars — check the per-image licence.'],
 ]],
 'Fonts for architects' => ['🔤','Clean, well-made typefaces for boards, portfolios and diagrams.', [
   ['Velvetyne','https://velvetyne.fr','free','40+ libre/open-source typefaces, free even commercially (OFL).'],
   ['The League of Moveable Type','https://www.theleagueofmoveabletype.com','free','Open-source families (Raleway, League Gothic) free for commercial use (OFL).'],
   ['Fontshare','https://www.fontshare.com','free','Quality typefaces from the Indian Type Foundry, free for personal and commercial use.'],
   ['DaFont','https://www.dafont.com','free','100k+ fonts (many free-for-personal) — check each font’s readme before commercial use.'],
 ]],
 'Portfolio mockups &amp; stock photos' => ['🖼️','Present your work and fill your renders with real-world imagery.', [
   ['Mockups-Design','https://mockups-design.com','free','1,500+ studio and thousands of print/device PSD mockups, no registration.'],
   ['LS.Graphics — Free','https://www.ls.graphics/free','freemium','Free device mockups (Figma/PSD) for commercial and personal use, plus a paid library.'],
   ['Freebiesbug','https://freebiesbug.com/psd/mockup/','free','Curated free PSD device and stationery mockups.'],
   ['Pexels','https://www.pexels.com','free','Free high-res stock photos of people, cars and plants under a permissive licence.'],
   ['Unsplash','https://unsplash.com','free','Free high-resolution photos — people, nature, architecture — for commercial use.'],
 ]],
];
$total = 0; foreach ($CATS as $c) { $total += count($c[2]); }
?>
<style>
  .site-card{display:flex;flex-direction:column;gap:6px}
  .site-card .top{display:flex;justify-content:space-between;gap:10px;align-items:baseline}
  .site-card h3{margin:0;font-size:16px}
  .site-card h3 .arr{color:#7a8699;font-weight:400}
  .site-card p{margin:0;color:#3a4658;font-size:13.5px;line-height:1.5}
  .lic{display:inline-block;border-radius:999px;padding:2px 9px;font-size:11px;font-weight:700;white-space:nowrap}
</style>
<div class="wrap">
  <p class="breadcrumb"><a href="/">Home</a> › <a href="/resources/">Resources</a> › Free download sites</p>
  <h1>Best free download sites for architecture students</h1>
  <p class="lead muted" style="max-width:760px">A hand-checked directory of <strong><?= $total ?> sites</strong> where you can download 3D models, BIM/Revit families, CAD blocks, textures, HDRIs, cutout people, fonts and mockups — for free. Each one is tagged with its <strong>licence</strong> so you know what you can use, and where you can use it commercially.</p>

  <?php foreach ($CATS as $name => $cat): [$emoji,$blurb,$items] = $cat; ?>
    <h2 style="margin-top:38px"><?= $emoji.' '.$name ?> <span class="muted" style="font-size:15px;font-weight:400">· <?= count($items) ?></span></h2>
    <p class="muted" style="max-width:700px;margin-top:2px"><?= $blurb ?></p>
    <div class="grid cols-3" style="margin:16px 0 8px">
      <?php foreach ($items as $it): [$n,$u,$a,$d] = $it; [$lbl,$bg,$fg] = $ACC[$a]; ?>
        <a class="card site-card" href="<?= htmlspecialchars($u) ?>" target="_blank" rel="noopener noreferrer">
          <div class="top">
            <h3><?= htmlspecialchars($n) ?> <span class="arr">↗</span></h3>
            <span class="lic" style="background:<?= $bg ?>;color:<?= $fg ?>"><?= $lbl ?></span>
          </div>
          <p><?= $d ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>

  <div class="callout warn" style="margin-top:30px"><strong>Always check the licence.</strong> These are external sites we don’t control. <strong>CC0</strong> is public domain (use freely, even commercially). <strong>Free</strong> often means free for study/personal use — confirm before using anything in paid work, and credit the author where asked. Links and offerings can change.</div>
  <p style="margin-top:18px"><a href="/resources/">← Back to free resources</a> · Prefer ready-made packs? Grab our own <a href="/resources/cad-blocks/">CAD blocks</a>, <a href="/resources/cutout-people/">cutout people</a> and <a href="/resources/textures/">textures</a>.</p>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/_footer.php'; ?>
