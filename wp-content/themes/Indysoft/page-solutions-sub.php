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

<style>
  /* Prevent blue blurs from expanding the layout */
  section { overflow:hidden; }

  </style>

<!-- Hero Section -->
<section class="py-5">
  <div class="container py-md-4" style="max-width:1500px;">
    <div class="row align-items-center" style="padding:40px 0;gap:61px;">
      
      <!-- Text Column -->
      <div class="col-12 col-md-8 mb-4 mb-md-0" style="max-width:900px;flex:0 0 auto;">
        
        <!-- Main Headline -->
        <h1 style="font-family:'elza',sans-serif;font-weight:600;font-size:clamp(48px, 8vw, 100px);line-height:1.1;color:#003040;letter-spacing:clamp(-2px, -0.25vw, -2.5px);margin-bottom:40px;">
          Where Compliance Meets Confidence
        </h1>
        
        <!-- Text Content Wrapper -->
        <div style="margin-bottom:32px;">
          <div style="max-width:791px;">
            <p style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#265e71;margin-bottom:20px;">
              IndySoft's calibration management software is purpose-built for precision-driven industries where accuracy, compliance, and operational efficiency are mission-critical. From real-time scheduling to certificate generation and electronic signatures (fully 21 CFR Part 11 compliant), our platform delivers complete lifecycle control for every calibration asset—no matter the complexity of your sites, processes, or regulations.
            </p>
            <p style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#265e71;margin-bottom:0;">
              With IndySoft, calibration isn't just a checkbox for compliance. It becomes a driver of quality assurance, customer trust, and operational excellence.
            </p>
          </div>
        </div>
        
        <!-- CTA Button -->
        <div>
          <button class="btn" style="background:#0770fc;color:#f4f4f4;border:none;border-radius:0;padding:14px 22px;font-family:'elza',sans-serif;font-weight:600;font-size:14px;letter-spacing:-0.35px;">
            Request a Demo
          </button>
        </div>
        
      </div>
      
      <!-- Image Column -->
      <div class="col-12 col-md-4 position-relative" style="max-width:555px;flex:0 0 auto;">
        <div class="position-relative">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(19.695px);width:556px;height:494px;border-radius:7.878px;top:0;left:-35px;z-index:1;"></div>
          <!-- Main dashboard image -->
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/5e29b7ff5e49b375a4293b82aeebb76ef0740389.png" 
               alt="IndySoft Calibration Management Dashboard" 
               class="img-fluid position-relative" 
               style="border-radius:7.936px;z-index:2;width:100%;max-width:555px;height:auto;object-fit:contain;">
        </div>
      </div>
      
    </div>
  </div>
</section>


