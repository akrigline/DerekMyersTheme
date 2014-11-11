<?php
/* Template Name: Paintings */
?>

<?php get_header(); ?>

<div class="wrapper paintings">
<?php $count = 0; ?>
<?php
  $request_url = "http://derekthedeliman.tumblr.com/api/read?type=photo&start=0&num=1";
  $xml = simplexml_load_file($request_url);
  $date = $xml->posts->post['date'];
  $small_date = substr($date,0,11);
  $link = $xml->posts->post['url'];
  $imgSmall = $xml->posts->post->{'photo-url'}[2];
  $imgMedium = $xml->posts->post->{'photo-url'}[1];
  $imgLarge = $xml->posts->post->{'photo-url'}[0];
?>

<?php query_posts('category_name=paintings'); ?>
  
<?php if (have_posts()) : ?>

  <section class="slider dark-bg container-fluid" id="topSlider">
    <ul class="bxslider">

      <li>
        <figure>

          <img sizes="100W"
          srcset="<?php echo $imgLarge . " 1280w, " . $imgMedium . " 500w, " . $imgSmall . " 400w"; ?>"
          class="sliderImg"
          alt="Today's Drawing">

          <figcaption>Today's Drawing | <small><?php echo $small_date; ?></small> | <a href="http://derekthedeliman.tumblr.com" target="_blank">View on Tumblr</a></figcaption>
        </figure>
      </li>

  	  <?php while (have_posts()) : the_post(); ?>
  	    <?php
            $image = get_field('image');
            
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

  	    <li>
  	      <figure>
              <img sizes="100vw"
              srcset="<?php echo $smUrl . " " . $smWidth . "w, " . $medUrl . " " . $medWidth . "w, " . $largeUrl . " " . $largeWidth . "w, " . $origUrl . " " . $origWidth . "w"; ?>"
              alt="<?php echo $alt; ?>"
              class="sliderImg">
  		        <figcaption>
  		        	<?php the_title(); ?>
  		          <?php if( get_field('caption') ): ?>
  								<?php the_field('caption'); ?>
  			        <?php endif; ?>
  			      </figcaption>
  	      </figure>
  	    </li>
  	    
  	  <?php endwhile; ?>
    </ul><!-- bxslider -->
  </section><!-- slider -->

  <section class="gallery clearfix">
      <ul class="list-unstyled col-xs-12 clearfix">
        <li class="gallery-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <figure>
            <a href="#topSlider" data-slide-index="<?php echo $count; ?>">
              <div class="focuspoint"
              data-focus-x="0"
              data-focus-y="0">
                  <img src="<?php echo $imgMedium; ?>">
              </div>
              <figcaption>
                Today's Drawing | <small><?php echo $small_date; ?></small>
              </figcaption>
            </a>
          </figure>
        </li>
      	<?php while (have_posts()) : the_post(); ?>
      	<?php $count++; ?>
        
        <?php
          $image = get_field('image');
          
          $size = 'thumbnail';
          $imageUrl = $image['sizes'][$size];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];
          $alt = $image['alt'];
        ?>
          <li class="gallery-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <figure>
              	<a href="#topSlider" data-slide-index="<?php echo $count; ?>">
                  <div class="focuspoint"
				          data-focus-x="<?php the_field('focus_x'); ?>"
				          data-focus-y="<?php the_field('focus_y'); ?>"
                  data-image-w="<?php echo $width; ?>"
                  data-image-h="<?php echo $height; ?>">
				              <img src="<?php echo $imageUrl; ?>" alt="<?php echo $alt; ?>">
				          </div>
					        <figcaption>
					        	<?php the_title(); ?>
						      </figcaption>
						    </a>
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
