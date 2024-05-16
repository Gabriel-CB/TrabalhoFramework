<?php
ini_set('display_errors', '');
error_reporting(E_ALL);
use Composer\Autoload;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();




