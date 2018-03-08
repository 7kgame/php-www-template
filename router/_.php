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
    '{id}' => 
    array (
      'class' => 'User',
      'method' => 'get',
      'paramsSize' => 1,
      'annos' => NULL,
    ),
    '{id}/name' => 
    array (
      'class' => 'User',
      'method' => 'getName',
      'paramsSize' => 1,
      'annos' => NULL,
    ),
  ),
  'POST' => 
  array (
    'create' => 
    array (
      'class' => 'User',
      'method' => 'create',
      'paramsSize' => 0,
      'annos' => NULL,
    ),
  ),
);
