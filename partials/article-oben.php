<?php $anker = get_field('anker'); ?>
<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <?php get_template_part('partials/article', 'header'); ?>
    <section>
        <?php the_content(); ?>
        <footer>
            <!-- Proof ob Konditionen oder nicht -->
                <?php
                if (get_field('konditionen_eintragen')) {
                    _e('Konditionen', 'theme_text_domain');
                    get_template_part('partials/conditions');
                }
                ?>
        </footer>