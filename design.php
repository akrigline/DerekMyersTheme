<?php
/* Template Name: Design */
?>

<?php get_header(); ?>

<div class="wrapper design">
<?php $count = -1; ?>
<?php query_posts('category_name=design'); ?>
  
<?php if (have_posts()) : ?>
  <section class="slider dark-bg container-fluid">
  <ul class="bxslider">
    <?php while (have_posts()) : the_post(); ?>

      <li>
          <ul class="bxslider-1 bxslider-nested">

              <?php for ($i = 1; $i <= 5; ++$i): // loop through all five images (range 1...5) ?>

                <?php $imageName = 'image_' . $i; // get the image using the current value of $i,
                                                  // which increments with each iteration of the loop ?>

                <?php if( get_field($imageName) ): ?>

                  <li>
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

                    <figure class="col-xs-12 col-md-8">

                        <img sizes="100vw"
                          srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
                          alt="<?php echo $alt; ?>"
                          class="sliderImg"
                          style="display:block !important">

                    </figure>
                    <div class="description col-xs-12 col-md-4">
                      <h2><?php the_title(); ?></h2>
                      <?php the_content(); ?>
                    </div>

                  </li>

                <?php endif; ?>

              <?php endfor; ?>


          </ul><!-- bxslider-nested -->
      </li>

    <?php endwhile; ?>
  </ul><!-- bxslider -->
  </section><!-- slider -->

  <section class="gallery clearfix">
      <ul class="list-unstyled col-xs-12 clearfix">

        <?php while (have_posts()) : the_post(); ?>
        
        <?php
          $image = get_field('image_1');

          $size = 'thumbnail';
          $alt = 'alt';
          $imageUrl = $image['sizes'][$size];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];
        ?>
        <?php $count++; ?>

          <li class="gallery-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <figure>
                  <a href="" data-slide-index="<?php echo $count; ?>">
                      <div class="focuspoint"
                        data-focus-x="<?php the_field('focus_x_1'); ?>"
                        data-focus-y="<?php the_field('focus_y_1'); ?>"
                        data-image-w="<?php echo $width; ?>"
                        data-image-h="<?php echo $height; ?>">
                        <img src="<?php echo $imageUrl;?>" alt="<?php echo $alt; ?>">
                      </div>
                  </a>
                  <figcaption><?php the_title(); ?></figcaption>
              </figure>
          </li>
        <?php endwhile; ?>
      </ul>
  </section>

<?php else : ?>
  <h1>These aren't the droids you're looking for.</h1>
  <p>Move along...</p>
<?php endif; ?>

</div>

<?php get_footer(); ?>
