<?php
// Enqueue styles
function baytek_enqueue_styles() {

    wp_register_style('fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style( 'fontAwesome');

    wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Rubik:300,400,500');
    wp_enqueue_style( 'googleFonts');

    wp_register_style('unsliderCSS', get_stylesheet_directory_uri() . '/styles/unslider.css');
    wp_enqueue_style( 'unsliderCSS');

	wp_enqueue_style( 'baytek-style', get_stylesheet_uri() );
}
add_action('wp_print_styles', 'baytek_enqueue_styles');

// Enqueue scripts
function baytek_enqueue_scripts() {
	wp_enqueue_script(
		'unslider',
		get_stylesheet_directory_uri() . '/scripts/unslider.js',
		array( 'jquery' )
	);
	
	wp_enqueue_script(
		'baytek-custom',
		get_stylesheet_directory_uri() . '/scripts/min/custom-min.js',
		array( 'jquery' )
	);
	
}
add_action( 'wp_enqueue_scripts', 'baytek_enqueue_scripts' );
