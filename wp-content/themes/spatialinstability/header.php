<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spatialinstability
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spatialinstability' ); ?></a>

	<header>
		<div class="bottom-menu menu-container">
			<a href="<?php echo site_url(); ?>" class="logo-link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/spatialinstability-logo.svg" alt="spatialinstability logo" id="nav-logo" class="logo"></a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<input type="checkbox" id="toggle-right">
				<label for="toggle-right" class="menu-toggle" style="z-index: 999;"></label>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header>


	<div id="content" class="site-content">
