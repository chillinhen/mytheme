<div id="stoerer">
    <hgroup>
    <h2><?php _e('Aktuelles','myTheme');?></h2>
    </hgroup>
    <?php
    $argsNews = array(
        'post_type' => 'post',
        'category_name' => 'aktuelles',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    ?>
    <?php
    $newsQuery = new WP_Query($argsNews);
    if ($newsQuery->have_posts()): while ($newsQuery->have_posts()) : $newsQuery->the_post();
            ?>
            <?php get_template_part('partials/preview', 'post'); ?>
            <?php
        endwhile;
    endif;
    wp_reset_query();
    ?>
</div>