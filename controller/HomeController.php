<?php

require_once __DIR__.'/AppController.php';

/**
 * @var $response
 */

$response->setContent(include ("./view/home.php"));
$response->send();
