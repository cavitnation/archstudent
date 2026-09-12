</main>
<footer class="site">
  <div class="wrap">

    <div class="foot-top">
      <div>
        <div class="bmark">Arch<span style="color:var(--accent)">Student</span></div>
        <p>Everything for your architecture degree — from your first sketch to qualification. Free, and made for students worldwide.</p>
        <p style="margin-top:10px">✉️ <a href="mailto:info@archstudent.com">info@archstudent.com</a></p>
      </div>
      <div class="acts">
        <a class="p" href="/resources/">Free downloads</a>
        <a class="g" href="/process/">Start with process</a>
      </div>
    </div>

    <div class="foot-news">
      <h4>Get new resources in your inbox</h4>
      <p>Occasional updates when we add guides, tutorials and free downloads. No spam.</p>
      <form action="/subscribe.php" method="post">
        <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="you@university.edu" required aria-label="Email address">
        <button type="submit">Subscribe</button>
      </form>
    </div>

    <div class="cols">
      <div>
        <h4>Design Process</h4>
        <ul>
          <li><a href="/process/">The process, step by step</a></li>
          <li><a href="/process/how-to-read-a-brief/">How to read a brief</a></li>
          <li><a href="/process/site-analysis/">Site analysis</a></li>
          <li><a href="/process/concept-development/">Concept development</a></li>
          <li><a href="/process/precedent-studies/">Precedent studies</a></li>
          <li><a href="/process/architectural-diagramming/">Diagramming</a></li>
        </ul>
      </div>
      <div>
        <h4>Standards</h4>
        <ul>
          <li><a href="/standards/staircase-dimensions/">Staircases</a></li>
          <li><a href="/standards/door-sizes/">Door sizes</a></li>
          <li><a href="/standards/ramp-gradients/">Ramp gradients</a></li>
          <li><a href="/standards/car-parking-dimensions/">Car parking</a></li>
          <li><a href="/standards/kitchen-dimensions/">Kitchens</a></li>
          <li><a href="/building-codes/">Codes by country</a></li>
          <li><a href="/standards/">All standards →</a></li>
        </ul>
      </div>
      <div>
        <h4>Tutorials</h4>
        <ul>
          <li><a href="/tutorials/revit/">Revit</a></li>
          <li><a href="/tutorials/autocad/">AutoCAD</a></li>
          <li><a href="/tutorials/sketchup/">SketchUp</a></li>
          <li><a href="/tutorials/rhino-grasshopper/">Rhino + Grasshopper</a></li>
          <li><a href="/tutorials/lumion-enscape/">Lumion / Enscape</a></li>
          <li><a href="/tutorials/photoshop-for-architects/">Photoshop</a></li>
        </ul>
      </div>
      <div>
        <h4>Guides</h4>
        <ul>
          <li><a href="/guides/how-to-make-an-architecture-portfolio/">Portfolio</a></li>
          <li><a href="/guides/architecture-scales-explained/">Scales explained</a></li>
          <li><a href="/guides/types-of-architectural-drawings/">Types of drawings</a></li>
          <li><a href="/guides/architectural-drawing-conventions/">Drawing conventions</a></li>
          <li><a href="/guides/best-architecture-books/">Best books</a></li>
          <li><a href="/guides/architecture-glossary/">Glossary</a></li>
          <li><a href="/guides/">All guides →</a></li>
        </ul>
      </div>
      <div>
        <h4>Career</h4>
        <ul>
          <li><a href="/career/how-to-become-an-architect/">Become an architect</a></li>
          <li><a href="/career/architecture-internship/">Get an internship</a></li>
          <li><a href="/career/architecture-cv/">CV tips</a></li>
          <li><a href="/career/what-does-an-architect-do/">What architects do</a></li>
          <li><a href="/career/architecture-salaries/">Salaries &amp; path</a></li>
          <li><a href="/career/">All career guides →</a></li>
        </ul>
      </div>
      <div>
        <h4>Explore &amp; more</h4>
        <ul>
          <li><a href="/news/">Architecture news</a></li>
          <li><a href="/architecture/">Famous architecture</a></li>
          <li><a href="/architects/">Famous architects</a></li>
          <li><a href="/schools/">Architecture schools</a></li>
          <li><a href="/student-work/">Thesis showcase</a></li>
          <li><a href="/resources/">Free downloads</a></li>
          <li><a href="/resources/free-download-sites/">Free download sites</a></li>
          <li><a href="/community/">Student wall</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
      </div>
    </div>

    <div class="legal">
      <span>© <?= date('Y') ?> ArchStudent · <a href="/about/">About</a> · <a href="/privacy/">Privacy</a> · <a href="/terms/">Terms</a> · <a href="/faq/">FAQ</a> · Reference guidance only — verify your local building regulations.</span>
      <span>Made for architecture students, worldwide. · Built by <a href="https://jeemmo.com/" rel="noopener">Jeemmo</a></span>
    </div>
  </div>
