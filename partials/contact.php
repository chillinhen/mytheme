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
            <div class="label">
                <?php echo $label_kontakt ?>
            </div>
            <div class="value">
                <?php echo $value_kontakt ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- availability -->
    <?php if ($value_available) : ?>
        <div class="col-02">
            <div class="label">
                <?php echo $label_available ?>
            </div>
            <div class="value">
                <?php echo $value_available; ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- location -->
    <?php if ($value_ort) : ?>
        <div class="col-03 last">
            <div class="label">
                <?php echo $label_ort ?>
            </div>
            <div class="value">
                <?php echo $value_ort; ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- agb -->
    <?php if ($value_agb) : ?>
        <div class="col-04 full">
            <div class="label">
                <?php echo $label_agb ?>
            </div>
            <div class="value">
                <?php echo $value_agb; ?>
            </div>
        </div>
    <?php endif; ?>
        <!-- copyright -->
    <?php if ($value_copyright) : ?>
        <div class="col-05 full">
            <div class="value">
                <?php echo $value_copyright; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
