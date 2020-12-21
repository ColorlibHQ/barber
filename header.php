<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo-img">
                                    <?php
                                        echo barber_theme_logo( 'navbar-brand' );
                                    ?>
                                </div>
                            </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <!-- <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul> -->

                                    <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'           => 'primary-menu',
                                            'theme_location' => 'primary-menu',
                                            'menu_id'        => 'navigation',
                                            'container_class'=> false,
                                            'container_id'   => false,
                                            'menu_class'     => false,
                                            'walker'         => new barber_bootstrap_navwalker,
                                            'depth'          => 3
                                        ));
                                    }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="book_room">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Make an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <?php
    //Page Title Bar
    if( function_exists( 'barber_page_titlebar' ) ){
	    barber_page_titlebar();
    }