</footer>

<!-- off-canvas menu (opened by the header hamburger) -->
<div class="drawer-back" id="drawerBack" hidden></div>
<aside class="drawer" id="drawer" aria-label="Browse ArchStudent" aria-hidden="true">
  <div class="drawer-inner">
    <div class="drawer-head">
      <div class="bmark">Arch<span style="color:var(--accent)">Student</span></div>
      <button class="drawer-close" id="drawerClose" aria-label="Close menu">&times;</button>
    </div>

    <form class="drawer-news" action="/subscribe.php" method="post">
      <label>Get new resources in your inbox</label>
      <div class="row">
        <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="you@university.edu" required aria-label="Email address">
        <button type="submit">Join</button>
      </div>
    </form>

    <div class="drawer-cols">
      <div class="col">
        <h4>Design process</h4>
        <ul>
          <li><a href="/process/">The process, step by step</a></li>
          <li><a href="/process/how-to-read-a-brief/">How to read a brief</a></li>
          <li><a href="/process/site-analysis/">Site analysis</a></li>
          <li><a href="/process/concept-development/">Concept development</a></li>
          <li><a href="/process/precedent-studies/">Precedent studies</a></li>
          <li><a href="/process/architectural-diagramming/">Diagramming</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Standards &amp; codes</h4>
        <ul>
          <li><a href="/standards/staircase-dimensions/">Staircases</a></li>
          <li><a href="/standards/door-sizes/">Door sizes</a></li>
          <li><a href="/standards/ramp-gradients/">Ramp gradients</a></li>
          <li><a href="/standards/car-parking-dimensions/">Car parking</a></li>
          <li><a href="/standards/kitchen-dimensions/">Kitchens</a></li>
          <li><a href="/building-codes/">Codes by country</a></li>
          <li><a href="/standards/">All standards →</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Software tutorials</h4>
        <ul>
          <li><a href="/tutorials/revit/">Revit</a></li>
          <li><a href="/tutorials/autocad/">AutoCAD</a></li>
          <li><a href="/tutorials/sketchup/">SketchUp</a></li>
          <li><a href="/tutorials/rhino-grasshopper/">Rhino + Grasshopper</a></li>
          <li><a href="/tutorials/lumion-enscape/">Lumion / Enscape</a></li>
          <li><a href="/tutorials/photoshop-for-architects/">Photoshop</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Guides</h4>
        <ul>
          <li><a href="/guides/how-to-make-an-architecture-portfolio/">Portfolio</a></li>
          <li><a href="/guides/architecture-scales-explained/">Scales explained</a></li>
          <li><a href="/guides/types-of-architectural-drawings/">Types of drawings</a></li>
          <li><a href="/guides/architectural-drawing-conventions/">Drawing conventions</a></li>
          <li><a href="/guides/best-architecture-books/">Best books</a></li>
          <li><a href="/guides/architecture-glossary/">Glossary</a></li>
          <li><a href="/guides/">All guides →</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Career</h4>
        <ul>
          <li><a href="/career/how-to-become-an-architect/">Become an architect</a></li>
          <li><a href="/career/architecture-internship/">Get an internship</a></li>
          <li><a href="/career/architecture-cv/">CV tips</a></li>
          <li><a href="/career/what-does-an-architect-do/">What architects do</a></li>
          <li><a href="/career/architecture-salaries/">Salaries &amp; path</a></li>
          <li><a href="/career/">All career guides →</a></li>
        </ul>
      </div>
      <div class="col">
        <h4>Explore &amp; downloads</h4>
        <ul>
          <li><a href="/news/">Architecture news</a></li>
          <li><a href="/architecture/">Famous architecture</a></li>
          <li><a href="/architects/">Famous architects</a></li>
          <li><a href="/schools/">Architecture schools</a></li>
          <li><a href="/student-work/">Thesis showcase</a></li>
          <li><a href="/resources/">Free downloads</a></li>
          <li><a href="/resources/free-download-sites/">Free download sites</a></li>
          <li><a href="/community/">Student wall</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</aside>

