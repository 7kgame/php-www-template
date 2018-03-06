<?php
use QKPHP\Web\Application;
define("SITE_BASE", __DIR__);
include SITE_BASE . DIRECTORY_SEPARATOR. "bootstrap.php";

echo '<pre>';

$app = new Application(SITE_BASE, array(
  'config'=>'config',
  'cors'=>true,
  'hosts'=>'*'
));

$app->start();
