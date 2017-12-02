<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Morten
 * @since 1.0
 */

 // Remove Admin Bar CSS
 add_action('get_header', 'remove_admin_login_header');
 function remove_admin_login_header() {
	 remove_action('wp_head', '_admin_bar_bump_cb');
 }

// This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'morten' ),
	) );



/**
 * Register footer widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
 function morten_widgets_init() {
	
		register_sidebar(array(
			'name' => __('Footer 1', 'morten'),
			'id' => 'footer_1',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => ' <h4>',
			'after_title' => '</h4>',
		));
	
		register_sidebar(array(
			'name' => __('Footer 2', 'morten'),
			'id' => 'footer_2',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => ' <h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 3', 'morten'),
			'id' => 'footer_3',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => ' <h4>',
			'after_title' => '</h4>',
		));
	 
	}
	
	add_action('widgets_init', 'morten_widgets_init');





/**
 * Enqueue scripts and styles.
 */
 function styles_scripts() {
	



	// Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap-grid.css' );
	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap-reboot.css' );

	// jQuery
	wp_enqueue_script( 'jQuery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
	wp_enqueue_script( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js' );

	// Slick
	wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/inc/slick/slick.css' );
	wp_enqueue_style( 'slicktheme_css', get_template_directory_uri() . '/inc/slick/slick-theme.css' );

	// Slick
	wp_enqueue_script( 'slick_js', get_theme_file_uri() . '/inc/slick/slick.min.js' );

	// Typed
	wp_enqueue_script( 'typed_js', get_theme_file_uri() . '/inc/typed.js' );


	// Effects
	wp_enqueue_script( 'effects_js', get_theme_file_uri() . '/js/effects.js' );	
	
	// Theme stylesheet
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

	
}
add_action( 'wp_enqueue_scripts', 'styles_scripts' );


// aq_resizer
require_once('inc/aq_resizer.php');

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/morten_theme/inc/cuztom-functions.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/morten_theme/inc/cuztom-functions.php';
}


 require get_template_directory() . "/inc/cuztom-functions.php";