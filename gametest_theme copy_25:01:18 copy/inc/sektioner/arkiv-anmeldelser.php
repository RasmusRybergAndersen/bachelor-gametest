<?php


    $args = array(
        'post_type' => 'youtube',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'kategori' => 'anmeldelse' 
    );

    $the_query = new WP_Query($args);

    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
        <a href="<?php echo get_permalink(); ?>">
            <div class="col-xl-12">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="container-fluid">
                        <div class="row">
                            <!-- Henter video -->
                            <div class="col-xl-4">
                                <img src="<?php the_field('tn_link'); ?>" alt="">
                            </div>
                            <!-- Henter titlen -->
                            <div class="col-xl-8">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <!-- Henter beskrivelse -->
                                <p>
                                <?php $summary = get_field('beskrivelse');
                                    $summary = substr($summary, 0, 500);
                                    $summary = $summary .    '...';
                                    echo $summary;   
                                ?>
                                </p>

                                <div class="d-flex dato_medarbejder">
                                    <p>Af</p>
                                <!-- Henter medarbejder -->
                                    <?php 
                                $posts = get_field('tilknyttet_journalist');

                                if( $posts): ?>

                                    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                                    <p class="medarbejder">
                                        <?php the_field('kort_navn', $p->ID); ?>, </p>
                                    <?php endforeach; ?>



                                    <?php endif; ?>

                                    <!-- Henter dato -->                        
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
    <?php endwhile;?>
    <?php endif; ?>
