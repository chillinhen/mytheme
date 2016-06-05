<?php 
$anker = get_field('anker'); 
$banner = get_field('hintergrundbild'); 
$bigHeadline = get_field('title');
$smallHeadline = get_field('subtitle');
$anmeldung = get_field('anmeldung');
?>


<article id="<?php echo ($anker) ? $anker : 'post' . the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    
<header class="article-header" role="banner" style="background-image: url('<?php echo ($banner) ? $banner : ''; ?>');">
    <hgroup class="container">
        <?php if (in_category('aktuelles')) : ?>
            <h1 class="category-title"><?php _e('Aktuelles', 'myTheme'); ?></h1>
        <?php endif; ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail blog-image">   
                <?php the_post_thumbnail('thumbnail-blog'); ?>
                <h2 class="page-title" itemprop="headline"> 
                    <?php echo $bigHeadline; ?>
                </h2>
                <h3><?php echo $smallHeadline; ?></h3>
            </div>
        <?php endif; ?>

    </hgroup>
</header><!-- end article header -->

    <section>
        <div class="container">
            <div class="post_content" itemprop="articleBody">
                <h4 class="single-post-title" itemprop="headline"><?php the_title(); ?><br>
                    <span class="date"><?php the_time('J, F, Y'); ?></span>
                </h4>
                <?php the_content(); ?>
                <!--- Infos --->
                <?php
                // check if the repeater field has rows of data
                if (have_rows('informationen')):?>
                <table>
                        <?php
                        // loop through the rows of data
                        while (have_rows('informationen')) : the_row();?>
                    <tr>
                        <td><?php the_sub_field('label');?></td>
                        <td><?php the_sub_field('wert');?></td>   
                    </tr>
                        <?php endwhile; ?>
                </table>
                <?php endif; ?>
                
                <!--- Anmeldung --->
                <?php if($anmeldung) :
                    echo $anmeldung;
                endif;
                ?>
            </div>
            <?php #get_template_part('partials/quote'); ?>
        </div>
       
    </section>
</article>