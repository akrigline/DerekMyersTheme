<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package deli
 */
?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.parallax.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.focuspoint.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
<script>
$('.focuspoint').focusPoint();

  $('#scene').parallax({
    limitY: 0,
    scalarX: 5,
    invertX:false,
  });

  $('.paintings .bxslider').bxSlider({
    mode: 'fade',
    pagerCustom: '.gallery',

  });


  $('.design .bxslider').bxSlider({
    mode: 'fade',
    pagerCustom: '.gallery',
    controls: false,
    touchEnabled: false,

  });
  $('.bxslider-nested').bxSlider({mode:'fade', pager:false,});
</script>

<?php wp_footer(); ?>

</body>
</html>
