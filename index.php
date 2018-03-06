<?php
use QKPHP\Web\Application;

define("SITE_BASE", __DIR__);

include SITE_BASE . DIRECTORY_SEPARATOR. "bootstrap.php";
include SITE_BASE . DIRECTORY_SEPARATOR. "controller" . DIRECTORY_SEPARATOR . 'Base.php';

$app = new Application(SITE_BASE, array(
  'cors'=>true,
  'hosts'=>'*'
));

$app->start();
