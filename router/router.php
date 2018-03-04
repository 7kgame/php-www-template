<?php
return array(
  'user' => array(
    '_class' => 'User',
    '_file' => 'User.php',
    '_annos' => array(),
    'GET' => array(
      '{id}' => array(
        'method' => 'get',
        'paramsSize' => 2
      ),
      '{id}/name' => array(
        'method' => 'getName',
        'paramsSize' => 2
      )
    ),
    'POST' => array(
      'create' => array(
        'method' => 'create',
        'paramsSize' => 1
      )
    )
  )
);
