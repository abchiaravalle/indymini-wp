<?php
/**
 * Template Name: Solutions Sub Page
 * 
 * Custom solutions sub page template
 *
 * @package Indysoft
 */

get_header();
?>

<!-- Hero Section -->
<section class="solutions-sub-hero py-5">
  <div class="container py-md-4">
    <div class="row align-items-center">
      
      <!-- Text Column -->
      <div class="col-12 col-md-8 mb-4 mb-md-0 hero-text">
        <h1>
          Where Compliance Meets Confidence
        </h1>
        
        <div class="mb-32">
          <div style="max-width:791px;">
            <p>
              IndySoft's calibration management software is purpose-built for precision-driven industries where accuracy, compliance, and operational efficiency are mission-critical. From real-time scheduling to certificate generation and electronic signatures (fully 21 CFR Part 11 compliant), our platform delivers complete lifecycle control for every calibration asset—no matter the complexity of your sites, processes, or regulations.
            </p>
            <p>
              With IndySoft, calibration isn't just a checkbox for compliance. It becomes a driver of quality assurance, customer trust, and operational excellence.
            </p>
          </div>
        </div>
        
        <div>
          <button class="btn btn-brand-secondary">
            Request a Demo
          </button>
        </div>
      </div>
      
      <!-- Image Column -->
      <div class="col-12 col-md-4 position-relative image-col">
        <div class="position-relative">
          <div class="position-absolute blue-blur"></div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/5e29b7ff5e49b375a4293b82aeebb76ef0740389.png" 
               alt="IndySoft Calibration Management Dashboard" 
               class="img-fluid position-relative main-image">
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Key Features Section -->
<section class="solutions-sub-key-features py-5">
  <div class="container py-md-4">
    
    <div class="row justify-content-center text-center mb-5 pt-60">
      <div class="col-12">
        <h2 class="mb-4 section-title">
          Key Features
        </h2>
        <p class="mb-0 section-desc">
          Lorem ipsum
        </p>
      </div>
    </div>
    
    <!-- Features Content -->
    <div class="row align-items-center pb-40">
      
      <!-- Dashboard Image -->
      <div class="col-12 col-md-6 mb-5 mb-md-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dad461e8d5bbce0d2b0228920c7d1721bb23eaf1.png" 
             alt="IndySoft Features Dashboard" 
             class="img-fluid image-max-645">
      </div>
      
      <!-- Features Accordion -->
      <div class="col-12 col-md-6">
        <div style="max-width:736px;">
          <div class="accordion custom-accordion" id="featuresAccordion">
            
            <!-- Feature Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading1">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/21f07547f45efa293134e38572764a4798bec5ba.svg" 
                         alt="Target Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Configurable Test Points
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    Over 170+ data fields per point for detailed, customizable tracking of calibration parameters.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading2">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/7533b88a46b9446a784c04dca71706355a6e2e1f.svg" 
                         alt="ISO Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Advanced Uncertainty Budgeting
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    ISO 17025 compliant uncertainty calculations with automated propagation and reporting.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/36e7eda6d2d19d6b2ef4bd6af6385e4f675a2474.svg" 
                         alt="Clock Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Real-Time Insights
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    Live dashboards and analytics provide instant visibility into calibration status and compliance metrics.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/7c4ed52dc47157b14d636f9ab8e88f2ae5ee0f4f.svg" 
                         alt="Mobile Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Mobile Certificate Access
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    Access calibration certificates and equipment history from any mobile device, anywhere, anytime.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/1c6926f18c392699b45429ab7dd42553a28e9b8e.svg" 
                         alt="Multi Entity Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Multi-Entity Support
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    Manage multiple companies, divisions, or labs within a single platform with role-based access controls.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 6 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ed43b04150875258bda39e829a725ad5dc335e9d.svg" 
                         alt="Schedule Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Automated Scheduling
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    Smart scheduling algorithms optimize technician time and prevent equipment downtime with proactive alerts.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 7 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/c23c559e3219a70960527141629eff4047f6c768.svg" 
                         alt="Compliance Icon" class="me-3 icon-41">
                    <h4 class="mb-0">
                      Full Compliance Suite
                    </h4>
                  </div>
                  <span class="toggle-icon"></span>
                </button>
              </h2>
              <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#featuresAccordion">
                <div class="accordion-body">
                  <p class="mb-0">
                    21 CFR Part 11 compliant electronic signatures, audit trails, and regulatory reporting built-in.
                  </p>
                </div>
              </div>
            </div>

          </div>
          
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="solutions-sub-benefits py-5">
  <div class="container py-md-4">
    
    <div class="row justify-content-center text-center mb-5 pt-120">
      <div class="col-12">
        <h2 class="mb-4 section-title">
          Benefits of IndySoft Calibration
        </h2>
        <p class="mb-0 section-desc" style="max-width:638px;margin:0 auto;">
          Lorem ipsum
        </p>
      </div>
    </div>
    
    <!-- Benefits Grid -->
    <div class="row g-4 pb-120">
      
      <!-- Benefit Card 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <div class="position-absolute card-blur"></div>
          <div class="position-relative bg-white p-4 h-100 benefit-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/337294ba86f802afcf77b3143e0fd355eaf7f951.svg" 
                 alt="Audit Ready Icon" class="mb-3 icon-41">
            <h3 class="mb-3">
              Stay Audit-Ready
            </h3>
            <p class="mb-0">
              Simplify audit preparation with complete traceability, automated recordkeeping, and built-in compliance tools.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <div class="position-absolute card-blur"></div>
          <div class="position-relative bg-white p-4 h-100 benefit-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/18fbda1cfa5976cc786b5a5e2211b269f40487f2.svg" 
                 alt="Downtime Icon" class="mb-3 icon-41">
            <h3 class="mb-3">
              Eliminate Downtime
            </h3>
            <p class="mb-0">
              Proactive scheduling and alerts ensure critical equipment is always ready and reliable.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <div class="position-absolute card-blur"></div>
          <div class="position-relative bg-white p-4 h-100 benefit-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddcce6595bceee2e3bcc711c80cad81e4e7b8ef8.svg" 
                 alt="Manual Errors Icon" class="mb-3 icon-41">
            <h3 class="mb-3">
              Reduce Manual Errors
            </h3>
            <p class="mb-0">
              Go beyond basic tracking—IndySoft empowers you to manage, maintain, and optimize your assets with ease.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <div class="position-absolute card-blur"></div>
          <div class="position-relative bg-white p-4 h-100 benefit-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/d1f3b0bdd61ac893b72002df0b7eaea5b0be4d1b.svg" 
                 alt="Documentation Icon" class="mb-3 icon-41">
            <h3 class="mb-3">
              Streamline Documentation
            </h3>
            <p class="mb-0">
              Generate calibration certificates and reports instantly, with all historical data stored in a secure audit trail.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <div class="position-absolute card-blur"></div>
          <div class="position-relative bg-white p-4 h-100 benefit-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/185d9904f72605832e52441a7f7adf8c60364025.svg" 
                 alt="Growth Icon" class="mb-3 icon-41">
            <h3 class="mb-3">
              Scalable for Growth
            </h3>
            <p class="mb-0">
              Whether managing a single lab or global operations, IndySoft adapts to your processes and scales with your business.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <div class="position-absolute card-blur"></div>
          <div class="position-relative bg-white p-4 h-100 benefit-card">
            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
            <h3 class="mb-3 mt-2">
              Empower Your Team
            </h3>
            <p class="mb-0">
              User-friendly dashboards and mobile access free up valuable technician time for high-value work.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Use Cases Section -->
