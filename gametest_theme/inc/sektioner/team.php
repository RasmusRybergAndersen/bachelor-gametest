        <div class="container">
                <h2>Vores hold</h2>
                <div class="row">
                   <?php


                        $args = array(
                            'post_type' => 'team',
                            'posts_per_page' => 10,
                            'orderby' => date
                        );

                        $the_query = new WP_Query($args);

                    ?> 

                        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-xl-3">
                            <?php 
                                $image = get_field('billede');

                                if (!empty($image)) {
                                $rImage = aq_resize($image['url'], 200, 300, true, true, true);}
                            ?>
        
                            <div class="text-center">                 
                                <?php
                                    if ($rImage) {
                                    echo'<img class="img-fluid" src="' . $rImage . '" alt="' . get_the_title() . '" />';
                                    }
                                ?>
                                <h5><?php the_field('navn'); ?></h5>
                                <h7><?php the_field('stilling'); ?></h7>

                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

            </div>
        </div> 
   