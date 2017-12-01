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