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
  ['href' => '/some-page', 'title'=>'Some Page'],
  ['href' => '/thank-you', 'title'=>'Thank You Page'],
  ['href' => '/2018/06/happy-birthday', 'title'=>'Birthday Blog Post!!!!'],
  ['href' => '/'.rand(), 'title'=>'404 Page'],
];
