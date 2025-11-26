<?php
require_once __DIR__ . '/inc/functions.php';
$pageTitle = 'Case Studies - ' . SITE_NAME;
require_once __DIR__ . '/inc/header.php';
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport case-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/case-studies-bg.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Case Studies</h1>
    <p class="hero-sub fade-up">Proven outcomes in complex environments.</p>
  </div>
</section>

<!-- ===================== FEATURED CASE STUDY CAROUSEL (clickable) ===================== -->
<section class="section py-5">
  <div class="container text-center">
    <h2 class="mb-4 fade-up">Featured Case Studies</h2>

    <div id="caseCarousel" class="carousel slide fade-up" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">

        <!-- Case 1 -->
        <div class="carousel-item active">
          <a href="<?php echo url('case-detail-1.php?slug=met-ocean monitoring'); ?>" class="stretched-link text-decoration-none">
            <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
              <h5 class="fw-bold">Met-ocean Monitoring & Environmental Observation</h5>
              <p class="small mb-0">Comprehensive real-time monitoring of met-ocean data in remote location.</p>
            </div>
          </a>
        </div>

        <!-- Case 2 -->
        <div class="carousel-item">
          <a href="<?php echo url('case-detail-3.php?slug=defence-validation'); ?>" class="stretched-link text-decoration-none">
            <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
              <h5 class="fw-bold">Defence Testing & Validation Infrastructure</h5>
              <p class="small mb-0">Design and development of Magnetic Signature Management Facility for naval asset stealth validation.</p>
            </div>
          </a>
        </div>

         <!-- Case 3 -->
        <div class="carousel-item">
          <a href="<?php echo url('case-detail-2.php?slug=asset-intelligence'); ?>" class="stretched-link text-decoration-none">
            <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
              <h5 class="fw-bold">Marine Seismic Refraction</h5>
              <p class="small mb-0">Advanced seismic refraction survey tailored for gas-affected environments.</p>
            </div>
          </a>
        </div>

        <!-- Case 4 -->
        <div class="carousel-item">
          <a href="<?php echo url('case-detail-4.php?slug=asset-intelligence'); ?>" class="stretched-link text-decoration-none">
            <div class="card mx-auto p-4 shadow-sm" style="max-width: 720px;">
              <h5 class="fw-bold">Asset Intelligence</h5>
              <p class="small mb-0">Integrated digital situational awareness tools for monitoring high-value maritime infrastructure.</p>
            </div>
          </a>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="prev">
        <div class="custom-arrow-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
        </div>
      </button>

      <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#caseCarousel" data-bs-slide="next">
        <div class="custom-arrow-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#fff" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </div>
      </button>
    </div>
  </div>
</section>