<!-- Key Features Section -->
<section class="py-5" style="background:#f8f9fb;">
  <div class="container py-md-4" style="max-width:1500px;">
    
    <!-- Section Header -->
    <div class="row justify-content-center text-center mb-5" style="padding-top:80px;">
      <div class="col-12">
        <h2 class="mb-4" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#003040;letter-spacing:-1.8px;">
          Key Features
        </h2>
        <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;max-width:638px;margin:0 auto;">
          Lorem ipsum
        </p>
      </div>
    </div>
    
    <!-- Features Content -->
    <div class="row align-items-center" style="padding-bottom:40px;">
      
      <!-- Dashboard Image -->
      <div class="col-12 col-md-6 mb-5 mb-md-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dad461e8d5bbce0d2b0228920c7d1721bb23eaf1.png" 
             alt="IndySoft Features Dashboard" 
             class="img-fluid"
             style="width:100%;max-width:645px;height:auto;object-fit:contain;border-radius:8px;box-shadow:0px 0px 20px 0px rgba(46,90,239,0.1);">
      </div>
      
      <!-- Features Accordion -->
      <div class="col-12 col-md-6">
        <div style="max-width:736px;">
          
          <!-- Custom Accordion Styles -->
          <style>
            .custom-accordion .accordion-button::after {
              display: none; /* Hide default Bootstrap caret */
            }
            .custom-accordion .accordion-button .toggle-icon::before {
              content: '+';
              font-size: 28px;
              font-weight: 300;
              color: #0770fc;
              line-height: 1;
            }
            .custom-accordion .accordion-button:not(.collapsed) .toggle-icon::before {
              content: '−';
            }
          </style>

          <div class="accordion custom-accordion" id="featuresAccordion">
            
            <!-- Feature Item 1 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading1">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/21f07547f45efa293134e38572764a4798bec5ba.svg" 
                         alt="Target Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Configurable Test Points
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Over 170+ data fields per point for detailed, customizable tracking of calibration parameters.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 2 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading2">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/7533b88a46b9446a784c04dca71706355a6e2e1f.svg" 
                         alt="ISO Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Advanced Uncertainty Budgeting
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    ISO 17025 compliant uncertainty calculations with automated propagation and reporting.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 3 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/36e7eda6d2d19d6b2ef4bd6af6385e4f675a2474.svg" 
                         alt="Clock Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Real-Time Insights
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Live dashboards and analytics provide instant visibility into calibration status and compliance metrics.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 4 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/7c4ed52dc47157b14d636f9ab8e88f2ae5ee0f4f.svg" 
                         alt="Mobile Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Mobile Certificate Access
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Access calibration certificates and equipment history from any mobile device, anywhere, anytime.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 5 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/1c6926f18c392699b45429ab7dd42553a28e9b8e.svg" 
                         alt="Multi Entity Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Multi-Entity Support
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Manage multiple companies, divisions, or labs within a single platform with role-based access controls.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 6 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ed43b04150875258bda39e829a725ad5dc335e9d.svg" 
                         alt="Schedule Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Automated Scheduling
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Smart scheduling algorithms optimize technician time and prevent equipment downtime with proactive alerts.
                  </p>
                </div>
              </div>
            </div>

            <!-- Feature Item 7 -->
            <div class="accordion-item" style="border:none;border-bottom:1px solid rgba(7,112,252,0.3);background:transparent;">
              <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed d-flex align-items-center justify-content-between py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7" style="border:none;background:transparent;box-shadow:none;padding-left:0;padding-right:0;">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/c23c559e3219a70960527141629eff4047f6c768.svg" 
                         alt="Compliance Icon" class="me-3" style="width:34px;height:34px;">
                    <h4 class="mb-0" style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;line-height:1;color:#003040;">
                      Full Compliance Suite
                    </h4>
                  </div>
                  <span class="toggle-icon" style="width:20px;height:20px;display:flex;align-items:center;justify-content:center;"></span>
                </button>
              </h2>
              <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#featuresAccordion">
                <div class="accordion-body" style="padding:0 0 16px 47px;">
                  <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
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
<section class="py-5" style="background:#f8f9fb;">
  <div class="container py-md-4" style="max-width:1500px;">
    
    <!-- Section Header -->
    <div class="row justify-content-center text-center mb-5" style="padding-top:120px;">
      <div class="col-12">
        <h2 class="mb-4" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#003040;letter-spacing:-1.8px;">
          Benefits of IndySoft Calibration
        </h2>
        <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;max-width:638px;margin:0 auto;">
          Lorem ipsum
        </p>
      </div>
    </div>
    
    <!-- Benefits Grid -->
    <div class="row g-4" style="padding-bottom:120px;">
      
      <!-- Benefit Card 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20.721px);width:100%;height:100%;border-radius:8.288px;top:10px;left:15px;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white p-4 h-100" style="z-index:2;border-radius:0;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/337294ba86f802afcf77b3143e0fd355eaf7f951.svg" 
                 alt="Audit Ready Icon" class="mb-3" style="width:41px;height:41px;">
            <h3 class="mb-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:22.793px;line-height:1.1;color:#003040;letter-spacing:-0.4559px;">
              Stay Audit-Ready
            </h3>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16.577px;line-height:1.4;color:#1c5263;">
              Simplify audit preparation with complete traceability, automated recordkeeping, and built-in compliance tools.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20.721px);width:100%;height:100%;border-radius:8.288px;top:10px;left:15px;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white p-4 h-100" style="z-index:2;border-radius:0;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/18fbda1cfa5976cc786b5a5e2211b269f40487f2.svg" 
                 alt="Downtime Icon" class="mb-3" style="width:41px;height:41px;">
            <h3 class="mb-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:22.793px;line-height:1.1;color:#003040;letter-spacing:-0.4559px;">
              Eliminate Downtime
            </h3>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16.577px;line-height:1.4;color:#1c5263;">
              Proactive scheduling and alerts ensure critical equipment is always ready and reliable.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20.721px);width:100%;height:100%;border-radius:8.288px;top:10px;left:15px;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white p-4 h-100" style="z-index:2;border-radius:0;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ddcce6595bceee2e3bcc711c80cad81e4e7b8ef8.svg" 
                 alt="Manual Errors Icon" class="mb-3" style="width:41px;height:41px;">
            <h3 class="mb-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:22.793px;line-height:1.1;color:#003040;letter-spacing:-0.4559px;">
              Reduce Manual Errors
            </h3>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16.577px;line-height:1.4;color:#1c5263;">
              Go beyond basic tracking—IndySoft empowers you to manage, maintain, and optimize your assets with ease.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20.721px);width:100%;height:100%;border-radius:8.288px;top:10px;left:15px;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white p-4 h-100" style="z-index:2;border-radius:0;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/d1f3b0bdd61ac893b72002df0b7eaea5b0be4d1b.svg" 
                 alt="Documentation Icon" class="mb-3" style="width:41px;height:41px;">
            <h3 class="mb-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:22.793px;line-height:1.1;color:#003040;letter-spacing:-0.4559px;">
              Streamline Documentation
            </h3>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16.577px;line-height:1.4;color:#1c5263;">
              Generate calibration certificates and reports instantly, with all historical data stored in a secure audit trail.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20.721px);width:100%;height:100%;border-radius:8.288px;top:10px;left:15px;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white p-4 h-100" style="z-index:2;border-radius:0;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/185d9904f72605832e52441a7f7adf8c60364025.svg" 
                 alt="Growth Icon" class="mb-3" style="width:41px;height:41px;">
            <h3 class="mb-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:22.793px;line-height:1.1;color:#003040;letter-spacing:-0.4559px;">
              Scalable for Growth
            </h3>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16.577px;line-height:1.4;color:#1c5263;">
              Whether managing a single lab or global operations, IndySoft adapts to your processes and scales with your business.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Benefit Card 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="position-relative h-100">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20.721px);width:100%;height:100%;border-radius:8.288px;top:10px;left:15px;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white p-4 h-100" style="z-index:2;border-radius:0;">
          <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1248_3409)">
