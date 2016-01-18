<?php $banner = get_field('hintergrundbild'); ?>
<?php if(!(is_front_page() || is_home())) : ?>
<header class="article-header" role="banner" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
<?php else : ?>
<header class="article-header" role="banner">
<?php endif; ?>
    <hgroup class="container">
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail">   
                <?php the_post_thumbnail('thumbnail-size'); ?>
                <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
            </div>
        <?php endif; ?>
        
    </hgroup>
</header><!-- end article header -->

