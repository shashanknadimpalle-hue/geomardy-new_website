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

<!-- ===================== SERVICES GRID ===================== -->
<section class="section py-5 division-services">
  <div class="container">
    <h2 class="text-center mb-5 fade-up">Our Core Capabilities</h2>
    <div class="row g-4">

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Digital Infrastructure Systems (Data Centres, Edge Nodes, Critical Networks)</h5>
          <p>These are essential to enable distributed sensor grids, real-time operational awareness, and digital command systems.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Underwater Domain Awareness Systems</h5>
          <p>Builds directly on Geomardy’s marine survey foundation — translating oceanographic intelligence into acoustic surveillance.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Battlefield Digital Command Systems</h5>
          <p>Leveraging Geomardy’s strength in 3D mapping, edge technologies and field integration to develop resilient command infrastructures.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Situational Awareness & Sensor Fusion</h5>
          <p>Synthesizes marine sensing expertise with AI-based fusion algorithms for real-time threat analysis and mission planning.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Edge AI Systems with Cognitive Processing</h5>
          <p>By merging embedded systems engineering with AI-based inference frameworks, Geomardy’s edge solutions enable low-latency, mission-specific cognition reducing dependence on central data links and increasing field resilience.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Advanced Digital Twinning</h5>
          <p>Combining our systems engineering foundation with physics-based and data-driven modeling, these twins serve as dynamic replicas — enhancing reliability, performance analysis, and system readiness across platforms and infrastructure.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Naval Stealth Systems</h5>
          <p>Leveraging our background in acoustic modeling, hydrodynamic analysis, and material-structure interaction, Geomardy advances signature control systems essential for operational stealth and platform survivability.</p>
        </div>
      </div>

      <div class="col-md-6 fade-up">
        <div class="card h-100 p-4 shadow-sm" tabindex="0">
          <h5>Defence Testing & Validation Infrastructure</h5>
          <p>Our experience in engineering large-scale marine and scientific infrastructure positions Geomardy as a trusted partner in building critical testing ecosystems designed to meet specified performance targets and validated through hydrodynamic, acoustics, and magnetics testing protocols.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
(function(){
  const container = document.querySelector('.division-services');
  if (!container) return;

  const cards = Array.from(container.querySelectorAll('.card'));

  // Add pointer handlers to set the "is-hover" state on the container.
  // CSS will blur siblings when .is-hover is present and a card is hovered.
  container.addEventListener('pointerenter', () => {
    container.classList.add('is-hover');
  });
  container.addEventListener('pointerleave', () => {
    container.classList.remove('is-hover');
  });

  // Keyboard accessibility: when a card receives focus, enable is-hover
  // and keep it until focus leaves the container.
  cards.forEach(card => {
    // ensure card is focusable (tabindex must be set in HTML)
    card.addEventListener('focusin', () => {
      container.classList.add('is-hover');
      // mark the focused card so CSS :focus doesn't conflict with :hover
      cards.forEach(c => c.classList.remove('focused'));
      card.classList.add('focused');
    });

    card.addEventListener('focusout', () => {
      // tiny delay to allow focus to move between cards inside the container
      setTimeout(() => {
        if (!container.contains(document.activeElement)) {
          container.classList.remove('is-hover');
          cards.forEach(c => c.classList.remove('focused'));
        }
      }, 10);
    });

    // Make Enter/Space activate any link/button inside card
    card.addEventListener('keydown', (ev) => {
      if (ev.key === 'Enter' || ev.key === ' ') {
        const actionable = card.querySelector('a, button');
        if (actionable) {
          actionable.click();
          ev.preventDefault();
        }
      }
    });
  });

  // Optional: also ensure mouse hover on a specific card keeps it sharp
  // (this gives immediate feedback without JS toggling individual classes)
  cards.forEach(card => {
    card.addEventListener('pointerenter', () => {
      cards.forEach(c => c.classList.remove('hovered'));
      card.classList.add('hovered');
    });
    card.addEventListener('pointerleave', () => {
      card.classList.remove('hovered');
    });
  });

})();
</script>

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
