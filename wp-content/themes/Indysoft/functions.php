<?php

/**
 * @package Bootscore Child
 *
 * @version 6.0.0
 */


// Exit if accessed directly

// AOS enqueue
add_action('wp_enqueue_scripts', function(){
  $theme_uri = get_stylesheet_directory_uri();
  wp_enqueue_style('aos', $theme_uri . '/node_modules/aos/dist/aos.css', [], '3.0.0');
  wp_enqueue_script('aos', $theme_uri . '/node_modules/aos/dist/aos.js', [], '3.0.0', true);
  wp_add_inline_script('aos','AOS.init({ once:true, duration:800, easing:"ease-out-quad"});');
}, 30);

defined('ABSPATH') || exit;


/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // Load Elza font from Typekit FIRST - highest priority
  wp_enqueue_style('elza-typekit', 'https://use.typekit.net/dsa2zcm.css', [], null);

  // Compiled main.css - depends on font being loaded
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style', 'elza-typekit'), $modified_bootscoreChildCss);

  // style.css
  wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/style.css');
  
  // custom.js
  // Get modification time. Enqueue file with modification date to prevent browser from loading cached scripts when file content changes. 
  $modificated_CustomJS = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/js/custom.js'));
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), $modificated_CustomJS, false, true);

  // External Libraries
  wp_enqueue_script('gsap', 'https://web-assets-acwebdev.s3.amazonaws.com/gsap/minified/gsap.min.js', array(), null, true);
  wp_enqueue_script('gsap-scrolltrigger', 'https://web-assets-acwebdev.s3.amazonaws.com/gsap/minified/ScrollTrigger.min.js', array('gsap'), null, true);
  wp_enqueue_script('gsap-flip', 'https://web-assets-acwebdev.s3.amazonaws.com/gsap/minified/Flip.min.js', array('gsap'), null, true);
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

  // Indysoft shared animations
  $modified_animationsJS = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/js/indysoft-animations.js'));
  wp_enqueue_script('indysoft-animations', get_stylesheet_directory_uri() . '/assets/js/indysoft-animations.js', array('jquery','gsap','gsap-scrolltrigger','gsap-flip','swiper'), $modified_animationsJS, true, true);
}

/*
 * Register ACF Hero Section block
 */
