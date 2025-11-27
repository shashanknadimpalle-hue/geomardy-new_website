</main>



<!-- ===================== FOOTER ===================== -->
<footer class="site-footer">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="footer-brand">
          <div class="brand-name">GEOMARDY</div>
          <p class="small">Strengthening maritime sovereignty through innovation.</p>
        </div>
      </div>
      <div class="col-6 col-md-2">
        <h6 class="footer-title">Company</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="<?php echo url('about.php'); ?>">About</a></li>
          <li><a href="<?php echo url('ecosystem.php'); ?>">Ecosystem</a></li>
          <li><a href="<?php echo url('insights.php'); ?>">Insights</a></li>
          <li><a href="<?php echo url('contact.php'); ?>">Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <h6 class="footer-title">Divisions</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="<?php echo url('solutions-division-i.php'); ?>">Division I</a></li>
          <li><a href="<?php echo url('solutions-division-ii.php'); ?>">Division II</a></li>
          <li><a href="<?php echo url('capabilities.php'); ?>">Capabilities</a></li>
          <li><a href="<?php echo url('case-studies.php'); ?>">Case Studies</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h6 class="footer-title">Contact</h6>
        <div class="footer-contact">
          <div>401, Level 4, Business Bay</div>
          <div>Visakhapatnam, Andhra Pradesh, India</div>
          <div>530003</div>
          <div><a href="mailto:info@geomardy.com">info@geomardy.com</a></div>
          <div><a href="tel:+918913100086">+91 89131 00086</a></div>
        </div>
        <div class="social-links mt-3">
          <a href="https://in.linkedin.com/in/srinivasa-raju-jampana-32634417" target="_blank" rel="noopener noreferrer">LinkedIn</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center mt-4 pt-3 border-top">
      <p class="small mb-0">© <?php echo date('Y'); ?> GEOMARDY. All rights reserved.</p>
      <div class="d-flex gap-3">
        <a class="small" href="<?php echo url('legal.php'); ?>">Privacy</a>
        <a class="small" href="<?php echo url('contact.php'); ?>">Contact</a>
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
    const hasVideo = !!hero.querySelector('video.hero-video');
    const isFullHero = hero.classList.contains('about-hero') || hero.classList.contains('division-hero') || hero.classList.contains('contact-hero');
    if (hasVideo || isFullHero) {
      hero.style.height = '';
      hero.style.maxHeight = '';
      return;
    }

    const vh = window.innerHeight;
    const minPx = 260;
    const preferred = Math.round(Math.max(minPx, Math.min(520, Math.floor(vh * 0.48))));
    const maxPx = Math.round(Math.min(620, Math.floor(vh * 0.6)));
    const final = Math.max(minPx, Math.min(preferred, maxPx));
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
