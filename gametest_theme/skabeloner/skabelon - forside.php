<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  Template name: Skabelon: Forside
 * @package morten
 */
get_header();
?>




    <div id="forside">
        <!-- Henter slider her -->
        <div>
            <?php get_template_part('inc/slider', get_post_format()); ?>
        </div>

        <div class="nyt_indhold">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 artikler">
                                           <?php


                        $args = array(
                            'post_type' => 'youtube',
                            'posts_per_page' => 5,
                            'orderby' => date
                        );

                        $the_query = new WP_Query($args);

                    ?> 

                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xl-12">
                            <h2><?php the_title(); ?></h2>
                            
                            <?php the_field('video'); ?>
                            <p><?php the_field('beskrivelse'); ?></p>
                            
                            
                            
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    </div>
                    
                    <div class="col-xl-4 podcasts">
                        
                    </div>
                </div>
            </div>

        </div>


    </div>



    <?php get_footer(); ?>
