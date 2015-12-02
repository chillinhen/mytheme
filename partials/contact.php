<?php
$label_kontakt = get_field("label-kontakt");
$value_kontakt = get_field("text-kontakt");
$label_available = get_field("label-available");
$value_available = get_field("text-available");
$label_ort = get_field("label-ort");
$value_ort = get_field("text-ort");

$label_agb = get_field("label-agb");
$value_agb = get_field("text-agb");

$value_copyright = get_field("text-copyright");
?>
<!-- ToDo:put in array -->

<div class="row">
    <!-- contact data -->
    <?php if ($value_kontakt) : ?>
        <div class="col-01 first">
            <?php if ($label_kontakt) : ?>
            <div class="label">
                <?php echo $label_kontakt ?>
            </div>
            <?php endif; ?>
            <div class="value">
                <?php echo $value_kontakt ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- availability -->
    <?php if ($value_available) : ?>
        <div class="col-02">
            <?php if ($label_available) : ?>
            <div class="label">
                <?php echo $label_available ?>
            </div>
            <?php endif; ?>
            <div class="value">
                <?php echo $value_available; ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- location -->
    <?php if ($value_ort) : ?>
        <div class="col-03 last">
            <?php if ($label_ort) : ?>
            <div class="label">
                <?php echo $label_ort ?>
            </div>
            <?php endif; ?>
            <div class="value">
                <?php echo $value_ort; ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- agb -->
    <?php if ($value_agb) : ?>
        <div class="col-04 full">
            <?php if ($label_agb) : ?>
            <div class="label">
                <?php echo $label_agb ?>
            </div>
            <?php endif; ?>
            <div class="value">
                <?php echo $value_agb; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
