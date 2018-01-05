<?php


                        $args = array(
                            'post_type' => 'youtube',
                            'posts_per_page' => 5,
                            'orderby' => date
                        );

                        $the_query = new WP_Query($args);

                 

                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <a href="<?php echo get_permalink(); ?>">
        <div class="col-xl-12">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2>
                    <?php the_title(); ?>
                </h2>

                <?php the_field('video'); ?>
                <p>
                    <?php the_field('beskrivelse'); ?>
                </p>
            </article>

        </div>
    </a>
    <?php endwhile; ?>
    <?php endif; ?>
