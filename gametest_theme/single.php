<?php


get_header(); ?>




    <div id="hurtig_snas">
        
        <div>
            <?php get_template_part('inc/sektioner/slider', get_post_format()); ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-12">

			<h2>
                    <?php the_title(); ?>
                </h2>

                <?php the_field('video'); ?>
                <p>
                    <?php the_field('beskrivelse'); ?>

            </div>
        </div>

    </div>



    <?php get_footer(); ?>