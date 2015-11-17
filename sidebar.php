<?php $quote = get_field( "shortcode" );?>

<?php if( $quote ) : ?>
	<div class="col-sm-4" role="complementary">
	<?php  the_field( "shortcode" ); ?>
	</div>
<?php endif; ?>






