<?php get_header(); ?>
<?php $id = get_the_ID(); ?>
<section role="main" class="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
    <?php get_template_part('partials/article', 'blog'); ?>
        <?php
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>
