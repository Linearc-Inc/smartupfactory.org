<?php
get_header();
?>
<div id="content" class="site-content">
<div class="page-content">
<?php
    if (have_posts()):
    while (have_posts()): the_post(); ?>
        <article>
            <section class="content"><?php the_content(); ?></section>
        </article>
    <?php endwhile; endif; ?>
</div>
<?php
get_footer();
