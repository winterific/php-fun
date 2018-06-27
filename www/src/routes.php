<?php

if ($path === '/') {
  include PAGES.'/index.php';
  die;
}

$page_path = PAGES . '/' . trim(strtolower($path), '/') . '.php';
if (file_exists($page_path)) {
  include $page_path;
  die;
}

include PAGES.'/404.php';
die;
