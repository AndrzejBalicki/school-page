<?php
/**
 * Theme setup and assets.
 *
 * @package School_Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure editor styles and translations.
 *
 * @return void
 */
function school_page_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style(
		array(
			'style.css',
			'assets/css/premium.css',
			'assets/css/modern.css',
		)
	);
	load_theme_textdomain( 'school-page', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'school_page_setup' );

/**
 * Load the theme stylesheet on the front end.
 *
 * @return void
 */
function school_page_enqueue_styles() {
	$theme = wp_get_theme();

	wp_enqueue_style(
		'school-page-style',
		get_stylesheet_uri(),
		array(),
		$theme->get( 'Version' )
	);

	wp_enqueue_style(
		'school-page-premium',
		get_theme_file_uri( 'assets/css/premium.css' ),
		array( 'school-page-style' ),
		$theme->get( 'Version' )
	);

	wp_enqueue_style(
		'school-page-modern',
		get_theme_file_uri( 'assets/css/modern.css' ),
		array( 'school-page-premium' ),
		$theme->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'school_page_enqueue_styles' );
