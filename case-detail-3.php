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

    <h2>Facility for Magnetic Signature Management of Ship-Borne Equipment</h2>

    <p><strong>Client:</strong> Confidential (Defence Sector)</p>

    <h4 class="mt-4">Challenge</h4>
    <p>The vessel required accurate mapping of magnetic emissions from onboard equipment to support magnetic silencing, reduce vulnerability, and enable degaussing system design. Conventional measurement methods were inadequate due to dynamic environmental conditions, and a magnetically cluttered onboard environment.</p>

    <h4 class="mt-4">Geomardy Approach</h4>
    <p>Geomardy collaborated with international domain experts to bring advanced technical know-how to India and fully indigenised the system design to meet Indian naval requirements. We deployed high-sensitivity tri-axial fluxgate sensors, synchronized multi-channel acquisition, and controlled equipment-run protocols to capture static and dynamic magnetic responses. Custom algorithms were developed for signature extraction, harmonic pattern analysis, and predictive modelling. Test and evaluation systems were engineered to simulate all relevant sea conditions, ensuring robust and mission-ready magnetic characterisation.</p>

    <h4 class="mt-4">Outcome / Metrics</h4>
    <ul>
      <li>Accurate magnetic signatures for all critical shipborne equipment.</li>
      <li>Identification of dominant contributors.</li>
      <li>Actionable mitigation options</li>
      <li>Validated inputs for degaussing and deperming system design</li>
    </ul>

    <h4 class="mt-4">Tech Stack & Deliverables</h4>
    <p>Tri-axial fluxgate sensor arrays, multi-channel DAQ systems, advanced signature analysis algorithms, predictive magnetic modelling tools, magnetic signature maps, and a comprehensive MSMSE evaluation report.</p>

    
<!-- ===== Gallery (horizontal strip) ===== -->
<section class="section py-5">
  <div class="container">
    <h3 class="mb-4">Gallery</h3>

    <!-- Horizontal scroll strip -->
    <div class="gallery-strip" role="list" aria-label="Case images">
      <!-- Repeat one .gallery-item per image (or generate with PHP) -->
      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-msmse1.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-msmse2.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-msmse3.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-msmse4.jpg'); ?>" alt="" />
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
