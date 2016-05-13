<?php

use wert2all\electro_api\Framework\Controllers\Error404;
use wert2all\electro_api\Framework\Request;
use wert2all\electro_api\Framework\Route;
use wert2all\electro_api\Specific\Controllers\Api;
use wert2all\electro_api\Specific\Controllers\ThrowError;

require "../vendor/autoload.php";

$requestServerData = new Request\Http\ServerData();
$requestServerData->setRequestUrl($_SERVER['REQUEST_URI'])
    ->setScriptName($_SERVER['SCRIPT_NAME']);

$route = new Route(new Request\HttpRequest($requestServerData), new Error404());

$route->addController(new Api())
    ->setExceptionController(new ThrowError());
$route->run();
