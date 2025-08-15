<?php
/**
 * Template Name: Solutions Page
 * 
 * Custom solutions page template
 *
 * @package Indysoft
 */

get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    
    <!-- Swiper.js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <?php wp_head(); ?>
</head>

<!-- Solutions Hero Section -->
<section class="solutions-hero position-relative w-100 d-flex flex-column align-items-center py-5" style="padding:80px 0;">
  <div class="container" style="max-width:1500px;">
    
    <!-- Title Section -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12">
        <h1 class="m-0 mb-4" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1.1;color:#003040;letter-spacing:-1.8px;">
          Powerful. Flexible. Complete.
        </h1>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1C5263;">
              IndySoft is the all-in-one platform for Calibration, Tooling, Maintenance, and Asset Management—built to streamline compliance, eliminate downtime, and integrate seamlessly with your existing tools. Designed for regulated industries, IndySoft gives you a single source of truth for every asset across its lifecycle.
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Full Width Blue Section -->
<style>
/* Hover animations for feature items */
.feature-item:hover {
  opacity: 1 !important;
}

.feature-item:hover .arrow-icon {
  opacity: 1 !important;
  transform: rotate(45deg) translateX(2px);
}

/* Smooth transitions */
.feature-item .arrow-icon {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.feature-item {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<style>
@media(max-width:576px){
  section{padding-top:60px!important;padding-bottom:60px!important;}
}
</style>

<section class="position-relative w-100" style="background:#eef5ff;padding:60px 0;">
  <div class="container" style="max-width:1500px;">
    <div class="row">
      
      <!-- Left Side - Content -->
      <div class="col-12 col-lg-5 d-flex flex-column justify-content-start px-4">
        
        <!-- Main Headline -->
        <div class="mb-5">
          <h2 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:40px;line-height:1.05;color:#003040;letter-spacing:-1.6px;max-width:582px;">
            Explore our specialized solutions
          </h2>
        </div>

        <!-- Feature List -->
        <div class="features-list mb-5">
          
          <!-- Calibration - Active -->
          <div class="feature-item d-flex align-items-center justify-content-between py-3 border-bottom hover-trigger active" 
               data-category="calibration" 
               style="border-bottom:1px solid rgba(7,112,252,0.3);cursor:pointer;transition:all 0.3s ease;">
            <div class="d-flex align-items-center">
              <div class="feature-icon me-3" style="width:34px;height:34px;">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1389_790)">
<path d="M33.0039 16.0039H21.8797C21.4826 14.0553 19.9447 12.5174 17.9961 12.1203V0.996094C17.9961 0.44552 17.5506 0 17 0C16.4494 0 16.0039 0.44552 16.0039 0.996094V12.1203C14.0553 12.5174 12.5174 14.0553 12.1203 16.0039H0.996094C0.44552 16.0039 0 16.4494 0 17C0 17.5506 0.44552 17.9961 0.996094 17.9961H12.1203C12.5174 19.9447 14.0553 21.4826 16.0039 21.8797V33.0039C16.0039 33.5545 16.4494 34 17 34C17.5506 34 17.9961 33.5545 17.9961 33.0039V21.8797C19.9447 21.4826 21.4826 19.9447 21.8797 17.9961H33.0039C33.5545 17.9961 34 17.5506 34 17C34 16.4494 33.5545 16.0039 33.0039 16.0039Z" fill="#0770FC"/>
<path d="M19.9883 2.35974V8.58579C22.5198 9.4887 24.5114 11.4802 25.4141 14.0116H31.6402C30.449 8.16557 25.8341 3.55094 19.9883 2.35974Z" fill="#0770FC"/>
<path d="M2.35938 14.0116H8.58543C9.48815 11.4802 11.4798 9.48852 14.0113 8.58579V2.35974C8.16521 3.55094 3.55057 8.16557 2.35938 14.0116Z" fill="#0770FC"/>
<path d="M8.58543 19.9883H2.35938C3.55057 25.8344 8.16521 30.449 14.0113 31.6402V25.4141C11.4798 24.5114 9.48815 22.5198 8.58543 19.9883Z" fill="#0770FC"/>
<path d="M25.4141 19.9883C24.5114 22.5198 22.5198 24.5114 19.9883 25.4141V31.6402C25.8341 30.449 30.449 25.8344 31.6402 19.9883H25.4141Z" fill="#0770FC"/>
  </g>
  <defs>
<clipPath id="clip0_1389_790">
      <rect width="34" height="34" fill="white"/>
    </clipPath>
  </defs>
</svg>              </div>
              <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Calibration</span>
            </div>

            <!-- Custom Navigation Arrows -->
            <div class="custom-navigation">
              <button class="swiper-button-prev-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position:absolute; left:16px;">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="40" height="40" rx="10" transform="matrix(-1 0 0 1 40 0)" fill="white"/>
                  <path d="M22.5 15L17.5 20L22.5 25V15Z" fill="#002E3E"/>
                </svg>
              </button>
              <button class="swiper-button-next-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position:absolute; right:16px;">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="40" height="40" rx="10" fill="white"/>
                  <path d="M17.5 15L22.5 20L17.5 25V15Z" fill="#002E3D"/>
                </svg>
              </button>
            </div>
            <div class="arrow-icon" style="width:22px;height:22px;transform:rotate(45deg);opacity:0;transition:all 0.3s ease;">
                              <img src="<?= get_stylesheet_directory_uri(); ?>/assets/2f871d61184dee2ed38b66a45adab93e17a1fcf4.svg" alt="Arrow" style="width:16px;height:16px;object-fit:contain;" />
            </div>
          </div>

          <!-- Tooling -->
          <div class="feature-item d-flex align-items-center justify-content-between py-3 border-bottom hover-trigger" 
               data-category="tooling" 
               style="border-bottom:1px solid rgba(7,112,252,0.3);opacity:0.5;cursor:pointer;transition:all 0.3s ease;">
            <div class="d-flex align-items-center">
              <div class="feature-icon me-3" style="width:34px;height:34px;">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/e2b81386ceb92794f139d41b3a9a8bf2fb963b90.svg" alt="Tooling" style="width:100%;height:100%;object-fit:contain;" />
              </div>
              <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Tooling</span>
            </div>
            <div class="arrow-icon" style="width:22px;height:22px;transform:rotate(45deg);opacity:0;transition:all 0.3s ease;">
                              <img src="<?= get_stylesheet_directory_uri(); ?>/assets/2f871d61184dee2ed38b66a45adab93e17a1fcf4.svg" alt="Arrow" style="width:16px;height:16px;object-fit:contain;" />
            </div>
          </div>

          <!-- Maintenance Management -->
          <div class="feature-item d-flex align-items-center justify-content-between py-3 border-bottom hover-trigger" 
               data-category="maintenance" 
               style="border-bottom:1px solid rgba(7,112,252,0.3);opacity:0.5;cursor:pointer;transition:all 0.3s ease;">
            <div class="d-flex align-items-center">
              <div class="feature-icon me-3" style="width:34px;height:34px;">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/21b19dcbcf99c375674dff05c82420e775de19a9.svg" alt="Maintenance" style="width:100%;height:100%;object-fit:contain;" />
              </div>
              <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Maintenance Management</span>
            </div>
            <div class="arrow-icon" style="width:22px;height:22px;transform:rotate(45deg);opacity:0;transition:all 0.3s ease;">
                              <img src="<?= get_stylesheet_directory_uri(); ?>/assets/2f871d61184dee2ed38b66a45adab93e17a1fcf4.svg" alt="Arrow" style="width:16px;height:16px;object-fit:contain;" />
            </div>
          </div>

          <!-- Asset Management -->
          <div class="feature-item d-flex align-items-center justify-content-between py-3 hover-trigger" 
               data-category="asset" 
               style="opacity:0.5;cursor:pointer;transition:all 0.3s ease;">
            <div class="d-flex align-items-center">
              <div class="feature-icon me-3" style="width:34px;height:34px;">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/35e77743fdae5ae5db199d4fd1150c50a2100bb3.svg" alt="Asset Management" style="width:100%;height:100%;object-fit:contain;" />
              </div>
              <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Asset Management</span>
            </div>
            <div class="arrow-icon" style="width:22px;height:22px;transform:rotate(45deg);opacity:0;transition:all 0.3s ease;">
                              <img src="<?= get_stylesheet_directory_uri(); ?>/assets/2f871d61184dee2ed38b66a45adab93e17a1fcf4.svg" alt="Arrow" style="width:16px;height:16px;object-fit:contain;" />
            </div>
          </div>

        </div>

        <!-- Mobile Carousel (Hidden on Desktop) -->
        <div class="mobile-carousel d-block d-md-none mb-5">
          <div class="swiper mobile-solutions-swiper">
            <div class="swiper-wrapper">
              <!-- Slide 1: Calibration -->
              <div class="swiper-slide">
                <div class="mobile-carousel-item">
                  <div class="d-flex align-items-center justify-content-center py-3 mb-4 slide-header position-relative">
                    <div class="feature-icon me-3" style="width:34px;height:34px;">
                      <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1389_790)">
