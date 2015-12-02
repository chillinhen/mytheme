<?php $anker = get_field('anker'); ?>
<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <?php get_template_part('partials/article', 'header'); ?>

    <section>
        <div class="container">
            <div class="post_content full" itemprop="articleBody">
                <?php get_template_part('partials/contact'); ?>
            </div>
        </div>
    </section>
    
</div>
</article>