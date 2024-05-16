<?php

use Symfony\Component\Routing\RouteCollection;
echo 32132;
$routes = new RouteCollection();

$routes->add('/', new Route('/'));
$routes->add('home', new Route('/home/{nome}'));
$routes->add('login', new Route('/login'));

return $routes;