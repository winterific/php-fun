<?php

function _e($text) {
  return htmlspecialchars($text);
}

function body_classes($val=null) {
  global $__body_classes;
  if (!empty($val)) {
    $parts = preg_split('/\s+/', $val);
    foreach ($parts as $value) {
      $__body_classes []= $value;
    }
    return;
  }

  if (empty($__body_classes)) {
    return '';
  }

  ob_start();
  ?>class="<?= _e(implode(' ', $__body_classes)); ?>"<?php
  return ob_get_clean();
}

function block($key, $value=null) {
  global $__blocks;
  if (!empty($key)) {
    if (!empty($value)) {
      $__blocks[$key] = $value;
    }
    else {
      return $__blocks[$key];
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
    $dest[$key] = _e($value);
  }
}
