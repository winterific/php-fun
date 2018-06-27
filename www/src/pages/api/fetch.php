<?php

$data = [
  'message' => 'Hey, here is some data!',
  'results' => [
    ['name' => 'Sam Winter', 'age' => 36]
  ]
];

header('Content-Type: application/json');
echo json_encode($data);
