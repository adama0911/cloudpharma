<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use \App\Controller;


class HomeController extends Controller {
 public function index(Request $request, Response $response, $args){
        $data = array('titlePage' => 'BBSINVEST');
        $this->_logger->addInfo("Page Principal");
        if(isset($_SESSION['authToken'])){
            unset($_SESSION['authToken']);
            return $this->view->render($response, 'index.php', $data);
        }else{
            return $this->view->render($response, 'index.php', $data);
        }
    }

    public function accueil(Request $request, Response $response, $args){
        $data = array('titlePage' => 'BBSINVEST Accueil', "nbreCallOM" => 6, "nbreCallTC" => 1);
        if(isset($_SESSION['authToken'])){
            $this->_logger->addInfo("Page Accueil");
            return $this->view->render($response, 'accueil.php', $data);
        }else{
            return $response->withRedirect('../');
        }
    }

    public function erreur(Request $request, Response $response, $args){
        unset($_SESSION['authToken']);
        return $response->withRedirect('../');
    }

    public function essaie(Request $request, Response $response, $args){
        header("Access-Control-Allow-Origin: *");
        return $this->view->render($response, 'essaie.php');
    }
 
    
}
