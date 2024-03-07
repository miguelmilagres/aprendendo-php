<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action {
    public function index() {
        // $this->view->dados = array('PHP', 'JAVA', 'Go');
        $conn = Connection::getDb();
        $produto = new Produto($conn);
        
        $produto = $produto->getProdutos();

        $this->view->dados = $produto;

        $this->render('index', 'layout1');
    }
    
    public function sobreNos() {
        // $this->view->dados = array('MySQL', 'Oracle', 'MariaDB');
        $this->render('sobreNos', 'layout2');
    }

    public function contato() {
        // $this->view->dados = array('Miguel', 'Elisa', 'Rodrigo');
        $this->render('contato', 'layout3');
    }
}

?>