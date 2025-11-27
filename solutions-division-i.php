<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Division I - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
require_once __DIR__ . '/inc/division-navigation.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport division-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/marine-survey.mp4'); ?>" type="video/mp4">
    <source src="<?php echo url('assets/videos/underwater-sensors.mp4'); ?>" type="video/mp4">
    <source src="<?php echo url('assets/videos/3d-mapping.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Marine Investigations & Intelligence</h1>
    <p class="hero-sub fade-up">Turning ocean data into operational capability.</p>
  </div>
</section>

<!-- ===================== BANNER STATS ROW ===================== -->
<section class="stats-banner py-4 text-center">
  <div class="container">
    <div class="row justify-content-center g-4">
      <div class="col-6 col-md-4 fade-up">
        <h3 class="stat-number">1000+ km²</h3>
        <p class="stat-label">Surveyed Area</p>
      </div>
      <div class="col-6 col-md-4 fade-up">
        <h3 class="stat-number">100+</h3>
        <p class="stat-label">Environmental Datasets</p>
      </div>
      <div class="col-12 col-md-4 fade-up">
        <h3 class="stat-number">Multi-sensor</h3>
        <p class="stat-label">Operational Platforms</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SERVICES (Accordion Pattern) ===================== -->
<section class="section py-5 capabilities-section">
  <div class="container">
    <h2 class="text-center mb-5 fade-up">Our Services</h2>

    <div class="accordion" id="divisionOneAccordion">
      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d1svc1">Marine Geophysical &amp; Geotechnical Investigations</button>
        </h2>
        <div id="d1svc1" class="accordion-collapse collapse show" data-bs-parent="#divisionOneAccordion">
          <div class="accordion-body">These capabilities form the scientific foundation of our defence-related systems, creating dual-use value by applying marine research techniques to enhance situational and environmental awareness.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d1svc2">Marine Environmental &amp; Ocean Monitoring Systems</button>
        </h2>
        <div id="d1svc2" class="accordion-collapse collapse" data-bs-parent="#divisionOneAccordion">
          <div class="accordion-body">Our multidisciplinary marine and acoustic expertise enable us to translate environmental and oceanographic knowledge into domain awareness architectures serving both scientific and strategic objectives.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d1svc3">Subsea Cable Systems &amp; Sensor Infrastructure</button>
        </h2>
        <div id="d1svc3" class="accordion-collapse collapse" data-bs-parent="#divisionOneAccordion">
          <div class="accordion-body">With experience across marine operations, systems integration, and infrastructure design, Geomardy ensures that these networks serve as secure and reliable lifelines for data and power across undersea domains.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d1svc4">Seismic &amp; Acoustic Modelling and Simulation</button>
        </h2>
        <div id="d1svc4" class="accordion-collapse collapse" data-bs-parent="#divisionOneAccordion">
          <div class="accordion-body">Combining our systems engineering foundation with physics-based and data-driven modeling, these twins serve as dynamic replicas enhancing reliability, performance analysis, and system readiness across platforms and infrastructure.</div>
        </div>
      </div>

      <div class="accordion-item fade-up">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#d1svc5">Custom Systems Engineering &amp; Application-Specific Software</button>
        </h2>
        <div id="d1svc5" class="accordion-collapse collapse" data-bs-parent="#divisionOneAccordion">
          <div class="accordion-body">Building on our expertise in intelligent 3D mapping and digital visualization, these systems empower real-time situational decision-making, mission planning, and lifecycle management of assets — translating ground realities into actionable intelligence.</div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ===================== CTA SECTION ===================== -->
<section class="division-cta py-5 text-center">
  <div class="container fade-up">
    <h3 class="mb-3">Speak to an Expert</h3>
    <p class="lead mb-4">Let’s discuss how Geomardy can support your mission and operational goals.</p>
    <a href="<?php echo url('contact.php'); ?>" class="btn btn-primary btn-lg">Contact Us</a>
  </div>
</section>


<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
