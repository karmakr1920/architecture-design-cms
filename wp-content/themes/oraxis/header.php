<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Core Bim Solutions">
    <meta name="description" content="Oraxis - Architecture & Interior Html Template">
    <!-- ======== Page title ============ -->
    <title><?php
            if (is_archive() ) {
                post_type_archive_title();
            }elseif(is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) )){
                single_post_title();
            }elseif(is_404()){
                echo "Error 404";
            }
             else {
                the_title();
            } ?></title>
    <!--<< Favicon >>-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
            <span data-text-preloader="C" class="letters-loading">C</span>
        <span data-text-preloader="O" class="letters-loading">O</span>
        <span data-text-preloader="R" class="letters-loading">R</span>
        <span data-text-preloader="E" class="letters-loading">E</span>
        <span data-text-preloader=" " class="letters-loading"> </span>
        <span data-text-preloader="B" class="letters-loading">B</span>
        <span data-text-preloader="I" class="letters-loading">I</span>
        <span data-text-preloader="M" class="letters-loading">M</span>
        <span data-text-preloader=" " class="letters-loading"> </span>
        <span data-text-preloader="S" class="letters-loading">S</span>
        <span data-text-preloader="O" class="letters-loading">O</span>
        <span data-text-preloader="L" class="letters-loading">L</span>
        <span data-text-preloader="U" class="letters-loading">U</span>
        <span data-text-preloader="T" class="letters-loading">T</span>
        <span data-text-preloader="I" class="letters-loading">I</span>
        <span data-text-preloader="O" class="letters-loading">O</span>
        <span data-text-preloader="N" class="letters-loading">N</span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php echo get_field('header_logo_image','option')['url'];?>" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-3"></div>
                    <p class="text d-none d-xl-block mb-5">
                        <?php echo get_field('header_logo_description', 'option'); ?>
                    </p>
                    <?php $contact_details = get_field('contact_details','option');?>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#"><?php echo $contact_details['address'];?></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:<?php echo $contact_details['email'];?>"><span><?php echo $contact_details['email'];?></span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#"><?php echo $contact_details['address'];?></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:<?php echo $contact_details['phone_number'];?>"><?php echo $contact_details['phone_number'];?></a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="<?php the_permalink(130);?>" class="theme-btn text-center">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Area Start -->
    <?php if (is_front_page()) { ?>
        <header>
            <div id="header-sticky" class="header-5">
                <div class="container">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/white-logo.svg" alt="logo-img">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary',
                                                'container' => false,
                                                'menu_class' => '',
                                                'items_wrap' => '<ul>%3$s</ul>',
                                                // 'walker' => new My_Custom_Walker()
                                            ));
                                            ?>
                                        </nav>
                                    </div>
                                </div>
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bar.svg" alt="img">
                                    </div>
                                </div>
                                <div class="header-button">
                                    <a href="<?php the_permalink(130);?>" class="theme-btn hover-white">Get a quote<i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <?php } else { ?>
        <!-- Header Area Start -->
        <header>
            <div id="header-sticky" class="header-1 header-2">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>" class="header-logo-2">
                                        <img src="<?php echo get_field('footer_logo','option')['url'];?>" alt="logo-img">
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary',
                                                'container' => false,
                                                'menu_class' => '',
                                                'items_wrap' => '<ul>%3$s</ul>',
                                                // 'walker' => new My_Custom_Walker()
                                            ));
                                            ?>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="icon-items">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Requesting A Call:</p>
                                        <h4><a href="tel:6295550129">(629) 555-0129</a></h4>
                                    </div>
                                </div>
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bar.svg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <?php } ?>

    <!--<< Breadcrumb Section Start >>-->
    <?php if (!is_front_page() || !home_url()) { ?>
        <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('<?php if(!empty(get_field('banner_image')['url'])){echo get_field('banner_image')['url'];}else{ echo get_template_directory_uri()."/assets/img/breadcrumb.jpg";} ?>');">
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s"><?php
                                                                    if (is_archive() ) {
                                                                        post_type_archive_title();
                                                                    }elseif(is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) )){
                                                                        single_post_title();
                                                                    }elseif(is_404()){
                                                                        echo "Error 404";
                                                                    } else {
                                                                        the_title();
                                                                    }
                                                                    ?></h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="<?php echo site_url(); ?>">
                                <?php echo get_the_title(21); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            <?php
                            if (is_archive() ) {
                                post_type_archive_title();
                            }elseif(is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) )){
                                single_post_title();
                            }elseif(is_404()){
                                echo "Error 404";
                            } else {
                                the_title();
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>