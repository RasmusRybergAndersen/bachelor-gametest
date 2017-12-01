<div class="boks4 sektion">
    <div class="container">
    <h2>Udtalelser</h2>
        <div class="row udtalelser-slick">
            
               

        <?php
                

                    $args = array(
                        'post_type' => 'udtalelser',
                        'posts_per_page' => 10
                    );

                    $the_query = new WP_Query($args);

		        ?> 

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="text-center">
                        <h4><?php the_title(); ?></h4>
                        <span><?php the_field('virksomhed'); ?></span>
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>


        </div>
    </div>
</div>                    
