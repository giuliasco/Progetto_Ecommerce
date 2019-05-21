<?php /* C:\Users\giuli\Desktop\TecnologieWeb\ecommerce\vendor\tcg\voyager\src/../resources/views/dimmers.blade.php */ ?>
<?php
$dimmers = Voyager::dimmers();
$count = $dimmers->count();
$classes = [
    'col-xs-12',
    'col-sm-'.($count >= 2 ? '6' : '12'),
    'col-md-'.($count >= 3 ? '4' : ($count >= 2 ? '6' : '12')),
];
$class = implode(' ', $classes);
$prefix = "<div class='{$class}'>";
$surfix = '</div>';
?>
<?php if($dimmers->any()): ?>
<div class="clearfix container-fluid row">
    <?php echo $prefix.$dimmers->setSeparator($surfix.$prefix)->display().$surfix; ?>

</div>
<?php endif; ?>
