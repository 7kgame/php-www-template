<?php

use \QKPHP\Common\Config\Config;

/**
 * @RequestMapping('/user')
 */
class User extends \QKPHP\Common\Web\MVC\Controller {

  /**
   *  @RequestMapping('{id}')
   *  @method('GET')
   */
  public function get($request, $uid) {
    echo "User.get($uid): \n";
    \WeiXin\WeiXin::hello();
    var_dump($request);
  }

  /**
   *  @RequestMapping('{id}/name')
   *  @method('GET')
   */
  public function getName($request, $uid) {
    echo "User.getName($uid): \n";
    \WeiXin\WeiXin::hello();
    var_dump($request);

    echo "\n";
    var_dump(Config::getConf('weixin', 'appid'));
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
