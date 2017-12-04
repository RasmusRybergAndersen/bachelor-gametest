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
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div id="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img src="/filer/logo.png" alt="<?php bloginfo(); ?>" /> </a>
                </div>
            </div>
            <div class="col-xl-5 d-flex align-self-center">
                <div class="main_menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_id' =>'') ); ?>
                </div>
            </div>
            <div class="col-xl-3">
            <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>


<?php 