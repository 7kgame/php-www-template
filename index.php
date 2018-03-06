<?php
use QKPHP\Web\Application;

define("SITE_BASE", __DIR__);

include SITE_BASE . DIRECTORY_SEPARATOR. "bootstrap.php";
include SITE_BASE . DIRECTORY_SEPARATOR. "controller" . DIRECTORY_SEPARATOR . 'Base.php';

$options = array(
  'cors'=>true,
  'hosts'=>'*'
);

Application::getInstance()->init(SITE_BASE, $options)->start();
