</main>



<!-- ===================== FOOTER ===================== -->
<footer class="site-footer">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT -->
      <div class="col-md-6 mb-3 mb-md-0">
        <strong class="text-uppercase" style="letter-spacing:1px;">GEOMARDY</strong>
        <p class="small mb-0 mt-2">© <?php echo date('Y'); ?> GEOMARDY. All rights reserved.</p>
      </div>

      <!-- RIGHT -->
      <div class="col-md-6 text-md-end">
        <a class="small me-2" href="<?php echo url('legal.php'); ?>">Privacy</a>
        &nbsp;|&nbsp;
        <a class="small ms-2" 
           href="https://in.linkedin.com/in/srinivasa-raju-jampana-32634417" 
           target="_blank" rel="noopener noreferrer">
          LinkedIn
        </a>
      </div>

    </div>
  </div>
</footer>

<!-- ===================== JS ===================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo url('assets/js/main.js'); ?>"></script>
<script src="<?php echo url('assets/js/hero-video.js'); ?>"></script>

<!-- HEADER SCROLL HANDLER -->
<script>
document.addEventListener("scroll", () => {
  const header = document.querySelector(".custom-header");
  if (!header) return;
  header.classList.toggle("scrolled", window.scrollY > 10);
});
</script>
<script>
document.addEventListener("click", function(e) {
  if(e.target.classList.contains("dropdown-item")) {
    document.querySelectorAll(".dropdown-menu.show").forEach(m => m.classList.remove("show"));
    document.querySelectorAll(".nav-item.dropdown.show").forEach(m => m.classList.remove("show"));
  }
});
</script>
<script>
(function(){
  function clampHero() {
    const hero = document.querySelector('.hero-viewport');
    if (!hero) return;

    // compute a safe height: between minPx and maxPx based on viewport
    const vw = window.innerWidth;
    const vh = window.innerHeight;

    // conservative bounds (adjust if you want taller or shorter)
    const minPx = 260;
    const preferred = Math.round(Math.max(minPx, Math.min(520, Math.floor(vh * 0.48))));
    const maxPx = Math.round(Math.min(620, Math.floor(vh * 0.6)));

    // final height clamped
    const final = Math.max(minPx, Math.min(preferred, maxPx));

    // apply inline style (takes precedence)
    hero.style.height = final + 'px';
    hero.style.maxHeight = Math.round(vh * 0.7) + 'px';
  }

  // run on load and resize (debounced)
  let t;
  window.addEventListener('load', clampHero);
  window.addEventListener('orientationchange', clampHero);
  window.addEventListener('resize', () => {
    clearTimeout(t);
    t = setTimeout(clampHero, 90);
  });
})();
</script>

</body>
</html>
