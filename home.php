<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
  
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Smartup Insights</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    
<?php while ( have_posts() ) : the_post(); ?>
        <div class="news-content">
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>

            <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                <div class="header-elements">
                    <div class="posted-date"><?php the_date(); ?></div>

                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div class="post-metas d-flex flex-wrap align-items-center">
                        <span class="cat-links">in <a href="<?php the_permalink(); ?>"><?php the_category(','); ?></a></span>
                        <span class="post-author">by <a href="<?php the_permalink(); ?>"><?php echo get_the_author_meta('display_name'); ?></a></span>
                        <span class="post-comments"><a href="<?php the_permalink(); ?>"><?php echo get_comments_number(); ?> Comments</a></span>
                    </div>
                </div>
            </header>

            <div class="entry-content">
                <p><?php the_excerpt(); ?></p>
            </div>

            <footer class="entry-footer">
                <a href="<?php the_permalink(); ?>" class="btn gradient-bg">Read More</a>
            </footer>
        </div>
  <?php endwhile; ?>
                    <!-- <ul class="pagination d-flex flex-wrap align-items-center p-0">
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                    </ul> -->
                </div>

                <div class="col-12 col-lg-4">
                    <?php get_sidebar(); ?>
                </div><!-- .col -->
            </div>
        </div>
    </div>

    <?php get_footer(); ?>