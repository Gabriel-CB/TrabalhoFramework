<?php
;
require_once __DIR__ . '/AppController.php';

/**
 * @var $request
 * @var $response
 */

function index($request)
{

    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    extract($request->query->all(), EXTR_SKIP);;

    die(require_once(__DIR__ . "/../view/home.php"));
}