<!-- ===================== IMAGE STRIP (replaces All Case Studies) ===================== -->
<section class="section py-5 bg-light">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h2 class="mb-0">Case Study Gallery</h2>
      <small class="text-muted">Hover to pause. Click to enlarge.</small>
    </div>

    <?php
    // Add or remove items here. Each item has: image, title, detail-slug
    $stripImages = [
      ['img' => url('assets/images/seismic 1.jpg'), 'title' => 'Marine Seismic Survey', 'slug' => 'Marine Seismic Survey'],
      ['img' => url('assets/images/seismic 2.jpg'), 'title' => 'Marine Seismic Survey', 'slug' => 'Marine Seismic Survey'],
      ['img' => url('assets/images/seismic 3.jpg'), 'title' => 'Marine Seismic Survey', 'slug' => 'Marine Seismic Survey'],
      ['img' => url('assets/images/seismic 4.jpg'), 'title' => 'Marine Seismic Survey', 'slug' => 'Marine Seismic Survey'],
      ['img' => url('assets/images/seismic 5.jpg'), 'title' => 'Marine Seismic Survey', 'slug' => 'Marine Seismic Survey'],
      ['img' => url('assets/images/seismic 6.jpg'), 'title' => 'Marine Seismic Survey', 'slug' => 'Marine Seismic Survey'],
      ['img' => url('assets/images/seismic land.jpg'), 'title' => 'Land Seismic Survey', 'slug' => 'Land Seismic Survey'],
      ['img' => url('assets/images/ss 2.jpg'), 'title' => 'Side Scan Survey', 'slug' => 'Scan Side Survey'],
      ['img' => url('assets/images/ss 1.jpg'), 'title' => 'Side Scan Survey', 'slug' => 'Scan Side Survey'],
      ['img' => url('assets/images/ss data.jpg'), 'title' => 'Side Scan Survey', 'slug' => 'Scan Side Survey'],
      ['img' => url('assets/images/ss data 2.jpg'), 'title' => 'Side Scan Survey', 'slug' => 'Scan Side Survey'],
      ['img' => url('assets/images/profiler data.jpg'), 'title' => 'Sub bottom Survey', 'slug' => 'Sub bottom Survey'],
      ['img' => url('assets/images/reader bouy 1.jpg'), 'title' => 'Ocean Monitoring', 'slug' => 'Ocean Monitoring'],
      ['img' => url('assets/images/reader bouy 2.jpg'), 'title' => 'Ocean Monitoring', 'slug' => 'Ocean Monitoring'],
      ['img' => url('assets/images/wave bouy 1.jpg'), 'title' => 'Ocean Monitoring', 'slug' => 'Ocean Monitoring'],
      ['img' => url('assets/images/wave bouy 1.jpg'), 'title' => 'Ocean Monitoring', 'slug' => 'Ocean Monitoring'],
      ['img' => url('assets/images/MSMSE 1.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management'],
      ['img' => url('assets/images/MSMSE 2.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management'],
      ['img' => url('assets/images/MSMSE 3.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management'],
      ['img' => url('assets/images/MSMSE 4.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management'],
      ['img' => url('assets/images/MSMSE 5.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management'],
      ['img' => url('assets/images/MSMSE 7.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management'],
      ['img' => url('assets/images/MSMSE 6.jpg'), 'title' => 'Signature Management', 'slug' => 'Signature Management']
      // add more if needed
    ];
    ?>

<!-- Image strip -->
<div class="marquee-wrap" tabindex="0" aria-label="Case study images strip">
  <div class="marquee-track" id="caseStrip">
    <?php foreach ($stripImages as $it): ?>
      <div class="strip-item" role="button" tabindex="0"
           data-src="<?php echo $it['img']; ?>"
           data-slug="<?php echo $it['slug']; ?>"
           data-title="<?php echo htmlspecialchars($it['title']); ?>">
        <img src="<?php echo $it['img']; ?>" alt="<?php echo htmlspecialchars($it['title']); ?>">
      </div>
    <?php endforeach; ?>

    <!-- duplicate for seamless loop -->
    <?php foreach ($stripImages as $it): ?>
      <div class="strip-item clone" role="button" tabindex="-1"
           data-src="<?php echo $it['img']; ?>"
           data-slug="<?php echo $it['slug']; ?>"
           data-title="<?php echo htmlspecialchars($it['title']); ?>">
        <img src="<?php echo $it['img']; ?>" alt="<?php echo htmlspecialchars($it['title']); ?>">
      </div>
    <?php endforeach; ?>
  </div>
</div>


<!-- Lightbox Modal -->
<div class="modal fade" id="caseLightbox" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0">
        <button type="button" class="btn-close btn-close-white position-absolute end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <img src="" alt="" id="caseLightboxImg" class="rounded">
        <div class="mt-2 d-flex justify-content-start align-items-center">
          <h5 id="caseLightboxTitle" class="mt-2 text-white"></h5>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- ===================== CTA SECTION ===================== -->
<section class="division-cta py-5 text-center">
  <div class="container fade-up">
    <h3 class="mb-3">Interested in a Project Like This?</h3>
    <p class="lead mb-4">Reach out to discuss your technical or operational requirement with our team.</p>
    <a href="<?php echo url('contact.php'); ?>" class="btn btn-primary btn-lg">Contact Geomardy</a>
  </div>
</section>

<?php require_once __DIR__ . '/inc/footer.php'; ?>

<!-- Small inline JS to power the strip and modal -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const strip = document.getElementById('caseStrip');
  const modalEl = document.getElementById('caseLightbox');
  const bsModal = new bootstrap.Modal(modalEl);
  const imgEl = document.getElementById('caseLightboxImg');
  const titleEl = document.getElementById('caseLightboxTitle');

  strip.querySelectorAll('.strip-item').forEach(item => {
    // ignore clones for keyboard/tabbing if they are set to tabindex="-1"
    item.addEventListener('click', () => {
      if (!item.dataset.src) return;
      imgEl.src = item.dataset.src;
      titleEl.textContent = item.dataset.title || '';
      bsModal.show();
    });
    item.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        item.click();
      }
    });
  });

  // Pause marquee while modal is open
  modalEl.addEventListener('shown.bs.modal', () => {
    document.querySelector('.marquee-track').style.animationPlayState = 'paused';
  });
  modalEl.addEventListener('hidden.bs.modal', () => {
    document.querySelector('.marquee-track').style.animationPlayState = '';
  });
});
</script>