<path d="M33.0039 16.0039H21.8797C21.4826 14.0553 19.9447 12.5174 17.9961 12.1203V0.996094C17.9961 0.44552 17.5506 0 17 0C16.4494 0 16.0039 0.44552 16.0039 0.996094V12.1203C14.0553 12.5174 12.5174 14.0553 12.1203 16.0039H0.996094C0.44552 16.0039 0 16.4494 0 17C0 17.5506 0.44552 17.9961 0.996094 17.9961H12.1203C12.5174 19.9447 14.0553 21.4826 16.0039 21.8797V33.0039C16.0039 33.5545 16.4494 34 17 34C17.5506 34 17.9961 33.5545 17.9961 33.0039V21.8797C19.9447 21.4826 21.4826 19.9447 21.8797 17.9961H33.0039C33.5545 17.9961 34 17.5506 34 17C34 16.4494 33.5545 16.0039 33.0039 16.0039Z" fill="#0770FC"/>
<path d="M19.9883 2.35974V8.58579C22.5198 9.4887 24.5114 11.4802 25.4141 14.0116H31.6402C30.449 8.16557 25.8341 3.55094 19.9883 2.35974Z" fill="#0770FC"/>
<path d="M2.35938 14.0116H8.58543C9.48815 11.4802 11.4798 9.48852 14.0113 8.58579V2.35974C8.16521 3.55094 3.55057 8.16557 2.35938 14.0116Z" fill="#0770FC"/>
<path d="M8.58543 19.9883H2.35938C3.55057 25.8344 8.16521 30.449 14.0113 31.6402V25.4141C11.4798 24.5114 9.48815 22.5198 8.58543 19.9883Z" fill="#0770FC"/>
<path d="M25.4141 19.9883C24.5114 22.5198 22.5198 24.5114 19.9883 25.4141V31.6402C25.8341 30.449 30.449 25.8344 31.6402 19.9883H25.4141Z" fill="#0770FC"/>
</g>
<defs>
<clipPath id="clip0_1389_790">
<rect width="34" height="34" fill="white"/>
</clipPath>
</defs>
</svg>
                    </div>
                    <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Calibration</span>
                    
                    <!-- Navigation buttons for this slide -->
                    <button class="swiper-button-prev-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; left: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" transform="matrix(-1 0 0 1 40 0)" fill="white"/>
                        <path d="M22.5 15L17.5 20L22.5 25V15Z" fill="#002E3E"/>
                      </svg>
                    </button>
                    <button class="swiper-button-next-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; right: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" fill="white"/>
                        <path d="M17.5 15L22.5 20L17.5 25V15Z" fill="#002E3D"/>
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Software Screenshot -->
                  <div class="text-center mb-4">
                    <div class="position-relative" style="display: inline-block;">
                      <!-- Blue blur background -->
                      <div style="position: absolute; background: rgba(7,112,252,0.15); filter: blur(21px); height: 265px; width: 320px; border-radius: 8px; top: 3px; left: 10px;"></div>
                      <!-- Main image -->
                      <img src="<?= get_stylesheet_directory_uri(); ?>/assets/621704ff17e4be5569166167b7dcaa45f9adc650.png" 
                           alt="IndySoft Software Interface" 
                           class="img-fluid position-relative" 
                           style="width:344px;height:259px;border-radius:4px;object-fit:cover;" />
                    </div>
                  </div>

                  <!-- Content Below Image -->
                  <div class="text-center">
                    <h3 style="font-family:'elza',sans-serif;font-weight:600;font-size:33px;line-height:1.05;color:#003040;letter-spacing:-1.33px;margin-bottom:22px;">
                      Integrate with all your tools
                    </h3>
                    <p style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;margin-bottom:22px;max-width:344px;margin-left:auto;margin-right:auto;">
                      End-to-end traceability, compliance with ISO/IEC 17025, and complete control over your lab or multi-site operations
                    </p>
                    <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:15px 24px;font-family:'elza',sans-serif;font-weight:600;font-size:15px;letter-spacing:-0.39px;">
                      Request a Demo Today
                    </button>
                  </div>
                </div>
              </div>
              
              <!-- Slide 2: Asset Management -->
              <div class="swiper-slide">
                <div class="mobile-carousel-item">
                  <div class="d-flex align-items-center justify-content-center py-3 mb-4 slide-header position-relative">
                    <div class="feature-icon me-3" style="width:34px;height:34px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                        <g clip-path="url(#clip0_1209_148)">
                          <path d="M12 16C12 14.8954 12.8954 14 14 14H30C31.1046 14 32 14.8954 32 16V28C32 29.1046 31.1046 30 30 30H14C12.8954 30 12 29.1046 12 28V16Z" fill="#0770FC"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1209_148">
                            <rect width="34" height="34" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Asset Management</span>
                    
                    <!-- Navigation buttons for this slide -->
                    <button class="swiper-button-prev-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; left: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" transform="matrix(-1 0 0 1 40 0)" fill="white"/>
                        <path d="M22.5 15L17.5 20L22.5 25V15Z" fill="#002E3E"/>
                      </svg>
                    </button>
                    <button class="swiper-button-next-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; right: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" fill="white"/>
                        <path d="M17.5 15L22.5 20L17.5 25V15Z" fill="#002E3D"/>
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Software Screenshot -->
                  <div class="text-center mb-4">
                    <div class="position-relative" style="display: inline-block;">
                      <!-- Blue blur background -->
                      <div style="position: absolute; background: rgba(7,112,252,0.15); filter: blur(21px); height: 265px; width: 320px; border-radius: 8px; top: 3px; left: 10px;"></div>
                      <!-- Main image -->
                      <img src="<?= get_stylesheet_directory_uri(); ?>/assets/621704ff17e4be5569166167b7dcaa45f9adc650.png" 
                           alt="IndySoft Software Interface" 
                           class="img-fluid position-relative" 
                           style="width:344px;height:259px;border-radius:4px;object-fit:cover;" />
                    </div>
                  </div>

                  <!-- Content Below Image -->
                  <div class="text-center">
                    <h3 style="font-family:'elza',sans-serif;font-weight:600;font-size:33px;line-height:1.05;color:#003040;letter-spacing:-1.33px;margin-bottom:22px;">
                      Integrate with all your tools
                    </h3>
                    <p style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;margin-bottom:22px;max-width:344px;margin-left:auto;margin-right:auto;">
                      End-to-end traceability, compliance with ISO/IEC 17025, and complete control over your lab or multi-site operations
                    </p>
                    <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:15px 24px;font-family:'elza',sans-serif;font-weight:600;font-size:15px;letter-spacing:-0.39px;">
                      Request a Demo Today
                    </button>
                  </div>
                </div>
              </div>
              
              <!-- Slide 3: Quality Control -->
              <div class="swiper-slide">
                <div class="mobile-carousel-item">
                  <div class="d-flex align-items-center justify-content-center py-3 mb-4 slide-header position-relative">
                    <div class="feature-icon me-3" style="width:34px;height:34px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                        <g clip-path="url(#clip0_1209_149)">
                          <path d="M24 12C17.3726 12 12 17.3726 12 24C12 30.6274 17.3726 36 24 36C30.6274 36 36 30.6274 36 24C36 17.3726 30.6274 12 24 12ZM24 34C18.4772 34 14 29.5228 14 24C14 18.4772 18.4772 14 24 14C29.5228 14 34 18.4772 34 24C34 29.5228 29.5228 34 24 34Z" fill="#0770FC"/>
                          <path d="M20 20C20 18.8954 20.8954 18 22 18H26C27.1046 18 28 18.8954 28 20V28C28 29.1046 27.1046 30 26 30H22C20.8954 30 20 29.1046 20 28V20Z" fill="#0770FC"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1209_149">
                            <rect width="34" height="34" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Quality Control</span>
                    
                    <!-- Navigation buttons for this slide -->
                    <button class="swiper-button-prev-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; left: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" transform="matrix(-1 0 0 1 40 0)" fill="white"/>
                        <path d="M22.5 15L17.5 20L22.5 25V15Z" fill="#002E3E"/>
                      </svg>
                    </button>
                    <button class="swiper-button-next-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; right: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" fill="white"/>
                        <path d="M17.5 15L22.5 20L17.5 25V15Z" fill="#002E3D"/>
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Software Screenshot -->
                  <div class="text-center mb-4">
                    <div class="position-relative" style="display: inline-block;">
                      <!-- Blue blur background -->
                      <div style="position: absolute; background: rgba(7,112,252,0.15); filter: blur(21px); height: 265px; width: 320px; border-radius: 8px; top: 3px; left: 10px;"></div>
                      <!-- Main image -->
                      <img src="<?= get_stylesheet_directory_uri(); ?>/assets/621704ff17e4be5569166167b7dcaa45f9adc650.png" 
                           alt="IndySoft Software Interface" 
                           class="img-fluid position-relative" 
                           style="width:344px;height:259px;border-radius:4px;object-fit:cover;" />
                    </div>
                  </div>

                  <!-- Content Below Image -->
                  <div class="text-center">
                    <h3 style="font-family:'elza',sans-serif;font-weight:600;font-size:33px;line-height:1.05;color:#003040;letter-spacing:-1.33px;margin-bottom:22px;">
                      Integrate with all your tools
                    </h3>
                    <p style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;margin-bottom:22px;max-width:344px;margin-left:auto;margin-right:auto;">
                      End-to-end traceability, compliance with ISO/IEC 17025, and complete control over your lab or multi-site operations
                    </p>
                    <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:15px 24px;font-family:'elza',sans-serif;font-weight:600;font-size:15px;letter-spacing:-0.39px;">
                      Request a Demo Today
                    </button>
                  </div>
                </div>
              </div>
              
              <!-- Slide 4: Predictive Maintenance -->
              <div class="swiper-slide">
                <div class="mobile-carousel-item">
                  <div class="d-flex align-items-center justify-content-center py-3 mb-4 slide-header position-relative">
                    <div class="feature-icon me-3" style="width:34px;height:34px;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                        <g clip-path="url(#clip0_1209_150)">
                          <path d="M18 18C18 16.8954 18.8954 16 20 16H28C29.1046 16 30 16.8954 30 18V28C30 29.1046 29.1046 30 28 30H20C18.8954 30 18 29.1046 18 28V18Z" fill="#0770FC"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1209_150">
                            <rect width="34" height="34" fill="white"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <span style="font-family:'elza',sans-serif;font-weight:500;font-size:18px;color:#003040;">Predictive Maintenance</span>
                    
                    <!-- Navigation buttons for this slide -->
                    <button class="swiper-button-next-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; right: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" fill="white"/>
                        <path d="M17.5 15L22.5 20L17.5 25V15Z" fill="#002E3D"/>
                      </svg>
                    </button>
                    <button class="swiper-button-prev-custom" style="background: none; border: none; pointer-events: auto; padding: 0; position: absolute; left: -60px; top: 50%; transform: translateY(-50%); z-index: 20;">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="10" transform="matrix(-1 0 0 1 40 0)" fill="white"/>
                        <path d="M22.5 15L17.5 20L22.5 25V15Z" fill="#002E3E"/>
                      </svg>
                    </button>
                  </div>
                  
                  <!-- Software Screenshot -->
                  <div class="text-center mb-4">
                    <div class="position-relative" style="display: inline-block;">
                      <!-- Blue blur background -->
                      <div style="position: absolute; background: rgba(7,112,252,0.15); filter: blur(21px); height: 265px; width: 320px; border-radius: 8px; top: 3px; left: 10px;"></div>
                      <!-- Main image -->
                      <img src="<?= get_stylesheet_directory_uri(); ?>/assets/621704ff17e4be5569166167b7dcaa45f9adc650.png" 
                           alt="IndySoft Software Interface" 
                           class="img-fluid position-relative" 
                           style="width:344px;height:259px;border-radius:4px;object-fit:cover;" />
                    </div>
                  </div>

                  <!-- Content Below Image -->
                  <div class="text-center">
                    <h3 style="font-family:'elza',sans-serif;font-weight:600;font-size:33px;line-height:1.05;color:#003040;letter-spacing:-1.33px;margin-bottom:22px;">
                      Integrate with all your tools
                    </h3>
                    <p style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#003040;margin-bottom:22px;max-width:344px;margin-left:auto;margin-right:auto;">
                      End-to-end traceability, compliance with ISO/IEC 17025, and complete control over your lab or multi-site operations
                    </p>
                    <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:15px 24px;font-family:'elza',sans-serif;font-weight:600;font-size:15px;letter-spacing:-0.39px;">
                      Request a Demo Today
                    </button>
                  </div>
                </div>
                          </div>
          </div>
        </div>
      </div>
      


        <!-- CTA Button (hidden on mobile) -->
        <div class="cta-section d-none d-md-block">
          <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:14px 22px;font-family:'elza',sans-serif;font-weight:600;font-size:14px;letter-spacing:-0.35px;">
            Request a Demo Today
          </button>
        </div>

      </div>

      <!-- Spacing column -->
      <div class="col-lg-1"></div>

      <!-- Right Side - Image -->
      <div class="col-12 col-lg-5 d-flex flex-column justify-content-center px-4 mt-4 mt-lg-0">
        
        <!-- Software Screenshot -->
        <div class="software-preview position-relative mb-4" id="software-image">
          <div class="screenshot-container position-relative" style="border-radius:8px;overflow:hidden;">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/621704ff17e4be5569166167b7dcaa45f9adc650.png" 
                 alt="IndySoft Software Interface" 
                 class="img-fluid" 
                 style="width:100%;height:auto;border:0.5px solid #0770fc;border-radius:8px;object-fit:contain;" />
          </div>
        </div>

        <!-- Integration Info -->
        <div class="integration-info">
          <h3 class="mb-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:30px;line-height:1.05;color:#003040;letter-spacing:-1.2px;">
            Integrate with all your tools
          </h3>
          
          <div class="mb-3">
            <p class="m-0" style="font-family:'elza',sans-serif;font-size:20px;line-height:1.4;color:#003040;">
              End-to-end traceability, compliance with ISO/IEC 17025, and complete control over your lab or multi-site operations.
            </p>
          </div>
          
          <div class="mb-3">
            <a href="#" class="text-decoration-none" style="color:#0770fc;font-family:'elza',sans-serif;font-weight:600;font-size:16px;">
              Learn More →
            </a>
          </div>
        </div>

      </div>

      <!-- Empty space column to match Figma layout -->
      <div class="col-lg-1"></div>

    </div>
  </div>
</section>

<!-- Transforming Asset Management Section -->
<section class="py-5" style="background: #ffffff; padding: 80px 0;">
  <div class="container pt-md-5" style="max-width:1600px;">
    <div class="row align-items-start">
      
      <!-- Image Column -->
      <div class="col-12 col-md-6 mb-4 mb-md-0">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/fdf9ab5d9cd8e4d1bd79e0c22e0acc2c141ca003.png" 
             alt="Asset Management Visualization" 
             class="img-fluid w-100" 
             style="height: auto; border-radius: 8px;" />
      </div>
      
      <!-- Text Content Column -->
      <div class="col-12 col-md-6 d-flex align-items-center">
        <div class="ps-md-4">
          <h2 class="mb-4 mt-3" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#003040;letter-spacing:-1.8px;">
            Transforming Asset Management into Operational Excellence
          </h2>
          <div class="mb-4">
            <p class="mb-4" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
              At IndySoft, we believe asset management isn't just about tracking—it's about transforming how your business operates. Our fully configurable platform empowers organizations across industries to manage Calibration, Tooling, Maintenance, and Asset Management with unmatched precision, audit readiness, and operational insight.
            </p>
            <p class="mb-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
              Whether you're running a calibration lab, overseeing a production floor, or managing regulatory compliance across global sites, IndySoft delivers a single, centralized system that tracks every asset-related activity across its entire lifecycle. With advanced workflow automation, deep configurability, and industry-specific functionality, we don't just support your operations—we optimize them.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Why Leading Companies Choose IndySoft Section -->
<section class="py-5" style="background: #ffffff; padding: 80px 0;">
  <div class="container py-md-4" style="max-width:1500px;">
    <div class="row">
      <div class="col-12">
        
        <!-- Main Heading -->
        <div class="text-center mb-5" style="margin-bottom: 40px;">
          <h2 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#003040;letter-spacing:-1.8px;">
            Why Leading Companies Choose IndySoft
          </h2>
        </div>

        <!-- Features and Image Row -->
        <div class="row mb-5">
          
          <!-- Features List Column -->
          <div class="col-12 col-md-6">
            <div class="features-list">
              
              <!-- Feature 1: One platform, total control -->
              <div class="feature-item d-flex align-items-start py-4" style="gap: 20px;">
                <div class="feature-icon" style="width: 34px; height: 34px; flex-shrink: 0;">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M30.5475 14.3444C29.7591 14.3456 28.9949 14.6161 28.3814 15.1112C27.7679 15.6062 27.342 16.2961 27.1743 17.0663L21.2379 16.7171C21.1825 15.8734 20.8751 15.0657 20.3554 14.3988L23.2416 11.5128C23.7916 11.8765 24.4571 12.0231 25.109 11.9241C25.7609 11.8251 26.3528 11.4875 26.7699 10.9768C27.187 10.4662 27.3997 9.81882 27.3665 9.1603C27.3334 8.50179 27.0569 7.87904 26.5906 7.41282C26.1243 6.9466 25.5015 6.67013 24.843 6.63703C24.1844 6.60393 23.537 6.81656 23.0263 7.23368C22.5157 7.65079 22.1781 8.24268 22.0791 8.89456C21.9801 9.54643 22.1267 10.2118 22.4905 10.7618L19.6043 13.6477C19.0043 13.1799 18.289 12.8828 17.5341 12.7879V6.86348C18.3933 6.72971 19.1704 6.27668 19.7101 5.59491C20.2497 4.91314 20.5123 4.05284 20.4452 3.18594C20.3781 2.31903 19.9863 1.50936 19.3482 0.918732C18.71 0.328098 17.8725 0 17.0029 0C16.1334 0 15.2958 0.328098 14.6577 0.918732C14.0195 1.50936 13.6278 2.31903 13.5607 3.18594C13.4936 4.05284 13.7561 4.91314 14.2958 5.59491C14.8355 6.27668 15.6126 6.72971 16.4718 6.86348V12.7879C15.7168 12.8828 15.0016 13.1799 14.4015 13.6477L11.5153 10.7618C11.8792 10.2118 12.0259 9.5463 11.9269 8.89435C11.8279 8.2424 11.4903 7.65044 10.9795 7.23326C10.4688 6.81609 9.82133 6.60344 9.16269 6.63654C8.50405 6.66964 7.88117 6.94613 7.41485 7.41241C6.94852 7.87868 6.67197 8.5015 6.63884 9.1601C6.60571 9.81869 6.81835 10.4661 7.23553 10.9768C7.65271 11.4875 8.24469 11.8252 8.89668 11.9242C9.54868 12.0232 10.2142 11.8766 10.7642 11.5128L13.6504 14.3988C13.1474 15.0432 12.8423 15.8198 12.7722 16.6343L6.84533 16.8668C6.67852 16.0128 6.1956 15.2533 5.49307 14.7399C4.79054 14.2265 3.92015 13.9971 3.05583 14.0976C2.19151 14.1981 1.39694 14.6209 0.830898 15.2818C0.264856 15.9426 -0.0309593 16.7926 0.00256762 17.6621C0.0360945 18.5315 0.396495 19.3562 1.01174 19.9715C1.62699 20.5868 2.45178 20.9472 3.32126 20.9808C4.19075 21.0144 5.04089 20.7187 5.70181 20.1528C6.36272 19.5868 6.78571 18.7924 6.88625 17.9281L12.8157 17.6956C12.9307 18.3905 13.2177 19.0455 13.6504 19.6012L10.7642 22.4872C10.2142 22.1234 9.54869 21.9768 8.89671 22.0758C8.24473 22.1748 7.65275 22.5124 7.23558 23.0231C6.8184 23.5338 6.60575 24.1812 6.63887 24.8398C6.67198 25.4984 6.94851 26.1212 7.41481 26.5875C7.88112 27.0537 8.50398 27.3302 9.1626 27.3634C9.82122 27.3965 10.4687 27.1838 10.9794 26.7667C11.4901 26.3495 11.8277 25.7576 11.9268 25.1057C12.0258 24.4537 11.8792 23.7883 11.5153 23.2383L14.4015 20.3523C15.0015 20.8201 15.7168 21.1172 16.4718 21.2121V27.1365C15.6126 27.2703 14.8355 27.7233 14.2958 28.4051C13.7561 29.0869 13.4936 29.9472 13.5607 30.8141C13.6278 31.681 14.0195 32.4906 14.6577 33.0813C15.2958 33.6719 16.1334 34 17.0029 34C17.8725 34 18.71 33.6719 19.3482 33.0813C19.9863 32.4906 20.3781 31.681 20.4452 30.8141C20.5123 29.9472 20.2497 29.0869 19.7101 28.4051C19.1704 27.7233 18.3933 27.2703 17.5341 27.1365V21.2121C18.289 21.1172 19.0043 20.8201 19.6043 20.3523L22.4906 23.2383C22.1267 23.7883 21.9801 24.4537 22.0791 25.1057C22.1781 25.7576 22.5157 26.3495 23.0265 26.7667C23.5372 27.1838 24.1846 27.3965 24.8433 27.3634C25.5019 27.3302 26.1247 27.0537 26.5911 26.5875C27.0574 26.1212 27.3339 25.4984 27.367 24.8398C27.4001 24.1812 27.1875 23.5338 26.7703 23.0231C26.3531 22.5124 25.7611 22.1748 25.1092 22.0758C24.4572 21.9768 23.7917 22.1234 23.2417 22.4872L20.3554 19.6012C20.7715 19.0679 21.0534 18.4425 21.1776 17.7776L27.1117 18.1266C27.1756 18.7921 27.4316 19.4248 27.8484 19.9477C28.2651 20.4706 28.8248 20.8612 29.4594 21.072C30.094 21.2829 30.7761 21.3049 31.423 21.1354C32.0699 20.9659 32.6536 20.6121 33.1032 20.1172C33.5528 19.6223 33.849 19.0074 33.9557 18.3473C34.0625 17.6873 33.9752 17.0104 33.7045 16.399C33.4338 15.7875 32.9914 15.2679 32.4309 14.9032C31.8705 14.5384 31.2162 14.3443 30.5475 14.3444Z" fill="#173758"/>
</svg>

                </div>
                <div class="feature-content">
                  <h4 class="m-0 mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#003040;">
                    One platform, total control
                  </h4>
                  <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Consolidate calibration, maintenance, and asset tracking into a single, unified system.
                  </p>
                </div>
              </div>

              <!-- Feature 2: Stay audit-ready, always -->
              <div class="feature-item d-flex align-items-start py-4" style="gap: 20px;">
                <div class="feature-icon" style="width: 35px; height: 35px; flex-shrink: 0;">
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8663 19.5293C24.2618 17.5206 25.079 15.0849 25.079 12.4595C25.079 5.57832 19.4649 0 12.5395 0C5.61413 0 0 5.57832 0 12.4595C0 19.3407 5.61413 24.919 12.5395 24.919C15.0751 24.919 17.435 24.1712 19.4079 22.8855L21.7312 25.194L20.9404 25.9797L28.987 33.9749C30.3626 35.3417 32.5928 35.3417 33.9683 33.9749C35.3439 32.6081 35.3439 30.3921 33.9683 29.0254L25.9218 21.0301L25.1493 21.7977L22.8663 19.5293ZM12.5395 23.005C18.401 23.005 23.1526 18.2836 23.1526 12.4595C23.1526 6.63542 18.401 1.91406 12.5395 1.91406C6.67802 1.91406 1.92635 6.63542 1.92635 12.4595C1.92635 18.2836 6.67802 23.005 12.5395 23.005Z" fill="#173758"/>
</svg>

                </div>
                <div class="feature-content">
                  <h4 class="m-0 mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#003040;">
                    Stay audit-ready, always
                  </h4>
                  <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Built-in compliance with ISO/IEC 17025, FDA 21 CFR Part 11, and other global standards.
                  </p>
                </div>
              </div>

              <!-- Feature 3: Seamless integrations -->
              <div class="feature-item d-flex align-items-start py-4" style="gap: 20px;">
                <div class="feature-icon" style="width: 35px; height: 35px; flex-shrink: 0;">
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.75 27.5C5.82107 27.5 7.5 29.1789 7.5 31.25C7.49981 33.3209 5.82095 35 3.75 35C1.6791 34.9999 0.000189648 33.3209 0 31.25C0 29.179 1.67898 27.5001 3.75 27.5ZM18.751 30C18.751 32.7575 16.5078 34.9999 13.751 35C10.994 35 8.75098 32.7576 8.75098 30V24.8232C9.15279 24.9276 9.56699 25 10.001 25C10.435 25 10.8491 24.9277 11.251 24.8232V30C11.251 31.3782 12.3722 32.5 13.751 32.5C15.1296 32.4999 16.251 31.3781 16.251 30V16.0732C16.6528 16.1776 17.067 16.25 17.501 16.25C17.935 16.25 18.3491 16.1777 18.751 16.0732V30ZM32.501 30.625C32.501 33.0371 30.5381 35 28.126 35C25.7141 34.9998 23.751 33.037 23.751 30.625V24.8223C24.1528 24.9267 24.567 24.9999 25.001 25C25.435 25 25.8492 24.9267 26.251 24.8223V30.625C26.251 31.6588 27.0923 32.4998 28.126 32.5C29.1599 32.5 30.001 31.6589 30.001 30.625V8.57227C30.4028 8.67667 30.817 8.74995 31.251 8.75C31.685 8.75 32.0992 8.67666 32.501 8.57227V30.625ZM6.87598 0C9.28793 0.000183401 11.251 1.963 11.251 4.375V15.1777C10.8492 15.0733 10.435 15 10.001 15C9.56696 15 9.15281 15.0733 8.75098 15.1777V4.375C8.75098 3.34118 7.90976 2.50018 6.87598 2.5C5.84204 2.5 5.00098 3.34106 5.00098 4.375V26.4277C4.59916 26.3233 4.18497 26.25 3.75098 26.25C3.31696 26.25 2.90281 26.3233 2.50098 26.4277V4.375C2.50098 1.96289 4.46387 0 6.87598 0ZM10.001 16.25C12.072 16.25 13.751 17.9289 13.751 20C13.7508 22.0709 12.072 23.75 10.001 23.75C7.93021 23.7498 6.25112 22.0708 6.25098 20C6.25098 17.9291 7.93012 16.2502 10.001 16.25ZM25.002 16.25C27.073 16.25 28.752 17.9289 28.752 20C28.7518 22.0709 27.0729 23.75 25.002 23.75C22.9311 23.7499 21.2521 22.0709 21.252 20C21.252 17.929 22.931 16.2501 25.002 16.25ZM21.2529 0C24.0099 0 26.2529 2.24243 26.2529 5V15.1777C25.8511 15.0733 25.4369 15 25.0029 15C24.569 15.0001 24.1547 15.0733 23.7529 15.1777V5C23.7529 3.62183 22.6317 2.5 21.2529 2.5C19.8744 2.50025 18.7529 3.62198 18.7529 5V6.42773C18.3511 6.32334 17.9369 6.25 17.5029 6.25C17.069 6.25005 16.6547 6.32333 16.2529 6.42773V5C16.2529 2.24259 18.4962 0.000253375 21.2529 0ZM17.499 7.5C19.5701 7.5 21.249 9.17893 21.249 11.25C21.2489 13.3209 19.57 15 17.499 15C15.4282 14.9999 13.7492 13.3209 13.749 11.25C13.749 9.17902 15.4281 7.50015 17.499 7.5ZM31.249 0C33.3199 0.000189656 34.999 1.67905 34.999 3.75C34.999 5.82095 33.3199 7.49981 31.249 7.5C29.178 7.5 27.499 5.82107 27.499 3.75C27.499 1.67893 29.178 0 31.249 0Z" fill="#173758"/>
</svg>

                </div>
                <div class="feature-content">
                  <h4 class="m-0 mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#003040;">
                    Seamless integrations
                  </h4>
                  <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Connect IndySoft with your ERP, MES, or QMS to eliminate data silos and ensure accuracy.
                  </p>
                </div>
              </div>

              <!-- Feature 4: Industry-specific expertise -->
              <div class="feature-item d-flex align-items-start py-4" style="gap: 20px;">
                <div class="feature-icon" style="width: 34px; height: 34px; flex-shrink: 0;">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M32.8833 19.3208C29.5355 19.3208 27.8558 23.3766 30.2228 25.7437C30.6589 26.1797 30.6589 26.887 30.2228 27.323L27.8187 29.7271C27.3826 30.1632 26.6754 30.1632 26.2394 29.7271C23.8723 27.36 19.8165 29.0398 19.8165 32.3875C19.8165 33.0044 19.3164 33.5041 18.6998 33.5041H15.3C14.6834 33.5041 14.1833 33.0044 14.1833 32.3875C14.1833 29.0356 10.1305 27.3571 7.76041 29.7271C7.32443 30.1632 6.61717 30.1632 6.18112 29.7271L3.77711 27.323C3.34106 26.8869 3.34106 26.1797 3.77711 25.7437C6.14414 23.3767 4.46433 19.3208 1.11669 19.3208C0.499799 19.3208 0 18.8207 0 18.2041V16.575C0 16.5359 0.0318042 16.5041 0.0708333 16.5041H8.62295C8.66177 16.5041 8.69328 16.5356 8.69357 16.5744C8.73132 21.1297 12.4357 24.811 16.9999 24.811C21.564 24.811 25.2685 21.1297 25.3063 16.5744C25.3066 16.5357 25.3382 16.5041 25.377 16.5041H33.9292C33.9682 16.5041 34 16.5359 34 16.575V18.2041C34 18.8207 33.5003 19.3208 32.8833 19.3208ZM6.99896 1.38939H9.9362C9.97522 1.38939 10.007 1.35759 10.007 1.31856V0.0708332C10.007 0.0318041 9.97522 0 9.9362 0H6.99896C6.95993 0 6.92812 0.0318041 6.92812 0.0708332V1.31863C6.92819 1.35759 6.96 1.38939 6.99896 1.38939ZM9.93627 2.38106H6.99903C6.96 2.38106 6.92819 2.41286 6.92819 2.45189V12.4647C6.92819 12.5038 6.96 12.5356 6.99903 12.5356H9.93627C9.9753 12.5356 10.0071 12.5038 10.0071 12.4647V2.45189C10.007 2.41286 9.97523 2.38106 9.93627 2.38106ZM10.9987 6.11517V12.4647C10.9987 12.5038 11.0305 12.5356 11.0695 12.5356H15.6245C15.6636 12.5356 15.6954 12.5038 15.6954 12.4647V4.8814C15.6954 4.83451 15.6513 4.80079 15.606 4.81304L11.051 6.04682C11.0197 6.05532 10.9987 6.08273 10.9987 6.11517ZM16.687 6.11517V12.4647C16.687 12.5038 16.7188 12.5356 16.7579 12.5356H21.3129C21.3519 12.5356 21.3837 12.5038 21.3837 12.4647V4.8814C21.3837 4.83451 21.3396 4.80079 21.2944 4.81304L16.7394 6.04682C16.708 6.05532 16.687 6.08273 16.687 6.11517ZM22.3753 6.11517V12.4647C22.3753 12.5038 22.4071 12.5356 22.4461 12.5356H27.0011C27.0401 12.5356 27.0719 12.5038 27.0719 12.4647V4.8814C27.0719 4.83451 27.0279 4.80079 26.9826 4.81304L22.4276 6.04682C22.3962 6.05532 22.3753 6.08273 22.3753 6.11517ZM5.29903 13.5272C5.26 13.5272 5.2282 13.559 5.2282 13.5981V14.1375C5.2282 14.1766 5.26 14.2084 5.29903 14.2084H28.7011C28.7401 14.2084 28.7719 14.1766 28.7719 14.1375V13.5981C28.7719 13.559 28.7401 13.5272 28.7011 13.5272C20.9004 13.5272 13.0997 13.5272 5.29903 13.5272ZM23.9052 7.25665H25.542C25.6268 7.25665 25.696 7.32585 25.696 7.41071V9.04745C25.696 9.13231 25.6268 9.20151 25.542 9.20151H23.9052C23.8203 9.20151 23.7511 9.13231 23.7511 9.04745V7.41071C23.7511 7.32585 23.8203 7.25665 23.9052 7.25665ZM12.5287 7.25665H14.1654C14.2503 7.25665 14.3195 7.32585 14.3195 7.41071V9.04745C14.3195 9.13231 14.2503 9.20151 14.1654 9.20151H12.5287C12.4438 9.20151 12.3746 9.13231 12.3746 9.04745V7.41071C12.3746 7.32585 12.4438 7.25665 12.5287 7.25665ZM18.2169 7.25665H19.8537C19.9385 7.25665 20.0078 7.32585 20.0078 7.41071V9.04745C20.0078 9.13231 19.9385 9.20151 19.8537 9.20151H18.2169C18.1321 9.20151 18.0629 9.13231 18.0629 9.04745V7.41071C18.0629 7.32585 18.1321 7.25665 18.2169 7.25665ZM10.5109 16.5757C10.5493 20.1268 13.4398 22.9938 17 22.9938C20.5602 22.9938 23.4508 20.1268 23.4892 16.5757C23.4896 16.5361 23.458 16.5041 23.4183 16.5041H10.5818C10.5421 16.5041 10.5104 16.5361 10.5109 16.5757Z" fill="#173758"/>
</svg>

                </div>
                <div class="feature-content">
                  <h4 class="m-0 mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#003040;">
                    Industry-specific expertise
                  </h4>
                  <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Designed with aerospace, pharmaceuticals, manufacturing, and energy industries in mind.
                  </p>
                </div>
              </div>

              <!-- Feature 5: Real results -->
              <div class="feature-item d-flex align-items-start py-4" style="gap: 20px;">
                <div class="feature-icon" style="width: 34px; height: 34px; flex-shrink: 0;">
                <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.70411 11.792C1.39935 11.4551 1.42546 10.9349 1.76238 10.6302L9.71632 3.43585C10.029 3.15302 10.505 3.1524 10.8182 3.43434L15.3348 7.49748L21.1872 1.64516H20.9672C20.5129 1.64516 20.1446 1.27685 20.1446 0.822581C20.1446 0.368311 20.5129 0 20.9672 0H23.1731C23.6274 0 23.9957 0.368311 23.9957 0.822581V3.02655C23.9957 3.48082 23.6274 3.84913 23.1731 3.84913C22.7189 3.84913 22.3505 3.48082 22.3505 3.02655V2.8085L15.9464 9.21256C15.6371 9.52185 15.1399 9.53508 14.8146 9.24245L10.2696 5.15367L2.86594 11.8502C2.70855 11.9926 2.51113 12.0628 2.3144 12.0628C2.09004 12.0628 1.8665 11.9715 1.70411 11.792ZM31.4241 24.3596H24.9618V17.8954C24.9618 17.6683 24.7776 17.4841 24.5505 17.4841C20.5326 17.4841 17.2637 20.753 17.2637 24.7709C17.2637 28.7889 20.5326 32.0578 24.5505 32.0578C28.5685 32.0578 31.8354 28.7889 31.8354 24.7709C31.8354 24.5438 31.6512 24.3596 31.4241 24.3596ZM26.7152 15.3195C26.4881 15.3195 26.3039 15.5037 26.3039 15.7308V22.6063C26.3039 22.8334 26.4881 23.0176 26.7152 23.0176H33.5887C33.8158 23.0176 34 22.8334 34 22.6063C34 18.5883 30.732 15.3195 26.7152 15.3195ZM19.7333 8.20778C19.5062 8.20778 19.322 8.39197 19.322 8.61907V17.5337C20.5468 16.6464 22.0044 16.062 23.5844 15.8913V8.61907C23.5844 8.39197 23.4002 8.20778 23.1731 8.20778H19.7333ZM17.7773 18.9547V13.509C17.7773 13.2819 17.5931 13.0977 17.366 13.0977H13.9263C13.6992 13.0977 13.515 13.2819 13.515 13.509V23.9483H11.9703V10.9666C11.9703 10.7395 11.7861 10.5554 11.559 10.5554H8.11921C7.89211 10.5554 7.70792 10.5554 7.70792 10.9666V23.9483H6.16325V16.138C6.16325 15.9109 5.97906 15.7267 5.75196 15.7267H2.31419C2.08709 15.7267 1.9029 15.9109 1.9029 16.138V23.9483H0.822581C0.368311 23.9483 0 24.3166 0 24.7708C0 25.2251 0.368311 25.5934 0.822581 25.5934H15.6567C15.6319 25.3225 15.6185 25.0482 15.6185 24.7708C15.6185 22.5513 16.4325 20.5185 17.7773 18.9547H17.7773Z" fill="#173758"/>
</svg>

                </div>
                <div class="feature-content">
                  <h4 class="m-0 mb-2" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#003040;">
                    Real results
                  </h4>
                  <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;">
                    Reduce downtime, improve visibility, and accelerate decision-making with actionable insights.
                  </p>
                </div>
              </div>

            </div>
          </div>

          <!-- Image Column -->
          <div class="col-12 col-md-6">
            <div class="text-center">
              <img src="<?= get_stylesheet_directory_uri(); ?>/assets/621704ff17e4be5569166167b7dcaa45f9adc650.png" 
                   alt="IndySoft Software Interface" 
                   class="img-fluid" 
                   style="width:100%;max-width:662px;height:auto;border-radius:8px;" />
            </div>
          </div>

        </div>

        <!-- Info Cards Row - Side by Side -->
        <div class="row">
          
          <!-- Card 1: Tailored for Regulated Industries -->
          <div class="col-12 col-md-6 mb-4">
            <div class="bg-white rounded p-5" style="background: #ffffff !important; background-color: #ffffff !important; border-radius:8px; padding:60px 79px; min-height:313px; box-shadow: 0 10px 30px rgba(7,112,252,0.15);">
              <!-- Card content -->
              <div>
                <h3 class="m-0 mb-3" style="text-align:center;font-family:'elza',sans-serif;font-weight:600;font-size:26px;line-height:1.1;color:#003040;letter-spacing:-0.52px;">
                  Tailored for Regulated Industries
                </h3>
                <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;text-align:left;">
                  For organizations operating in regulated environments—such as aerospace, pharmaceuticals, energy, and manufacturing—compliance is non-negotiable. IndySoft is designed for these industries offering built-in tools to help you meet strict standards like ISO/IEC 17025, FDA 21 CFR Part 11, and AS9100. Our audit-ready reporting, traceability features, and full asset history tracking make it easier to sail through audits and certifications with confidence.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 2: Complete Lifecycle Asset Management -->
          <div class="col-12 col-md-6 mb-4">
            <div class="bg-white rounded p-5" style="background: #ffffff !important; background-color: #ffffff !important; border-radius:8px; padding:60px 79px; min-height:313px; box-shadow: 0 10px 30px rgba(7,112,252,0.15);">
              <!-- Card content -->
              <div>
                <h3 class="m-0 mb-3" style="text-align:center;font-family:'elza',sans-serif;font-weight:600;font-size:26px;line-height:1.1;color:#003040;letter-spacing:-0.52px;">
                  Complete Lifecycle Asset Management
                </h3>
                <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#1c5263;text-align:left;">
                  IndySoft unifies all aspects of asset management into one platform, allowing your team to track, schedule, and monitor every stage of an asset's life. Whether you need to manage calibration intervals, schedule preventive maintenance, or track tool usage across multiple sites, IndySoft provides total visibility and control.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const featureItems = document.querySelectorAll('.hover-trigger');
  const softwareImage = document.getElementById('software-image');
  
  featureItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
      // Remove active state from all items
      featureItems.forEach(otherItem => {
        otherItem.classList.remove('active');
        otherItem.style.opacity = '0.5';
      });
      
      // Add active state to hovered item
      this.classList.add('active');
      this.style.opacity = '1';
      
      // For now, using the same image for all categories
      // In the future, you can switch images based on data-category
      const category = this.getAttribute('data-category');
      
      // Add fade effect to image
      softwareImage.style.opacity = '0.7';
      setTimeout(() => {
        softwareImage.style.opacity = '1';
      }, 200);
      
      console.log('Hovering over:', category);
    });
    
    item.addEventListener('mouseleave', function() {
      // Reset to default state (Calibration active)
      featureItems.forEach(otherItem => {
        otherItem.classList.remove('active');
        otherItem.style.opacity = '0.5';
      });
      
      // Make first item (Calibration) active by default
      featureItems[0].classList.add('active');
      featureItems[0].style.opacity = '1';
      
      // Reset image
      softwareImage.style.opacity = '1';
    });
  });

  // Initialize Swiper.js Mobile Carousel
  const mobileSwiper = new Swiper('.mobile-solutions-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next-custom',
      prevEl: '.swiper-button-prev-custom',
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      }
    },

  });





  // Handle window resize for responsive behavior
  window.addEventListener('resize', function() {
    const isMobile = window.innerWidth <= 768;
    const mobileCarousel = document.querySelector('.mobile-carousel');
    const featuresList = document.querySelector('.features-list');
    
    if (mobileCarousel && featuresList) {
      if (isMobile) {
        mobileCarousel.style.display = 'block';
        featuresList.style.display = 'none';
      } else {
        mobileCarousel.style.display = 'none';
        featuresList.style.display = 'block';
      }
    }
  });
});
</script>

