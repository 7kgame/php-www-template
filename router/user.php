<?php
return array (
  'class' => 
  array (
    'abc/User' => 
    array (
      'file' => 'abc/User.php',
      'class' => 'User',
      'annos' => NULL,
    ),
    'User' => 
    array (
      'file' => 'User.php',
      'class' => 'User',
      'annos' => NULL,
    ),
  ),
  'GET' => 
  array (
    'sub/{id}' => 
    array (
      'class' => 'abc/User',
      'method' => 'get1',
      'paramsSize' => 1,
      'annos' => NULL,
    ),
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
