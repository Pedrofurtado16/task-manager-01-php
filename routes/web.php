<?php

use Framework\Router\Router;

$router = new Router();


$router->get('/', 'HomeController@home');

    

return $router;
