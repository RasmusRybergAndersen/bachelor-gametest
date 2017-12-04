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
 * @package morten
 */
get_header();
?>


<div id="kontakt" class="">
    <div class="omos padall50"> 
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                <h1><?php the_title(); ?></h1>
                </div>

                <div class="col-xl-7">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="col-xl-5">
                    <?php 
                        $image = get_field('billede');

                        if (!empty($image)) {
                        $rImage = aq_resize($image['url'], 800, 1000, true, true, true);}
                    ?>
                
            
                    <?php
                        if ($rImage) {
                            echo'<img class="img-fluid" src="' . $rImage . '" alt="' . get_the_title() . '" />';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="team padall50">
        <?php include(locate_template('inc/sektioner/team.php', get_post_format()));?>
    </div> 
</div> 



<?php get_footer(); ?>