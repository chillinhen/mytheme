<?php $quote = get_field('zitate'); ?>
<aside id="quote-<?php the_ID(); ?>" <?php post_class('zitate'); ?> role="complementary">
        <?php echo $quote; ?>
</aside>