<!-- Testimonials Section -->
<section class="testimonials-section position-relative w-100" style="padding:80px 0;">
  <div class="container" style="max-width:1500px;">
    
    <!-- Section Heading -->
    <div class="text-center mb-5">
      <h2 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#003040;letter-spacing:-1.8px;">
        What Our Customers Say
      </h2>
    </div>
    
    <!-- Testimonial Card -->
    <div class="d-flex justify-content-center mb-5">
      <div class="testimonial-card d-flex flex-column align-items-center justify-content-center p-5" 
           style="background:#ffffff;border:1px solid rgba(7,112,252,0.5);border-radius:0;width:100%;max-width:1500px;height:400px;box-shadow:none !important;-webkit-box-shadow:none !important;-moz-box-shadow:none !important;">
        
        <!-- Stars and Title -->
        <div class="text-center mb-4">
          <div class="stars mb-3" style="height:33px;">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/d38decdf8e7a8024c25aeb749a5d1639a26b74f2.svg" 
                 alt="5 Stars" 
                 style="width:200px;height:33px;object-fit:contain;" />
          </div>
          <h3 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:26px;line-height:1.1;color:#003040;letter-spacing:-0.52px;">
            Recommended CMMS/Calibration Software
          </h3>
        </div>

        <!-- Testimonial Quote -->
        <div class="testimonial-quote text-center mb-4">
          <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:26px;line-height:1.3;color:#003040;letter-spacing:-0.52px;max-width:772px;">
            "IndySoft is absolutely the best calibration management software I have ever used! It's incredibly user friendly, straightforward, and packed with powerful customization features. IndySoft has streamlined calibration for me at two separate companies, helping me to pass through seven major calibration audits without a single finding."
          </p>
        </div>

        <!-- Author Info -->
        <div class="author-info text-center">
          <div class="author-name mb-1">
            <p class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:18px;line-height:1;color:#003040;">
              Greg Kirschke
            </p>
          </div>
          <div class="author-title">
            <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:rgba(0,48,64,0.4);">
              Quality Control Assistant Manager, Houston Precision Fasteners
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Navigation Controls -->
    <div class="d-flex justify-content-center gap-3">
      <!-- Previous Button -->
      <button class="btn p-0 d-flex align-items-center justify-content-center" 
              style="background:none;border:none;width:40px;height:40px;cursor:pointer;transition:opacity 0.3s ease;"
              onmouseover="this.style.opacity='0.7'" 
              onmouseout="this.style.opacity='1'">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/baee568cc0b5f7bacfcc8475a935bb5ab72ca1e7.svg" 
             alt="Previous" 
             style="width:40px;height:40px;transform:rotate(180deg) scaleY(-1);object-fit:contain;" />
      </button>

      <!-- Next Button -->
      <button class="btn p-0 d-flex align-items-center justify-content-center" 
              style="background:none;border:none;width:40px;height:40px;cursor:pointer;transition:opacity 0.3s ease;"
              onmouseover="this.style.opacity='0.7'" 
              onmouseout="this.style.opacity='1'">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/8d0cd8343e411a8679436e04d5925487d18f5436.svg" 
             alt="Next" 
             style="width:40px;height:40px;object-fit:contain;" />
      </button>
    </div>

  </div>
