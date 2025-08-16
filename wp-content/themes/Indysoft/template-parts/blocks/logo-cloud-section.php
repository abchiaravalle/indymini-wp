<?php
/**
 * Indysoft Logo Cloud Section Block Template
 *
 * @package Indysoft
 */

// Get fields with Fallback
$headline      = get_field('headline') ?: 'We won these quality pros and calibration labs over. Are you next?';
$description   = get_field('description') ?: 'You really don\'t have to take our word for it. Hear what our customers have to say about us.';

// Logo fields with fallbacks
$logo_1 = get_field('logo_1') ?: '';
$logo_2 = get_field('logo_2') ?: '';
$logo_3 = get_field('logo_3') ?: '';
$logo_4 = get_field('logo_4') ?: '';
$logo_5 = get_field('logo_5') ?: '';
$logo_6 = get_field('logo_6') ?: '';

// Colors
$bg_color           = 'rgba(7,112,252,0.07)';
$headline_color     = '#003040';
$description_color  = '#1C5263';
?>

<section class="logo-cloud-section py-5 position-relative w-100 d-flex justify-content-center balance" >
  <div class="container py-md-4" style="max-width:1500px;">
    
    
    <div class="row justify-content-center">
      <div class="col-12" style="">
        <div class="text-center mb-5">
          <h2 class="m-0 mb-4" style="font-family:'elza',sans-serif;font-weight:600;font-size:60px;line-height:1;color:<?= esc_attr($headline_color); ?>;letter-spacing:-1.8px;"><?= esc_html($headline); ?></h2>
          <p class="m-0" style="font-family:'elza',sans-serif;font-weight:400;font-size:16px;line-height:1.4;color:<?= esc_attr($description_color); ?>;"><?= esc_html($description); ?></p>
        </div>
      </div>
    </div>

    
    <div class="row justify-content-center">
      <div class="col-12" style="max-width:1500px;">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4" style="padding:40px 0;">
          
          <?php if ($logo_1): ?>
            <div class="logo-container d-flex align-items-center justify-content-center" style="width:154px;height:84px;padding:20px;">
              <img src="<?= esc_url($logo_1); ?>" alt="Partner Logo" class="img-fluid" style="max-width:100%;max-height:100%;opacity:0.6;mix-blend-mode:multiply;object-fit:contain;">
            </div>
          <?php endif; ?>

          <?php if ($logo_2): ?>
            <div class="logo-container d-flex align-items-center justify-content-center" style="width:154px;height:84px;padding:20px;">
              <img src="<?= esc_url($logo_2); ?>" alt="Partner Logo" class="img-fluid" style="max-width:100%;max-height:100%;opacity:0.6;mix-blend-mode:multiply;object-fit:contain;">
            </div>
          <?php endif; ?>

          <?php if ($logo_3): ?>
            <div class="logo-container d-flex align-items-center justify-content-center" style="width:154px;height:84px;padding:20px;">
              <img src="<?= esc_url($logo_3); ?>" alt="Partner Logo" class="img-fluid" style="max-width:100%;max-height:100%;opacity:0.6;mix-blend-mode:multiply;object-fit:contain;">
            </div>
          <?php endif; ?>

          <?php if ($logo_4): ?>
            <div class="logo-container d-flex align-items-center justify-content-center" style="width:154px;height:84px;padding:20px;">
              <img src="<?= esc_url($logo_4); ?>" alt="Partner Logo" class="img-fluid" style="max-width:100%;max-height:100%;opacity:0.6;mix-blend-mode:multiply;object-fit:contain;">
            </div>
          <?php endif; ?>

          <?php if ($logo_5): ?>
            <div class="logo-container d-flex align-items-center justify-content-center" style="width:154px;height:84px;padding:20px;">
              <img src="<?= esc_url($logo_5); ?>" alt="Partner Logo" class="img-fluid" style="max-width:100%;max-height:100%;opacity:0.6;mix-blend-mode:multiply;object-fit:contain;">
            </div>
          <?php endif; ?>

          <?php if ($logo_6): ?>
            <div class="logo-container d-flex align-items-center justify-content-center" style="width:150px;height:82px;padding:20px;">
              <img src="<?= esc_url($logo_6); ?>" alt="Partner Logo" class="img-fluid" style="max-width:100%;max-height:100%;opacity:0.6;mix-blend-mode:multiply;object-fit:contain;">
            </div>
          <?php endif; ?>

        </div>
      </div>
    </div>

  </div>
</section>