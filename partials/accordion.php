<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<header id="heading-<?php the_ID();?>">
		<hgroup>
			<h2 class="panel-title" role="tab" itemprop="headline">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php the_ID();?>" aria-expanded="false" aria-controls="collapse-<?php the_ID();?>">
					<?php the_title(); ?>
				</a>
			</h2>
		</hgroup>
	</header><!-- end article header -->
	<section id="collapse-<?php the_ID();?>" class="panel_content panel-collapse collapse" role="tabpanel" itemprop="articleBody" aria-labelledby="heading-<?php the_ID();?>">
	    <?php the_content(); ?>
	    <?php get_template_part('partials/conditions');?>
	</section> <!-- end article section -->
	  <footer><!-- Todo edit button --></footer> <!-- end article footer -->
</article>

           
        
