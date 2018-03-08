<?php

namespace Weixin\Dao;

use \QKPHP\Web\Dao\GeneralDao;
use \QKPHP\Common\Config\Config;

class WeiXin extends GeneralDao {

  public function __construct($isMaster=false) {
    $mysqlConf = Config::getDBConf('account', 'master');
    parent::__construct($isMaster, $mysqlConf);
    var_dump($mysqlConf);
  }

  protected function getDbNameAndTblName() {
    return array('account', 'user');
  }

  protected function getPrimaryKey () {
    return 'id';
  }


}
