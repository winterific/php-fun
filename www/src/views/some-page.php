<?php
ob_start();
?>
<h3>Yessssss!!!!</h3>
<p>Hello! This is a page!</p>
<?php
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
