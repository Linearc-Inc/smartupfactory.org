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

<?php $annual_innovation = get_post(get_theme_mod('innovation_of_the_year', '2')); ?>
                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Innovation Of The Year</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <?php echo get_the_post_thumbnail( $annual_innovation->ID); ?>
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


<?php get_header();

    $upcoming_events = new WP_Query(
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
                        <?php while ($upcoming_events->have_posts()) : $upcoming_events->the_post(); ?>
                        <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                      <?php the_post_thumbnail() ?>

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="<?php the_permalink(); ?>"   class="btn gradient-bg mr-2">Read More</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0"><?php the_excerpt() ?></p>
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                        <?php endwhile; ?>
                            </div><!-- .swiper-wrapper -->
                            </div><!-- .swiper-container -->

                  
