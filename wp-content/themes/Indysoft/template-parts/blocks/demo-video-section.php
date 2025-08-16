<?php
/**
 * Indysoft Demo Video Section Block Template
 *
 * @package Indysoft
 */

// Get fields with Fallback
$headline        = get_field('headline') ?: 'DEMO VIDEO';
$background_image = get_field('background_image') ?: get_stylesheet_directory_uri() . '/assets/demo-video-bg.jpg';
$video_url       = get_field('video_url') ?: '#';
$play_button     = get_field('show_play_button') ?: true;

// Colors
$overlay_bg      = 'rgba(0,0,0,0.5)';
$text_color      = '#ffffff';
?>

<section class="demo-video-section position-relative w-100 d-flex justify-content-center" style="padding:40px 0;">
  <div class="container" style="max-width:1500px;">
    
    
    <div class="row">
      <div class="col-12">
        <div class="position-relative rounded overflow-hidden" style="aspect-ratio:1120/620;max-height:830px;">
          
          
          <div class="position-absolute w-100 h-100" style="background:linear-gradient(90deg, <?= esc_attr($overlay_bg); ?> 0%, <?= esc_attr($overlay_bg); ?> 100%), url('<?= esc_url($background_image); ?>');background-size:cover;background-position:50% 50%;top:0;left:0;z-index:1;"></div>
          
          
          <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center" style="z-index:2;">
            <div class="text-center">
              
              <?php if ($play_button && $video_url && $video_url !== '#'): ?>
                
                <a href="<?= esc_url($video_url); ?>" class="d-inline-block mb-4 text-decoration-none" style="color:<?= esc_attr($text_color); ?>;">
                  <div class="d-flex align-items-center justify-content-center rounded-circle" style="width:80px;height:80px;background:rgba(255,255,255,0.2);backdrop-filter:blur(10px);transition:all 0.3s ease;">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none">
                      <path d="M10 8L22 15L10 22V8Z" fill="currentColor"/>
                    </svg>
                  </div>
                </a>
              <?php endif; ?>
              
              
              <h2 class="m-0" style="font-family:'elza',sans-serif;font-weight:600;font-size:80px;line-height:1.4;color:<?= esc_attr($text_color); ?>;letter-spacing:-2px;max-width:647px;"><?= esc_html($headline); ?></h2>
              
            </div>
          </div>
          
          <?php if ($video_url && $video_url !== '#'): ?>
            
            <a href="<?= esc_url($video_url); ?>" class="position-absolute w-100 h-100" style="z-index:3;top:0;left:0;" aria-label="Play Demo Video"></a>
          <?php endif; ?>
          
        </div>
      </div>
    </div>

  </div>
</section>


<style>
  .demo-video-section .rounded-circle:hover {
    background: rgba(255,255,255,0.3) !important;
    transform: scale(1.1);
  }
  
  .demo-video-section a:hover h2 {
    transform: scale(1.02);
    transition: transform 0.3s ease;
  }
</style>