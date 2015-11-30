<?php get_header(); ?>

<section role="main" class="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/article', 'main'); ?>
        <?php
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>
