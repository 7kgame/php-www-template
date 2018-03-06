<?php
return array (
  'class' => 
  array (
    'User' => 
    array (
      'file' => 'User.php',
      'class' => 'User',
      'annos' => NULL,
    ),
  ),
  'GET' => 
  array (
    'default/{id}' => 
    array (
      'class' => 'User',
      'method' => 'get',
      'paramsSize' => 1,
      'annos' => NULL,
    ),
    'default/{id}/name' => 
    array (
      'class' => 'User',
      'method' => 'getName',
      'paramsSize' => 1,
      'annos' => NULL,
    ),
  ),
  'POST' => 
  array (
    'default/create' => 
    array (
      'class' => 'User',
      'method' => 'create',
      'paramsSize' => 0,
      'annos' => NULL,
    ),
  ),
);
