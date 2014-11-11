<?php
/* Template Name: Homepage */
?>

<?php get_header(); ?>

<?php

  $depth = -1;
  $imageFull = get_field('layer_1');
  $size = 'large';
  $width = $imageFull['sizes'][ $size . '-width' ];
  $height = $imageFull['sizes'][ $size . '-height' ];
?>

<ul id="scene" class="fullsize parallax-fx">
  <?php for ($i = 0; $i <= 8; ++$i): // loop through all five images (range 1...5) ?>
  <?php ++$depth; ?>
  <?php $imageName = 'layer_' . $i; // get the image using the current value of $i,
                                    // which increments with each iteration of the loop ?>

  <?php if( get_field($imageName) ): ?>
      <li class="layer" data-depth="0.<?php echo $depth; ?>0">

                

                  <div class="focuspoint"
                  data-focus-x="<?php the_field('homepage_focus_point_x'); ?>"
                  data-focus-y="<?php the_field('homepage_focus_point_y'); ?>"
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

<div class="wrapper homepage">

<div class="container-fluid">
    
    <section class="home-description pull-right col-xs-12 col-sm-4 col-sm-offset-6 col-md-4 col-md-offset-7 col-lg-3 col-lg-offset-8">
    <?php
      $paintingsImage = get_field('paintings_thumbnail');
      $size = 'thumbnail';
      $paintingsThumb = $paintingsImage['sizes'][$size];
      $paintingsWidth = $paintingsImage['sizes'][ $size . '-width' ];
      $paintingsHeight = $paintingsImage['sizes'][ $size . '-height' ];
    ?>
        <a href="<?php echo get_permalink( get_page_by_title( 'Paintings' ) ); ?>">
        <figure>
                <div class="focuspoint"
                data-focus-x="0"
                data-focus-y="0"
                data-image-w="<?php echo $paintingsWidth; ?>"
                data-image-h="<?php echo $paintingsHeight; ?>">
                  <img src="<?php echo $paintingsThumb; ?>">
                </div>
            <figcaption><h2>Paintings</h2></figcaption>
        </figure>
        </a>
    </section>
    <section class="home-description pull-right col-xs-12 col-sm-4 col-sm-offset-6 col-md-4 col-md-offset-7 col-lg-3 col-lg-offset-8">
    <?php
      $designImage = get_field('design_thumbnail');
      $size = 'thumbnail';
      $designThumb = $designImage['sizes'][$size];
      $designWidth = $designImage['sizes'][ $size . '-width' ];
      $designHeight = $designImage['sizes'][ $size . '-height' ];
    ?>
        <a href="<?php echo get_permalink( get_page_by_title( 'Design' ) ); ?>">
        <figure>
            
                <div class="focuspoint"
                data-focus-x="0"
                data-focus-y="0"
                data-image-w="<?php echo $designWidth; ?>"
                data-image-h="<?php echo $designHeight; ?>">
                  <img src="<?php echo $designThumb; ?>">
                </div>
            <figcaption><h2>Design</h2></figcaption>
        </figure>
        </a>
    </section>
    <section class="home-description pull-right col-xs-12 col-sm-4 col-sm-offset-6 col-md-4 col-md-offset-7 col-lg-3 col-lg-offset-8">
    <?php
      $aboutImage = get_field('about_thumbnail');
      $size = 'thumbnail';
      $aboutThumb = $aboutImage['sizes'][$size];
      $aboutWidth = $aboutImage['sizes'][ $size . '-width' ];
      $aboutHeight = $aboutImage['sizes'][ $size . '-height' ];
    ?>
        <a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">
        <figure>
                <div class="focuspoint"
                data-focus-x="0"
                data-focus-y="0"
                data-image-w="<?php echo $aboutWidth; ?>"
                data-image-h="<?php echo $aboutHeight; ?>">
                  <img src="<?php echo $aboutThumb; ?>">
                </div>
            <figcaption><h2>About Me</h2></figcaption>
        </figure>
        </a>
    </section>
    <section class="home-description pull-right col-xs-12 col-sm-4 col-sm-offset-6 col-md-4 col-md-offset-7 col-lg-3 col-lg-offset-8">
    <?php
      $printImage = get_field('print_thumbnail');
      $size = 'thumbnail';
      $printThumb = $printImage['sizes'][$size];
      $printWidth = $printImage['sizes'][ $size . '-width' ];
      $printHeight = $printImage['sizes'][ $size . '-height' ];
    ?>
        <a href="http://society6.com/derekmyers" target="_blank">
        <figure>
                <div class="focuspoint"
                data-focus-x="0"
                data-focus-y="0"
                data-image-w="<?php echo $printWidth; ?>"
                data-image-h="<?php echo $printHeight; ?>">
                  <img src="<?php echo $printThumb; ?>">
                </div>
            <figcaption><h2>Prints Store</h2></figcaption>
        </figure>
        </a>
    </section>
</div>

</div>

<?php get_footer(); ?>
