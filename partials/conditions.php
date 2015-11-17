<?php 
	$label_time = get_field( "label-dauer" );
	$time = get_field( "dauer_(minuten)" );
	$label_kosten_01 = get_field( "label-kosten-01" );
	$first_talk = get_field( "kosten-erstgespraech" );
	$label_kosten_02 = get_field( "label-kosten-02" );
	$next_talk = get_field( "kosten-folgegespraech" );
	$notes_costs = get_field( "notes-kosten" );
	$double_2 = get_field('2-double');
	$double_2_costs = get_field('kosten-2-double');
	$double_3 = get_field('3-double');
	$double_3_costs = get_field('kosten-3-double');
	$double_4 = get_field('4-double');
	$double_4_costs = get_field('kosten-4-double');
	$notes_double = get_field('notes-double');
	$location = get_field('adresse');
	$notes = get_field('notes');
?>
<!-- put in array -->
<div class="row">
	<h3><?php _e("Konditionen", "wpbootstrap"); ?></h3>
</div>

<div class="row">

<?php if( $time ) : ?>
	<div class="col-sm-4">
	<?php echo $label_time; ?>
	</div>
	<div class="col-sm-8">
		<?php echo $time; ?>
	</div>
<?php endif; ?>
<hr>
<?php if( $first_talk ) :?>
	<div class="col-sm-4">
	<?php echo $label_kosten_01; ?>
	</div>
	<div class="col-sm-8">
		<?php echo $first_talk; ?>
		<?php if( $notes_costs ) : ?>
			<i><?php echo($notes_costs); ?></i>
		<?php endif; ?><!-- lieber hier Texteditor?-->
	</div>
<?php endif; ?>
<hr>
<?php if( $next_talk ) :?>
	<div class="col-sm-4">
	<?php echo $label_kosten_02; ?>
	</div>
	<div class="col-sm-8">
		<?php echo $next_talk; ?>
		<?php if( $notes_costs ) : ?>
			<i><?php echo($notes_costs); ?></i>
		<?php endif; ?><!-- lieber hier Texteditor?-->
	</div>
<?php endif; ?>
<hr>
<?php if( $double_2 ) :?>
	<div class="col-sm-4">
		<?php echo $double_2; ?>
	</div>
	<div class="col-sm-8">
		<?php echo $double_2_costs; ?>
	</div>
<?php endif; ?>
<hr>
<?php if( $double_3 ) :?>
	<div class="col-sm-4">
		<?php echo $double_3; ?>
	</div>
	<div class="col-sm-8">
		<?php echo $double_3_costs; ?>
	</div>
<?php endif; ?>
<hr>
<?php if( $double_4 ) :?>
	<div class="col-sm-4">
		<?php echo $double_4; ?>
	</div>
	<div class="col-sm-8">
		<?php echo $double_4_costs; ?>
	</div>
<?php endif; ?>
<hr>
<?php if( $notes_double ) :?>
	<div class="col-sm-offset-4 col-sm-8">
		<?php echo $notes_double ?>
	</div>
<?php endif; ?>
<!-- ToDo optimieren for-schleife o.ä. -->
</div>

<div class="row">
	<?php if( $location) :?>
		<div class="col-sm-4">
		<?php _e("Ort", "wpbootstrap"); ?>
		</div>
		<div class="col-sm-8">
			<?php echo $location; ?>
		</div>
	<?php endif; ?>
</div>

<div class="row">
<?php if( $notes) :?>
	<div class="col-sm-12">
		<?php echo $notes; ?>
	</div>
<?php endif; ?>
</div>