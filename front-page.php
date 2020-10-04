    <?php get_header();

    $upcoming_events = new WP_Query(
        array(
            'post_status' => 'future',
            'post_type' => 'events',
            'posts_per_page' => 13,
            'orderby' => 'date',
            'order' => 'ASC',
        )
    );
    ?>
    <div class="swiper-container hero-slider" style="height:100vh;">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="https://smartupfactory.org/wp-content/uploads/2020/06/IMG_0121-scaled.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Changing</h1>
                                    <h4>through innovation</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>youths incubate innovations to adddress comumnity and social challenges from a youth freindly space</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Join Smartup</a>
                                    <a href="#" class="btn orange-border">Get to know us</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="https://smartupfactory.org/wp-content/uploads/2020/06/IMG_0587-scaled.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Youths</h1>
                                    <h4>mindsets recovered</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Marginalised men and women aged 17-26 meet and help each other learn life skills.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Youth Engament</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="https://smartupfactory.org/wp-content/uploads/2020/06/IMG_0184-scaled.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Empowerment</h1>
                                    <h4>in a youth friendly space</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>A youth hub where you have access to information and technology and is mananged by youths</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="https://smartupfactory.org/wp-content/uploads/2020/06/HCD-icon-grey.png" alt="">
                            <img src="https://smartupfactory.org/wp-content/uploads/2020/06/HCD-icon-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Human Centered Design</h3>
                        </header>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="https://smartupfactory.org/wp-content/uploads/2020/06/technology-grey.png" alt="">
                            <img src="https://smartupfactory.org/wp-content/uploads/2020/06/technology-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Information and Technology</h3>
                        </header>

                        <div class="entry-content">
                            <p>The hubs are fully equipped with local servers, laptops, Interactive projectors, Electronics kits, DSLR Cameras all accessible by the youths at the space to archive there goals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="https://smartupfactory.org/wp-content/uploads/2020/06/Life-skills-grey.png" alt="">
                            <img src="https://smartupfactory.org/wp-content/uploads/2020/06/Life-skills-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Life Skills Training</h3>
                        </header>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">About Smartup Factory</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>The Smartup Factory project has emerged from the founding idea that since the poor and marginalized youth experience the challenges in their community and society first hand they are in a crucial position to identify those challenges and come up with innovative solutions to them</p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="about-us" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="https://smartupfactory.org/wp-content/uploads/2020/06/MG_7152-scaled.jpg" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">Upcoming Events</h2>
                        </div><!-- .section-heading -->
<?php while ($upcoming_events->have_posts()) : $upcoming_events->the_post(); ?>
                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <?php the_post_thumbnail(); ?>
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                    <div class="posted-date">
                                        <a href="<?php the_permalink(); ?>"> <?php the_date(); ?> </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="<?php the_permalink(); ?>" ><?php echo get_post_meta(get_the_ID(), '_event_location_key', true); ?></a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0"><?php the_excerpt(); ?></p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->
<?php endwhile; wp_reset_query(); ?>
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->

<?php $annual_innovation = get_post(get_theme_mod('innovation_of_the_year', '2')); ?>
                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Innovation Of The Year</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <?php echo get_the_post_thumbnail($annual_innovation->ID); ?>
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="<?php echo get_permalink($annual_innovation->ID); ?>"><?php echo $annual_innovation->post_title; ?></a></h3>
                                    <div class="cats-links">
                                        <a href="<?php echo get_permalink($annual_innovation->ID); ?>"><?php echo get_the_author_meta('display_name', $annual_innovation->post_author); ?></a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0"><?php echo $annual_innovation->post_excerpt; ?></p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer mt-5">
                                    <a href="<?php echo get_permalink($annual_innovation->ID); ?>" class="btn gradient-bg mr-2">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .cause-content-wrap -->

                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Youth Stories</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

<?php get_header();

    $stories = new WP_Query(
        array(
            'post_type' => 'stories',
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'ASC',
        )
    );
?>

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">
                        <?php while ($stories->have_posts()) : $stories->the_post(); ?>
                        <div class="swiper-slide" style="width:unset !important;">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                      <?php the_post_thumbnail(); ?>

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="<?php the_permalink(); ?>"   class="btn gradient-bg mr-2">Read More</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0"><?php the_excerpt(); ?></p>
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                        <?php endwhile; ?>
                            </div><!-- .swiper-wrapper -->
                            </div><!-- .swiper-container -->

                  
                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    <div class="home-page-limestone">
        <div class="container">
            <div class="row align-items-end">
                <div class="coL-12 col-lg-6">
                    <div class="section-heading">
                        <h2 class="entry-title">We create safe, inspiring and enabling space for young males and females</h2>

                        <p class="mt-5">Our goal is to empower youth to customize and take ownership of the running of the Smartup Factory as well as scale it up to reach as many youth as possible with the support of extensive partner network.</p>
                    </div><!-- .section-heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="milestones d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="https://smartupfactory.org/wp-content/uploads/2020/06/youth-champ-icon2.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Youth Champions</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="https://smartupfactory.org/wp-content/uploads/2020/06/mentor-icon.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="30" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Mentors</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="https://smartupfactory.org/wp-content/uploads/2020/06/hubs.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="8" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Youth Hubs</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div><!-- .milestones -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    <?php get_footer(); ?>