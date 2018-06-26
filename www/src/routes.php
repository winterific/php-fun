<?php

if ($path === '/') {
  include VIEWS.'/index.php';
  die;
}

include VIEWS.'/404.php';
die;
