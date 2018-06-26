<?php
http_response_code(404);
ob_start();
?>
<p>Page not found!</p>
<?php
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
