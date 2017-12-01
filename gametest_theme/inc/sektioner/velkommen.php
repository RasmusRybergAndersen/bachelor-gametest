<div class="boks1 sektion">     
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php 
                    $image = get_field('hero_img');

                    if (!empty($image)) {
                        $rImage = aq_resize($image['url'], 400, 400, true, true, true);}
                    ?>
                
            
                        <?php
                        if ($rImage) {
                            echo'<img class="" src="' . $rImage . '" alt="' . get_the_title() . '" />';
                        }
                        ?>

                    <h3><?php the_field('hero_overskrift'); ?></h3>
                    <p><span class="type"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>