</section>

<!-- Card Background Fixes -->
<style>
.testimonial-card {
  background: #ffffff !important;
  background-color: #ffffff !important;
}

.bg-white {
  background: #ffffff !important;
  background-color: #ffffff !important;
}

/* Force white backgrounds on info cards */
.col-md-6 .bg-white {
  background: #ffffff !important;
  background-color: #ffffff !important;
}

<!-- Add responsive behavior for mobile -->
<style>
  /* Body max-width and overflow control */
  body {
    overflow-x: hidden;
    max-width: 100vw;
  }
  
  /* Prevent horizontal scroll on all sections */
  section {
    overflow-x: hidden;
    max-width: 100vw;
  }
  
  /* Container overflow control */
  .container, .container-fluid {
    overflow-x: hidden;
    max-width: 100vw;
  }
  
  /* Fix mobile carousel overflow */
  .mobile-carousel {
    overflow-x: hidden;
    max-width: 100vw;
  }
  
  .mobile-solutions-swiper {
    overflow-x: hidden !important;
    max-width: 100vw !important;
  }
  
  /* Ensure all content stays within bounds */
  .row {
    overflow-x: hidden;
    max-width: 100vw;
  }
  
  .col-12, .col-lg-6, .col-lg-5, .col-lg-1 {
    overflow-x: hidden;
    max-width: 100%;
  }
  
  /* Page-level overflow control */
  #page, .site {
    overflow-x: hidden;
    max-width: 100vw;
  }
  
  /* Ensure no element breaks out of bounds */
  * {
    box-sizing: border-box;
  }

