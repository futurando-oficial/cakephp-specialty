<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Specialty',
    ['path' => '/specialty'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);

Router::prefix('painel', ['path' => '/painel'], function ($routes) {
    $routes->plugin('Specialty', function ($routes) {
        $routes->connect('/', ['controller' => 'Specialty', 'action' => 'index']);
        $routes->fallbacks('DashedRoute');
    });
});