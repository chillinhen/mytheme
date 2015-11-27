<?php /* Template Name: Onepager */ get_header(); ?>

<section role="main" class="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/article', 'home'); ?>
        <?php
        endwhile;
    endif;
    ?>
    <!-- startseiten sections -->
    <?php
    $argsMain = array(
        'post_type' => 'rubriken',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    ?>
    <?php
    $mainQuery = new WP_Query($argsMain);
    if ($mainQuery->have_posts()): while ($mainQuery->have_posts()) : $mainQuery->the_post();
            ?>
            <?php get_template_part('partials/article', 'main'); ?>
        <?php
        endwhile;
    endif;
    wp_reset_query();
    ?>
</section>

<?php get_footer(); ?>
