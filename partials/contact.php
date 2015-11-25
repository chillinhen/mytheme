<?php
$label_kontakt = get_field("label-kontakt");
$value_kontakt = get_field("text-kontakt");
$label_available = get_field("label-available");
$value_available = get_field("text-available");
$label_ort = get_field("label-ort");
$value_ort = get_field("text-ort");
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
</div>
