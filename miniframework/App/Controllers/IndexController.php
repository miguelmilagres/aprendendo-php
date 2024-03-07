<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action {
    public function index() {
        $this->view->dados = array('PHP', 'JAVA', 'Go');
        $this->render('index', 'layout1');
    }
    
    public function sobreNos() {
        $this->view->dados = array('MySQL', 'Oracle', 'MariaDB');
        $this->render('sobreNos', 'layout2');
    }

    public function contato() {
        $this->view->dados = array('Miguel', 'Elisa', 'Rodrigo');
        $this->render('contato', 'layout3');
    }
}

?>