<?php
/**
 * The header template for Indysoft theme, derived from Bootscore but with custom Figma navigation.
 *
 * @package Indysoft
 */

// Exit if accessed directly
defined('ABSPATH') || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <style>
    /* Custom styles for Indysoft Figma navigation */
    .indy-nav-items .nav-link{
      color:#003040;
      font-family:'Elza',sans-serif;
      font-weight:600;
      font-size:14px;
      line-height:1.4;
      letter-spacing:-0.35px;
      text-decoration:none;
    }
    .indy-nav-items .nav-link:hover,
    .indy-nav-items .nav-link:focus{
      color:#0770fc;
      text-decoration:none;
    }
    
    /* Custom floating dropdown menu */
    .floating-menu {
      position: absolute;
      top: 100%;
      right: 0;
      background:#ffffff;
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 12px;
      box-shadow:0 0 40px 20px rgba(7,112,252,0.15);
      z-index: 1050;
      min-width: 280px;
      max-width: 320px;
      transform: translateY(-10px);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }
    .floating-menu.show {
      transform: translateY(0);
      opacity: 1;
      visibility: visible;
    }
    .floating-menu .nav-link {
      padding: 12px 20px;
      border-bottom: 1px solid rgba(0,48,64,0.1);
      color: #003040;
      font-family: 'Elza', sans-serif;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      display: block;
      transition: all 0.2s ease;
    }
    .floating-menu .nav-link:last-child {
      border-bottom: none;
    }
    .floating-menu::after{
      display:none;
      content:'';
      position:absolute;
      inset:-40px;
      background:rgba(7,112,252,0.15);
      filter:blur(30px);
      z-index:-1;
    }
    .floating-menu .dropdown-menu{position:static!important;transform:none!important;display:block!important;padding-left:20px;background:transparent;border:none;box-shadow:none;width:100%;}
    .floating-menu .dropdown-menu .dropdown-item{padding-left:0;margin:0;border-radius:0;}
    .floating-menu .nav-link:hover {
      background: rgba(7,112,252,0.05);
      color: #0770fc;
    }
    
    /* CSS variable for header height */
    :root{--header-height:88px;}
    @media(min-width:992px){:root{--header-height:120px;}}
    body{margin-top:var(--header-height);}

    /* Fixed header with glow */
    header.site-header{position:fixed;top:0;left:0;width:100%;background:#ffffff;z-index:1050;}
    header.site-header::after{content:'';position:absolute;inset:0;box-shadow:0 0 60px 25px rgba(7,112,252,0.15);pointer-events:none;z-index:-1;}

    /* Allow overflows */
    #masthead, #masthead *{overflow:visible!important;}
    .hamburger{z-index:1100;}
    
    /* Enhanced mobile padding and scroll behavior */
    @media (max-width: 768px) {
      .site-header .container-fluid {
        padding-left: 20px !important;
        padding-right: 20px !important;
      }
      
      .site-header .row {
        padding: 20px 0 !important;
      }
      
      .logo-container {
        width: 120px !important;
        height: 24px !important;
      }
      
      .portal-btn {
        padding: 12px 16px !important;
        font-size: 13px !important;
      }
    }
    
    @media (min-width: 769px) {
      .site-header .container-fluid {
        padding-left: 15px !important;
        padding-right: 15px !important;
      }
      
      .site-header .row {
        padding: 15px 0 !important;
      }
    }
    
    /* Ensure header padding never changes on scroll */
    .site-header {
      transition: none !important;
    }
    
    .site-header * {
      transition: none !important;
    }

    /* Responsive logo sizing */
    .logo-container {
      width: 120px !important;
      height: 24px !important;
    }
    @media (min-width: 576px) {
      .logo-container {
        width: 140px !important;
        height: 28px !important;
      }
    }
    @media (min-width: 768px) {
      .logo-container {
        width: 160px !important;
        height: 32px !important;
      }
    }
    @media (min-width: 992px) {
      .logo-container {
        width: 207px !important;
        height: 42px !important;
      }
    }
    
    /* Desktop submenu styling */
    .indy-nav-items .dropdown-menu{
      padding:12px 0;
      min-width:200px;
      background:#ffffff;
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius:12px;
      box-shadow:0 10px 40px rgba(0,0,0,0.1);
      padding:20px;
      min-width:230px;
      border:none;
    }
    .indy-nav-items .dropdown-menu .dropdown-item{
      border-radius:8px;
      margin:0;
      display:block;
      font-family:'Elza',sans-serif;
      font-weight:600;
      font-size:14px;
      color:#003040;
      /* padding:10px 12px; */
      border-bottom:1px solid rgba(0,48,64,0.1);
      transition:all .2s ease;
    }
    .indy-nav-items .dropdown-menu .dropdown-item:last-child{border-bottom:none;}
    .indy-nav-items{overflow:visible!important;}
    .indy-nav-items .dropdown-menu .dropdown-item.active,
    .indy-nav-items .dropdown-menu .dropdown-item:hover{
      background:rgba(7,112,252,0.15);
      color:#003040;
    }
    .floating-menu .dropdown-menu .dropdown-item.active,
    .floating-menu .dropdown-menu .dropdown-item:hover{
      background:rgba(7,112,252,0.1);
      color:#003040;
    }
    
      background:rgba(7,112,252,0.05);
      color:#0770fc;
    }
    /* Portal button styling */
    /* Hamburger animation */
    .hamburger{display:inline-flex;flex-direction:column;align-items:center;justify-content:center;width:24px;height:24px;}
    .hamburger span{
      display:block;
      width:24px;
      height:2px;
      background:#003040;
      margin:4px 0;
      transition:transform 0.3s ease, opacity 0.3s ease;
    }
    .hamburger.open span:nth-child(1){
      transform: translateY(6px) rotate(45deg);
    }
    .hamburger.open span:nth-child(2){
      opacity:0;
    }
    .hamburger.open span:nth-child(3){
      transform: translateY(-6px) rotate(-45deg);
    }
    .portal-btn {
      border-color: #0770fc !important;
      border-radius: 0 !important;
      font-family: 'elza', sans-serif;
      font-weight: 600;
      font-size: 14px;
      line-height: 1.4;
      color: #0770fc;
      letter-spacing: -0.35px;
      text-decoration: none;
      white-space: nowrap;
      min-width: fit-content;
    }
    .portal-btn:hover {
      background-color: rgba(7, 112, 252, 0.05);
      color: #0770fc;
      text-decoration: none;
      border-color: #0770fc !important;
    }

    .floating-menu .dropdown-menu {
      padding-left:0!important;
    }

    @media screen and (max-width: 990px) {
    .dropdown-item  {
        padding-left: 50px!important;
        padding-top: 10px!important;
        padding-bottom: 5px!important;
        font-size: 14px!important;
        font-weight: 600

    }

}


