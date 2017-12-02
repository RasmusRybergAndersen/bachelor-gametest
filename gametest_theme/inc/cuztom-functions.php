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
}

add_action( 'init', 'cptui_register_my_cpts' );


