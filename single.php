<?php
/**
 * @package deli
 */

get_header(); ?>


<?php get_header(); ?>

<?php
  if ( have_posts() ) { the_post(); rewind_posts(); }
  if ( in_category(42) ) {
    include(TEMPLATEPATH . '/single-paint.php');
  }
  elseif ( in_category(43) ) {
    include(TEMPLATEPATH . '/single-design.php');
  }
  ?>

<?php get_footer(); ?>