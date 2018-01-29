<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  Template name: Skabelon: Videoer
 * @package morten
 */
get_header();
?>


<div id="videoer">
    <!-- Henter subheader-slider her -->
    <div>
        <?php get_template_part('inc/sektioner/subheader-slider', get_post_format()); ?>
    </div>

    <section class="arkiv_indhold">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="artikler margin50">
                        <h2 class="padall25">Alle videoer</h2>
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args = array(
                                'post_type' => 'youtube',
                                'posts_per_page' => 10,
                                'paged' => $paged
                                );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts()) : while ( $loop->have_posts()) : $loop->the_post();
                            include(locate_template('inc/sektioner/arkiv-video.php', get_post_format()));
                        endwhile;
                        
                        include(locate_template('inc/sektioner/post-nav.php', get_post_format()));
                        
                       endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>