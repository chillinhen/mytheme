<?php get_header(); ?>
<!-- section -->
<section role="main" class="main">
    <div class="container">
        <div class="post_content">
            <?php if (have_posts()): ?>
                <h1><?php _e('Latest Posts', 'html5blank'); ?></h1>
                <?php while (have_posts()) : the_post(); ?>


                    <?php get_template_part('partials/preview', 'post'); ?>
                <?php endwhile;
                get_template_part('pagination'); ?>
<?php endif; ?>
        </div>
    </div>

</section>
<!-- /section -->

<?php get_footer(); ?>
