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

    <h2>Digital Situational Awareness Tools for High-Value Maritime Infrastructure</h2>

    <p><strong>Client:</strong> Confidential (Defence Sector)</p>

    <h4 class="mt-4">Challenge</h4>
    <p>The naval facility was a highly secured zone with strict data-handling protocols. Existing drawings of underground utilities and critical infrastructure were incomplete or unavailable, and validation required coordination with multiple stakeholders. The absence of an integrated, reliable digital view of the facility limited planning efficiency and created operational blind spots.</p>

    <h4 class="mt-4">Geomardy Approach</h4>
    <p>Geomardy deployed an indigenous digital situational awareness workflow tailored for secure defence environments. Indian-made drones were customised for fully offline operation, ensuring all data was stored locally with no internet connectivity. High-resolution terrain, structural, and utility data were processed into a secure 3D environment. A bespoke software interface was developed for the client, enabling 3D visualisation, asset interrogation, and infrastructure planning tools. The platform was designed to support interoperability with BIM and other engineering systems.</p>

    <h4 class="mt-4">Outcome / Metrics</h4>
    <ul>
      <li>Complete 3D visualisation of the entire naval asset.</li>
      <li>Accurate mapping of surface and subsurface utilities.</li>
      <li>Faster and more informed infrastructure planning</li>
      <li>Simplified maintenance and asset-management workflows</li>
      <li>Outputs readily exportable to BIM and other platforms</li>
      <li>Reduced dependency on manual surveys or fragmented legacy drawings</li>
    </ul>

    <h4 class="mt-4">Tech Stack & Deliverables</h4>
    <p>Tri-axial fluxgate sensor arrays, multi-channel DAQ systems, advanced signature analysis algorithms, predictive magnetic modelling tools, magnetic signature maps, and a comprehensive MSMSE evaluation report.</p>

    <h4 class="mt-4">Gallery</h4>
    <div class="row g-3 mt-2">
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-3D1.jpg'); ?>" class="img-fluid rounded"></div>
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-3D2.jpg'); ?>" class="img-fluid rounded"></div>
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-3D3.jpg'); ?>" class="img-fluid rounded"></div>
      <div class="col-md-4"><img src="<?php echo url('assets/images/case-3D4.jpg'); ?>" class="img-fluid rounded"></div>
    </div>
  </div>
</section>

<!-- ===== Gallery (horizontal strip) ===== -->
<section class="section py-5">
  <div class="container">
    <h3 class="mb-4">Gallery</h3>

    <!-- Horizontal scroll strip -->
    <div class="gallery-strip" role="list" aria-label="Case images">
      <!-- Repeat one .gallery-item per image (or generate with PHP) -->
      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-3D1.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-3D2.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-3D3.jpg'); ?>" alt="" />
      </div>

      <div class="gallery-item" role="listitem">
        <img src="<?php echo url('assets/images/case-3D4.jpg'); ?>" alt="" />
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
