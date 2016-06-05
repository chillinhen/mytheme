<?php
/** Teaser ??? ***/
$posts = get_field('teaser');
/*** or Blog ??? ***/
    $argsNews = array(
        'post_type' => 'post',
        'category_name' => 'aktuelles',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $newsQuery = new WP_Query($argsNews);
/**if Teaser***/
if ($posts):
    ?>
    <div id="stoerer">
        <hgroup>
            <h2><?php _e('Aktuelles', 'myTheme'); ?></h2>
        </hgroup>
        <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php
            setup_postdata($post);
            get_template_part('partials/preview', 'post');
        endforeach;
        ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php else :
        echo 'hier die News';
    ?>
    <?php endif; ?>
   




 <?php /** if Blognews available ***/
        if ($newsQuery->have_posts()) : ?>
        <div id="stoerer">
        <hgroup>
            <h2><?php _e('Aktuelles', 'myTheme'); ?></h2>
        </hgroup>
            <?php 
            while ($newsQuery->have_posts()) : $newsQuery->the_post();
            get_template_part('partials/preview', 'post'); ?>
            <?php
        endwhile;?>            
        </div>
<?php endif;?>