<section class="py-5" style="background:#ffffff;">
  <div class="container py-md-4">
    
    <div class="row justify-content-center text-center mb-5" style="padding-top:60px;">
      <div class="col-12">
        <h2 class="mb-4 section-title">
          Use Cases
        </h2>
        <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;max-width:630px;margin:0 auto;">
          Lorem ipsum
        </p>
      </div>
    </div>
    
    <!-- Use Cases Cards -->
    <div class="row g-3" style="padding-bottom:60px;">
      
      <!-- Calibration Labs Card -->
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="position-relative">
          <div class="position-absolute use-case-blur"></div>
          <div class="position-relative bg-white d-flex align-items-center use-case-card">
            <div class="p-4 text">
              <h3 class="mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#0770fc;">
                Calibration Labs
              </h3>
              <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;">
                Simplify audits, automate documentation, and provide customers with instant access to certificates.
              </p>
            </div>
            <div class="position-absolute image use-case-image" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fdf9ab5d9cd8e4d1bd79e0c22e0acc2c141ca003.png');"></div>
          </div>
        </div>
      </div>
      
      <!-- Life Sciences Card -->
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="position-relative">
          <div class="position-absolute use-case-blur"></div>
          <div class="position-relative bg-white d-flex align-items-center use-case-card">
            <div class="p-4 text">
              <h3 class="mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#0770fc;">
                Life Sciences
              </h3>
              <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;">
                Maintain rigorous compliance and secure audit trails with zero room for error.
              </p>
            </div>
            <div class="position-absolute image use-case-image" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/3c791d725b9cefc5e81682b69bd4ec6422302087.png');"></div>
          </div>
        </div>
      </div>
      
      <!-- Manufacturing Card -->
      <div class="col-12 col-lg-4">
        <div class="position-relative">
          <div class="position-absolute use-case-blur"></div>
          <div class="position-relative bg-white d-flex align-items-center use-case-card">
            <div class="p-4 text">
              <h3 class="mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#0770fc;">
                Manufacturing
              </h3>
              <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;">
                Ensure consistency across global operations while streamlining internal calibration processes.
              </p>
            </div>
            <div class="position-absolute image use-case-image" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/cf4d28473a589ef72a533c6da13ce0cdfe387e6d.png');"></div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- CTA Solutions Section -->
<section class="cta-solutions-section pb-0 position-relative w-100 animate-fade-up">
  <div class="container pt-md-4">
    <div class="row justify-content-center">
      <div class="col-12">
        
        <!-- CTA Card -->
        <div class=" balance d-flex flex-column align-items-center justify-content-center text-center cta-card">
          
          <!-- Headline -->
          <div class="mb-3">
            <h2 class="m-0 text-white">
            Ensure every calibration counts
            </h2>
          </div>

          <p class="mb-3">
          IndySoft transforms compliance into confidence with a single platform that integrates scheduling, certificates, and full lifecycle management.                </p>

                <p class=" mb-3">
                Request a Demo Today to see how IndySoft can makeyour calibration process simpler, smarter, and audit-proof.                </p>
          
          <!-- CTA Buttons -->
          <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 animate-fade-up">
            
            <button class="btn btn-brand-secondary">
              Request a Demo
            </button>
          
        </div>
        
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>