@media (max-width: 1450px) {
  .testimonials-container {
    flex-direction: column !important;
    align-items: center !important;
    gap: 40px !important;
    width: auto !important;
  }
  .testimonial-card {
    width: 100% !important;
    max-width: 691px !important;
  }
}

@media (max-width: 768px) {
  .testimonials-container {
    flex-direction: column !important;
    align-items: center !important;
    gap: 30px !important;
    width: 100% !important;
    padding: 0 20px !important;
  }
  .testimonial-card {
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 !important;
  }
  
  .container {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  
  .col-12.col-lg-5 {
    max-width: 100% !important;
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  
  .feature-item {
    padding: 15px 0 !important;
  }
  
  .software-preview {
    margin-top: 2rem !important;
  }

  /* Mobile Carousel Styles */
  .mobile-carousel {
    display: block !important;
  }
  
  /* Mobile Layout - Hide Desktop Elements */
  .solutions-hero .features-list {
    display: none !important;
  }
  
  .solutions-hero .col-lg-5 {
    display: none !important;
  }
  
  .solutions-hero .col-lg-1 {
    display: none !important;
  }
  
  /* Mobile Layout - Full Width for Carousel */
  .solutions-hero .col-12.col-lg-6 {
    width: 100% !important;
    max-width: 100% !important;
    flex: 0 0 100% !important;
  }
  
  /* Show Mobile Carousel on Mobile */
  .mobile-carousel {
    display: block !important;
  }

  /* Target ONLY the blue "Explore our specialized solutions" section on mobile */
  section[style*="background:#eef5ff"] .features-list { 
    display: none !important;
  }
  /* hide ONLY the right image column in the blue section */
  section[style*="background:#eef5ff"] .col-lg-5.d-flex.flex-column.justify-content-center.px-4.mt-4.mt-lg-0 { 
    display: none !important;
  }
  section[style*="background:#eef5ff"] .col-lg-1 { 
    display: none !important; /* hide spacer cols */
  }
  section[style*="background:#eef5ff"] .col-12.col-lg-5 {
    /* ensure left column spans full width so Swiper doesn't overlap */
    width: 100% !important;
    max-width: 100% !important;
    flex: 0 0 100% !important;
  }
  
  /* Swiper.js Mobile Carousel Styles */
  .mobile-solutions-swiper {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
    position: relative; /* ensure custom nav positions relative to the slider */
  }
  
  .mobile-solutions-swiper .swiper-slide {
    text-align: center;
    padding: 20px;
    background: #eef5ff;
    border-radius: 8px;
    margin: 0;
    height: auto;
    min-height: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    position: relative;
    width: 100% !important;
    max-width: 100% !important;
  }
  
  .mobile-carousel-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  /* Custom Navigation Buttons */
  .custom-navigation {
    position: absolute !important;
    left: 0 !important;
    right: 0 !important;
    z-index: 10 !important;
    pointer-events: none !important;
  }
  /* Align arrows with the slide header row */
  .mobile-solutions-swiper .swiper-slide { position: relative; }
  .mobile-solutions-swiper .swiper-slide .slide-header { position: relative; }
  .mobile-solutions-swiper .swiper-button-prev-custom,
  .mobile-solutions-swiper .swiper-button-next-custom {
    position: absolute;
    z-index: 20;
    transition: top 0.3s ease;
  }
  .mobile-solutions-swiper .swiper-button-prev-custom { left: 16px; }
  .mobile-solutions-swiper .swiper-button-next-custom { right: 16px; }
  .mobile-solutions-swiper .swiper-slide .slide-header { margin-bottom: 16px; }
  
  /* Ensure consistent centering */
  .mobile-solutions-swiper .swiper-slide > * {
    width: 100%;
    max-width: 100%;
  }
  
  .mobile-solutions-swiper .swiper-slide .text-center {
    width: 100%;
  }
  
  /* Full width container for mobile - but contained */
  .mobile-solutions-swiper {
    width: 100% !important;
    max-width: 100% !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    position: relative;
    overflow-x: hidden;
  }
  
  /* Center content within full-width slides */
  .mobile-solutions-swiper .swiper-slide .mobile-carousel-item {
    width: 100%;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
  }
  
  .swiper-button-next-custom,
  .swiper-button-prev-custom {
    width: 40px !important;
    height: 40px !important;
    background: none !important;
    border: none !important;
    padding: 0 !important;
    pointer-events: auto !important;
    transition: all 0.3s ease;
  }
  
  .swiper-button-next-custom:hover,
  .swiper-button-prev-custom:hover {
    transform: scale(1.1);
  }
  
  .swiper-button-next-custom svg,
  .swiper-button-prev-custom svg {
    width: 40px !important;
    height: 40px !important;
    display: block !important;
  }
  
  /* Swiper Container */
  .swiper {
    overflow: visible !important;
  }
  
  .swiper-slide {
    height: auto !important;
  }
  
  /* Ensure proper spacing */
  .mobile-carousel .swiper {
    margin-bottom: 20px !important;
  }
  /* Center slide content more tightly */
  .mobile-carousel .text-center.mb-4 { margin-top: 8px !important; }

  /* Mobile Typography Adjustments */
  h1 {
    font-size: 40px !important;
    line-height: 1.1 !important;
    letter-spacing: -1.6px !important;
  }
  
  h2 {
    font-size: 40px !important;
    line-height: 1.05 !important;
    letter-spacing: -1.6px !important;
  }
  
  .solutions-hero {
    padding: 40px 0 !important;
  }
  
  .solutions-hero .container {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  
  /* Mobile Section Spacing */
  section {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
  }
  
  /* Mobile Card Adjustments */
  .col-md-6 .bg-white {
    padding: 20px !important;
    margin-bottom: 20px !important;
  }
  
  /* Mobile Testimonial Adjustments */
  .testimonial-card {
    height: auto !important;
    min-height: 400px !important;
    padding: 20px !important;
  }
  
  .testimonial-quote p {
    font-size: 18px !important;
    line-height: 1.4 !important;
  }
  
  /* Mobile CTA Adjustments */
  .cta-content {
    padding: 40px 20px !important;
  }
  
  .cta-headline h2 {
    font-size: 40px !important;
    line-height: 1.05 !important;
    letter-spacing: -1.6px !important;
  }
}

/* Desktop Styles - Show Desktop Elements, Hide Mobile Carousel */
@media (min-width: 769px) {
  .mobile-carousel {
    display: none !important;
  }
  
  .solutions-hero .features-list {
    display: block !important;
  }
  
  .solutions-hero .col-lg-5 {
    display: block !important;
  }
  
  .solutions-hero .col-lg-1 {
    display: block !important;
  }
  
  .solutions-hero .col-12.col-lg-6 {
    width: auto !important;
    max-width: none !important;
    flex: none !important;
  }
}

@media (max-width: 480px) {
  .benefit-card {
    padding: 2rem 1rem !important;
  }
  
  .testimonial-card {
    padding: 2rem 1rem !important;
  }
  
  /* Remove unwanted margin below CTA section but keep padding */
  .cta-section {
    margin-bottom: 0 !important;
  }
  
  .cta-section .cta-content {
    margin-bottom: 0 !important;
  }
  
  .cta-section .row:last-child {
    margin-bottom: 0 !important;
  }
  
  .cta-section .col-12:last-child {
    margin-bottom: 0 !important;
  }
  
  /* Ensure mobile CTA also has no bottom margin */
  .cta-section .d-block.d-md-none {
    margin-bottom: 0 !important;
  }
  
  .cta-section .d-block.d-md-none .col-12 {
    margin-bottom: 0 !important;
  }
  
  /* Center "Explore our specialized solutions" heading on mobile */
  @media (max-width: 768px) {
    /* Target the blue section heading specifically */
    section[style*="background:#eef5ff"] .col-12.col-lg-5 h2 {
      text-align: center !important;
      max-width: 100% !important;
    }
    
    /* Force centering with more specific selectors */
    section[style*="background:#eef5ff"] .col-12.col-lg-5 .mb-5 h2 {
      text-align: center !important;
      max-width: 100% !important;
    }
    
    /* Target the heading container */
    section[style*="background:#eef5ff"] .col-12.col-lg-5 .mb-5 {
      text-align: center !important;
    }
    
    /* Alternative selector using the background color */
    section[style*="eef5ff"] h2 {
      text-align: center !important;
      max-width: 100% !important;
    }
    
    /* Most specific selector */
    section[style*="background:#eef5ff"] .col-12.col-lg-5 div.mb-5 h2 {
      text-align: center !important;
      max-width: 100% !important;
    }
  }
  
  /* Remove only bottom spacing from CTA section, keep internal spacing */
  .cta-section {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
  }
  
  /* Keep internal spacing for good content layout */
  .cta-section .cta-content {
    margin-bottom: 0 !important;
  }
  
  .cta-section .cta-button {
    margin-bottom: 0 !important;
  }
  
  /* Restore proper spacing for content elements */
  .cta-section .cta-headline {
    margin-bottom: 1.5rem !important; /* 24px spacing below headline */
  }
  
  .cta-section .cta-subtitle {
    margin-bottom: 3rem !important; /* 48px spacing below subtitle */
  }
  
  .cta-section .cta-subtitle .row {
    margin-bottom: 0 !important;
  }
  
  .cta-section .cta-subtitle .col-12.col-lg-8 {
    margin-bottom: 0 !important;
  }
  
  .cta-section .cta-subtitle p {
    margin-bottom: 0 !important;
  }
  
  /* Target the last element before footer */
  .cta-section:last-of-type {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
  }
  
  /* Ensure footer has no top margin */
  footer {
    margin-top: 0 !important;
  }
  
  /* Universal mobile heading centering for the blue section */
  @media (max-width: 768px) {
    section[style*="eef5ff"] h2 {
      text-align: center !important;
      max-width: 100% !important;
      display: block !important;
    }
  }
}
</style>

<!-- Ready to Take the Next Step CTA Section -->
<section class="cta-section position-relative w-100" style="padding:80px 0 0; margin-bottom: 0;">
  <div class="container d-none d-md-block" style="max-width:1500px;">
    <div class="row justify-content-center">
      <div class="col-12">
        
        <!-- CTA Content -->
        <div class="cta-content text-center" style="background:#173758;border-radius:8px 8px 0 0;padding:80px 40px;margin:0;">
          
          <!-- Main Headline -->
          <div class="cta-headline mb-4">
            <h2 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#ffffff;letter-spacing:-1.8px;">
              Take Control of Your Assets Today
            </h2>
          </div>

          <!-- Subtitle -->
          <div class="cta-subtitle mb-5">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#ffffff;">
                  Ready to move beyond spreadsheets and disconnected systems?<br>
                  IndySoft gives you the power to simplify compliance, improve efficiency, and centralize asset management—so you can focus on what matters most: running your business with confidence.
            </p>
          </div>
          </div>
        </div>

          <!-- CTA Button -->
          <div class="cta-button">
            <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:14px 22px;font-family:'elza',sans-serif;font-weight:600;font-size:14px;letter-spacing:-0.35px;">
              Request a Demo
            </button>
      </div>

    </div>

  </div>
    </div>
  </div>

  <!-- Mobile Full Width CTA -->
  <div class="d-block d-md-none w-100">
    <div class="row justify-content-center m-0">
      <div class="col-12 p-0">
        
        <!-- CTA Content -->
        <div class="cta-content text-center" style="background:#173758;border-radius:8px 8px 0 0;padding:80px 40px;margin:0;">
          
          <!-- Main Headline -->
          <div class="cta-headline mb-4">
            <h2 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:#ffffff;letter-spacing:-1.8px;">
              Take Control of Your Assets Today
            </h2>
          </div>

          <!-- Subtitle -->
          <div class="cta-subtitle mb-5">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-8">
                <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:#ffffff;">
                  Ready to move beyond spreadsheets and disconnected systems?<br>
                  IndySoft gives you the power to simplify compliance, improve efficiency, and centralize asset management—so you can focus on what matters most: running your business with confidence.
                </p>
              </div>
            </div>
          </div>

          <!-- CTA Button -->
          <div class="cta-button">
            <button class="btn" style="background:#0770fc;color:#ffffff;border:none;border-radius:0;padding:14px 22px;font-family:'elza',sans-serif;font-weight:600;font-size:14px;letter-spacing:-0.35px;">
              Request a Demo
            </button>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>