<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('HomeController', new Route('/', [
    '_controller' => function ($request) {

        renderController($request);
    },
]));
$routes->add('LoginController', new Route('login', [
    '_controller' => function ($request) {

        renderController($request);
    },
]));

return $routes;
