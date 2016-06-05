<?php 
$teaserText = get_field('teaser_text');
$more = __('Mehr','myTheme'); 
$teaserBild = get_field('teaser_bild');
?>
<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post title -->
    <h3>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        <?php if($teaserBild) : ?>
           <img src="<?php echo $teaserBild; ?>" alt="<?php the_title(); ?>" />
        <?php endif;?>
    </h3>
    <!-- /post title -->
    <?php echo $teaserText; ?>
    <?php edit_post_link(); ?>

</article>
<!-- /article -->