<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'About - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION (RESTORED ORIGINAL) ===================== -->
<section class="hero-viewport about-hero position-relative d-flex align-items-center justify-content-center text-center">

  <?php 
  $aboutVideos = $GLOBALS['ENV']['about_video'] ?? [];
  $about_video = $aboutVideos[0] ?? null;
  ?>

  <?php if ($about_video && file_exists(__DIR__ . '/' . $about_video)): ?>
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="<?php echo url($about_video); ?>" type="video/mp4">
    </video>
  <?php else: ?>
    <div class="hero-bg" style="background:url('<?php echo url('assets/images/about-hero.jpg'); ?>') center/cover no-repeat; position:absolute; inset:0;"></div>
  <?php endif; ?>

  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">About Geomardy</h1>
    <p class="hero-sub fade-up mb-0">
      Strategic technology enterprise at the intersection of marine science, systems engineering & digital intelligence.
    </p>
  </div>
</section>

<!-- ===================== CORPORATE VISION ===================== -->
<section class="section py-5">
  <div class="container">
    <h2 class="section-heading text-center mb-4 fade-up">Corporate Vision</h2>

    <p class="fade-up text-center col-lg-10 mx-auto">
      Geomardy builds next-generation maritime and defence capability by combining engineering,
      digital intelligence and systems design to deliver mission-ready solutions.
    </p>
  </div>
</section>


<!-- ===================== DIVIDER ===================== -->
<div class="section-divider">
  <svg width="100%" height="64" viewBox="0 0 1440 64" preserveAspectRatio="none">
    <path d="M0,32 C240,64 480,0 720,32 C960,64 1200,0 1440,32 L1440,64 L0,64 Z"
          fill="rgba(56, 223, 232, 0.67)"/>
  </svg>
</div>


<!-- ===================== CORE PHILOSOPHY ===================== -->
<section class="section py-5 bg-light">
  <div class="container">
    <h2 class="section-heading text-center mb-4 fade-up">Core Philosophy</h2>

    <p class="fade-up text-center col-lg-10 mx-auto">
      We are a trusted field partner — designing systems for operational clarity, precision and
      long-term mission relevance.
    </p>
  </div>
</section>


<!-- ===================== DIVIDER ===================== -->
<div class="section-divider">
  <svg width="100%" height="64" viewBox="0 0 1440 64" preserveAspectRatio="none">
    <path d="M0,32 C240,64 480,0 720,32 C960,64 1200,0 1440,32 L1440,64 L0,64 Z"
          fill="rgba(56, 223, 232, 0.67)"/>
  </svg>
</div>


<!-- ===================== STRATEGIC ARCHITECTURE ===================== -->
<section class="section py-5">
  <div class="container">
    <h2 class="section-heading text-center mb-4 fade-up">Strategic Architecture</h2>

    <p class="fade-up text-center col-lg-10 mx-auto">
      Two synergistic divisions — deep engineering and advanced digital systems —
      turn operational needs into deployable solutions, from underwater platforms
      to complex digital architectures.
    </p>
  </div>
</section>

<!-- ===================== DIVIDER ===================== -->
<div class="section-divider">
  <svg width="100%" height="64" viewBox="0 0 1440 64" preserveAspectRatio="none">
    <path d="M0,32 C240,64 480,0 720,32 C960,64 1200,0 1440,32 L1440,64 L0,64 Z"
          fill="rgba(56, 223, 232, 0.67)"/>
  </svg>
</div>

<!-- ===================== METRICS PANEL ===================== -->
<section class="section py-5 bg-dark text-light metrics-panel">
  <div class="container">
    <div class="row text-center g-4 justify-content-center">

      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">1000+</h2>
        <p class="metric-label text-light">Projects Delivered</p>
      </div>

      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">25+</h2>
        <p class="metric-label text-light">Years Experience</p>
      </div>

      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">Neutral</h2>
        <p class="metric-label text-light">Tech-Agnostic</p>
      </div>

      <div class="col-6 col-md-3 fade-up">
        <h2 class="metric-number text-white">Global</h2>
        <p class="metric-label text-light">Sustainable Ecosystem</p>
      </div>

    </div>
  </div>
</section>


<?php require_once __DIR__.'/inc/footer.php'; ?>
