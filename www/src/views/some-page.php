<?php
ob_start();
?>
<h3>Yessssss!!!!</h3>
<p>Hello! This is a page!</p>
<?php for ($i=0; $i<50; $i++): ?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php
endfor;
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
