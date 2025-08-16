<?php
/**
 * Indysoft Integrations Section Block Template (Swiper Carousel)
 *
 * @package Indysoft
 */

// Get fields with Fallback
$headline      = get_field('headline') ?: 'Precision you can count on';
$description   = get_field('description') ?: '';

// Cards with fallbacks
$card_1_title       = get_field('card_1_title') ?: 'Tooling';
$card_1_description = get_field('card_1_description') ?: '';
$card_1_icon        = get_field('card_1_icon') ?: '';

$card_2_title       = get_field('card_2_title') ?: 'Calibration';
$card_2_description = get_field('card_2_description') ?: 'Maximize asset value, efficiency, and process ROI.|Tracks tools, test equipment, and other assets to ensure equipment uptime and proactive maintenance.';
$card_2_link_text   = get_field('card_2_link_text') ?: 'Learn More';
$card_2_link_url    = get_field('card_2_link_url') ?: '#';
$card_2_icon        = get_field('card_2_icon') ?: '';

$card_3_title       = get_field('card_3_title') ?: 'Maintenance Management';
$card_3_description = get_field('card_3_description') ?: '';
$card_3_icon        = get_field('card_3_icon') ?: '';

// Colors
$bg_color           = '#173758';
$headline_color     = '#ffffff';
$card_bg            = '#ffffff';
$card_title_color   = '#003040';
$card_text_color    = '#1C5263';
$link_color         = '#0770fc';
$blur_bg_main       = '#0e2238';
$blur_bg_side       = '#0e2238';

