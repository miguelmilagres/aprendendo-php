<?php

namespace MF\Controller;

abstract class Action {
    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    public function render($view) {
        $classAtual = str_replace('Controller', '', str_replace('App\\Controllers\\', '',get_class($this)));

        require_once "../App/Views/".$classAtual."/".$view.".phtml";
    }
}

?>