<div class="subheader-slider">

    
    <div style="background:url(<?php echo aq_resize(wp_get_attachment_url(get_post_thumbnail_id()), 1920, 1080, true, true, true); ?>)">
    <div class="overlay black"> </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sliderindhold text-center">
                            <h2><?php echo $post->post_title ?></h2>
                            <?php if ( function_exists('yoast_breadcrumb') ) 
                            {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
                        </div>
                    </div>
                </div>
            </div>


    </div>


</div>

