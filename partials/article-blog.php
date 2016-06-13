<?php
$anker = get_field('anker');
$banner = get_field('hintergrundbild');
$bigHeadline = get_field('title');
$smallHeadline = get_field('subtitle');
$anmeldung = get_field('anmeldung');
$anmeldeformular = get_field('anmeldeformular');
$registerformular = get_field('register-form');

$addon_text = get_field('addon_text');
#$addon_link = get_field('addon_link');
$file = get_field('addon_link');
$addon_link_text = get_field('addon_link_text');

$image = get_field('teaser_bild');
$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];

// thumbnail
$size = 'addon-pic';
$thumb = $image['sizes'][$size];
$width = $image['sizes'][$size . '-width'];
$height = $image['sizes'][$size . '-height'];
?>


<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


    <header class="article-header" role="banner" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
        <hgroup class="container">
            <h1 class="category-title"><?php _e('Aktuelles', 'myTheme'); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
                <div class="thumbnail blog-image">   
                    <?php the_post_thumbnail('thumbnail-blog'); ?>
                    <h2 class="page-title" itemprop="headline"> 
                        <?php echo $bigHeadline; ?>
                    </h2>
                    <h3 class="page-sub-title"><?php echo $smallHeadline; ?></h3>
                </div>
            <?php endif; ?>

        </hgroup>
    </header><!-- end article header -->

    <section>
        <div class="container">
            <div class="post_content" itemprop="articleBody">
                <?php if (in_category('aktuelles')) : ?>
                    <h4><?php the_title(); ?></h4>
                <?php endif; ?>
                <?php the_content(); ?>
                <!--- Infos --->
                <?php
                // check if the repeater field has rows of data
                if (have_rows('informationen')):
                    ?>
                    <table>
                        <?php
                        // loop through the rows of data
                        while (have_rows('informationen')) : the_row();
                            ?>
                            <tr>
                                <td><?php the_sub_field('label'); ?></td>
                                <td><?php the_sub_field('wert'); ?></td>  
                            </tr>
                        <?php endwhile; ?>
                    </table>
                <?php endif; ?>

                <!--- Anmeldung --->
                <?php if ($anmeldung) : ?>
                    <div class="anmeldung">
                        <div class="intro">
                            <?php echo $anmeldung; ?>
                        </div>
                        <?php echo do_shortcode($anmeldeformular); ?>
                    </div>

                <?php endif; ?>
                <?php if (in_category('aktuelles')) : ?>
                    <footer>
                        <span class="date"><?php _e('veröffentlicht am: ', 'myTheme'); ?><?php the_time('d.m.Y'); ?></span>
                    </footer>
                <?php endif; ?>
            </div>
            <?php if (get_field('download_angebot') || get_field('register_angebot')) : ?>
                <aside class="addons">
                    <div class="bg_addon_pic">
                        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    </div>

                    <?php echo $addon_text; ?>
                    <?php if (get_field('download_angebot')) : if ($file): ?>
                            <a class="addon_link" href="<?php echo $file['url']; ?>" target="_blank" title="<?php echo $file['filename']; ?>"><?php echo $addon_link_text; ?></a>
                        <?php endif; ?>
                <?php endif; ?>
                <?php if (get_field('register_angebot')) : ?>
                    <div class="register">
                        <?php echo do_shortcode($registerformular); ?>
                    </div>
                <?php endif; ?>
            </aside>
            <?php endif; ?>

        </div>

    </section>
</article>