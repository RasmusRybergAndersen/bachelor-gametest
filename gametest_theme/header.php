<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Styles -->
<?php wp_head(); ?> 
</head>
<body>
<div id="wrapper">
<div id="header">
    <div class="container-fulid">
        <div class="row">
            <div class="col-xl-2 d-flex justify-content-center">
                <div id="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img src="https://rasmusra.dk/wordpress/filer/logo.png" alt="<?php bloginfo(); ?>" /> </a>
                </div>
            </div>
            <div class="col-xl-3"></div>
            <div class="col-xl-4 align-self-center">
                <div class="main_menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_id' =>'') ); ?>
                </div>
            </div>
            
            <div class="col-xl-3 align-self-center justify-content-end">
            <?php get_search_form(); ?>
            </div>

            
        </div>
    </div>
    <?php get_template_part('inc/sektioner/social', get_post_format()); ?>
</div>


<?php 