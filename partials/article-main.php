<?php $anker = get_field('anker'); ?>
<?php $banner = get_field('hintergrundbild'); ?>
<?php $id = get_the_ID(); ?>
<?php if ($id == 15 || $id == 17) : $class = "full";
endif; ?>

<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class('rubrik'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image:url('<?php echo ($id == 17) ? $banner : "none"; ?>');">
    <?php
    if (!($id == 17)) :
        get_template_part('partials/article', 'header');
    endif;
    ?>
    <div class="container">
        <div class="small-wrapper">
            <section class="post_content <?php echo $class; ?>">
                <div itemprop="articleBody">
<?php the_content(); ?>
                    <!-- Proof ob Konditionen oder nicht -->
<?php if (get_field('konditionen_eintragen')) : ?>
                        <div class="panel">
                            <header id="heading-<?php the_ID(); ?>">

                                <h3 role="button" data-toggle="collapse" href="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>"><?php _e("Konditionen", "html5blank"); ?></h3>
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
                <!-- Kita Seite ??? -->
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


                    <!-- Kontakt/Impressum ??? -->
<?php elseif ($id == 15 || $id == 17) : ?>
    <?php get_template_part('partials/contact'); ?>
<?php endif; ?>
            </section>
        </div>
    </div>   
</article>