<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        wp_head();
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    </head>
    
    <body  <?php body_class(); ?>>

<!-- Page Header -->
        <div class="header-box">
            <header class="intro-header" style="background-image: url('<?php echo $url;?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="site-heading">
                                    <h1 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php echo bloginfo('name');?></a>
                                </h1>
                            </div><!--end site-heading-->
                        </div><!--end col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1-->
                    </div><!--end row-->
                </div><!--end container-->
            </header><!--end intro-header-->
        </div><!--end header-box-->
    
        <nav class="navbar navbar-default navbar-custom">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'xylus' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php

                        if(isset($sitelogo)&& $sitelogo != ''){
                            echo '<img class="site_logo" src="'.$sitelogo.'" title="'.$title.'" alt="'.$title.'">';
                        }else{
                            echo '<div class="site-title">'.$title.'</div>';
                        } ?>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'menu_class'      => 'nav navbar-nav navbar-right',
                                'walker'          => new ERM_navwalker(),
                                'depth'           => '2'
                            )
                        );
                    }
                    ?>
                    
                </div><!-- /.navbar-collapse -->
                <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>
            </div><!--end container-fluid-->
        </nav>