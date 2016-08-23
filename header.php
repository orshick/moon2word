<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moon2word
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="Moon Beyond - Taking you further">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Moon Beyond">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon-114x114.png">
    <!-- animation --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css" />
    <!-- bootstrap --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" />
    <!-- et line icon --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/et-line-icons.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/extralayers.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/settings.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/magnific-popup.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.transitions.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/full-slider.css" />
    <!-- text animation -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/text-effect.css" />
    <!-- hamburger menu  -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/menu-hamburger.css" />

    <?php wp_head(); ?>

    <!-- responsive -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    

    <!-- custom -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/custom.css" />
    <style type="text/css" media="screen, print">
        @font-face {
          font-family: "OCR-A-STD-Regular";
          src: url("<?php bloginfo('stylesheet_directory'); ?>/fonts/ocr-a-regular.ttf");
      }

      @font-face {
          font-family: "Proxima Nova Condensced";
          src: url("<?php bloginfo('stylesheet_directory'); ?>/fonts/ProximaNovaCond-Regular.otf");
      }

      @font-face {
          font-family: "Proxima Nova Condensced Light";
          src: url("<?php bloginfo('stylesheet_directory'); ?>/fonts/ProximaNovaCond-Light.otf");
      }

      @font-face {
          font-family: "Proxima Nova Condensced Semibold";
          src: url("<?php bloginfo('stylesheet_directory'); ?>/fonts/ProximaNovaCond-Semibold.otf");
      }
  }
</style>

<!--[if IE]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style-ie.css" />
    <![endif]-->
<!--[if IE]>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>
     <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-dark-transparent" role="navigation">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2 navbar-header pull-left" style="clear: left;">
                        <a href="<?php echo site_url() ?>" class="navbar-brand"><img alt="" src="<?php bloginfo('stylesheet_directory');?>/images/logo-nav.png" class="logo"/></a>                    
                    </div>                    
                    <!-- end logo -->
                    <!-- toggle navigation -->
                    <div class="navbar-header col-sm-4 col-xs-2 pull-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- toggle navigation end -->
                    <!-- main menu -->
                    <div class="col-md-8 no-padding-right accordion-menu text-right">
                        <?php 
                        wp_nav_menu (array(

                          'theme_location' => 'primary',
                          'container' => 'div',
                          'container_class' => 'navbar-collapse collapse',
                          'menu_id' => 'accordion',
                          'menu_class' => 'nav navbar-nav navbar-right panel-group'

                          ) );
                          ?>
                    </div>
                    <!-- end main menu -->
                </div>
            </div>
        </nav>
    
    <!--end navigation panel -->
