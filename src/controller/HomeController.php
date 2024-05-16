<?php

require_once __DIR__ . '/AppController.php';

/**
 * @var $request
 * @var $response
 */
;

extract($request->query->all(), EXTR_SKIP);;

die(require_once(__DIR__ . "/../view/home.php"));

