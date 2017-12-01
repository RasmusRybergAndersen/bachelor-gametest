<div class="boks2 sektion">
        <div class="container">
            <div class="row">
                <div class="col-6">
                <?php 
                    $image = get_field('billede');

                    if (!empty($image)) {
                        $rImage = aq_resize($image['url'], 500, 400, true, true, true);}
                    ?>
                
            
                        <?php
                        if ($rImage) {
                            echo'<img class="img-fluid" src="' . $rImage . '" alt="' . get_the_title() . '" />';
                        }
                        ?>
                </div>

                <div class="col-6 text-center">
                    <h2><?php the_field('overskrift'); ?></h2>

                    <p><?php the_field('brodtekst'); ?></p>
                    <div>
                        <a class="cta" href="/cases"><?php the_field('cta'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        </div>