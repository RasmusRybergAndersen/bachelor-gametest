<html>
<head>
<meta property="fb:app_id" content="937540103088426">
<!-- <meta property="og:description" content="Gametest FB comment" /> -->
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?> 
</head>
<body>


<script>

//  window.fbAsyncInit = function() {
//    FB.init({
//      appId      : '937540103088426',
//      cookie     : true,
//      xfbml      : true,
//      version    : 'v2.11'
//    });
      
//    FB.AppEvents.logPageView();   
      
//  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;version=v2.11";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<div id="wrapper">
<div id="header">
    <div class="container-fulid">
        <div class="row d-flex align-items-center">
            <div class="col-xl-4">
                <div id="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img src="https://rasmusra.dk/wordpress/filer/logo.png" alt="<?php bloginfo(); ?>" /> </a>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="main_menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'menu_id' =>'') ); ?>
                </div>
            </div>
            
            <div class="col-xl-3">
            <?php get_search_form(); ?>
            </div>

            
        </div>
    </div>
    <?php get_template_part('inc/sektioner/social', get_post_format()); ?>
</div>


<?php 