header {
    z-index: 99!important
}

.dropdown-menu  {
    padding: 0!important;
    overflow: hidden!important
}

.dropdown-item  {
    padding: 10px 20px!important;
    border-radius: 12.5px!important;
    overflow: hidden
}

@media screen and (max-width: 990px) {

.dropdown-item {
    padding-left: 50px!important;
    border-radius: 0!important
}
}

  </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

  <!-- Skip Links -->
  <a class="skip-link visually-hidden-focusable" href="#primary"><?php esc_html_e( 'Skip to content', 'indysoft' ); ?></a>
  <a class="skip-link visually-hidden-focusable" href="#footer"><?php esc_html_e( 'Skip to footer', 'indysoft' ); ?></a>

  <?php do_action( 'bootscore_before_masthead' ); ?>

  <header id="masthead" class="site-header bg-white">
    <div class="container-fluid" style="max-width:1500px;">
      <div class="row align-items-center ">
        <div class="col-6 col-lg-3">
          <!-- Responsive Logo -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-container d-block position-relative overflow-hidden" aria-label="<?php bloginfo('name'); ?>">
            <svg class="w-100 h-100" viewBox="0 0 207 42" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:absolute; inset:0;">
              <image href="https://web-assets-acwebdev.s3.amazonaws.com/indylogo.svg" width="207" height="42"/>
            </svg>
          </a>
        </div>

        <div class="col-6 d-none d-xl-block">
          <!-- Main Navigation for desktop -->
          <nav class="indy-nav-items d-flex justify-content-center">
            <div class="d-flex align-items-center" style="backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); background: rgba(255,255,255,0.4); border-radius: 100px; gap:27px; padding:20px 24px; overflow:visible;">
              <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container'      => false,
                  'menu_class'     => 'navbar-nav flex-row gap-4 align-items-center',
                  'fallback_cb'    => '__return_false',
                  'depth'          => 2,
                  'walker'         => class_exists('bootstrap_5_wp_nav_menu_walker') ? new bootstrap_5_wp_nav_menu_walker() : ''
                ));
              ?>
            </div>
          </nav>
        </div>

        <div class="col-6 col-lg-3">
          <!-- Header Actions -->
          <div class="d-flex align-items-center justify-content-end gap-2 position-relative">
            <!-- Customer Portal Button -->
            <a href="https://portal.indysoft.com/login" class="portal-btn d-inline-flex align-items-center gap-2 px-3 py-2 border">
              <span><?php esc_html_e('Customer Portal','indysoft'); ?></span>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/0b80fa8e9709eac7bd47bd726e6c5b2d824f9afa.svg" width="6" height="6" alt="Arrow" style="flex-shrink: 0;">
            </a>

            <!-- Mobile Menu Toggler -->
            <button id="menu-toggle" class="btn d-xl-none p-2 hamburger" type="button" onclick="toggleFloatingMenu()" aria-label="<?php esc_attr_e( 'Toggle main menu', 'indysoft' ); ?>">
              <span></span><span></span><span></span>
            </button>

            <!-- Floating Mobile Menu -->
            <div id="floating-menu" class="floating-menu d-xl-none">
              <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container'      => false,
                  'menu_class'     => 'navbar-nav flex-column',
                  'fallback_cb'    => '__return_false',
                  'depth'          => 2,
                  'walker'         => class_exists('bootstrap_5_wp_nav_menu_walker') ? new bootstrap_5_wp_nav_menu_walker() : ''
                ));
              ?>
              <!-- Customer Portal (mobile) -->
              <a href="https://portal.indysoft.com/login" class="nav-link d-flex align-items-center justify-content-between" style="font-family:'elza',sans-serif; font-weight:600; font-size:14px; color:#0770fc; letter-spacing:-0.35px; text-decoration:none; margin-top: 8px; border-top: 1px solid rgba(0,48,64,0.1);">
                <span><?php esc_html_e('Customer Portal','indysoft'); ?></span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/0b80fa8e9709eac7bd47bd726e6c5b2d824f9afa.svg" width="6" height="6" alt="Arrow" style="flex-shrink: 0;">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript for floating menu -->
    <script>
      function toggleFloatingMenu() {
        const menu = document.getElementById('floating-menu');
        const toggleBtn = document.getElementById('menu-toggle');
        const isShown = menu.classList.contains('show');
        
        if (isShown) {
          menu.classList.remove('show');
          toggleBtn.classList.remove('open');
        } else {
          menu.classList.add('show');
          toggleBtn.classList.add('open');
        }
      }
      
      // Close menu when clicking outside
      document.addEventListener('click', function(event) {
        const menu = document.getElementById('floating-menu');
        const toggleBtn = document.getElementById('menu-toggle');
        
        if (!menu.contains(event.target) && !toggleBtn.contains(event.target) && menu.classList.contains('show')) {
          menu.classList.remove('show');
          toggleBtn.classList.remove('open');
        }
      });
      
      // Close menu on escape key
      document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
          const menu = document.getElementById('floating-menu');
          const toggleBtn = document.getElementById('menu-toggle');
          if (menu.classList.contains('show')) {
            menu.classList.remove('show');
            toggleBtn.classList.remove('open');
          }
        }
      });
    </script>

  </header><!-- #masthead -->

  <?php do_action( 'bootscore_after_masthead' ); ?>

  <main id="primary" class="site-main">