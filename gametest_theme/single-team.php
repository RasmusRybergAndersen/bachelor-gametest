<?php


get_header(); ?>

<div id="single_team">
<!-- Henter subheader-slider her -->
    <div>
        <?php get_template_part('inc/sektioner/subheader-slider', get_post_format()); ?>
    </div>
    <section class="team_info sektion">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center"><?php 
                    $image = get_field('billede');

                    if (!empty($image)) {
                    $rImage = aq_resize($image['url'], 300, 300, true, true, true);}
                    ?>

                    <?php
                        if ($rImage) {
                            echo'<img class="img-fluid" src="' . $rImage . '" alt="' . get_the_title() . '" />';
                        }
                    ?>
                    <h1><?php the_field('navn'); ?></h1>
                    <h4><?php the_field('stilling'); ?></h4>
                </div>

                <div class="col-xl-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="team_4_hurtige sektion">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                        <h2>4 hurtige om <?php the_field('kort_navn'); ?></h2>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 d-flex padall25">
                    <figure><img src="https://rasmusra.dk/wordpress/filer/styrker.svg" alt="<?php bloginfo(); ?>"></figure>
                    <div class="text">
                        <h4><?php the_field('1_overskrift'); ?></h4>
                        <p><?php the_field('1_text'); ?></p>
                    </div>
                </div>

                <div class="col-xl-6 d-flex padall25">
                    <figure><img src="https://rasmusra.dk/wordpress/filer/websites.svg" alt="<?php bloginfo(); ?>"></figure>
                    <div class="text">
                        <h4><?php the_field('2_overskrift'); ?></h4>
                        <p><?php the_field('2_text'); ?></p>                
                    </div>
                </div>

                <div class="col-xl-6 d-flex padall25">
                    <figure><img src="https://rasmusra.dk/wordpress/filer/mockups.svg" alt="<?php bloginfo(); ?>"></figure>
                    <div class="text">
                        <h4><?php the_field('3_overskrift'); ?></h4>
                        <p><?php the_field('3_text'); ?></p>              
                    </div>
                </div>

                <div class="col-xl-6 d-flex padall25">
                    <figure><img src="https://rasmusra.dk/wordpress/filer/superhelt.svg" alt="<?php bloginfo(); ?>"></figure>
                    <div class="text">
                        <h4><?php the_field('4_overskrift'); ?></h4>
                        <p><?php the_field('4_text'); ?></p>                
                    </div>
                </div>              
            </div>
        </div>
    </section>      
</div>


<?php include(locate_template('inc/sektioner/team.php', get_post_format()));?>


<?php get_footer(); ?>