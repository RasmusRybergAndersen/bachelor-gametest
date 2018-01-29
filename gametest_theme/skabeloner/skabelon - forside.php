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
        <?php get_template_part('inc/sektioner/slider', get_post_format()); ?>
    </div>

    <section class="arkiv_indhold">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 margin50 artikler">
                    <h2 class="padall25">Seneste historier</h2>

                    <?php
                    $args = array(
                        'post_type' => 'youtube',
                        'posts_per_page' => 10,
                        'paged' => $paged
                        );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
                        include(locate_template('inc/sektioner/arkiv-video.php', get_post_format()));
                    endwhile; endif; ?>

                </div>
                <div class="col-xl-1"></div>
                <div class="col-xl-4 margin50 podcasts">
                    <h2 class="padall25">Nyeste podcasts</h2>
                    
                </div>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>