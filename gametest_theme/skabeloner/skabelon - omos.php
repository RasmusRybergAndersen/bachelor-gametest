<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  Template name: Skabelon: Om os
 * @package sj-gul
 */
get_header();
?>


<div id="kontakt">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-xl-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
            <h2>Vores hold</h2>
            <div class="row">
               <?php
                

                    $args = array(
                        'post_type' => 'team',
                        'posts_per_page' => 10
                    );

                    $the_query = new WP_Query($args);

		        ?> 

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xl-3">
                        <div class="text-center">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <h5><?php the_field('navn'); ?></h5>
                            <p><?php the_field('stilling'); ?></p>

                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
               
        </div>
    </div> 			



<?php get_footer(); ?>