<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page">
        <header>
            <div class="container">
                <hgroup>
                    <div id="header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="site-title">
                                    <a href="<?=esc_url( home_url( '/' ) ); ?>" title="<?=esc_attr( get_bloginfo( 'name' , 'display' ) ); ?>" rel="home">
                                        <?php bloginfo( 'name' ); ?>
                                    </a>
                                </h1>
                                <p id="blog-description"><?php bloginfo( 'description' ); ?></p>
                            </div>
                        </div>
                    <?php $header_image = get_header_image(); ?>
                    <?php if ( ! empty( $header_image ) ) : ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </hgroup>
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <nav id="site-navigation">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'top-bar',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'nav navbar-nav',
                                'walker' => new Bootstrap_Walker_Nav_Menu(),
                                'link_after' => '.'));?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="content">
