<?php
use wert2all\electro_api\Request;
use wert2all\electro_api\Route;

require "../vendor/autoload.php";

$route = new Route( new  Request() );
$route->run();
