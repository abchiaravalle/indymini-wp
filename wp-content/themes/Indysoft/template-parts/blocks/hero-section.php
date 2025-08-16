<?php
/**
 * Indysoft Hero Section Block Template
 *
 * @package Indysoft
 */

// Get fields with Fallback
$headline      = get_field('headline') ?: 'How quality gets dialed in.';
$subheadline   = get_field('subheadline') ?: 'Stay audit-ready 24/7, improve technician productivity, and ensure compliance';
$description   = get_field('description') ?: 'With IndySoft, you get the industry’s leading calibration management solutions from the global authority, plus superior enterprise asset management, tooling, and maintenance management.';
$button_label  = get_field('button_label') ?: 'Request a Demo';
$button_url    = get_field('button_url') ?: '#';
$inner_image   = get_field('inner_image') ?: get_stylesheet_directory_uri() . '/assets/figma-hero-image.png';

$headline_color    = '#003040';
$subheadline_color = '#003040';
$description_color = '#265E71';
$button_bg         = '#0770fc';
$button_text       = '#f4f4f4';
$blur_bg           = 'rgba(7,112,252,0.15)';
?>
<section class="hero-section position-relative w-100" style="padding:120px 0;background:#fff;">
  
  <div class="position-absolute" style="background:rgba(7,112,252,0.15);filter:blur(20px);width:667px;height:485px;left:816px;top:32px;border-radius:8px;"></div>

  <div class="container" style="max-width:1500px;">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex flex-column" style="gap:40px;max-width:740px;">
        <h1 class="m-0 animate-fade-up" style="font-family:'elza',sans-serif;font-weight:600;font-size:100px;line-height:1;color:<?= esc_attr($headline_color); ?>;letter-spacing:-5px;width:min-content;"><?= esc_html($headline); ?></h1>
        <div class="d-flex flex-column" style="gap:32px;">
          <h2 class="m-0 animate-fade-up" style="font-family:'elza',sans-serif;font-weight:600;font-size:clamp(28px,4vw,40px);line-height:1;color:<?= esc_attr($subheadline_color); ?>;letter-spacing:-1.6px;max-width:740px;"><?= esc_html($subheadline); ?></h2>
          <p class="m-0 animate-fade-up" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:<?= esc_attr($description_color); ?>;max-width:722px;"><?= esc_html($description); ?></p>
        </div>
        <a href="<?= esc_url($button_url); ?>" class="d-inline-flex align-items-center justify-content-center animate-fade-up" style="background:<?= esc_attr($button_bg); ?>;border:1px solid <?= esc_attr($button_bg); ?>;color:<?= esc_attr($button_text); ?>;font-family:'elza',sans-serif;font-weight:600;font-size:14px;letter-spacing:-0.35px;text-decoration:none;padding:14px 22px;border-radius:0;max-width:max-content;">
          <?= esc_html($button_label); ?>
        </a>
      </div>

      
      <div class="col-12 col-lg-6 d-flex justify-content-lg-end hero-img-wrapper position-relative animate-fade-left">
        <div class="position-relative" style="width:700px;height:488px;">
          
          <img src="<?= esc_url($inner_image); ?>" alt="Hero dashboard interface" class="img-fluid" style="width:100%;height:100%;object-fit:cover;border-radius:8px;" />
          
          
          <div class="position-absolute" style="backdrop-filter:blur(2px);background:rgba(255,255,255,0.4);width:697px;height:125px;top:180px;left:0;"></div>
          <div class="position-absolute" style="backdrop-filter:blur(2px);background:rgba(255,255,255,0.4);width:697px;height:26px;top:320px;left:0;"></div>
          <div class="position-absolute" style="backdrop-filter:blur(2px);background:rgba(255,255,255,0.4);width:697px;height:69px;top:360px;left:0;"></div>
          <div class="position-absolute" style="backdrop-filter:blur(2px);background:rgba(255,255,255,0.4);width:697px;height:23px;top:440px;left:0;"></div>
          
          
          <div class="position-absolute" style="left:-81px;top:262px;">
            <div class="position-absolute rounded" style="background:rgba(7,112,252,0.2);width:204px;height:61px;box-shadow:10px 10px 30px 0px rgba(0,30,130,0.1);border-radius:5000%;"></div>
            <div class="position-absolute" style="left:29px;top:19px;width:23.899px;height:23.899px;">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/48ce29df8cceb430a8ea6081370eff61ce7cb8d2.svg" alt="Data Point" style="width:100%;height:100%;">
            </div>
            <div class="position-absolute" style="left:65px;top:12px;width:167px;height:37px;font-family:'elza',sans-serif;font-weight:600;font-size:20px;line-height:1.4;color:#003040;letter-spacing:-0.5px;">
              Part Number
            </div>
          </div>
          
          
          <div class="position-absolute" style="left:483px;top:290px;">
            <div class="position-absolute rounded" style="background:rgba(7,112,252,0.2);width:233px;height:61px;box-shadow:10px 10px 30px 0px rgba(0,30,130,0.1);border-radius:5000%;"></div>
            <div class="position-absolute" style="left:29px;top:19px;width:23.899px;height:23.899px;">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/48ce29df8cceb430a8ea6081370eff61ce7cb8d2.svg" alt="Data Point" style="width:100%;height:100%;">
            </div>
            <div class="position-absolute" style="left:65px;top:12px;width:167px;height:37px;font-family:'elza',sans-serif;font-weight:600;font-size:14px;line-height:1.4;color:#003040;letter-spacing:-0.35px;">
              Place to emphasize an interesting feature
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  .hero-section {
    overflow: hidden; /* Ensure data points don't cause horizontal scroll */
  }
  
  @media (min-width: 992px) {
    .hero-img-wrapper {
      margin-right: -75px;
    }
    
    /* Blur background positioning for desktop */
    .hero-section > div:first-child {
      left: calc(50% + 200px);
      transform: translateX(-50%);
    }
  }
  
  @media (max-width: 991.98px) {
    /* Hide blur background on mobile/tablet */
    .hero-section > div:first-child[style*="blur"] {
      display: none !important;
    }
    
    /* Stack data points better on mobile */
    .hero-img-wrapper .position-absolute[style*="left:-81px"] {
      left: 20px !important;
      top: 240px !important;
    }
    
    .hero-img-wrapper .position-absolute[style*="left:483px"] {
      left: 20px !important;
      top: 320px !important;
    }
    
    /* Adjust backdrop blur elements for mobile */
    .hero-img-wrapper .position-absolute[style*="backdrop-filter"] {
      width: 100% !important;
    }
  }
  
  @media (max-width: 767.98px) {
    /* Further adjustments for small screens */
    .hero-section {
      padding: 80px 0 !important;
    }
    
    /* Hide data points on very small screens to avoid clutter */
    .hero-img-wrapper .position-absolute[style*="Part Number"],
    .hero-img-wrapper .position-absolute[style*="interesting feature"] {
      display: none;
    }
  }
