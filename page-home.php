<?php /* Template Name: Home */ get_header(); ?>

<?php $id = get_the_ID(); ?>
<section role="main" class="main">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php $anker = get_field('anker'); ?>
            <?php $banner = get_field('hintergrundbild'); ?>

            <article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/tags.svg),url('<?php echo ($banner) ? $banner : ''; ?>');">

                <section>
                    <div class="container">
                        <div class="post_content" itemprop="articleBody">
                            <?php the_content(); ?>
                        </div>
                        <?php get_template_part('partials/box', 'stoerer'); ?>
                    </div>
                </section>

            </article>
            <?php
        endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>


