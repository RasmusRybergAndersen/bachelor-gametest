<div class="forside-slider">

    <?php 
                $args = array( 'posts_per_page' => 5, 'post_type' => 'slider', 'order' => 'ASC',);
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
           ?>
    <div style="background:url(<?php echo aq_resize(wp_get_attachment_url(get_post_thumbnail_id()), 1920, 1080, true, true, true); ?>)">
        <div class="overlay black"> </div>

        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sliderindhold text-center">

							<h6><?php the_field('overskrift'); ?></h6>

                            <h2>
                                <?php the_title(); ?>
                            </h2>


                            <?php if (get_field ('link_1') ) : ?>
                            <a href="<?php echo the_field('link_1'); ?>" class="cta_btn" tabindex="0">
                                <?php echo the_field('link_1_text'); ?>
                            </a>

                            <?php endif; ?>

                            <?php if (get_field ('link_2') ) : ?>
                            <a href="<?php echo the_field('link_2'); ?>" class="cta_btn cta_btn_2" tabindex="0">
                                <?php echo the_field('link_2_text'); ?>
                            </a>

                            <?php endif; ?>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php 
			endwhile;
		    wp_reset_postdata();
		?>

</div>

