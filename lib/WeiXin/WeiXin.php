<?php
namespace WeiXin;

use \QKPHP\Web\Service\Service;

class WeiXin extends Service {

  public function __construct() {
    parent::__construct('\WeiXin\Dao\WeiXin');
  }

  public function hello () {
    $dao = $this->getDao(true);
    $data = $dao->fetchAll("select * from account.user");
    var_dump($data);
  }

}

