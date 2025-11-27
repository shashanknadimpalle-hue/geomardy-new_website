<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Division II - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
require_once __DIR__ . '/inc/division-navigation.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport division-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/digital-battlefield.mp4'); ?>" type="video/mp4">
    <source src="<?php echo url('assets/videos/underwater-acoustics.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Defence Systems & Strategic Technologies</h1>
    <p class="hero-sub fade-up">Engineering sovereign systems for strategic superiority.</p>
  </div>
</section>

<!-- ===================== BANNER STATS ROW ===================== -->
<section class="stats-banner py-4 text-center">
  <div class="container">
    <div class="row justify-content-center g-4">
      <div class="col-6 col-md-4 fade-up">
        <h3 class="stat-number">Validation Facilities</h3>
        <p class="stat-label">Design & Development Expertise</p>
      </div>
      <div class="col-6 col-md-4 fade-up">
        <h3 class="stat-number">Multi-Domain Projects</h3>
        <p class="stat-label">Naval | Air | Subsea | Strategic</p>
      </div>
      <div class="col-12 col-md-4 fade-up">
        <h3 class="stat-number">AI-Enabled UDA Frameworks</h3>
        <p class="stat-label">Real-Time Decision Ecosystems</p>
      </div>
    </div>
  </div>
</section>

<section class="section py-5 capabilities-section">
  <div class="container">
    <h2 class="text-center mb-5 fade-up">Our Core Capabilities</h2>

    <div class="accordion" id="divisionTwoAccordion">
      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap1">Digital Infrastructure Systems (Data Centres, Edge Nodes, Critical Networks)</button>
        </h2>
        <div id="d2cap1" class="accordion-collapse collapse show" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">These are essential to enable distributed sensor grids, real-time operational awareness, and digital command systems.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap2">Underwater Domain Awareness Systems</button>
        </h2>
        <div id="d2cap2" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">Builds directly on Geomardy’s marine survey foundation — translating oceanographic intelligence into acoustic surveillance.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap3">Battlefield Digital Command Systems</button>
        </h2>
        <div id="d2cap3" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">Leveraging Geomardy’s strength in 3D mapping, edge technologies and field integration to develop resilient command infrastructures.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap4">Situational Awareness &amp; Sensor Fusion</button>
        </h2>
        <div id="d2cap4" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">Synthesizes marine sensing expertise with AI-based fusion algorithms for real-time threat analysis and mission planning.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap5">Edge AI Systems with Cognitive Processing</button>
        </h2>
        <div id="d2cap5" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">By merging embedded systems engineering with AI-based inference frameworks, Geomardy’s edge solutions enable low-latency, mission-specific cognition reducing dependence on central data links and increasing field resilience.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap6">Advanced Digital Twinning</button>
        </h2>
        <div id="d2cap6" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">Combining our systems engineering foundation with physics-based and data-driven modeling, these twins serve as dynamic replicas — enhancing reliability, performance analysis, and system readiness across platforms and infrastructure.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap7">Naval Stealth Systems</button>
        </h2>
        <div id="d2cap7" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">Leveraging our background in acoustic modeling, hydrodynamic analysis, and material-structure interaction, Geomardy advances signature control systems essential for operational stealth and platform survivability.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d2cap8">Defence Testing &amp; Validation Infrastructure</button>
        </h2>
        <div id="d2cap8" class="accordion-collapse collapse" data-bs-parent="#divisionTwoAccordion">
          <div class="accordion-body">Our experience in engineering large-scale marine and scientific infrastructure positions Geomardy as a trusted partner in building critical testing ecosystems designed to meet specified performance targets and validated through hydrodynamic, acoustics, and magnetics testing protocols.</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ===================== CTA SECTION ===================== -->
<section class="division-cta py-5 text-center">
  <div class="container fade-up">
    <h3 class="mb-3">Request Solution Brief</h3>
    <p class="lead mb-4">Let’s collaborate on next-generation systems for strategic superiority and mission readiness.</p>
    <a href="<?php echo url('contact.php'); ?>" class="btn btn-primary btn-lg">Request Solution Brief</a>
  </div>
</section>

<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
