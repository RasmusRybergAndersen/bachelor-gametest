<?php


get_header(); ?>

<div id="single">
    <div class="container">
        <div class="row">
            
                            <!-- Henter video -->
                            <div class="col-xl-12 nospace video">
                                <?php the_field('video'); ?>
                            </div>
                            <!-- Henter titlen -->
                            <div class="col-xl-9 margin50 padall50 beskrivelse">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <!-- Henter dato -->                        
                                <p class="dato">
                                        <?php echo get_the_date(); ?>
                                    </p>

                                <!-- Henter beskrivelse -->
                                <p>
                                <?php $summary = get_field('beskrivelse');
                                    echo $summary;   
                                ?>
                                </p>

                                </div>


                                <div class="col-xl-3 margin50 padall50 d-flex flex-column align-items-end video_fakta">
                                    <!-- Henter medarbejder -->
                                    
                                        <div class="row">

                                            <?php
                                            $posts = get_field('tilknyttet_journalist');
                                            if( $posts):
                                                foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                                                    
                                                        <div class="medarbejder col-xl-6">
                                                        <a href="<?php echo get_permalink($p);?>"> 
                                                                <?php $image = get_field('billede', $p->ID, true);
                                                                if( !empty($image) ): 
                                                                    $rImage = aq_resize($image['url'], 150, 150, true, true, true);
                                                                
                                                                if ($rImage) {
                                                                    echo'<img class="img-fluid" src="' . $rImage . '" alt="' . get_the_title() . '" />';}
                                                                ?>
                                                                
                                                                <?php endif; ?>

                                                                <p>
                                                                    <?php the_field('kort_navn', $p->ID); ?>
                                                                </p>
                                                           <a/>
                                                        </div>
                                                        
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>





      
                                    

                                    <div class="kategori">
                                        <p>Kategori</p>
                                        <?php echo get_the_term_list( $post->ID, 'kategori') ?>
                                    </div>


                                    <div class="social_share">
                                        <p>Del artiklen</p>
                                        <?php echo do_shortcode('[ssba-buttons]'); ?>
                                    </div>
                                </div>

                                <?php comments_template( '', true ); ?>
                                    


            
            
        </div>
    </div>
</div>



    <?php get_footer(); ?>