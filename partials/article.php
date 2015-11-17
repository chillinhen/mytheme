
<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<!--<div class="col-sm-8">-->
	<header>
		<hgroup>
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
		</hgroup>
	</header><!-- end article header -->
	<section class="post_content clearfix" itemprop="articleBody">
	    <?php the_content(); ?>
	    
	    	<!-- Proof ob Konditionen oder nicht -->
	    	<?php
	    	if( get_field('konditionen_eintragen') )
	    	{
	    	    _e('Konditionen','theme_text_domain');
	    	    get_template_part('partials/conditions');
	    	}
	    	?>
	    
	</section> <!-- end article section -->
	
	  <footer>	  
	  <!-- Todo  edit button --></footer> <!-- end article footer -->
</article>