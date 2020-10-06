<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<?php
if (is_front_page()) {
    $home_class = array('home-page');
} else {
    $home_class = array('no-home');
}
?>
<body <?php body_class($home_class); ?>  data-url="<?php echo admin_url('admin-ajax.php'); ?>"  >
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            <a href="mailto::<?php echo get_option( 'admin_email', '' ); ?>" target="_blank"><?php echo get_option( 'admin_email', '' ); ?></a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span><a href="tel:<?php echo get_option( 'phone_number', '' ); ?><"><?php echo get_option( 'phone_number', '' ); ?></a></span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="<?php echo get_option( 'top_header_bar_link', '/' ) ?>"><?php echo get_option( 'top_header_bar_link_title', 'join us' ) ?></a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                        <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                            ?>
                        </div><!-- .site-branding -->
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <?php 
                            wp_nav_menu(array(
                            'theme_location'=>'main_menu',
                            'container'       => false,
                            'menu_class'=>'d-flex flex-column flex-lg-row justify-content-lg-end align-content-center',
                            ))
                            ?>
                         </nav>

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->