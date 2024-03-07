<?php

namespace App\Controllers;

class IndexController {

    private $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    public function index() {
        $this->view->dados = array('PHP', 'JAVA', 'Go');
        $this->render('index');
    }
    
    public function sobreNos() {
        $this->view->dados = array('MySQL', 'Oracle', 'MariaDB');
        $this->render('sobreNos');
    }

    public function contato() {
        $this->view->dados = array('Miguel', 'Elisa', 'Rodrigo');
        $this->render('contato');
    }

    public function render($view) {
        $classAtual = str_replace('Controller', '', str_replace('App\\Controllers\\', '',get_class($this)));

        require_once "../App/Views/".$classAtual."/".$view.".phtml";
    }
}

?>