<?php
use QKPHP\Common\Web\Application;

define("SITE_BASE", __DIR__);
include SITE_BASE . DIRECTORY_SEPARATOR. "bootstrap.php";

$app = new Application(SITE_BASE, array(
  'cors'=>true,
  'hosts'=>'*'
));

$app->start();
