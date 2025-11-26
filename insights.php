<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Insights & News - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport ecosystem-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/insights.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Insights & News</h1>
    <p class="hero-sub fade-up">Technical thought leadership and updates.</p>
  </div>
</section>
<!-- ===================== INSIGHTS GRID ===================== -->
<section class="section py-5">
  <div class="container">
    <div class="row g-4">

      <!-- Article 1 -->
      <div class="col-md-4 fade-up">
        <a href="<?php echo url('insight-digital-twin.php'); ?>" class="insight-card-link">
          <article class="insight-card h-100 shadow-sm">
            <div class="insight-image" style="background-image:url('<?php echo url('assets/images/insight-digital-twin.jpg'); ?>');"></div>
            <div class="insight-content p-4">
              <div class="insight-meta mb-2">
                <span class="badge bg-primary">Technology</span>
                <small class="text-muted ms-2">Oct 2025</small>
              </div>
              <h5 class="fw-bold">Why Digital Twins are Essential for Signature Management</h5>
              <p class="small text-muted">Exploring how digital replicas enhance stealth, predict behavior, and enable proactive asset management.</p>
              <span class="read-more">Read More →</span>
            </div>
          </article>
        </a>
      </div>

      <!-- Article 2 -->
      <div class="col-md-4 fade-up">
        <a href="<?php echo url('insight-uda.php'); ?>" class="insight-card-link">
          <article class="insight-card h-100 shadow-sm">
            <div class="insight-content p-4">
              <div class="insight-meta mb-2">
                <span class="badge bg-success">Defence</span>
                <small class="text-muted ms-2">Sep 2025</small>
              </div>
              <h5 class="fw-bold">Building Sovereign Underwater Domain Awareness</h5>
              <p class="small text-muted">Insights into multi-sensor networks, acoustic systems, and data analytics for developing sovereign underwater awareness capabilities.</p>
              <span class="read-more">Read More →</span>
            </div>
            <div class="insight-image" style="background-image:url('<?php echo url('assets/images/insight-UDA.jpg'); ?>');"></div>
          </article>
        </a>
      </div>

      <!-- Article 3 -->
      <div class="col-md-4 fade-up">
        <a href="<?php echo url('insight-marine-infra.php'); ?>" class="insight-card-link">
          <article class="insight-card h-100 shadow-sm">
            <div class="insight-image" style="background-image:url('<?php echo url('assets/images/insight-marine-infra.jpg'); ?>');"></div>
            <div class="insight-content p-4">
              <div class="insight-meta mb-2">
                <span class="badge bg-info">Infrastructure</span>
                <small class="text-muted ms-2">Aug 2025</small>
              </div>
              <h5 class="fw-bold">Marine Digital Infrastructure – Lessons from the Field</h5>
              <p class="small text-muted">Learnings from implementing digital infrastructure for ocean observation, data fusion, and secure information transmission.</p>
              <span class="read-more">Read More →</span>
            </div>
          </article>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="division-cta py-5 text-center">
  <div class="container fade-up">
    <h3 class="mb-3">Have an idea or collaboration to share?</h3>
    <p class="lead mb-4">Connect with our team to contribute to Geomardy’s knowledge ecosystem.</p>
    <a href="<?php echo url('contact.php'); ?>" class="btn btn-primary btn-lg">Share Your Insight</a>
  </div>
</section>

<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
