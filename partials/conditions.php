<?php
$label_time = get_field("label-dauer");
$time = get_field("dauer_(minuten)");
$label_kosten_01 = get_field("label-kosten-01");
$first_talk = get_field("kosten-erstgespraech");
$label_kosten_02 = get_field("label-kosten-02");
$next_talk = get_field("kosten-folgegespraech");
$notes_costs = get_field("notes-kosten");
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
<header id="heading-<?php the_ID(); ?>">

    <h3 role="button" data-toggle="collapse" href="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>"><?php _e("Konditionen", "wpbootstrap"); ?></h3>
</header>
<div class="collapse" id="collapse-<?php the_ID(); ?>">
    <div class="row">

        <?php if ($time) : ?>
            <div class="label">
                <?php echo $label_time; ?>
            </div>
            <div class="value">
                <?php echo $time; ?>
            </div>
        <?php endif; ?>

        <?php if ($first_talk) : ?>
            <div class="label">
                <?php echo $label_kosten_01; ?>
            </div>
            <div class="value">
                <?php echo $first_talk; ?>
                <?php if ($notes_costs) : ?>
                    <i><?php echo($notes_costs); ?></i>
                <?php endif; ?><!-- lieber hier Texteditor?-->
            </div>
        <?php endif; ?>

        <?php if ($next_talk) : ?>
            <div class="label">
                <?php echo $label_kosten_02; ?>
            </div>
            <div class="value">
                <?php echo $next_talk; ?>
                <?php if ($notes_costs) : ?>
                    <i><?php echo($notes_costs); ?></i>
                <?php endif; ?><!-- lieber hier Texteditor?-->
            </div>
        <?php endif; ?>

        <?php if ($double_2) : ?>
            <div class="label">
                <?php echo $double_2; ?>
            </div>
            <div class="value">
                <?php echo $double_2_costs; ?>
            </div>
        <?php endif; ?>

        <?php if ($double_3) : ?>
            <div class="label">
                <?php echo $double_3; ?>
            </div>
            <div class="value">
                <?php echo $double_3_costs; ?>
            </div>
        <?php endif; ?>

        <?php if ($double_4) : ?>
            <div class="label">
                <?php echo $double_4; ?>
            </div>
            <div class="value">
                <?php echo $double_4_costs; ?>
            </div>
        <?php endif; ?>

        <?php if ($notes_double) : ?>
            <div class="col-sm-offset-4 value">
                <?php echo $notes_double ?>
            </div>
        <?php endif; ?>
        <!-- ToDo optimieren for-schleife o.ä. -->
    </div>

    <div class="row">
        <?php if ($location) : ?>
            <div class="label">
                <?php _e("Ort", "wpbootstrap"); ?>
            </div>
            <div class="value">
                <?php echo $location; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="row">
        <?php if ($notes) : ?>
            <div class="col-sm-12">
                <?php echo $notes; ?>
            </div>
        <?php endif; ?>
    </div>
</div>