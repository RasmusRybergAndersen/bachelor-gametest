<?php


                        $args = array(
                            'post_type' => 'youtube',
                            'posts_per_page' => 5,
                            'orderby' => 'date'
                        );

                        $the_query = new WP_Query($args);

                 

                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <a href="<?php echo get_permalink(); ?>">
        <div class="col-xl-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="container-fluid">
            
                <div class="row">
                    
                    <div class="col-xl-5">
                        <?php the_field('video'); ?>
                    </div>
                    

                    <div class="col-xl-7">
                        <h3>
                            <?php the_title(); ?>
                        </h3>

                        
                

                
                        <p>
                        <?php $summary = get_field('beskrivelse');
                            $summary = substr($summary, 0, 125);
                            $summary = $summary .    '...';
                            echo $summary;   
                            ?>
                        </p>

                        <div class="d-flex dato_medarbejder">
                        <p>Af</p>
                        
                        <?php 
                            $posts = get_field('tilknyttet_journalist');

                            if( $posts): ?>

                                <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                                    <p class="medarbejder"><?php the_field('navn', $p->ID); ?>, </p>
                                <?php endforeach; ?>

                            

                            <?php endif; ?>


                        <p class="dato">
                        <?php echo get_the_date(); ?>
                        </p>

                        </div>

                        
                    </div>
                
                </div>
            
            </div>
                
            </article>

        </div>
    </a>
    <?php endwhile; ?>
    <?php endif; ?>
