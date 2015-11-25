<?php
/*
  Template Name: My-Homepage
 */
?>
<?php get_header(); ?>
<section role="main" class="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <?php   get_template_part('partials/article','home'); ?>
    <?php endwhile; endif;?>
    <?php
// loop through the sub-pages of your custom post type
    $parent = $post->ID;
    $childpages = new WP_Query(array(
        'post_type' => 'page',
        'post_parent' => $parent,
        'posts_per_page' => 100,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));
    while ($childpages->have_posts()) : $childpages->the_post();
        ?>
        <?php $anker = get_field('anker'); ?>
        <article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <?php get_template_part('partials/article', 'header'); ?>
            <div class="container">
                <section class="post_content" itemprop="articleBody">
                    <!-- Proof ob Kontakt oder nicht? -->
                        <?php
                        if (get_field('kontaktdaten_eintragen')) :
                            get_template_part('partials/contact');
                        else: the_content();
                        endif;
                        ?>
                            <!-- Proof ob Konditionen oder nicht -->
                            <?php if (get_field('konditionen_eintragen')) : ?>
                                <div class="conditions panel">
                                    <?php 
                                    get_template_part('partials/conditions');
                                    ?>
                                </div>
                            <?php endif;
                            ?>
                            
                             
                            

                    <?php $this_subpage = $post->ID; 
                    $subpages = new WP_Query(array(
                            'post_type' => 'page',
                            'post_parent' => $this_subpage,
                            'posts_per_page' => -1,
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        ));
                        while ($subpages->have_posts()) : $subpages->the_post();
                        get_template_part('partials/accordion'); 
                        endwhile;
                        wp_reset_query();
                        ?>
                            <footer>
                            </footer>
                </section>
                
            </div>
        </article>
    <?php endwhile;
    ?>
    <?php wp_reset_query(); ?>
</section>
<?php get_footer(); ?>