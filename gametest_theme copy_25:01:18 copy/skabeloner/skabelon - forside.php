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

        <div class="arkiv_indhold">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 margin50 artikler">
                        <h2 class="padall25">Nyeste videoer</h2>
                        <?php include(locate_template('inc/sektioner/arkiv-forside.php', get_post_format()));?>
                    </div>
                    <div class="col-xl-1">
                    </div>
                    
                    <div class="col-xl-4 margin50 podcasts">
                        <h2 class="padall25">Nyeste podcassts</h2>
                    </div>
                </div>
            </div>

        </div>


    </div>



    <?php get_footer(); ?>
