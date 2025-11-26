<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Capabilities - ' . SITE_NAME; 
require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport capabilities-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/capabilities-overview.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Capabilities & Services</h1>
    <p class="hero-sub fade-up">Comprehensive technical depth from seabed to system.</p>
  </div>
</section>

<!-- ===================== CAPABILITIES SECTION ===================== -->
<section class="section py-5 capabilities-section">
  <div class="container">
    <h2 class="text-center mb-5 fade-up">Explore Our Core Capabilities</h2>

    <!-- Tabs Navigation -->
    <ul class="nav nav-pills justify-content-center mb-4 fade-up" id="capabilitiesTabs" role="tablist">
      <li class="nav-item" role="presentation"><button class="nav-link active" id="marine-tab" data-bs-toggle="pill" data-bs-target="#marine" type="button" role="tab">Marine Surveys</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="geo-tab" data-bs-toggle="pill" data-bs-target="#geo" type="button" role="tab">Geotechnical & Lab Testing</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="subsea-tab" data-bs-toggle="pill" data-bs-target="#subsea" type="button" role="tab">Subsea Systems</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="twins-tab" data-bs-toggle="pill" data-bs-target="#twins" type="button" role="tab">Digital Twins & Simulation</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="ai-tab" data-bs-toggle="pill" data-bs-target="#ai" type="button" role="tab">Edge AI & Sensor Fusion</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="defence-tab" data-bs-toggle="pill" data-bs-target="#defence" type="button" role="tab">Defence Testing & Validation</button></li>
      <li class="nav-item" role="presentation"><button class="nav-link" id="integration-tab" data-bs-toggle="pill" data-bs-target="#integration" type="button" role="tab">Systems Integration & Deployment</button></li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="capabilitiesTabsContent">
      
      <!-- Marine Surveys -->
      <div class="tab-pane fade show active" id="marine" role="tabpanel">
        <div class="accordion" id="marineAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#marineOne">Marine Seismic, MBES, SSS, SBP, Magnetometer, ADCP, Wave/Tide, Grab Samples</button>
            </h2>
            <div id="marineOne" class="accordion-collapse collapse show" data-bs-parent="#marineAccordion">
              <div class="accordion-body">
                Comprehensive marine geophysical and environmental survey suite for high-resolution seabed mapping, sub-surface profiling, and hydrodynamic monitoring — enabling precise engineering design and situational awareness.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Geotechnical & Lab Testing -->
      <div class="tab-pane fade" id="geo" role="tabpanel">
        <div class="accordion" id="geoAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#geoOne">CPT, SCPT, Boreholes, Lab Analysis</button>
            </h2>
            <div id="geoOne" class="accordion-collapse collapse show" data-bs-parent="#geoAccordion">
              <div class="accordion-body">
                In-situ testing and laboratory analysis including cone penetration tests (CPT), seismic CPT, borehole investigations, and advanced laboratory testing for shear strength, compressibility, and soil classification.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Subsea Systems -->
      <div class="tab-pane fade" id="subsea" role="tabpanel">
        <div class="accordion" id="subseaAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#subseaOne">Route Engineering, Burial Assessment, Deployment</button>
            </h2>
            <div id="subseaOne" class="accordion-collapse collapse show" data-bs-parent="#subseaAccordion">
              <div class="accordion-body">
                Engineering and planning for subsea infrastructure, including route design, burial assessment, and installation support for cable systems, pipelines, and sensor networks.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Digital Twins & Simulation -->
      <div class="tab-pane fade" id="twins" role="tabpanel">
        <div class="accordion" id="twinsAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#twinsOne">3D Mapping, Hydrodynamic, Acoustic, Electromagnetic Modelling</button>
            </h2>
            <div id="twinsOne" class="accordion-collapse collapse show" data-bs-parent="#twinsAccordion">
              <div class="accordion-body">
                Digital replicas integrating computational fluid dynamics, acoustics, and electromagnetics for predictive performance, mission planning, and dynamic condition analysis.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Edge AI & Sensor Fusion -->
      <div class="tab-pane fade" id="ai" role="tabpanel">
        <div class="accordion" id="aiAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#aiOne">Edge AI & Sensor Fusion</button>
            </h2>
            <div id="aiOne" class="accordion-collapse collapse show" data-bs-parent="#aiAccordion">
              <div class="accordion-body">
                Development of edge-processing AI systems integrating multi-sensor inputs for real-time detection, classification, and situational decision support in constrained communication environments.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Defence Testing & Validation -->
      <div class="tab-pane fade" id="defence" role="tabpanel">
        <div class="accordion" id="defenceAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#defenceOne">Hydrodynamics, Acoustic & Magnetic Ranges</button>
            </h2>
            <div id="defenceOne" class="accordion-collapse collapse show" data-bs-parent="#defenceAccordion">
              <div class="accordion-body">
                Turnkey design and execution of naval test facilities including cavitation tunnels, acoustic ranges, magnetic signature management systems, and calibration facilities for strategic validation.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Systems Integration & Deployment -->
      <div class="tab-pane fade" id="integration" role="tabpanel">
        <div class="accordion" id="integrationAccordion">
          <div class="accordion-item fade-up">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#integrationOne">Systems Integration & Deployment</button>
            </h2>
            <div id="integrationOne" class="accordion-collapse collapse show" data-bs-parent="#integrationAccordion">
              <div class="accordion-body">
                End-to-end project execution integrating sensors, data links, subsea assets, and control nodes into operational frameworks for both research and defence environments.
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== CTA ===================== -->
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
