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
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spiffed-church' ); ?></a>
	
	<header id="masthead" class="site-header">
		
		<div id="site-branding">
			<?php the_custom_logo(); ?>
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		</div>
			
		<button id="mobile-menu-button" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button> <!-- mobile .menu-toggle -->
		
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- .main-navigation -->

	</header><!-- #masthead -->

	<main id="content" class="site-content">
