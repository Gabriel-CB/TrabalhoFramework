<?php
ini_set('display_errors', '');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;

$request = Request::createFromGlobals();
$response = new Response();
$routes = include __DIR__ . '/app.php';

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

$attributes = $matcher->match($request->getPathInfo());


try {
    extract($matcher->match($request->getPathInfo()), EXTR_SKIP);
    ob_start();
    if (isset($map[$path])) {

        ob_start();
        include sprintf(__DIR__ . '/src/controller/%s.php', $map[$path]);
        $response = new Response(ob_get_clean());
    } else {
        $response = new Response('Not Found', 404);
    }

} catch (Routing\Exception\ResourceNotFoundException $exception) {
    $response = new Response('Not Found', 404);
} catch (Exception $exception) {
    $response = new Response('An error ocurred', 500);
}

$response->send();
