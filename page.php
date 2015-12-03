<?php get_header(); ?>
<?php $id = get_the_ID(); ?>
<section role="main" class="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php if(!(is_front_page() || is_home())) : ?>
            <?php get_template_part('partials/article', 'page'); ?>
    <?php else : ?>
         <?php get_template_part('partials/article', 'home'); ?>
    <?php endif; ?>
        <?php
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>
