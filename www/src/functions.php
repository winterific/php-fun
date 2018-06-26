<?php

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

function populate_form(&$form) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
      if (array_key_exists($key, $form)) {
        $form[$key] = $value;
      }
    }
  }
}

function clean(&$src, &$dest) {
  foreach($src as $key => $value) {
    $dest[$key] = _($value);
  }
}
