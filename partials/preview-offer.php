<?php
$teaserText = get_field('teaser_text');
$more = __('Mehr', 'myTheme');
$button_text = get_field('button_text');

$image = get_field('teaser_bild');
$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];

// thumbnail
$size = 'teaser-pic';
$thumb = $image['sizes'][$size];
$width = $image['sizes'][$size . '-width'];
$height = $image['sizes'][$size . '-height'];

$bigHeadline = get_field('title');
$smallHeadline = get_field('subtitle');
?>
<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <hgroup>
        <h2><?php _e('Aktuelles', 'myTheme'); ?></h2>
        <h3 style="margin-right:<?php echo $width; ?>px;">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php echo strip_tags($bigHeadline); ?>
                <span class="subtitle"><?php echo $smallHeadline; ?></span>
            </a>
        </h3>
        <?php if ($image) : ?>
            <a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

            </a>
        <?php endif; ?>
    </hgroup>
    <!-- post title -->

    <!-- /post title -->
<!--    <div style="margin-right:<?php #echo $width; ?>px;">-->
        <?php echo $teaserText; ?>
<!--    </div>-->
    <a class="button" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php echo $button_text; ?>
    </a>
    <?php edit_post_link(); ?>

</article>
<!-- /article -->