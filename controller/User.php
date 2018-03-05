<?php

use \QKPHP\Common\Config\Config;
use \QKPHP\Web\MVC\Controller;

/**
 * @RequestMapping('/user')
 */
class User extends Controller {

  public function __construct() {
    $this->registerObject('weixinService', '\Weixin\Weixin');
  }

  /**
   *  @RequestMapping('{id}')
   *  @method('GET')
   */
  public function get($request, $uid) {
    echo "User.get($uid): \n";
    $this->weixinService::hello();
    var_dump($request);
  }

  /**
   *  @RequestMapping('{id}/name')
   *  @method('GET')
   */
  public function getName($request, $uid) {
    echo "User.getName($uid): \n";
    $this->weixinService::hello();
    var_dump($request);

    echo "\n";
    var_dump(Config::getConf('weixin'));
  }

  /**
   *  @RequestMapping('{id}')
   *  @method('PUT')
   */
  public function update($request) {
    echo 'update user';
  }

  /**
   *  @RequestMapping('create')
   *  @method('POST')
   */
  public function create($request) {
    echo 'create user';
    var_dump($request);
  }
}
