<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{
    protected function initRoutes() {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );

        $routes['contato'] = array(
            'route' => '/contato',
            'controller' => 'IndexController',
            'action' => 'contato'
        );

        $this->setRoutes($routes);
    }
}

?>