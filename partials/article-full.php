<?php $anker = get_field('anker'); ?>
<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class('rubrik'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <?php get_template_part('partials/article', 'header'); ?>
    <div class="container">
        <section class="post_content full">
            <div itemprop="articleBody">
                <?php get_template_part('partials/contact'); ?>
                <!-- Proof ob Konditionen oder nicht -->
                <?php if (get_field('konditionen_eintragen')) : ?>
                    <div class="conditions panel">
                        <?php
                        get_template_part('partials/conditions');
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>   
</article>