<?php $anker = get_field('anker'); ?>
<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <?php get_template_part('partials/article', 'header'); ?>

    <section>
        <div class="container">
            <div class="post_content" itemprop="articleBody">
                <?php the_content(); ?>
                <!-- Proof ob Konditionen oder nicht -->
                <?php if (get_field('konditionen_eintragen')) : ?>
                    <div class="panel">
                        <header id="heading-<?php the_ID(); ?>">
                            <h3 role="button" data-toggle="collapse" href="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>">
                                <?php _e("Konditionen", "html5blank"); ?>
                            </h3>
                        </header>
                        <div class="collapse" id="collapse-<?php the_ID(); ?>">
                            <?php
                            get_template_part('partials/conditions');
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('partials/quote'); ?>
<!--            <footer><?php #edit_post_link(); ?></footer>-->
        </div>
    </section>
    
</div>
</article>