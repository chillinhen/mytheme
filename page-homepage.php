<?php
/*
Template Name: My-Homepage
*/
?>
<?php get_header(); ?>
<?php 
// loop through the sub-pages of your custom post type
$parent = $post->ID;
$childpages = new WP_Query( array(
	'post_type'      	=> 'page', 
	'post_parent'    	=> $parent,
	'posts_per_page' 	=> 100,
	'orderby'        	=> 'menu_order',
	'order' 			=> 'ASC'
)); 
	while ( $childpages->have_posts() ) : $childpages->the_post(); ?>

	<section role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">		
		<header>
			<hgroup>
				<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
			</hgroup>
		</header><!-- end article header -->
			<section class="post_content clearfix" itemprop="articleBody">
				<?php the_content();?>
				<!-- Proof ob Konditionen oder nicht -->
				<?php
				if( get_field('konditionen_eintragen') )
				{
				    _e('Konditionen','theme_text_domain');
				    get_template_part('partials/conditions');
				}
				?>
				<?php $this_subpage=$post->ID; ?>

				<?php 
				//Loop through the sub-pages of the child pages next
				$subpages = new WP_Query( array(
					'post_type' => 'page', 
					'post_parent' => $this_subpage,
					'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' 			=> 'ASC'
				));
				while ( $subpages->have_posts() ) : $subpages->the_post(); ?>
				<?php get_template_part('partials/accordion');?>
				<?php endwhile; wp_reset_query(); ?>

		</section><!--.content -->
		<footer>	  
		<!-- Todo  edit button --></footer>
		</article>
	</section>		
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>


