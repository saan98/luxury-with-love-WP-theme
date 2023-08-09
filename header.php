<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Luxury-With-Love
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ); ?>/assets/css/mystyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ); ?>/assets/css/bootstrap.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--HEADER SECTION START-->
    <header>
        <!--NAV-BAR-START-->
        <nav class="navbar navbar-expand-lg navbar-light nav-bar">
            <div class="container gap-4">
                <a href="#" class="navbar-brand me-0"><img
                        src="<?php echo get_template_directory_uri(  ); ?>/assets/images//logo.png"
                        alt="Luxury With Love logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="input-group">
                    <input class="form-control border-end-0 border" placeholder="Search" type="search"
                        id="example-search-input">
                    <span>
                        <button class="btn btn-outline-secondary bg-white border-start-0 border" type="button">
                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//search_icon.png"
                                alt="search" />
                        </button>
                    </span>
                </div>
                <div class="collapse navbar-collapse gap-4 text-center" id="navbarSupportedContent">
                    <div class="container d-lg-flex">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//flag_icon.png"
                            alt="Cannada" />
                    </div>
                    <div class="container d-lg-flex gap-2">
                        0&nbsp;Items<img
                            src="<?php echo get_template_directory_uri(  ); ?>/assets/images//cart_icon.png"
                            alt="Cart" />
                    </div>
                    <div class="container d-lg-flex gap-2">
                        Account<img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//account_icon.png"
                            alt="Account" />
                    </div>
                    <div class="container d-lg-flex gap-2">
                        Wishlist<img
                            src="<?php echo get_template_directory_uri(  ); ?>/assets/images//wishlist_icon.png"
                            alt="Wishlist" />
                    </div>
                    <div class="container d-lg-flex gap-4">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//sm1.png" alt="twitter" />
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//sm2.png"
                            alt="facebook" />
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//sm3.png"
                            alt="instagram" />
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images//sm4.png" alt="youtube" />
                    </div>
                </div>
            </div>
        </nav>
        <!--NAV-BAR-END-->
    </header>
    <!--HEADER SECTION END-->


    <div class="container-fluid px-0">
        <!--NAV-MENU-START-->
        <nav class="navbar navbar-expand-lg nav-light">
            <div class="collapse navbar-collapse nav-menu-div" id="navbarSupportedContent">
                <div class="container px-0 pb-3">
                    <ul class="navbar-nav nav-menu-items ps-lg-5 text-center">
                        <li class="nav-item">
                            <a class="nav-link link-dark active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">All Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">Towel Warmers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">Bathroom Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">Shower Essentials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">Thermostatic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">Bathtub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark" href="#">Contact</a>
                        </li>
                    </ul>
                    <?php
					wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'	 => 'nav-menu-items'
						)
					)?>
                </div>
            </div>
            <!--NAV-MENU-END-->
        </nav>
        <!--ANNOUNCEMENT BAR START-->
        <section class="ann-bar-section">
            <div class="container ann-bar-container">
                <div class="row ann-bar-div align-items-center">
                    <div class="col-lg-4 col-md-12 ann-bar-text text-center ">
                        <img class="m-2" src="<?php echo get_template_directory_uri(  ); ?>/assets/images//a (1).png"
                            alt="shipping-icon" />Free
                        Canada-wide Shipping on orders over $300
                    </div>
                    <div class="col-lg-4 col-md-12 ann-bar-text text-center">
                        <img class="m-2" src="<?php echo get_template_directory_uri(  ); ?>/assets/images//a (2).png"
                            alt="shipping-icon" />Price
                        matching all Canadian retailer
                    </div>
                    <div class="col-lg-4 col-sm-12 ann-bar-text text-center">
                        <img class="m-2" src="<?php echo get_template_directory_uri(  ); ?>/assets/images//a (3).png"
                            alt="shipping-icon" /> 4.8
                        stars on GBP - 79 Google reviews
                    </div>
                </div>
            </div>
        </section>
        <!--ANNOUNCEMENT BAR END-->
    </div>





















    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'luxury-with-love' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="site-branding">
                <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
			else :
				?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
			endif;
			$luxury_with_love_description = get_bloginfo( 'description', 'display' );
			if ( $luxury_with_love_description || is_customize_preview() ) :
				?>
                <p class="site-description">
                    <?php echo $luxury_with_love_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'luxury-with-love' ); ?></button>
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
            </nav><!-- #site-navigation -->
        </header>#masthead