</style>


<script>
// Hero section animations (if GSAP is available)
if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
  gsap.registerPlugin(ScrollTrigger);
  
  // Set initial states for hero animations
  gsap.set(['.animate-fade', '.animate-fade-up', '.animate-fade-left', '.animate-fade-down'], {
    opacity: 0,
    y: function(index, element) {
      if (element.classList.contains('animate-fade-up')) return 20;
      if (element.classList.contains('animate-fade-down')) return -20;
      return 0;
    },
    x: function(index, element) {
      if (element.classList.contains('animate-fade-left')) return 20;
      return 0;
    }
  });

  // Hero animations with ScrollTrigger
  ScrollTrigger.batch('.hero-section .animate-fade', {
    onEnter: (elements) => {
      gsap.to(elements, {
        opacity: 1,
        duration: 1.2,
        stagger: 0.15,
        ease: 'power3.out'
      });
    },
    start: 'top 70%',
    once: true
  });

  ScrollTrigger.batch('.hero-section .animate-fade-up', {
    onEnter: (elements) => {
      gsap.to(elements, {
        opacity: 1,
        y: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: 'power3.out'
      });
    },
    start: 'top 70%',
    once: true
  });

  ScrollTrigger.batch('.hero-section .animate-fade-left', {
    onEnter: (elements) => {
      gsap.to(elements, {
        opacity: 1,
        x: 0,
        duration: 1.2,
        stagger: 0.15,
        ease: 'power3.out'
      });
    },
    start: 'top 70%',
    once: true
  });

  ScrollTrigger.batch('.hero-section .animate-fade-down', {
    onEnter: (elements) => {
      gsap.to(elements, {
        opacity: 1,
        y: 0,
        duration: 1.2,
        stagger: 0.15,
        ease: 'power3.out'
      });
    },
    start: 'top 70%',
    once: true
  });
}
</script> 