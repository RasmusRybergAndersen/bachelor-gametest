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
            <div class="col-xl-4 align-self-center">
                <div class="main_menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_id' =>'') ); ?>
                </div>
            </div>
            <div class="col-xl-3 align-self-center">
                <div class="social_icons d-flex justify-content-end">
                    
                    <a href="<?php the_field('facebook'); ?>">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 96.3"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Facebook</title><path class="cls-1" d="M72.1,0H59.6c-14,0-23.1,9.3-23.1,23.7V34.6H24a2,2,0,0,0-2,2V52.4a2,2,0,0,0,2,2H36.5V94.3a2,2,0,0,0,2,2H54.9a2,2,0,0,0,2-2v-40H71.6a2,2,0,0,0,2-2V36.5a2.05,2.05,0,0,0-2-2H56.8V25.3c0-4.4,1.1-6.7,6.8-6.7H72a2,2,0,0,0,2-2V2A1.92,1.92,0,0,0,72.1,0Z" transform="translate(-22 0)"/></svg>
                    </a>
                 
                    <a href="<?php the_field('twitter'); ?>">
                        <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 497.12"><defs><style>.cls-1{fill:#ffffff;}</style></defs><title>Twitter</title><path class="cls-1" d="M612,116.26A250.68,250.68,0,0,1,539.91,136,126.08,126.08,0,0,0,595.1,66.62,253.14,253.14,0,0,1,515.32,97.1,125.64,125.64,0,0,0,301.39,211.56,356.45,356.45,0,0,1,42.64,80.39,125.69,125.69,0,0,0,81.5,248a125.55,125.55,0,0,1-56.87-15.76v1.57a125.67,125.67,0,0,0,100.69,123.1,127.09,127.09,0,0,1-33.08,4.4A120.54,120.54,0,0,1,68.61,359a125.6,125.6,0,0,0,117.25,87.19A251.93,251.93,0,0,1,29.94,499.8,266.58,266.58,0,0,1,0,498.07a354.82,354.82,0,0,0,192.44,56.49c231,0,357.19-191.29,357.19-357.19l-.42-16.25A250.81,250.81,0,0,0,612,116.26Z" transform="translate(0 -57.44)"/></svg>
                    </a>
                    
                    <a href="<?php the_field('youtube'); ?>">
                           <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461 326.22"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Youtube</title><path class="cls-1" d="M365.26,67.39H95.74A95.75,95.75,0,0,0,0,163.14V297.87a95.75,95.75,0,0,0,95.74,95.74H365.26A95.74,95.74,0,0,0,461,297.87V163.14A95.74,95.74,0,0,0,365.26,67.39ZM300.51,237.06,174.45,297.18a5.06,5.06,0,0,1-7.24-4.57v-124a5.06,5.06,0,0,1,7.35-4.52L300.62,228A5.07,5.07,0,0,1,300.51,237.06Z" transform="translate(0 -67.39)"/></svg>
                    </a>
                    
                    <a href="<?php the_field('itunes'); ?>">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.01 512"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Itunes</title><path class="cls-1" d="M491.89,156.36a256.16,256.16,0,0,0-471.78,0A256,256,0,0,0,437,437a256.3,256.3,0,0,0,54.87-280.66ZM378.6,345.87c-.78,17.76-16.27,35.15-37.59,41.78-25.61,8-51.68-2.64-58.22-23.68s8.94-44.52,34.57-52.49a59.2,59.2,0,0,1,14.22-2.55l0,0h.57c1.86-.09,3.69-.08,5.52,0l19.18.86V179.25L235.67,195.32V359.38c.05,1,.05,2,0,3V363h0c-1.09,17.57-21.45,35.4-42.53,41.94-25.63,8-51.7-2.64-58.23-23.67s8.94-44.52,34.56-52.49c5.87-1.82,36-3.54,36-3.54l0-194.13L378.6,104.44ZM491.89,156.36a256.16,256.16,0,0,0-471.78,0A256,256,0,0,0,437,437a256.3,256.3,0,0,0,54.87-280.66ZM378.6,345.87c-.78,17.76-16.27,35.15-37.59,41.78-25.61,8-51.68-2.64-58.22-23.68s8.94-44.52,34.57-52.49a59.2,59.2,0,0,1,14.22-2.55l0,0h.57c1.86-.09,3.69-.08,5.52,0l19.18.86V179.25L235.67,195.32V359.38c.05,1,.05,2,0,3V363h0c-1.09,17.57-21.45,35.4-42.53,41.94-25.63,8-51.7-2.64-58.23-23.67s8.94-44.52,34.56-52.49c5.87-1.82,36-3.54,36-3.54l0-194.13L378.6,104.44ZM491.89,156.36a256.16,256.16,0,0,0-471.78,0A256,256,0,0,0,437,437a256.3,256.3,0,0,0,54.87-280.66ZM378.6,345.87c-.78,17.76-16.27,35.15-37.59,41.78-25.61,8-51.68-2.64-58.22-23.68s8.94-44.52,34.57-52.49a59.2,59.2,0,0,1,14.22-2.55l0,0h.57c1.86-.09,3.69-.08,5.52,0l19.18.86V179.25L235.67,195.32V359.38c.05,1,.05,2,0,3V363h0c-1.09,17.57-21.45,35.4-42.53,41.94-25.63,8-51.7-2.64-58.23-23.67s8.94-44.52,34.56-52.49c5.87-1.82,36-3.54,36-3.54l0-194.13L378.6,104.44Z" transform="translate(0.01)"/></svg>
                    </a>
                    
                    
                </div>
            </div>
            <div class="col-xl-3 align-self-center justify-content-end">
            <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>


<?php 