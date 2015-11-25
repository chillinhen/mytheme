<?php $quote = get_field('quotes'); ?>
<aside id="quote-<?php the_ID(); ?>" <?php post_class('quote'); ?> role="complementary">
    <section>
        <?php echo $quote; ?>
    </section>
    <footer><?php #edit_post_link(); ?></footer>
</aside>