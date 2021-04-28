<?php

require_once __DIR__.'/../vendor/autoload.php';

//use Framework\Router;
use Bramus\Router\Router;

// Create Router instance
$router = new Router();
$router->get('/test', '\App\Controller\UserController@testEvent'); 


// ----------------------------------------------------------


$router->run();
