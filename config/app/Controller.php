<?php

namespace App;


use Slim\Container;


class Controller {

  protected $_logger;
  protected $view;

  public function __construct(Container $c) {
      $this->view = $c->get('view');
      $this->_logger = $c->get('logger');
      $this->view->addAttribute("baseUrl", $c->request->getUri()->getBasePath());
  }

  public function e404($message){
    header('HTTP/1.0 404 Not Found');
    $this->set('message',$message);
    $this->render('/errors/404');
    die();
  }
  
}