<path d="M31.9192 21.2258V19.0798H22.0267C22.0267 21.8565 19.7757 24.1076 16.9989 24.1076C14.2221 24.1076 11.9712 21.8566 11.9712 19.0798H2.07861V21.2258L6.3743 21.6806C6.64225 22.779 7.07608 23.8124 7.64777 24.7527L4.93123 28.1127L7.96606 31.1475L11.326 28.431C12.2663 29.0027 13.2997 29.4365 14.3981 29.7044L14.853 34.0001H19.1448L19.5997 29.7044C20.6981 29.4365 21.7315 29.0027 22.6718 28.431L26.0317 31.1475L29.0666 28.1127L26.35 24.7527C26.9217 23.8124 27.3556 22.779 27.6235 21.6806L31.9192 21.2258Z" fill="#0770FC"/>
<path d="M16.9988 0C14.8738 0 13.145 1.72882 13.145 3.85375C13.145 5.97869 14.8738 7.70744 16.9988 7.70744C19.1237 7.70744 20.8525 5.97869 20.8525 3.85375C20.8525 1.72882 19.1237 0 16.9988 0Z" fill="#0770FC"/>
<path d="M21.1025 8.77295H12.8964C11.0072 8.77302 9.47021 10.3099 9.47021 12.1991V17.0875H24.5286V12.1991C24.5286 10.3099 22.9917 8.77295 21.1025 8.77295Z" fill="#0770FC"/>
<path d="M8.82238 1.78027C6.91878 1.78027 5.37012 3.329 5.37012 5.23254C5.37012 7.1208 6.89421 8.65897 8.77676 8.6836C9.55637 7.77171 10.6321 7.12086 11.8542 6.88213C12.1221 6.39172 12.2746 5.82966 12.2746 5.23254C12.2746 3.32893 10.726 1.78027 8.82238 1.78027Z" fill="#0770FC"/>
<path d="M5.14784 9.63916C3.45548 9.63916 2.07861 11.016 2.07861 12.7084V17.0875H7.47751V12.1991C7.47751 11.2737 7.71112 10.402 8.12185 9.63916H5.14784Z" fill="#0770FC"/>
<path d="M25.1764 1.78027C23.2728 1.78027 21.7241 3.329 21.7241 5.23254C21.7241 5.82959 21.8766 6.39172 22.1445 6.88213C23.3667 7.12086 24.4424 7.77171 25.222 8.6836C27.1046 8.65903 28.6286 7.1208 28.6286 5.23254C28.6286 3.32893 27.08 1.78027 25.1764 1.78027Z" fill="#0770FC"/>
<path d="M28.8505 9.63916H25.8765C26.2872 10.402 26.5208 11.2737 26.5208 12.1991V17.0875H31.9197V12.7083C31.9197 11.016 30.5428 9.63916 28.8505 9.63916Z" fill="#0770FC"/>
</g>
<defs>
<clipPath id="clip0_1248_3409">
<rect width="34" height="34" fill="white" transform="translate(-0.000488281)"/>
</clipPath>
</defs>
</svg>

            <h3 class="mb-3 mt-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:22.793px;line-height:1.1;color:#003040;letter-spacing:-0.4559px;">
              Empower Your Team
            </h3>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16.577px;line-height:1.4;color:#1c5263;">
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
  <div class="container py-md-4" style="max-width:1500px;">
    
    <!-- Section Header -->
    <div class="row justify-content-center text-center mb-5" style="padding-top:60px;">
      <div class="col-12">
        <h2 class="mb-4" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#003040;letter-spacing:-1.8px;">
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
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20px);width:100%;height:195px;border-radius:8px;top:17px;left:0;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white d-flex align-items-center" style="height:195px;z-index:2;border-radius:0;">
            <!-- Text Content -->
            <div class="p-4" style="flex:1;max-width:calc(100% - 158px);">
              <h3 class="mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#0770fc;">
                Calibration Labs
              </h3>
              <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;">
                Simplify audits, automate documentation, and provide customers with instant access to certificates.
              </p>
            </div>
            <!-- Image -->
            <div class="position-absolute" style="right:0;top:0;width:158px;height:195px;background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fdf9ab5d9cd8e4d1bd79e0c22e0acc2c141ca003.png');background-size:cover;background-position:center;"></div>
          </div>
        </div>
      </div>
      
      <!-- Life Sciences Card -->
      <div class="col-12 col-lg-4 mb-4 mb-lg-0">
        <div class="position-relative">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20px);width:100%;height:195px;border-radius:8px;top:17px;left:0;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white d-flex align-items-center" style="height:195px;z-index:2;border-radius:0;">
            <!-- Text Content -->
            <div class="p-4" style="flex:1;max-width:calc(100% - 158px);">
              <h3 class="mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#0770fc;">
                Life Sciences
              </h3>
              <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;">
                Maintain rigorous compliance and secure audit trails with zero room for error.
              </p>
            </div>
            <!-- Image -->
            <div class="position-absolute" style="right:0;top:0;width:158px;height:195px;background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/3c791d725b9cefc5e81682b69bd4ec6422302087.png');background-size:cover;background-position:center;"></div>
          </div>
        </div>
      </div>
      
      <!-- Manufacturing Card -->
      <div class="col-12 col-lg-4">
        <div class="position-relative">
          <!-- Blue blur background -->
          <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20px);width:100%;height:195px;border-radius:8px;top:17px;left:0;z-index:1;"></div>
          <!-- Card content -->
          <div class="position-relative bg-white d-flex align-items-center" style="height:195px;z-index:2;border-radius:0;">
            <!-- Text Content -->
            <div class="p-4" style="flex:1;max-width:calc(100% - 158px);">
              <h3 class="mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#0770fc;">
                Manufacturing
              </h3>
              <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;">
                Ensure consistency across global operations while streamlining internal calibration processes.
              </p>
            </div>
            <!-- Image -->
            <div class="position-absolute" style="right:0;top:0;width:158px;height:195px;background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/cf4d28473a589ef72a533c6da13ce0cdfe387e6d.png');background-size:cover;background-position:center;"></div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- CTA Solutions Section -->
