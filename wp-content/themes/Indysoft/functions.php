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

add_action('acf/init', function() {
  if (!function_exists('acf_add_options_page')) return;

  // Footer Options Page
  acf_add_options_page(array(
    'page_title'  => 'Theme Options',
    'menu_title'  => 'Theme Options',
    'menu_slug'   => 'theme-options',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_local_field_group(array(
    'key' => 'group_theme_footer',
    'title' => 'Footer HTML',
    'fields' => array(
      array(
        'key' => 'field_footer_html',
        'label' => 'Footer HTML',
        'name' => 'footer_html',
        'type' => 'textarea',
        'instructions' => 'Custom HTML for the footer. Leave empty to use the default footer markup.',
        'rows' => 15,
        'new_lines' => 'wpautop',
        'default_value' => ''
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-options',
        ),
      ),
    ),
  ));

  // Home Page fields
  acf_add_local_field_group(array(
    'key' => 'group_home_page',
    'title' => 'Home Page Content',
    'fields' => array(
      array(
        'key' => 'field_home_hero_title',
        'label' => 'Hero Title',
        'name' => 'home_hero_title',
        'type' => 'text',
        'instructions' => 'Main hero H1 title.',
        'default_value' => 'How quality gets dialed in.'
      ),
      array(
        'key' => 'field_home_hero_subtitle',
        'label' => 'Hero Subtitle',
        'name' => 'home_hero_subtitle',
        'type' => 'text',
        'instructions' => 'Secondary hero headline.',
        'default_value' => 'Stay audit-ready 24/7, improve technician productivity, and ensure compliance'
      ),
      array(
        'key' => 'field_home_hero_description',
        'label' => 'Hero Description',
        'name' => 'home_hero_description',
        'type' => 'textarea',
        'instructions' => 'Hero paragraph below headline.',
        'rows' => 3,
        'default_value' => "With IndySoft, you get the industry's leading calibration management solutions from the global authority, plus superior enterprise asset management, tooling, and maintenance management."
      ),
      array(
        'key' => 'field_home_hero_cta_label',
        'label' => 'Hero CTA Label',
        'name' => 'home_hero_cta_label',
        'type' => 'text',
        'instructions' => 'Hero CTA button text.',
        'default_value' => 'Request a Demo'
      ),
      array(
        'key' => 'field_home_hero_cta_url',
        'label' => 'Hero CTA URL',
        'name' => 'home_hero_cta_url',
        'type' => 'url',
        'instructions' => 'Hero CTA link target.',
        'default_value' => '#'
      ),
      array(
        'key' => 'field_home_precision_center_bullets',
        'label' => 'Precision Center Bullets',
        'name' => 'home_precision_center_bullets',
        'type' => 'textarea',
        'instructions' => 'Bullets for the center precision card (use | to separate items).',
        'rows' => 3,
        'default_value' => 'Maximize asset value, efficiency, and process ROI.|Tracks tools, test equipment, and other assets to ensure equipment uptime and proactive maintenance.'
      ),
      array(
        'key' => 'field_home_cta_heading',
        'label' => 'Bottom CTA Heading',
        'name' => 'home_cta_heading',
        'type' => 'text',
        'instructions' => 'Heading for the bottom CTA card.',
        'default_value' => 'Find out which IndySoft solutions are right for you'
      ),
      array(
        'key' => 'field_home_cta_primary_label',
        'label' => 'CTA Primary Button Label',
        'name' => 'home_cta_primary_label',
        'type' => 'text',
        'instructions' => 'Primary button label.',
        'default_value' => 'For Calibration Labs'
      ),
      array(
        'key' => 'field_home_cta_primary_url',
        'label' => 'CTA Primary Button URL',
        'name' => 'home_cta_primary_url',
        'type' => 'url',
        'instructions' => 'Primary button URL.',
        'default_value' => '#'
      ),
      array(
        'key' => 'field_home_cta_secondary_label',
        'label' => 'CTA Secondary Button Label',
        'name' => 'home_cta_secondary_label',
        'type' => 'text',
        'instructions' => 'Secondary button label.',
        'default_value' => 'For Internal Labs'
      ),
      array(
        'key' => 'field_home_cta_secondary_url',
        'label' => 'CTA Secondary Button URL',
        'name' => 'home_cta_secondary_url',
        'type' => 'url',
        'instructions' => 'Secondary button URL.',
        'default_value' => '#'
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-home.php',
        ),
      ),
    ),
  ));

  // Solutions Page fields
  acf_add_local_field_group(array(
    'key' => 'group_solutions_page',
    'title' => 'Solutions Page Content',
    'fields' => array(
      array(
        'key' => 'field_sol_hero_heading',
        'label' => 'Hero Heading',
        'name' => 'sol_hero_heading',
        'type' => 'text',
        'instructions' => 'Main hero heading (H1).',
        'default_value' => 'Powerful. Flexible. Complete.'
      ),
      array(
        'key' => 'field_sol_hero_paragraph',
        'label' => 'Hero Paragraph',
        'name' => 'sol_hero_paragraph',
        'type' => 'textarea',
        'instructions' => 'Short descriptive paragraph below the hero heading.',
        'rows' => 3,
        'default_value' => 'IndySoft is the all-in-one platform for Calibration, Tooling, Maintenance, and Asset Management—built to streamline compliance, eliminate downtime, and integrate seamlessly with your existing tools. Designed for regulated industries, IndySoft gives you a single source of truth for every asset across its lifecycle.'
      ),
      array(
        'key' => 'field_sol_explore_heading',
        'label' => 'Explore Heading',
        'name' => 'sol_explore_heading',
        'type' => 'text',
        'instructions' => 'Heading for the "Explore our specialized solutions" section.',
        'default_value' => 'Explore our specialized solutions'
      ),
      array(
        'key' => 'field_sol_feature_items',
        'label' => 'Feature Items',
        'name' => 'sol_feature_items',
        'type' => 'repeater',
        'instructions' => 'List of feature categories shown on the left (Calibration, Tooling, etc.).',
        'button_label' => 'Add Feature',
        'sub_fields' => array(
          array(
            'key' => 'field_sol_feat_icon',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'return_format' => 'url',
            'instructions' => 'SVG/PNG icon.'
          ),
          array(
            'key' => 'field_sol_feat_label',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
            'instructions' => 'Feature label (e.g., Calibration).'
          )
        )
      ),
      array(
        'key' => 'field_sol_cta_label',
        'label' => 'CTA Button Label',
        'name' => 'sol_cta_label',
        'type' => 'text',
        'instructions' => 'Label for the CTA button in the Explore section.',
        'default_value' => 'Request a Demo Today'
      ),
      array(
        'key' => 'field_sol_cta_url',
        'label' => 'CTA Button URL',
        'name' => 'sol_cta_url',
        'type' => 'url',
        'instructions' => 'URL for the CTA button.',
        'default_value' => '#'
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-solutions.php',
        ),
      ),
    ),
  ));

  // Solutions Sub Page fields
  acf_add_local_field_group(array(
    'key' => 'group_solutions_sub_page',
    'title' => 'Solutions Sub Page Content',
    'fields' => array(
      array(
        'key' => 'field_ss_hero_headline',
        'label' => 'Hero Headline',
        'name' => 'ss_hero_headline',
        'type' => 'text',
        'instructions' => 'Main hero headline.',
        'default_value' => 'Where Compliance Meets Confidence'
      ),
      array(
        'key' => 'field_ss_hero_p1',
        'label' => 'Hero Paragraph 1',
        'name' => 'ss_hero_p1',
        'type' => 'textarea',
        'instructions' => 'First hero paragraph.',
        'rows' => 3,
        'default_value' => "IndySoft's calibration management software is purpose-built for precision-driven industries where accuracy, compliance, and operational efficiency are mission-critical. From real-time scheduling to certificate generation and electronic signatures (fully 21 CFR Part 11 compliant), our platform delivers complete lifecycle control for every calibration asset—no matter the complexity of your sites, processes, or regulations."
      ),
      array(
        'key' => 'field_ss_hero_p2',
        'label' => 'Hero Paragraph 2',
        'name' => 'ss_hero_p2',
        'type' => 'textarea',
        'instructions' => 'Second hero paragraph.',
        'rows' => 3,
        'default_value' => "With IndySoft, calibration isn't just a checkbox for compliance. It becomes a driver of quality assurance, customer trust, and operational excellence."
      ),
      array(
        'key' => 'field_ss_hero_image',
        'label' => 'Hero Image',
        'name' => 'ss_hero_image',
        'type' => 'image',
        'instructions' => 'Hero right image.',
        'return_format' => 'url'
      ),
      array(
        'key' => 'field_ss_features',
        'label' => 'Key Features',
        'name' => 'ss_features',
        'type' => 'repeater',
        'instructions' => 'Accordion features list.',
        'button_label' => 'Add Feature',
        'sub_fields' => array(
          array(
            'key' => 'field_ss_feat_icon',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'return_format' => 'url'
          ),
          array(
            'key' => 'field_ss_feat_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text'
          ),
          array(
            'key' => 'field_ss_feat_body',
            'label' => 'Body',
            'name' => 'body',
            'type' => 'textarea',
            'rows' => 3
          )
        )
      ),
      array(
        'key' => 'field_ss_benefits',
        'label' => 'Benefits',
        'name' => 'ss_benefits',
        'type' => 'repeater',
        'instructions' => 'Benefits grid (icon, title, text).',
        'button_label' => 'Add Benefit',
        'sub_fields' => array(
          array(
            'key' => 'field_ss_benefit_icon',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'return_format' => 'url'
          ),
          array(
            'key' => 'field_ss_benefit_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text'
          ),
          array(
            'key' => 'field_ss_benefit_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'rows' => 3
          )
        )
      ),
      array(
        'key' => 'field_ss_use_cases',
        'label' => 'Use Cases',
        'name' => 'ss_use_cases',
        'type' => 'repeater',
        'instructions' => 'Three use case cards (title, text, right image).',
        'min' => 0,
        'max' => 3,
        'button_label' => 'Add Use Case',
        'sub_fields' => array(
          array(
            'key' => 'field_ss_uc_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text'
          ),
          array(
            'key' => 'field_ss_uc_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'rows' => 3
          ),
          array(
            'key' => 'field_ss_uc_image',
            'label' => 'Right Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'url'
          )
        )
      ),
      array(
        'key' => 'field_ss_cta_heading',
        'label' => 'CTA Heading',
        'name' => 'ss_cta_heading',
        'type' => 'text',
        'instructions' => 'Bottom CTA heading.',
        'default_value' => 'Ensure every calibration counts'
      ),
      array(
        'key' => 'field_ss_cta_p1',
        'label' => 'CTA Paragraph 1',
        'name' => 'ss_cta_p1',
        'type' => 'textarea',
        'rows' => 3,
        'instructions' => 'First CTA paragraph.',
      ),
      array(
        'key' => 'field_ss_cta_p2',
        'label' => 'CTA Paragraph 2',
        'name' => 'ss_cta_p2',
        'type' => 'textarea',
        'rows' => 3,
        'instructions' => 'Second CTA paragraph.',
      ),
      array(
        'key' => 'field_ss_cta_btn_label',
        'label' => 'CTA Button Label',
        'name' => 'ss_cta_btn_label',
        'type' => 'text',
        'default_value' => 'Request a Demo'
      ),
      array(
        'key' => 'field_ss_cta_btn_url',
        'label' => 'CTA Button URL',
        'name' => 'ss_cta_btn_url',
        'type' => 'url',
        'default_value' => '#'
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-solutions-sub.php',
        ),
      ),
    ),
  ));
});
