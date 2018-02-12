<?php
/**
 * Template part for displaying posts on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Spiffed_Church
 */

?>

<section>
	
	<div class="banner">
		<?php
		// the post's featured image
		the_post_thumbnail(); ?>
	</div>
	
	<h2><?php the_title(); ?></h2>

	<?php the_content(); ?>
	
</section>