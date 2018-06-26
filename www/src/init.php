<?php
$uri = explode('?', $_SERVER['REQUEST_URI']);
$path = $uri[0];
$query = $_SERVER['QUERY_STRING'];
$qs = [];
parse_str($query, $qs);
$blocks = [];
$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';

$nav = [
  ['href' => '/', 'title'=>'Home'],
  ['href' => '/some-page', 'title'=>'Some Page'],
  ['href' => '/thank-you', 'title'=>'Thank You Page'],
  ['href' => '/2018/06/happy-birthday', 'title'=>'Birthday Blog Post!!!!'],
  ['href' => '/lshjdfkajshf', 'title'=>'404 Page'],
];
