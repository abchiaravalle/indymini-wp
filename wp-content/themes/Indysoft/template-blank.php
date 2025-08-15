<?php
/**
 * Template Name: Indysoft Blank
 * Template Post Type: post, page, product, any
 * Description: Completely blank except header, footer, and the_content. Set as default for all post types.
 */

global $post;
get_header();
?>

<main id="primary" class="site-main">
  <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  ?>
</main>

<?php get_footer(); ?> 