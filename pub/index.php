<?php

use wert2all\electro_api\Framework\Controllers\Error404;
use wert2all\electro_api\Framework\Request;
use wert2all\electro_api\Framework\Route;
use wert2all\electro_api\Specific\Controllers\Api;
use wert2all\electro_api\Specific\Controllers\ThrowError;

require "../vendor/autoload.php";

$route = new Route(new Request(), new Error404());

$route->addController(new Api())
    ->setExceptionController(new ThrowError());
$route->run();
