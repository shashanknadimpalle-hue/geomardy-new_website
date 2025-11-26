<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Ecosystem & Partners - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport ecosystem-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/ecosystem-bg.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Ecosystem & Partners</h1>
    <p class="hero-sub fade-up">Collaboration across government, academia, and industry.</p>
  </div>
</section>

<div class="section-divider"></div>

<!-- ===================== COLLABORATION MODEL SECTION ===================== -->
<section class="section py-5 collaboration-model">
  <div class="container text-center fade-up">

    <h2 class="mb-4">Our Collaboration Model</h2>
    <p class="lead mb-5">
      We act as a bridge between mission requirements and enabling technologies — fostering synergy between government, academia, and industry.
    </p>

    <div class="collab-graph">

      <!-- Center node -->
      <div class="collab-center">
        <h3>Geomardy</h3>
        <p>Integrator • Enabler • Catalyst</p>
      </div>

      <!-- Connector bar -->
      <div class="collab-horizontal-line"></div>

      <!-- Pillars -->
      <div class="collab-pillars">
        <div class="collab-pill">
          <h4>Government</h4>
          <p>Supporting sovereign capability programs and strategic infrastructure missions.</p>
        </div>

        <div class="collab-pill">
          <h4>Academia</h4>
          <p>Collaborating with research institutions for applied ocean science and technology innovation.</p>
        </div>

        <div class="collab-pill">
          <h4>Industry</h4>
          <p>Integrating systems, manufacturing solutions, and enabling end-to-end delivery frameworks.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ===================== PARTNER GRID ===================== -->
<section class="section py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-5 fade-up">Ecosystem Partners</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-3 fade-up">
        <div class="card ecosystem-card p-4 shadow-sm h-100">
          <h6 class="fw-bold mb-2">International Design Experts</h6>
          <p class="small text-muted mb-0">Collaborating on hydrodynamic, acoustic, and simulation design.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up">
        <div class="card ecosystem-card p-4 shadow-sm h-100">
          <h6 class="fw-bold mb-2">International OEMs</h6>
          <p class="small text-muted mb-0">Providing specialized systems for underwater sensing and communication.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up">
        <div class="card ecosystem-card p-4 shadow-sm h-100">
          <h6 class="fw-bold mb-2">R&D Organisations</h6>
          <p class="small text-muted mb-0">Partnering on mission-driven research in defence and ocean science.</p>
        </div>
      </div>
      <div class="col-md-3 fade-up">
        <div class="card ecosystem-card p-4 shadow-sm h-100">
          <h6 class="fw-bold mb-2">Academic Institutes</h6>
          <p class="small text-muted mb-0">Enabling translational research and field-ready innovation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ===================== LEADERSHIP & ADVISORY SECTION ===================== -->
<section class="section leadership-section py-5">
  <div class="container text-center">
    <h2 class="mb-3 fade-up">Leadership & Advisory</h2>
    <p class="lead mb-5 fade-up">Experience, expertise, and strategic vision driving Geomardy’s mission.</p>

    <!-- Leadership Profile -->
    <div class="row justify-content-center fade-up mb-5">
      <div class="col-md-8">
        <div class="card leader-card p-5 shadow-sm text-center">
          <h4 class="fw-bold mb-1">Mr. J. Srinivasa Raju</h4>
          <p class="text-muted mb-2">Founder & Managing Director</p>
          <p class="small mb-0">
            Over three decades of experience in marine and defence engineering, leading Geomardy’s vision to integrate science, systems, and strategy for national capability development.
          </p>
        </div>
      </div>
    </div>

    <!-- Core Team Structure -->
    <div class="core-team fade-up mt-5">
      <h5 class="fw-bold mb-3">Core Team</h5>
      <ul class="list-inline d-flex flex-wrap justify-content-center gap-3 mb-0">
        <li class="list-inline-item team-tag">Head – Operations</li>
        <li class="list-inline-item team-tag">Head – Technologies</li>
        <li class="list-inline-item team-tag">Head – Marine Operations</li>
        <li class="list-inline-item team-tag">Head – Systems Integration</li>
        <li class="list-inline-item team-tag">Head – Digital Technologies</li>
      </ul>
    </div>

    <!-- Advisory Board -->
    <div class="advisory-board mt-5 fade-up">
      <h5 class="fw-bold mb-3">Advisory Board</h5>
      <p class="small text-muted mb-4">Strategic guidance from experts across science, academia, and defence.</p>
      <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-4 mb-0">
        <li>Retired DRDO Scientists</li>
        <li>Senior Academicians (IITs / NIOT)</li>
        <li>International Domain Experts</li>
      </ul>
    </div>
  </div>
</section>

<div class="section-divider"></div>

<!-- ===================== CTA SECTION ===================== -->
<section class="division-cta py-5 text-center">
  <div class="container fade-up">
    <h3 class="mb-3">Explore Partnership Opportunities</h3>
    <p class="lead mb-4">Join our ecosystem of innovators, researchers, and mission enablers.</p>
    <a href="<?php echo url('contact.php'); ?>" class="btn btn-primary btn-lg">Collaborate with Geomardy</a>
  </div>
</section>

<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
