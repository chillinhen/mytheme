<?php
$banner = get_field('hintergrundbild');
?>	
<header role="banner" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
    <hgroup>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
    </hgroup>
</header><!-- end article header -->