<?php $anker = get_field('anker'); ?>
<?php $banner = get_field('hintergrundbild'); ?>

<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    
<header class="article-header" role="banner" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
    <hgroup class="container">
        <?php if (in_category('aktuelles')) : ?>
            <h2 class="category-title"><?php _e('Aktuelles', 'myTheme'); ?></h2>
        <?php endif; ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail blog-image">   
                <?php the_post_thumbnail('thumbnail-blog'); ?>
            </div>
        <?php endif; ?>

    </hgroup>
</header><!-- end article header -->

    <section>
        <div class="container">
            <div class="post_content" itemprop="articleBody">
                <h3 class="single-post-title" itemprop="headline"><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <div class="date"><?php the_time('J, F, Y'); ?></div>
            </div>
            <?php #get_template_part('partials/quote'); ?>
        </div>
       
    </section>
</article>