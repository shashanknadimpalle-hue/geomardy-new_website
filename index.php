<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Home - ' . SITE_NAME; 
$videos = $GLOBALS['ENV']['hero_videos'] ?? []; 
$hero_video = $videos[0] ?? null; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport position-relative">

  <?php if($hero_video && file_exists(__DIR__ . '/' . $hero_video)): ?>
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="<?php echo url($hero_video); ?>" type="video/mp4">
    </video>
  <?php else: ?>
    <div style="background:url('<?php echo url('assets/images/ocean-hero.jpg'); ?>') center/cover no-repeat; position:absolute; inset:0;"></div>
  <?php endif; ?>

  <div class="hero-overlay"></div>

  <div class="container hero-content text-center">

    <h1 class="hero-title mb-4">Geomardy — Strengthening Maritime Sovereignty Through Innovation</h1>

    <p class="hero-sub mb-3">
      Where science, engineering, and intelligence converge to build capability.
    </p>

    <div class="hero-support-box mb-4">
      Geomardy integrates science, engineering, and intelligence to develop next-generation maritime and subsea systems.
    </div>

    <!-- Updated buttons -->
    <div class="hero-buttons">
      <a href="<?php echo url('contact.php'); ?>" class="btn btn-ghost btn-lg me-3 px-4">Request Project Proposal</a>
      <a href="<?php echo url('capabilities.php'); ?>" class="btn btn-outline-contrast btn-lg px-4">Explore Capabilities</a>
    </div>

  </div>
</section>

<!-- ===================== QUICK VALUE STRIP ===================== -->
<section class="section section-border py-5 bg-light text-center">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm">
          <h5 class="fw-bold mb-2">Investigation</h5>
          <p>High-fidelity marine, geotechnical & environmental surveys</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm">
          <h5 class="fw-bold mb-2">Simulation</h5>
          <p>Digital twins with intelligence for real-time decision support</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 p-4 border-0 shadow-sm">
          <h5 class="fw-bold mb-2">Deploy</h5>
          <p>Turnkey solutions: Subsea Networks, UDA, Testing Infrastructure, & Digital Infrastructure</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== DIVISIONS SECTION ===================== -->
<section class="section divisions py-5">
  <div class="container">
    <h3 class="text-center mb-5">Our Divisions</h3>

    <div class="row g-5 justify-content-center">

      <!-- Division I -->
      <div class="col-md-6">
        <a class="division-card text-center fade-up p-5" href="<?php echo url('solutions-division-i.php'); ?>" aria-label="Open Division I">

          <!-- Centered Icon -->
          <div class="division-icon-wrapper">
            <img src="assets/images/icons/division-i.png" class="division-icon" alt="Division I Icon">
          </div>

          <h4 class="division-title">Division I</h4>

          <p class="small division-desc">
            Focused on marine investigations, underwater technologies, and subsea
            systems — enabling capability creation across naval and strategic sectors.
          </p>

        </a>
      </div>

      <!-- Division II -->
      <div class="col-md-6">
        <a class="division-card text-center fade-up p-5" href="<?php echo url('solutions-division-ii.php'); ?>" aria-label="Open Division II">

          <!-- Centered Icon -->
          <div class="division-icon-wrapper">
            <img src="assets/images/icons/division-ii.png" class="division-icon" alt="Division II Icon">
          </div>

          <h4 class="division-title">Division II</h4>

          <p class="small division-desc">
            Dedicated to engineering, design, and construction of maritime infrastructure —
            from testing facilities to subsea networks and digital infrastructure.
          </p>

        </a>
      </div>

    </div>
  </div>
</section>


<!-- ===================== SPOTLIGHT PROJECTS ===================== -->
<section class="section py-5">
  <div class="container text-center">

    <h3 class="mb-4">Spotlight Projects</h3>

    <div id="caseCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="card mx-auto p-4 shadow-sm" style="max-width:600px;"
               onclick="window.location.href='case-studies.php#underwater-tracking'">
            <h5>Underwater Tracking & Localisation — DPR</h5>
            <p class="small mb-0">Comprehensive DPR for an acoustic buoy network for real-time underwater tracking.</p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card mx-auto p-4 shadow-sm" style="max-width:600px;"
               onclick="window.location.href='case-studies.php#defence-validation'">
            <h5>Defence Validation Infrastructure</h5>
            <p class="small mb-0">Design and development of Magnetic Signature Management Facility for naval assets.</p>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card mx-auto p-4 shadow-sm" style="max-width:600px;"
               onclick="window.location.href='case-studies.php#asset-intelligence'">
            <h5>Asset Intelligence</h5>
            <p class="small mb-0">Developing digital situational awareness for high-value maritime infrastructure.</p>
          </div>
        </div>

      </div>

      <!-- Updated arrows with circle background -->
      <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="prev">
        <span class="custom-arrow-circle">
          <svg width="18" height="18" viewBox="0 0 24 24"><path d="M15 6 L9 12 L15 18" stroke="#fff" stroke-width="2"/></svg>
        </span>
      </button>

      <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="next">
        <span class="custom-arrow-circle">
          <svg width="18" height="18" viewBox="0 0 24 24"><path d="M9 6 L15 12 L9 18" stroke="#fff" stroke-width="2"/></svg>
        </span>
      </button>
    </div>

  </div>
</section>

<!-- ===================== PAGE FOOTER CTA ===================== -->
<section class="container page-footer-cta">
  <h3>Ready to discuss your project?</h3>
  <p>Request a project proposal and we’ll get back to you with a tailored plan.</p>
  <a href="<?php echo url('contact.php'); ?>" class="btn btn-ghost btn-lg px-4">Request Project Proposal</a>
</section>

<!-- FOOTER -->
<?php require_once __DIR__.'/inc/footer.php'; ?>
