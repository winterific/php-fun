<?php
body_classes('error 404');
http_response_code(404);
ob_start();
?>
<h2>Page not found!</h2>
<p>The page you were looking for could not be found. Please try one of these pages:</p>
<?php include VIEWS.'/shared/nav.php'; ?>
<?php
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
