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
  ),
);
