<?php

use \QKPHP\Web\MVC\Controller;

class Base extends Controller {

  private $templateDir;
  private $layoutDir;

  /**
   * $tpl  template file in view dir
   * $name template var in layout file
   */
  protected function template($tpl, $name='content') {
    if(substr($tpl, 0, 1) == DIRECTORY_SEPARATOR) {
      parent::template($name, $tpl);
    } else {
      if (empty($this->templateDir)) {
        $this->templateDir = SITE_BASE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, explode('/', strtolower($this->router->filePath)));
      }
      parent::template($name, $this->templateDir . DIRECTORY_SEPARATOR . $tpl);
    }
  }

  protected function show($layout='page.tpl') {
    if (empty($this->layoutDir)) {
      $this->layoutDir = SITE_BASE . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'layout';
    }
    parent::show($this->layoutDir . DIRECTORY_SEPARATOR . $layout);
  }
}