// Figma Icon URLs (exact from Figma export)
$tooling_icon_url = get_stylesheet_directory_uri() . '/assets/3a98abbf4dcea020f3101fbabf2da02230197a6e.svg';
$calibration_icon_group_1 = get_stylesheet_directory_uri() . '/assets/7662fd55d9395d091d03500f4534fcd00553133c.svg';
$calibration_icon_group_2 = get_stylesheet_directory_uri() . '/assets/c1de642c3fa17843994817c0231bcc31a686b66b.svg';
$calibration_icon_group_3 = get_stylesheet_directory_uri() . '/assets/a8b53bd0037e7edc09439da6f5f3dcd79597efc1.svg';
$calibration_icon_group_4 = get_stylesheet_directory_uri() . '/assets/22dd6be09682aee525f1bcff6cc6479cb943a8f3.svg';
$calibration_icon_group_5 = get_stylesheet_directory_uri() . '/assets/56a71406e318f89d44b91fa62f76b1c05afb0f3f.svg';
$maintenance_icon_vector = get_stylesheet_directory_uri() . '/assets/522539d470330b7ca51df31d24dea93cf8cea694.svg';
$maintenance_icon_gear = get_stylesheet_directory_uri() . '/assets/33e9273ca93e94eb2f8a06c60270fae53d74cd8e.svg';
$learn_more_arrow = get_stylesheet_directory_uri() . '/assets/76f079d288493b839bce3cebf6dacbbfaf10ebc7.svg';
$arrow_left = get_stylesheet_directory_uri() . '/assets/1b716f75e3b68337e1fb2b9ff6fd751204cbe336.svg';
$arrow_right = get_stylesheet_directory_uri() . '/assets/39780cbb09447a19f0965d497c269e040e6b47c3.svg';
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="integrations-section position-relative w-100 d-flex justify-content-center" style="background:<?= esc_attr($bg_color); ?>;padding:80px 0;margin-top:80px;">
  <div class="container" style="max-width:1500px;">
    
    
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="m-0 mb-5" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:<?= esc_attr($headline_color); ?>;letter-spacing:-1.8px;"><?= esc_html($headline); ?></h2>
        <?php if ($description): ?>
          <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:<?= esc_attr($headline_color); ?>;"><?= esc_html($description); ?></p>
        <?php endif; ?>
      </div>
    </div>

    
    <div class="swiper integrationsSwiper" style="height:450px;overflow:visible;">
      <div class="swiper-wrapper" style="align-items:center;">
        
        
        <div class="swiper-slide">
          <div class="position-relative d-flex justify-content-center">
            
            <div class="position-absolute rounded" style="background:<?= esc_attr($blur_bg_side); ?>;filter:blur(20px);width:322px;height:223px;top:8px;left:9px;z-index:1;"></div>
            
            <div class="position-relative card border-0 rounded" style="background:<?= esc_attr($card_bg); ?>;width:339px;height:224px;z-index:2;">
              <div class="card-body d-flex flex-column align-items-center justify-content-center text-center h-100">
                
                <div class="mb-3" style="width:40px;height:40px;opacity:0.5;">
                  <?php if ($card_1_icon): ?>
                    <img src="<?= esc_url($card_1_icon); ?>" alt="<?= esc_attr($card_1_title); ?>" style="width:100%;height:100%;object-fit:contain;">
                  <?php else: ?>
                    <img src="<?= esc_url($tooling_icon_url); ?>" alt="<?= esc_attr($card_1_title); ?>" style="width:100%;height:100%;object-fit:contain;">
                  <?php endif; ?>
                </div>
                <h3 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:26px;line-height:1.1;color:<?= esc_attr($card_title_color); ?>;letter-spacing:-0.52px;opacity:0.5;"><?= esc_html($card_1_title); ?></h3>
                <?php if ($card_1_description): ?>
                  <p class="m-0 mt-2" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:<?= esc_attr($card_text_color); ?>;opacity:0.5;"><?= wp_kses_post($card_1_description); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        
        <div class="swiper-slide">
          <div class="position-relative d-flex justify-content-center">
            
            <div class="position-absolute rounded" style="background:<?= esc_attr($blur_bg_main); ?>;filter:blur(25px);width:400px;height:433px;top:14px;left:13px;z-index:1;"></div>
            
            <div class="position-relative card border-0 rounded" style="background:<?= esc_attr($card_bg); ?>;width:424px;height:433px;z-index:2;">
              <div class="card-body d-flex flex-column align-items-center text-center h-100 p-4">
                
                <div class="position-relative mb-3" style="width:50px;height:50px;margin-top:20px;">
                  <?php if ($card_2_icon): ?>
                    <img src="<?= esc_url($card_2_icon); ?>" alt="<?= esc_attr($card_2_title); ?>" style="width:100%;height:100%;object-fit:contain;">
                  <?php else: ?>
                    
                    <div class="position-relative w-100 h-100">
                      <img src="<?= esc_url($calibration_icon_group_1); ?>" alt="Calibration Target" class="position-absolute" style="width:100%;height:100%;">
                      <img src="<?= esc_url($calibration_icon_group_2); ?>" alt="Calibration Target" class="position-absolute" style="width:34.27%;height:34.27%;top:6.94%;right:6.94%;">
                      <img src="<?= esc_url($calibration_icon_group_3); ?>" alt="Calibration Target" class="position-absolute" style="width:34.27%;height:34.27%;top:6.94%;left:6.94%;">
                      <img src="<?= esc_url($calibration_icon_group_4); ?>" alt="Calibration Target" class="position-absolute" style="width:34.27%;height:34.27%;bottom:6.94%;left:6.94%;">
                      <img src="<?= esc_url($calibration_icon_group_5); ?>" alt="Calibration Target" class="position-absolute" style="width:34.27%;height:34.27%;bottom:6.94%;right:6.94%;">
                    </div>
                  <?php endif; ?>
                </div>
                
                <h3 class="m-0 mb-4" style="font-family:'elza',sans-serif;font-weight:600;font-size:32px;line-height:1.1;color:<?= esc_attr($card_title_color); ?>;letter-spacing:-0.64px;"><?= esc_html($card_2_title); ?></h3>
                
                
                <?php if ($card_2_description): 
                  $description_items = explode('|', $card_2_description); ?>
                  <div class="mb-4" style="font-family:'elza',sans-serif;font-weight:400;font-size:20px;line-height:1.4;color:<?= esc_attr($card_text_color); ?>;max-width:284px;text-align:left;">
                    <ul class="list-disc ps-4 m-0">
                      <?php foreach ($description_items as $item): ?>
                        <li class="mb-2" style="margin-left:30px;">
                          <span style="line-height:1.4;"><?= esc_html(trim($item)); ?></span>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                <?php endif; ?>
                
                
                <?php if ($card_2_link_text && $card_2_link_url): ?>
                  <a href="<?= esc_url($card_2_link_url); ?>" class="d-flex align-items-center gap-2 mt-auto" style="font-family:'elza',sans-serif;font-weight:600;font-size:16px;color:<?= esc_attr($link_color); ?>;text-decoration:none;">
                    <?= esc_html($card_2_link_text); ?>
                    <img src="<?= esc_url($learn_more_arrow); ?>" alt="Arrow" style="width:10px;height:10px;">
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        
        <div class="swiper-slide">
          <div class="position-relative d-flex justify-content-center">
            
            <div class="position-absolute rounded" style="background:<?= esc_attr($blur_bg_side); ?>;filter:blur(20px);width:319px;height:228px;top:7px;left:10px;z-index:1;"></div>
            
            <div class="position-relative card border-0 rounded" style="background:<?= esc_attr($card_bg); ?>;width:339px;height:224px;z-index:2;">
              <div class="card-body d-flex flex-column align-items-center justify-content-center text-center h-100">
                
                <div class="position-relative mb-3" style="width:40px;height:40px;opacity:0.5;">
                  <?php if ($card_3_icon): ?>
                    <img src="<?= esc_url($card_3_icon); ?>" alt="<?= esc_attr($card_3_title); ?>" style="width:100%;height:100%;object-fit:contain;">
                  <?php else: ?>
                    
                    <div class="position-relative w-100 h-100">
                      <img src="<?= esc_url($maintenance_icon_gear); ?>" alt="Maintenance Gear" class="position-absolute" style="width:100%;height:100%;">
                      <img src="<?= esc_url($maintenance_icon_vector); ?>" alt="Maintenance Vector" class="position-absolute" style="width:7.81%;height:7.81%;top:46.68%;left:44.92%;">
                    </div>
                  <?php endif; ?>
                </div>
                <h3 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:26px;line-height:1.1;color:<?= esc_attr($card_title_color); ?>;letter-spacing:-0.52px;opacity:0.5;"><?= esc_html($card_3_title); ?></h3>
                <?php if ($card_3_description): ?>
                  <p class="m-0 mt-2" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:<?= esc_attr($card_text_color); ?>;opacity:0.5;"><?= wp_kses_post($card_3_description); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    
    <div class="row justify-content-center mt-4">
      <div class="col-auto">
        <div class="d-flex gap-2">
          <button class="swiper-button-prev-custom btn p-0 border-0 bg-transparent" style="width:40px;height:40px;">
            <img src="<?= esc_url($arrow_left); ?>" alt="Previous" style="width:100%;height:100%;">
          </button>
          <button class="swiper-button-next-custom btn p-0 border-0 bg-transparent" style="width:40px;height:40px;">
            <img src="<?= esc_url($arrow_right); ?>" alt="Next" style="width:100%;height:100%;">
          </button>
        </div>
      </div>
    </div>

  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const swiper = new Swiper('.integrationsSwiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    initialSlide: 1, // Start with Calibration in center
    loop: true,
    effect: 'slide',
    speed: 600,
    
    // Responsive breakpoints
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,  
        spaceBetween: 25
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    },

    // Navigation
    navigation: {
      nextEl: '.swiper-button-next-custom',
      prevEl: '.swiper-button-prev-custom',
    },

    // Events
    on: {
      slideChange: function () {
        updateSlideStyles();
      },
      init: function () {
        updateSlideStyles();
      }
    }
  });

  function updateSlideStyles() {
    const slides = document.querySelectorAll('.integrationsSwiper .swiper-slide');
    
    slides.forEach((slide, index) => {
      const isActive = slide.classList.contains('swiper-slide-active');
      
      if (isActive) {
        // Active (center) slide
        slide.style.transform = 'scale(1)';
        slide.style.opacity = '1';
        slide.style.zIndex = '10';
      } else {
        // Side slides
        slide.style.transform = 'scale(0.85)';
        slide.style.opacity = '0.7';
        slide.style.zIndex = '5';
      }
    });
  }

  // Hover effects
  const slides = document.querySelectorAll('.integrationsSwiper .swiper-slide');
  slides.forEach(slide => {
    slide.addEventListener('mouseenter', function() {
      if (!this.classList.contains('swiper-slide-active')) {
        this.style.transform = 'scale(0.9)';
      }
    });
    
    slide.addEventListener('mouseleave', function() {
      updateSlideStyles();
    });
  });
});
</script>


<style>
.integrationsSwiper {
  overflow: visible !important;
}

.integrationsSwiper .swiper-slide {
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  display: flex;
  align-items: center;
  justify-content: center;
}

.swiper-button-prev-custom:hover,
.swiper-button-next-custom:hover {
  transform: scale(1.1);
  transition: transform 0.2s ease;
}

/* Ensure proper z-index layering */
.position-relative {
  position: relative !important;
}
</style>