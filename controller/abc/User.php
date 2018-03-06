<?php

use \QKPHP\Common\Config\Config;

/**
 * @RequestMapping('/user1')
 */
class User extends Base {

  /**
   *  @RequestMapping('{id}')
   *  @method('GET')
   */
  public function get1($uid) {
    $this->templateValue('uid', $uid);
    $user = array(
      'name' => '张三'
    );
    $this->templateValues($user);
    $this->template('detail.tpl');
    $this->show();
  }

}
