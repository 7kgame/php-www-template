<?php

use \QKPHP\Common\Config\Config;
use \QKPHP\Web\MVC\Controller;

/**
 * @RequestMapping('/user1')
 */
class User extends Controller {

  /**
   *  @RequestMapping('{id}')
   *  @method('GET')
   */
  public function get1($uid) {
    echo "User1.get($uid): \n";
    $this->weixinService::hello();
  }

}
