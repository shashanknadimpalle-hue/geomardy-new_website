<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Case Detail - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<section class="section py-5">
  <div class="container fade-up">

    <!-- Back Button -->
    <div class="mb-4">
      <a href="<?php echo url('case-studies.php'); ?>" class="btn btn-outline-contrast" style="
        padding: 0.55rem 1.1rem;
        border-radius: 10px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
      ">
        <!-- Back arrow icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L6.707 8l4.647 5.646a.5.5 0 0 1-.708.708l-5-6a.5.5 0 0 1 0-.708l5-6a.5.5 0 0 1 .708 0z"/>
        </svg>
        Back to Case Studies
      </a>
    </div>

    <h2>Met-ocean Monitoring & Environmental Observation</h2>

    <p><strong>Client:</strong> Confidential (Maritime Infrastructure DevelopmentSector)</p>

    <h4 class="mt-4">Challenge</h4>
    <p>The project site is located in one of the most remotely accessible coastal environments, characterized by rough sea states, unpredictable weather cycles, and limited on-site logistical support. Establishing a long-term met-ocean observation network required precise planning, careful risk mitigation, and robust instrumentation capable of reliable operation in isolation.</p>

    <h4 class="mt-4">Geomardy Approach</h4>
    <p>Geomardy designed a fully integrated met-ocean monitoring program combining wave, weather, current, and tidal measurements. Deployment procedures were adapted for difficult access conditions, and systems were configured to support continuous remote monitoring, ensuring uninterrupted data availability without frequent site visits. Field operations were executed with specialized marine safety protocols and optimized handling techniques for heavy instruments.</p>

    <h4 class="mt-4">Outcome / Metrics</h4>
    <ul>
      <li>Reliable remote met-ocean monitoring established in a challenging environment.</li>
      <li>Continuous collection of wave, wind, tide, and current parameters.</li>
      <li>Enhanced data quality supporting design criteria, numerical modelling, and coastal risk assessment.</li>
      <li>Optimized field operations achieved with minimal interruption despite harsh conditions.</li>
    </ul>

    <h4 class="mt-4">Tech Stack & Deliverables</h4>
    <p>Wave rider buoy, weather monitoring systems, ADCP-based current measurement systems, tide gauge solutions, remote monitoring architecture, met-ocean datasets, and interpretive analysis reports.</p>

    <!-- ===== Gallery (horizontal strip) ===== -->
<section class="section py-5">
  <div class="container">
    <h3 class="mb-4">Gallery</h3>

    <!-- Horizontal scroll strip -->
    <div class="gallery-strip" role="list" aria-label="Case images">
      <!-- Repeat one .gallery-item per image (or generate with PHP) -->
      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-metocean1.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-metocean2.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-metocean3.jpg'); ?>" alt="" />
      </div>

      <!-- ... more images ... -->
    </div>

    <!-- Optional: small hint for keyboard users -->
    <p class="small mt-2 text-muted">Use horizontal scroll or swipe to view images.</p>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const imgs = document.querySelectorAll('.gallery-strip img');
  imgs.forEach(img => {
    // remove common data attributes used by lightboxes
    img.removeAttribute('data-bs-toggle');
    img.removeAttribute('data-fancybox');
    img.removeAttribute('data-lightbox');
    img.removeAttribute('data-src');
    img.removeAttribute('data-target');

    // prevent default click (no maximize)
    img.addEventListener('click', function (e) {
      e.preventDefault();
      // optionally implement a small UI: e.g., show caption or nothing
    });
  });

  // allow keyboard horizontal scrolling on focus
  const strip = document.querySelector('.gallery-strip');
  if (strip) {
    strip.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') strip.scrollBy({ left: 300, behavior: 'smooth' });
      if (e.key === 'ArrowLeft') strip.scrollBy({ left: -300, behavior: 'smooth' });
    });
  }
});
</script>

<?php require_once __DIR__ . '/inc/footer.php'; ?>