<?php

$selection = get_field('select');
if ($selection == "news") : 
        $argsNews = array(
        'post_type' => 'post',
        'category_name' => 'aktuelles',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $newsQuery = new WP_Query($argsNews);
      if ($newsQuery->have_posts()) : ?>
        <div id="stoerer" class="<?php echo $selection;?>">
            <hgroup>
                <h2><?php _e('Aktuelles', 'myTheme'); ?></h2>
            </hgroup>
            <?php while ($newsQuery->have_posts()) : $newsQuery->the_post();
                get_template_part('partials/preview', 'post');?>
                 <?php
            endwhile;wp_reset_query();?>
        </div>
<?php endif; ?>
<?php endif; ?>
<?php if ($selection == "angebot") : 
        $offer = get_field('teaser');
    if ($offer):?>
<div id="stoerer" class="<?php echo $selection;?>">
    <?php foreach ($offer as $post): // variable must be called $post (IMPORTANT) ?>
            <?php
            setup_postdata($post);
            get_template_part('partials/preview', 'offer');
        endforeach;
        ?>
</div>
    <?php endif; ?>


<?php endif; ?>