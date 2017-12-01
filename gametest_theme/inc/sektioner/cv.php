<div class="boks3 sektion">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-center">
                        <h2><?php the_field('cv_overskrift'); ?></h2>

                        <p><?php the_field('cv_brodtekst'); ?></p>
                    <div>
                        <a class="cta" href="/cases"><?php the_field('cv_cta'); ?></a>
                    </div>
                </div>

                <div class="col-6">
                <?php 
                    $image = get_field('cv_billede');

                    if (!empty($image)) {
                        $rImage = aq_resize($image['url'], 400, 300, true, true, true);}
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