add_action('acf/init', function() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'indysoft-hero',
      'title'             => __('Indysoft Hero', 'indysoft'),
      'description'       => __('Hero Section block based on Figma design.', 'indysoft'),
      'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/hero-section.php',
      'category'          => 'formatting',
      'icon'              => 'cover-image',
      'keywords'          => array( 'hero', 'banner', 'indysoft' ),
      'mode'              => 'edit',
      'supports'          => array( 'align' => false, 'mode' => true ),
    ));

    // Register custom fields programmatically
    acf_add_local_field_group(array(
      'key' => 'group_hero_section',
      'title' => 'Indysoft Hero Section',
      'fields' => array(
        array(
          'key' => 'field_headline',
          'label' => 'Headline',
          'name' => 'headline',
          'type' => 'text',
          'instructions' => 'Main large headline text. Leave blank to use default fallback.',
        ),
        array(
          'key' => 'field_subheadline',
          'label' => 'Sub Headline',
          'name' => 'subheadline',
          'type' => 'textarea',
          'instructions' => 'Secondary headline text. Leave blank to use default fallback.',
          'rows' => 2,
        ),
        array(
          'key' => 'field_description',
          'label' => 'Description',
          'name' => 'description',
          'type' => 'textarea',
          'instructions' => 'Paragraph description. Leave blank to use default fallback.',
          'rows' => 4,
        ),
        array(
          'key' => 'field_button_label',
          'label' => 'Button Label',
          'name' => 'button_label',
          'type' => 'text',
          'default_value' => 'Request a Demo',
          'instructions' => 'CTA button label.',
        ),
        array(
          'key' => 'field_button_url',
          'label' => 'Button URL',
          'name' => 'button_url',
          'type' => 'url',
          'instructions' => 'CTA button link destination.',
        ),
        array(
          'key' => 'field_inner_image',
          'label' => 'Inner Screen Image',
          'name' => 'inner_image',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'medium',
          'library' => 'all',
          'instructions' => 'Upload replacement image for the right-hand screenshot.',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/indysoft-hero',
          ),
        ),
      ),
    ));
  }

  /*
   * Register ACF Integrations Section block
   */
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'indysoft-integrations',
      'title'             => __('Indysoft Integrations', 'indysoft'),
      'description'       => __('Professional Swiper.js carousel with exact Figma icons - center card is featured and larger.', 'indysoft'),
      'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/integrations-section.php',
      'category'          => 'formatting',
      'icon'              => 'grid-view',
      'keywords'          => array( 'integrations', 'cards', 'calibration', 'indysoft' ),
      'mode'              => 'edit',
      'supports'          => array( 'align' => false, 'mode' => true ),
    ));

    // Register integrations fields
    acf_add_local_field_group(array(
      'key' => 'group_integrations_section',
      'title' => 'Indysoft Integrations Section',
      'fields' => array(
        array(
          'key' => 'field_integrations_headline',
          'label' => 'Headline',
          'name' => 'headline',
          'type' => 'text',
          'default_value' => 'Precision you can count on',
          'instructions' => 'Main headline text.',
        ),
        array(
          'key' => 'field_integrations_description',
          'label' => 'Description',
          'name' => 'description',
          'type' => 'textarea',
          'instructions' => 'Optional description below headline.',
          'rows' => 2,
        ),
        array(
          'key' => 'field_card_1_title',
          'label' => 'Card 1 Title',
          'name' => 'card_1_title',
          'type' => 'text',
          'default_value' => 'Tooling',
        ),
        array(
          'key' => 'field_card_1_description',
          'label' => 'Card 1 Description',
          'name' => 'card_1_description',
          'type' => 'textarea',
          'rows' => 3,
        ),
        array(
          'key' => 'field_card_1_icon',
          'label' => 'Card 1 Icon',
          'name' => 'card_1_icon',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_card_2_title',
          'label' => 'Card 2 Title (Featured)',
          'name' => 'card_2_title',
          'type' => 'text',
          'default_value' => 'Calibration',
        ),
        array(
          'key' => 'field_card_2_description',
          'label' => 'Card 2 Description (Featured)',
          'name' => 'card_2_description',
          'type' => 'textarea',
          'default_value' => 'Maximize asset value, efficiency, and process ROI.|Tracks tools, test equipment, and other assets to ensure equipment uptime and proactive maintenance.',
          'instructions' => 'Use pipe (|) to separate bullet points. Each item will be displayed as a bullet point.',
          'rows' => 4,
        ),
        array(
          'key' => 'field_card_2_link_text',
          'label' => 'Card 2 Link Text',
          'name' => 'card_2_link_text',
          'type' => 'text',
          'default_value' => 'Learn More',
        ),
        array(
          'key' => 'field_card_2_link_url',
          'label' => 'Card 2 Link URL',
          'name' => 'card_2_link_url',
          'type' => 'url',
        ),
        array(
          'key' => 'field_card_2_icon',
          'label' => 'Card 2 Icon (Featured)',
          'name' => 'card_2_icon',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_card_3_title',
          'label' => 'Card 3 Title',
          'name' => 'card_3_title',
          'type' => 'text',
          'default_value' => 'Maintenance Management',
        ),
        array(
          'key' => 'field_card_3_description',
          'label' => 'Card 3 Description',
          'name' => 'card_3_description',
          'type' => 'textarea',
          'rows' => 3,
        ),
        array(
          'key' => 'field_card_3_icon',
          'label' => 'Card 3 Icon',
          'name' => 'card_3_icon',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/indysoft-integrations',
          ),
        ),
      ),
    ));
  }

  /*
   * Register ACF Logo Cloud Section block
   */
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'indysoft-logo-cloud',
      'title'             => __('Indysoft Logo Cloud', 'indysoft'),
      'description'       => __('Logo cloud section with company logos.', 'indysoft'),
      'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/logo-cloud-section.php',
      'category'          => 'formatting',
      'icon'              => 'images-alt2',
      'keywords'          => array( 'logos', 'cloud', 'partners', 'indysoft' ),
      'mode'              => 'edit',
      'supports'          => array( 'align' => false, 'mode' => true ),
    ));

    // Register logo cloud fields
    acf_add_local_field_group(array(
      'key' => 'group_logo_cloud_section',
      'title' => 'Indysoft Logo Cloud Section',
      'fields' => array(
        array(
          'key' => 'field_logo_cloud_headline',
          'label' => 'Headline',
          'name' => 'headline',
          'type' => 'text',
          'default_value' => 'We won these quality pros and calibration labs over. Are you next?',
          'instructions' => 'Main headline text.',
        ),
        array(
          'key' => 'field_logo_cloud_description',
          'label' => 'Description',
          'name' => 'description',
          'type' => 'textarea',
          'default_value' => 'You really don\'t have to take our word for it. Hear what our customers have to say about us.',
          'instructions' => 'Description below headline.',
          'rows' => 2,
        ),
        array(
          'key' => 'field_logo_1',
          'label' => 'Logo 1',
          'name' => 'logo_1',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_logo_2',
          'label' => 'Logo 2',
          'name' => 'logo_2',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_logo_3',
          'label' => 'Logo 3',
          'name' => 'logo_3',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_logo_4',
          'label' => 'Logo 4',
          'name' => 'logo_4',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_logo_5',
          'label' => 'Logo 5',
          'name' => 'logo_5',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
        array(
          'key' => 'field_logo_6',
          'label' => 'Logo 6',
          'name' => 'logo_6',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'thumbnail',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/indysoft-logo-cloud',
          ),
        ),
      ),
    ));
  }

  /*
   * Register ACF Demo Video Section block
   */
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'indysoft-demo-video',
      'title'             => __('Indysoft Demo Video', 'indysoft'),
      'description'       => __('Demo video section with background image.', 'indysoft'),
      'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/demo-video-section.php',
      'category'          => 'media',
      'icon'              => 'video-alt3',
      'keywords'          => array( 'video', 'demo', 'media', 'indysoft' ),
      'mode'              => 'edit',
      'supports'          => array( 'align' => false, 'mode' => true ),
    ));

    // Register demo video fields
    acf_add_local_field_group(array(
      'key' => 'group_demo_video_section',
      'title' => 'Indysoft Demo Video Section',
      'fields' => array(
        array(
          'key' => 'field_demo_video_headline',
          'label' => 'Headline',
          'name' => 'headline',
          'type' => 'text',
          'default_value' => 'DEMO VIDEO',
          'instructions' => 'Video overlay text.',
        ),
        array(
          'key' => 'field_demo_video_background_image',
          'label' => 'Background Image',
          'name' => 'background_image',
          'type' => 'image',
          'return_format' => 'url',
          'preview_size' => 'medium',
          'instructions' => 'Background image for video section.',
        ),
        array(
          'key' => 'field_demo_video_url',
          'label' => 'Video URL',
          'name' => 'video_url',
          'type' => 'url',
          'instructions' => 'Link to video (YouTube, Vimeo, etc.) or leave blank to disable video.',
        ),
        array(
          'key' => 'field_demo_show_play_button',
          'label' => 'Show Play Button',
          'name' => 'show_play_button',
          'type' => 'true_false',
          'default_value' => 1,
          'instructions' => 'Show play button overlay.',
        ),
      ),
      'location' => array(
        array(
          array(
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/indysoft-demo-video',
          ),
        ),
      ),
    ));
  }
});
