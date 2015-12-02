<?php $banner = get_field('hintergrundbild'); ?>
<header class="article-header" role="banner" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
    <hgroup class="container">
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail">   
                <?php the_post_thumbnail('large'); ?>
                <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
            </div>
        <?php endif; ?>
        
    </hgroup>
</header><!-- end article header -->