<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();
$map = array(
    '/home' => __DIR__ . '/controller/HomeController.php',
    '/login'   => __DIR__.'/controller/LoginController.php',
);
$path = $request->getPathInfo();
if (isset($map[$path])) {
    require $map[$path];
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}
$response->send();
