<?php
define('IS_DEBUG', true);
ini_set('display_errors', IS_DEBUG);
error_reporting(E_ALL | E_STRICT);

include SITE_BASE . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

\QKPHP\Common\Loader::setIncludePath(array(
  SITE_BASE. DIRECTORY_SEPARATOR . "lib"
));

\QKPHP\Common\Loader::load();
