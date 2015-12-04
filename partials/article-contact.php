<?php $anker = get_field('anker'); ?>
<?php $id = get_the_ID(); ?>

<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <?php get_template_part('partials/article', 'header'); ?>

    <section>
        <div class="container">
            <div class="post_content full" itemprop="articleBody">
                <?php get_template_part('partials/contact'); ?>
                <?php if($id == 17) : ?>
                <div class="row">
                    <div class="col-04 full">
                <?php the_content(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
        </div>
    </section>
    
</div>
</article>