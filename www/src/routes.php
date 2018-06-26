<?php

if ($path === '/') {
  include VIEWS.'/index.php';
  die;
}

$page_path = VIEWS . '/' . trim(strtolower($path), '/') . '.php';
if (file_exists($page_path)) {
  include $page_path;
  die;
}

include VIEWS.'/404.php';
die;
