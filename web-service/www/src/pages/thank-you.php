<?php
ob_start();
$form = [];
if (!empty($_SESSION['form'])) {
  $form = $_SESSION['form'];
  unset($_SESSION['form']);
}
if (!empty($form)): ?>
  <h3>Thank you!</h3>
  <p>Thank you for submitting the form!! You are awesome!!!!</p>
  <pre><?php print_r($form); ?></pre>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php else: ?>
  <h3>Hmm....</h3>
  <p>You didn't actually submit the form. Go ahead and <a href="/">try again!</a></p>
<?php endif;
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
