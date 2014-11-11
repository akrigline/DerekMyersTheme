<?php
/**
 * @package deli
 */

get_header(); ?>


<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

		  <section class="slider-single dark-bg container-fluid">
		          <ul class="bxslider-1 bxslider-nested">
		              <li>
		                <?php
		                  $image = get_field('image_1');
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
		                <figure>
		                    <img sizes="100vw"
		                      srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
		                      alt="<?php echo $alt; ?>"
		                      class="sliderImg">
		                    <figcaption>
		                      <h2><?php the_title(); ?></h2>
		                      <?php the_content(); ?>
		                    </figcaption>
		                </figure>
		              </li>

		              <?php if(get_field('image_2') ): ?>
		              <li>
		                <?php
		                  $image = get_field('image_2');
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
		                <figure>
		                    <img sizes="100vw"
		                      srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
		                      alt="<?php echo $alt; ?>"
		                      class="sliderImg">
		                    <figcaption>
		                      <h2><?php the_title(); ?></h2>
		                      <?php the_content(); ?>
		                    </figcaption>
		                </figure>
		              </li>
		              <?php endif; ?>

		              <?php if(get_field('image_3') ): ?>
		              <li>
		                <?php
		                  $image = get_field('image_3');
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
		                <figure>
		                    <img sizes="100vw"
		                      srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
		                      alt="<?php echo $alt; ?>"
		                      class="sliderImg">
		                    <figcaption>
		                      <h2><?php the_title(); ?></h2>
		                      <?php the_content(); ?>
		                    </figcaption>
		                </figure>
		              </li>
		              <?php endif; ?>

		              <?php if(get_field('image_4') ): ?>
		              <li>
		                <?php
		                  $image = get_field('image_4');
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
		                <figure>
		                    <img sizes="100vw"
		                      srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
		                      alt="<?php echo $alt; ?>"
		                      class="sliderImg">
		                    <figcaption>
		                      <h2><?php the_title(); ?></h2>
		                      <?php the_content(); ?>
		                    </figcaption>
		                </figure>
		              </li>
		              <?php endif; ?>

		              <?php if(get_field('image_5') ): ?>
		              <li>
		                <?php
		                  $image = get_field('image_5');
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
		                <figure>
		                    <img sizes="100vw"
		                      srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
		                      alt="<?php echo $alt; ?>"
		                      class="sliderImg">
		                    <figcaption>
		                      <h2><?php the_title(); ?></h2>
		                      <?php the_content(); ?>
		                    </figcaption>
		                </figure>
		              </li>
		              <?php endif; ?>
		          </ul><!-- bxslider-nested -->
		  </section><!-- slider -->


			<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

<?php get_footer(); ?>