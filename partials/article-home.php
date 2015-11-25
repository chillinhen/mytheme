
<article id="post-<?php the_ID(); ?>" <?php post_class('buttons'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        <?php get_template_part('partials/article', 'header'); ?>
    <div class="container">
	<section class="post_content" itemprop="articleBody">
	    <?php the_content(); ?>
	</section> <!-- end article section -->
	</div>
	  <footer><?php edit_post_link(); ?></footer>
</article>