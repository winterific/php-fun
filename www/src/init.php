<?php
$uri = explode('?', $_SERVER['REQUEST_URI']);
$path = $uri[0];
$query = $_SERVER['QUERY_STRING'];
$qs = [];
parse_str($query, $qs);
$blocks = [];
$is_post = $_SERVER['REQUEST_METHOD'] === 'POST';
