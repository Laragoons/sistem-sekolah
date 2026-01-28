<?php
require_once './app/core/Router.php';

use App\Core\Router;

$Router = new Router();

// Register Routes
$router->add('GET', '/students', 'StudentController','index');
$router->add('GET', '/students/create', 'StudentController','create');
$router->add('GET', '/students/{id}', 'StudentController','show');

$Router->run();
?>