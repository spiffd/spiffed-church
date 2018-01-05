<?php get_header(); ?><!-- include header.php -->

  <?php

	/**
	 * This custom loop grabs the welcome text for the main banner on the homepage and displays it.
	 */
  
  $queryArguments = array(
  	'post__in' => array(
    	'83' // Homepage Banner
    )
  );
	
	$bannerContent = new WP_Query( $queryArguments );
	
	if ( $bannerContent->have_posts() ) :
	
		while ( $bannerContent->have_posts() ) : $bannerContent->the_post();

			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			$thumb_url = $thumb_url_array[0];

			// no template-part, the format is placed here ?>

			<div class="banner background-image" id="home-banner"
					 style="background-image: url('<?php echo $thumb_url; ?>');">
				
				<div class="banner-text">

					<?php the_content(); ?>

				</div>
				
			</div>
		
		<?php endwhile;

	else : ?>

		<p>No content!</p>	

	<?php endif;

	// prevent this custom loop from affecting any other loops
  wp_reset_postdata();

	/**
	 * This custom loop grabs the homepage posts and displays them in the correct order.
	 */

  $queryArguments = array(
  	'post__in' => array(
    	'30', // About
      '7', // Gospel
      '47' // Location
    ),
    'orderby' => 'post__in' // so that the order shows the same as in the array
  );
  
  // store the queried homepage posts in $homepagePosts
  $homepagePosts = new WP_Query( $queryArguments );
  
  if ( $homepagePosts->have_posts() ) :
  
    while ( $homepagePosts->have_posts() ) : $homepagePosts->the_post();
  
			// format each post according to content-home.php
      get_template_part( 'template-parts/content', 'home' );
  
  	endwhile; 
  
  else : ?>

		<p>No content!</p>
  
  <?php endif;
  
  // prevent this custom loop from affecting any other loops
  wp_reset_postdata(); ?>	

<?php get_footer(); ?><!-- include footer.php -->