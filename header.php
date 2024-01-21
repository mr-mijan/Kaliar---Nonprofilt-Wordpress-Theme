<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="loading-logo" src="<?php echo get_template_directory_uri(  ).'/assets/images/preloader.svg'; ?>" alt="icon">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader area end -->

    <!-- Top header area start here -->
    <?php if ( 'off' !== get_theme_mod( 'radio_buttonset_setting_header_top' ) ) : ?>
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrp">
            <ul class="info">
                    <li><i class="fa-regular fa-envelope"></i><a href="mailto:<?php echo esc_url(get_theme_mod('Email_info')); ?>" class="ms-1"><?php echo esc_html(get_theme_mod('Email_info')); ?></a></li>
                    <li class="ms-4"><i class="fa-solid fa-phone"></i><a href="tel:<?php echo esc_url(get_theme_mod('number_info')); ?>" class="ms-1"><?php echo esc_html(get_theme_mod('number_info')); ?></a></li>
                </ul>
                <ul class="link-info">
                    <?php if ( false !== get_theme_mod( 'checkbox_social' ) ) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('facebook_url_setting')); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <?php endif; ?>
                    <?php if ( false !== get_theme_mod( 'checkbox_social_twitter' ) ) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('twitter_url_setting')); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if ( false !== get_theme_mod( 'checkbox_social_linkedin' ) ) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('linkedin_url_setting')); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <?php endif; ?>
                    <?php if ( false !== get_theme_mod( 'checkbox_social_pinterest' ) ) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('pinterest_url_setting')); ?>" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area">
        <div class="container">
            <div class="header__main">
                    <?php if(has_custom_logo( 'custom-logo' )){
                        the_custom_logo();
                    }else{
                        ?>
                        <a href="<?php echo get_home_url(); ?>" class="text-logo"><?php bloginfo(); ?></a>
                    <?php
                    } ?>
                <div class="main-menu">
                <?php
                  wp_nav_menu(array(
                      'theme_location' => 'Primary_Menu',
                      'menu_class' => '',
                  ));
              ?>
              </div>
                
                <div class="btn-two d-none d-lg-inline-block">
                    <span class=" btn-circle"></span>
                    <a href="<?php echo esc_url(get_theme_mod('header_button_url')); ?>" class="btn-inner">
                        <span class="btn-text"> <?php echo esc_html(get_theme_mod('header_button_text')); ?></span>
                    </a>
                </div>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="<?php echo get_home_url(); ?>" class="text-logo text-white mb-4"><?php bloginfo(); ?></a>
        <div class="mobile-menu overflow-hidden text-whtie mb-4">              
       
                <?php
                  wp_nav_menu(array(
                      'theme_location' => 'Mobile_Menu',
                      'menu_class' => 'mean-nav ',
                  ));
              ?>
        </div>
        <ul class="info pt-40">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:+208-6666-0112">+208-6666-0112</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info@example.com</a></li>
        </ul>
        <div class="social-icon mt-20">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->