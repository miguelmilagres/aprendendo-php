<?php

namespace MF\Controller;

abstract class Action {
    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    public function render($view, $layout) {
        $this->view->page = $view;

        if (file_exists("../App/Views/".$layout.".phtml")) {
            require_once "../App/Views/".$layout.".phtml";
        } else {
            $this->content();
        }
    }

    public function content() {
        $classAtual = str_replace('Controller', '', str_replace('App\\Controllers\\', '',get_class($this)));

        require_once "../App/Views/".$classAtual."/".$this->view->page.".phtml";
    }
}

?>