<?php

use wert2all\electro_api\Controllers\Api;
use wert2all\electro_api\Controllers\ThrowError;
use wert2all\wFrame\Controllers\Error404;
use wert2all\wFrame\Request\Http\ServerData;
use wert2all\wFrame\Request\HttpRequest;
use wert2all\wFrame\Route;

require "../vendor/autoload.php";

$requestServerData = new ServerData();
$requestServerData->setRequestUrl($_SERVER['REQUEST_URI'])
    ->setScriptName($_SERVER['SCRIPT_NAME']);

$route = new Route(new HttpRequest($requestServerData), new Error404());

$route->addController(new Api())
    ->setExceptionController(new ThrowError());
$route->run();
