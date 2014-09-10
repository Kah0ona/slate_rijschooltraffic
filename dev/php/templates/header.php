<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="Header">
        <div class="Header-container u-gridContainer">
            <div class="u-gridRow">
                <div class="Header-logo u-gridCol4">
                    <a href="index.php"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" /></a>
                </div>
                <div class="Header-contact u-gridCol6">
                    <a href="tel:0345476755" class="Button Button--default">
                        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                            <use xlink:href="#icon-phone"></use>
                        </svg>
                        <span>0345 47 67 55</span>
                    </a>
                    <br/>
                    <a href="tel:0652000983" class="Button Button--default">
                        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                            <use xlink:href="#icon-mobile"></use>
                        </svg>
                        <span>06 52 00 09 83</span>
                    </a>
                </div>
                <div class="Header-buttons u-gridCol2">
                    <a class="Header-first-button" target="_blank" href="https://www.facebook.com/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/facebook.svg" width="55px" height:"55px;">
                    </a>
                    <a target="_blank" href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/svg/digid.svg" width="55px" height:"55px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Main navigation -->
    <?php //include 'includes/navigation.php'; ?>


    <div class="Bot-Nav">
        <div class="u-gridContainer">

            <div class="Nav-toggle u-cf">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                    </svg>
                </a>
            </div>

            <?php include 'includes/navigation.php'; ?>
            
            <div class="Mob-contact-ico">
                <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0652000383">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-phone"></use>
                    </svg>
                </a>
            
                <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@rijschool-traffic.nl">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-envelope"></use>
                    </svg>
                </a>
            </div><!-- header-contact -->

        </div>
    </div>



   
