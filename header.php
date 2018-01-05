<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <main id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spiffed_Church
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11"><!-- wut -->
	
	<!--Apparently this is not the way to do this in Wordpress--
	<!--<link href="https://fonts.googleapis.com/css?family=Nunito:900|Open+Sans" rel="stylesheet">-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spiffed-church' ); ?></a>
	
	<header id="masthead" class="site-header">
		
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		</div><!-- .site-branding -->
			
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'spiffed-church' ); ?></button> <!-- mobile .menu-toggle -->
		
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<main id="content" class="site-content">
