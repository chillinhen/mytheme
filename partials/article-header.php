<?php 
	$banner = get_field('hintergrundbild'); 

?>	
<header style="background: url('<?php echo ($banner) ? $banner : ''; ?>') no-repeat left top;">
	<hgroup>
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('wpbs-featured');
		} 
		?>
		<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
	</hgroup>
</header><!-- end article header -->