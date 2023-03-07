<?php


if ( file_exists( get_theme_file_path( '/includes/includes.php' ) ) ) {
	require_once get_theme_file_path( '/includes/includes.php' );
}

/**
 * add/remove theme support
 *
 */
function whitelabel__theme_support(): void {
	// custom logo support
	add_theme_support( 'custom-logo', array(
		'width'                => 256,
		'height'               => 256,
		'flex-width'           => true,
		'flex-height'          => true,
		'header-text'          => array(),
		'unlink-homepage-logo' => true,
	) );

	// translation support
	load_theme_textdomain( 'whitelabel', get_theme_file_path() . '/assets/lang' );
}

add_action( 'after_setup_theme', 'whitelabel__theme_support' );


/**
 * register navigation menus
 *
 */
function whitelabel__menus(): void {
	register_nav_menus( array(
		'header' => esc_html__( 'Header', 'whitelabel' ),
		'footer' => esc_html__( 'Footer', 'whitelabel' ),
	) );
}

add_action( 'after_setup_theme', 'whitelabel__menus' );


/**
 * en/dequeue styles
 *
 */

function whitelabel__styles(): void {
	// remove default styles
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' );
	wp_dequeue_style( 'classic-theme-styles' );

	wp_enqueue_style( 'styles', get_theme_file_uri( '/assets/css/styles.css' ) );
}

add_action( 'wp_enqueue_scripts', 'whitelabel__styles' );


/**
 * en/dequeue scripts
 *
 */
function whitelabel__scripts(): void {
	wp_enqueue_script( 'glide', get_theme_file_uri( '/assets/js/glide.min.js' ), array(), null, true );
	wp_enqueue_script( 'scripts', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'jquery', 'glide' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'whitelabel__scripts' );


/**
 * initialize widget areas
 *
 */

function whitelabel__widgets(): void {

	register_sidebar( array(
		'id'            => 'footer-1',
		'name'          => __( 'Footer 1', 'whitelabel' ),
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'id'            => 'footer-2',
		'name'          => __( 'Footer 2', 'whitelabel' ),
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );

	register_sidebar( array(
		'id'            => 'footer-3',
		'name'          => __( 'Footer 3', 'whitelabel' ),
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
	) );

}

add_action( 'widgets_init', 'whitelabel__widgets' );


//add_action('wp', function(){ echo '<pre>';print_r($GLOBALS['wp_filter']); echo '</pre>';exit; } );