<?php $anker = get_field('anker'); ?>
<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class('rubrik'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <?php get_template_part('partials/article', 'header'); ?>
    <div class="container">
        <section class="post_content" >
            <div itemprop="articleBody">
                <?php the_content(); ?>
                <!-- Proof ob Konditionen oder nicht -->
                <?php if (get_field('konditionen_eintragen')) : ?>
                    <div class="conditions panel">
                        <?php
                        get_template_part('partials/conditions');
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('partials/quote'); ?>
        </section>
        <?php $id = get_the_ID(); ?>
        <?php if ($id == 9) : ?>
            <?php
            $sub_posts = array();
            for ($label = 1; $label <= 6; $label++) :
                $sub_posts[] = get_field('sub-post_0' . $label);

            endfor;
            wp_reset_postdata();
            ?>

            <?php
            foreach ($sub_posts as $post) :
                if ($post) :
                    setup_postdata($post);
                    get_template_part('partials/accordion');
                endif;
            endforeach;
            ?>
<?php endif; ?>
    </div>   
</article>