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

<!-- ===================== SERVICES GRID ===================== -->
<section class="section py-5 division-services">
  <div class="container">
    <h2 class="text-center mb-5 fade-up">Our Services</h2>
    <div class="row g-4">

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm">
          <h5>Marine Geophysical & Geotechnical Investigations</h5>
          <p>These capabilities form the scientific foundation of our defence-related systems, creating dual-use value by applying marine research techniques to enhance situational and environmental awareness.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm">
          <h5>Marine Environmental & Ocean Monitoring Systems</h5>
          <p>Our multidisciplinary marine and acoustic expertise enable us to translate environmental and oceanographic knowledge into domain awareness architectures serving both scientific and strategic objectives.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm">
          <h5>Subsea Cable Systems & Sensor Infrastructure</h5>
          <p>With experience across marine operations, systems integration, and infrastructure design, Geomardy ensures that these networks serve as secure and reliable lifelines for data and power across undersea domains.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm">
          <h5>Seismic & Acoustic Modelling and Simulation</h5>
          <p>Combining our systems engineering foundation with physics-based and data-driven modeling, these twins serve as dynamic replicas enhancing reliability, performance analysis, and system readiness across platforms and infrastructure.</p>
        </div>
      </div>

      <div class="col-md-12 fade-up">
        <div class="card h-100 p-4 shadow-sm">
          <h5>Custom Systems Engineering & Application-Specific Software</h5>
          <p>Building on our expertise in intelligent 3D mapping and digital visualization, these systems empower real-time situational decision-making, mission planning, and lifecycle management of assets — translating ground realities into actionable intelligence.</p>
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


<script>
(function(){
  const container = document.querySelector('.division-services');
  if(!container) return;

  const cards = Array.from(container.querySelectorAll('.card'));

  let pointerInside = false;

  // mouse enter/leave for container (desktop)
  container.addEventListener('pointerenter', () => {
    container.classList.add('is-hover');
  });
  container.addEventListener('pointerleave', () => {
    container.classList.remove('is-hover');
  });

  // also add focus handlers for keyboard accessibility:
  cards.forEach(card => {
    card.addEventListener('focusin', () => container.classList.add('is-hover'));
    card.addEventListener('focusout', () => {
      // small timeout to allow focus to move to another card
      setTimeout(()=> {
        if (!container.contains(document.activeElement)) {
          container.classList.remove('is-hover');
        }
      }, 10);
    });

    // make each card keyboard clickable if needed:
    card.addEventListener('keydown', (ev) => {
      if(ev.key === 'Enter' || ev.key === ' ') {
        const link = card.querySelector('a, button');
        if(link) { link.click(); ev.preventDefault(); }
      }
    });
  });
})();
</script>
<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
