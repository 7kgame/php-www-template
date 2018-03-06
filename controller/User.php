<?php

use \QKPHP\Common\Config\Config;

/**
 * @RequestMapping('/user')
 * @SubRequestMapping('/default')
 */
class User extends Base {

  public function __construct() {
    $this->registerObject('weixinService', '\Weixin\Weixin');
  }

  /**
   *  @RequestMapping('{id}')
   *  @method('GET')
   */
  public function get($uid) {
    echo "User.get($uid): \n";
    $this->weixinService::hello();
    var_dump($this->request);
  }

  /**
   *  @RequestMapping('{id}/name')
   *  @method('GET')
   */
  public function getName($uid) {
    echo "User.getName($uid): \n";
    $this->weixinService::hello();
    var_dump($this->router);

    echo "\n";
    var_dump(Config::getConf('weixin'));
  }

  /**
   *  @RequestMapping('{id}')
   *  @method('PUT')
   */
  public function update() {
    echo 'update user';
  }

  /**
   *  @RequestMapping('create')
   *  @method('POST')
   */
  public function create() {
    echo 'create user';
    var_dump($this->request);
  }
}
