<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Gametest
 * @since 1.0
 */

 // Remove Admin Bar CSS
 add_action('get_header', 'remove_admin_login_header');
 function remove_admin_login_header() {
	 remove_action('wp_head', '_admin_bar_bump_cb');
 }

// This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gametest' ),
	) );



/**
 * Register footer widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
 function gametest_widgets_init() {
	
		register_sidebar(array(
			'name' => __('Footer 1', 'gametest'),
			'id' => 'footer_1',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => ' <h4>',
			'after_title' => '</h4>',
		));
	
		register_sidebar(array(
			'name' => __('Footer 2', 'gametest'),
			'id' => 'footer_2',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => ' <h4>',
			'after_title' => '</h4>',
		));

		register_sidebar(array(
			'name' => __('Footer 3', 'gametest'),
			'id' => 'footer_3',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => ' <h4>',
			'after_title' => '</h4>',
		));
	 
	}
	
	add_action('widgets_init', 'gametest_widgets_init');





/**
 * Enqueue scripts and styles.
 */
 function styles_scripts() {
	

    // Effects
	wp_enqueue_script( 'effects_js', get_theme_file_uri() . '/js/effects.js' );	

	// Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap-grid.css' );
	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap-reboot.css' );

	// jQuery
	 wp_enqueue_script('jquery');

	// Slick
	wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/inc/slick/slick.css' );
	wp_enqueue_style( 'slicktheme_css', get_template_directory_uri() . '/inc/slick/slick-theme.css' );

	// Slick
	wp_enqueue_script( 'slick_js', get_theme_file_uri() . '/inc/slick/slick.min.js' );
     
    // Font awesome
    wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/1690ed1f7d.js', array(), '20120206', true);
	
	
	// Theme stylesheet
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

	
}
add_action( 'wp_enqueue_scripts', 'styles_scripts' );


// aq_resizer
require_once('inc/aq_resizer.php');




 require get_template_directory() . "/inc/cuztom-functions.php";