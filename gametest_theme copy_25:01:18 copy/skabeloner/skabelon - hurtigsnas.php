<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
  Template name: Skabelon: Hurtig Snas
 * @package morten
 */
get_header();
?>




    <div id="hurtig_snas">
        
        <!-- Henter subheader-slider her -->
        <div>
            <?php get_template_part('inc/sektioner/subheader-slider', get_post_format()); ?>
        </div>

        <div class="arkiv_indhold">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="artikler margin50">
                            <h2 class="padall25">Nyeste Hurtig snas</h2>
                            <?php include(locate_template('inc/sektioner/arkiv-hurtigsnas.php', get_post_format()));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <?php get_footer(); ?>
