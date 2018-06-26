<?php
$uri = explode('?', $_SERVER['REQUEST_URI']);
$path = $uri[0];
$query = $_SERVER['QUERY_STRING'];
$qs = [];
parse_str($query, $qs);
$blocks = [];

function _($text) {
  return htmlspecialchars($text);
}

function block($key, $value=null) {
  global $blocks;
  if (!empty($key)) {
    if (!empty($value)) {
      $blocks[$key] = $value;
    }
    else {
      return $blocks[$key];
    }
  }
}

function title($key=null) {
  return 'Hello world';
}
