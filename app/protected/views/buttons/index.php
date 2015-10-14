<?php
$class_size = array('btn-block', 'btn-lg', 'btn-default', 'btn-sm', 'btn-xs');

$class_color_default = array('btn-default', 'btn-primary', 'btn-success', 'btn-info', 'btn-warning', 'btn-danger', 'btn-link');


$class_color_extra = array();



$class_border = array('btn-rectangule', 'btn-default', 'btn-circle');

$class_transp = array('', 'btn-invisible');
?>

<a class="btn btn-default" href="#" role="button">Link</a>
<button class="btn btn-default" type="submit">Button</button>
<input class="btn btn-default" type="button" value="Input">
<input class="btn btn-default" type="submit" value="Submit">

<hr />

<h3>Colors Default</h3>

<?php foreach ($class_color_default as $i) { ?>

    <a href="#" class="btn <?php echo $i; ?>" ><?php echo $i; ?></a>

<?php } ?>

<hr />

<?php foreach ($class_color_extra as $i) { ?>

    <a href="#" class="btn <?php echo $i; ?>" ><?php echo $i; ?></a>

<?php } ?>

<hr />

<?php foreach ($class_size as $i) { ?>

    <a href="#" class="btn btn-default <?php echo $i; ?>" ><?php echo $i; ?></a>

<?php } ?>

<hr />
<?php foreach ($class_border as $i) { ?>

    <a href="#" class="btn btn-default <?php echo $i; ?>" ><?php echo $i; ?></a>

<?php } ?>


<hr />

<button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button>
<button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>


<hr />

<a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
<a href="#" class="btn btn-default btn-lg active" role="button">Link</a>

<hr />

<a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
<a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>