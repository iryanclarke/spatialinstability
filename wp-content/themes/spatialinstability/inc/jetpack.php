<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package spatialinstability
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function spatialinstability_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'type'           => 'click',
		'container'      => 'news-archive',
		'render'         => 'spatialinstability_infinite_scroll_render',
		'footer'         => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'spatialinstability_jetpack_setup' );

/**
 * Change some infinite scroll script settings
 */
function spatialinstability_jetpack_infinite_scroll_js_settings( $settings ) {
	$settings['text'] = __( 'Load more', 'spatialinstability' );
	return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'spatialinstability_jetpack_infinite_scroll_js_settings' );

/**
 * Custom render function for Infinite Scroll.
 */
function spatialinstability_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		elseif ( is_archive() ):
		    get_template_part( 'template-parts/content', get_post_type() );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
