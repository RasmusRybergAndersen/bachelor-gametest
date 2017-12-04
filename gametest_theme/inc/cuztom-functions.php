<?php


        /**
         * Img til post type
         */

    add_theme_support('post-thumbnails');
    function setup_types() {
        register_post_type('mytype', array(
            'label' => __('My type'),

        ));
    }
    add_action('init', 'setup_types');



// Custom post type
function cptui_register_my_cpts() {

	/**
	 * Post Type: Team.
	 */

	$labels = array(
		"name" => __( "Team", "" ),
		"singular_name" => __( "Team", "" ),
	);

	$args = array(
		"label" => __( "Team", "" ),
		"labels" => $labels,
		"description" => "Holdet på Gametest",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "team", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", 'thumbnail' ),
        
	);

	register_post_type( "team", $args );
    
    
    $labels = array(
		"name" => __( "Slider", "" ),
		"singular_name" => __( "Slider", "" ),
	);
    
    $args = array(
		'label'                 => __( 'Slider', 'slider' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail',),
                'menu_icon'             => 'dashicons-images-alt2',
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
	);
	register_post_type( 'slider', $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


