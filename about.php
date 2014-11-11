<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<?php
  $depth = -1;
  $imageFull = get_field('layer_1');
  $size = 'large';
  $width = $imageFull['sizes'][ $size . '-width' ];
  $height = $imageFull['sizes'][ $size . '-height' ];
?>

<ul id="scene" class="parallax-fx about-paint col-xs-12 col-lg-4">
  <?php for ($i = 0; $i <= 8; ++$i): // loop through all five images (range 1...5) ?>
  <?php ++$depth; ?>
  <?php $imageName = 'layer_' . $i; // get the image using the current value of $i,
                                    // which increments with each iteration of the loop ?>

  <?php if( get_field($imageName) ): ?>
      <li class="layer" data-depth="0.<?php echo $depth; ?>0">

                

                  <div class="focuspoint"
                  data-focus-x="<?php the_field('about_focus_point_x'); ?>"
                  data-focus-y="<?php the_field('about_focus_point_y'); ?>"
                  data-image-w="<?php echo $width; ?>"
                  data-image-h="<?php echo $height; ?>">
                      <?php
                          $image = get_field($imageName);
                          $alt = $image['alt'];
                          $origUrl = $image['url'];
                          $origWidth = $image['width'];
                          $largeUrl = $image['sizes']['large'];
                          $largeWidth = $image['sizes']['large-width'];
                          $medUrl = $image['sizes']['medium'];
                          $medWidth = $image['sizes']['medium-width'];
                          $smUrl = $image['sizes']['thumbnail'];
                          $smWidth = $image['sizes']['thumbnail-width'];
                      ?>
                      <img sizes="100vw"
                          srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
                          alt="<?php echo $alt; ?>"
                          class="sliderImg">
                  </div>

      </li>

  <?php endif; ?>
  <?php endfor; ?>
</ul>

<div class="wrapper">


    <div class="about-paint col-xs-12 col-lg-4 about-paint-empty">
    </div>

    <div class="about-text clearfix col-xs-12 col-sm-9 col-sm-offset-1 col-md-7 col-lg-5">

        <section class="about-name col-xs-12">
          <div class="row">
            <h1 class="pull-left">Derek Myers</h1>
            <a href="mailto:derek@derekmyers.net" class="btn btn-contact pull-right"><span class="glyphicon glyphicon-envelope"></span> Email Me</a>
          </div>
        </section>


        <?php query_posts('category_name=about' . '&orderby=date&order=ASC'); ?>

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <section>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </section>
        <?php endwhile; ?>
        <?php else : ?>
        <h2>Something went wrong... But I'm sure it was my fault and not yours. If you could send me a note with what happened I'd be much obliged.</h2>
        <?php endif; ?>

    </div><!-- about-text -->

</div>

<?php get_footer(); ?>
