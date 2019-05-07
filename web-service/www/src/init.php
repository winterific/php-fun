<?php
$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
$path = explode('?', $_SERVER['REQUEST_URI'])[0];
$query = $_SERVER['QUERY_STRING'];
$qs = [];
parse_str($query, $qs);
$__blocks = [];
$__body_classes = [];

$nav = [
  ['href' => '/', 'title'=>'Home'],
  ['href' => '/program-finder', 'title'=>'Program Finder'],
  ['href' => '/hi', 'title'=>'Hi!'],
  ['href' => '/thank-you', 'title'=>'Thank You Page'],
  ['href' => '/'.rand(), 'title'=>'404 Page'],
];
