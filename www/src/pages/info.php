<?php
body_classes('info');
ob_start();
?>
<h2>Info</h2>
<?php print_r($qs); ?>
<?php
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