<button id="toTop" aria-label="Back to top" title="Back to top">&#8593;</button>
<style>
  /* ---- off-canvas drawer (opened by the header hamburger) ---- */
  .drawer-back{position:fixed;inset:0;background:rgba(16,20,28,.55);opacity:0;visibility:hidden;transition:opacity .3s;z-index:80}
  .drawer-back.open{opacity:1;visibility:visible}
  .drawer{position:fixed;top:0;right:0;height:100%;width:min(440px,93vw);z-index:81;overflow-y:auto;
    transform:translateX(100%);transition:transform .34s cubic-bezier(.4,0,.2,1);box-shadow:-14px 0 44px rgba(16,20,28,.28);
    background:#fff}
  .drawer.open{transform:translateX(0)}
  .drawer-inner{position:relative;z-index:2;padding:22px 26px 48px}
  .drawer-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:6px}
  .drawer-head .bmark{font-family:var(--serif);font-size:1.4rem;font-weight:600;color:var(--ink)}
  .drawer-close{background:none;border:0;font-size:2rem;line-height:1;color:var(--ink-soft);cursor:pointer;padding:0 4px;transition:color .2s}
  .drawer-close:hover{color:var(--accent)}
  .drawer-news{margin:14px 0 22px;padding:14px 16px;background:var(--bg-alt);border:1px solid var(--line);border-radius:12px}
  .drawer-news label{display:block;font-weight:700;font-size:.9rem;margin-bottom:8px;color:var(--ink)}
  .drawer-news .row{display:flex;gap:8px}
  .drawer-news input[type=email]{flex:1;min-width:0;padding:9px 12px;border:1px solid var(--line);border-radius:9px;font:inherit;font-size:.9rem;background:#fff}
  .drawer-news button{background:var(--accent);color:#fff;border:0;border-radius:9px;padding:0 16px;font-weight:700;cursor:pointer}
  .drawer-news button:hover{background:var(--accent-ink)}
  .drawer-news .hp{position:absolute;left:-9999px}
  .drawer-cols{display:grid;grid-template-columns:1fr 1fr;gap:20px 24px}
  .drawer-cols .col h4{font-family:var(--serif);font-size:.98rem;color:var(--ink);margin:0 0 8px;padding-bottom:6px;border-bottom:1px solid var(--line)}
  .drawer-cols .col ul{list-style:none;margin:0;padding:0}
  .drawer-cols .col li{margin:0 0 5px}
  .drawer-cols .col a{color:var(--ink-soft);text-decoration:none;font-size:.88rem;line-height:1.4;transition:color .15s}
  .drawer-cols .col a:hover{color:var(--accent)}
  @media(max-width:420px){.drawer-cols{grid-template-columns:1fr}}

  #toTop{position:fixed;right:20px;bottom:20px;width:46px;height:46px;border:0;border-radius:50%;
    background:var(--accent);color:#fff;font-size:22px;line-height:46px;cursor:pointer;z-index:60;
    box-shadow:0 4px 14px rgba(30,20,10,.25);opacity:0;visibility:hidden;transform:translateY(8px);
    transition:opacity .25s,transform .25s,background .2s}
  #toTop:hover{background:var(--accent-ink)}
  #toTop.show{opacity:1;visibility:visible;transform:translateY(0)}
  @media(max-width:520px){#toTop{right:14px;bottom:14px;width:42px;height:42px;line-height:42px;font-size:20px}}
</style>
<script>
  (function(){
    var b=document.getElementById('toTop');
    if(b){function t(){if(window.scrollY>500)b.classList.add('show');else b.classList.remove('show');}
      window.addEventListener('scroll',t,{passive:true});t();
      b.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'});});}

    var drawer=document.getElementById('drawer'),
        back=document.getElementById('drawerBack'),
        close=document.getElementById('drawerClose'),
        triggers=document.querySelectorAll('[data-drawer-open]');
    if(!drawer||!triggers.length)return;
    function setOpen(o){
      drawer.classList.toggle('open',o);
      back.classList.toggle('open',o);
      back.hidden=false;
      drawer.setAttribute('aria-hidden',o?'false':'true');
      triggers.forEach(function(t){t.setAttribute('aria-expanded',o?'true':'false');});
      document.body.style.overflow=o?'hidden':'';
      if(o){var f=drawer.querySelector('a,button,input');if(f)f.focus();}
    }
    triggers.forEach(function(t){t.addEventListener('click',function(){setOpen(true);});});
    close.addEventListener('click',function(){setOpen(false);});
    back.addEventListener('click',function(){setOpen(false);});
    document.addEventListener('keydown',function(e){if(e.key==='Escape'&&drawer.classList.contains('open'))setOpen(false);});
  })();
</script>
</body>
</html>
