<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $routes){
        $routes->get('/', ['controller' => 'Home', 'action' => 'index']);
        $routes->get('/testes', ['controller' => 'Testes', 'action' => 'index']);
    });
};
