<?php
$form = ['name'=>''];
populate_form($form);

if ($is_post) {
  $_SESSION['form'] = $form;
  header('Location: /thank-you');
  die;
}
ob_start();
?>
<h2>Welcome to the home page!</h2>
<form class="" action="" method="post">
  <p>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= _e($form['name']) ?>">
  </p>
  <p>
    <input type="submit" name="" value="Go!">
  </p>
</form>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php
block('main', ob_get_clean());
include VIEWS.'/shared/layout.php';
