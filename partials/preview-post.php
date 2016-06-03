<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post title -->
    <h3>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h3>
    <!-- /post title -->
    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
    <?php edit_post_link(); ?>

</article>
<!-- /article -->