<section class="cta-solutions-section pb-0 position-relative w-100 animate-fade-up" style="padding:100px 0 0 0;">
  <div class="container pt-md-4" style="max-width:1500px;">
    <div class="row justify-content-center">
      <div class="col-12">
        
        <!-- CTA Card -->
        <div class=" balance d-flex flex-column align-items-center justify-content-center text-center" style="background:#173758;padding:80px 40px;min-height:300px;border-radius:8px 8px 0 0;">
          
          <!-- Headline -->
          <div class="mb-3">
            <h2 class="m-0 text-white" style="font-family:'elza',sans-serif;font-weight:600;font-size:48px;line-height:1.1;max-width:800px;">
            Ensure every calibration counts
            </h2>
          </div>

          <p class="mb-3" style="max-width:630px;font-family:'elza',sans-serif;font-weight:400;font-size:18px;line-height:1.4;color:#ffffff;opacity:0.9;">
          IndySoft transforms compliance into confidence with a single platform that integrates scheduling, certificates, and full lifecycle management.                </p>

                <p class=" mb-3" style="max-width:630px;font-family:'elza',sans-serif;font-weight:400;font-size:18px;line-height:1.4;color:#ffffff;opacity:0.9;">
                Request a Demo Today to see how IndySoft can makeyour calibration process simpler, smarter, and audit-proof.                </p>
          
          <!-- CTA Buttons -->
          <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 animate-fade-up">
            
          <button class="btn" style="background:#0770fc;color:#f4f4f4;border:none;border-radius:0;padding:14px 22px;font-family:'elza',sans-serif;font-weight:600;font-size:14px;letter-spacing:-0.35px;">
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