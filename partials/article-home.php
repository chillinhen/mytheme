<?php
$banner = get_field('hintergrundbild');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('buttons'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
    <div class="container">
        <section class="post_content" itemprop="articleBody">
            <?php the_content(); ?>
        </section>
        <footer></footer>
    </div>
</article>