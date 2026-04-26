<?php

require_once '../app/core/Router.php';
require_once '../app/controllers/HomeController.php';

$router = new Router();

$router->get('/', 'HomeController@index');

$router->dispatch($_SERVER['REQUEST_URI']);