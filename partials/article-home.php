<?php $anker = get_field('anker'); ?>
<?php $banner = get_field('hintergrundbild'); ?>

<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">

    <section>
        <div class="container">
            <div class="post_content" itemprop="articleBody">
                <?php the_content(); ?>
                <!-- Proof ob Konditionen oder nicht -->
                <?php if (get_field('konditionen_eintragen')) : ?>
                    <div class="panel parent">
                        <header id="heading-<?php the_ID(); ?>">
                            <h3 role="button" data-toggle="collapse" href="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>">
                                <?php _e("Konditionen", "html5blank"); ?>
                            </h3>
                        </header>
                        <div class="collapse" id="collapse-<?php the_ID(); ?>">
                            <?php
                            $conditions = get_field('konditionen');
                            if ($conditions) :
                                echo $conditions;
                            endif;
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- child pages loop -->
                <?php
                $parent = $post->ID;
                $filter = array(
                    'post_type' => 'page',
                    'post_parent' => $parent,
                    'posts_per_page' => -1,
                    'post_status' => array('publish'),
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $childLoop = new WP_Query($filter);
                if ($childLoop->have_posts()) : while ($childLoop->have_posts()) : $childLoop->the_post();
                        ?>
                        <?php get_template_part('partials/accordion'); ?>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                <?php endif; ?>

            </div>
            <?php get_template_part('partials/quote'); ?>
        </div>

        <!-- Prüfen ob Zusatztext-->
        <?php
        $add_cont = get_field('zusatztext');
        $add_quote = get_field('zusatz-zitat');
        if ($add_cont || $add_quote) :
            ?>
        
            <div class="container">
                <hr>
                <div class="post_content"><?php echo $add_cont; ?></div>
                <aside><?php echo $add_quote; ?></aside>
            </div>
        <?php endif; ?>
       
    </section>

</article>