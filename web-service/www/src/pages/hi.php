<?php
$lipsum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
ob_start();
?>
<form class="" action="" method="post">
  <fieldset>
    <legend>hey here's some stuff in the form</legend>
    <div class="">
      <label for="text">Enter some text</label>
      <input type="text" name="text" value="">
    </div>
    <input type="submit" name="" value="Submit!">
  </fieldset>
</form>
<?php
for($i=0; $i<20; $i++) {
  echo "<p>$lipsum</p>";
}
block('main', ob_get_clean());
include VIEWS.'/shared/layout-2.php';
