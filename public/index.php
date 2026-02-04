<?php
require_once './app/core/Router.php';

use App\Core\Router;

$Router = new Router();

// Register Routes
$Router->add('GET', '/students', 'StudentController','index');
$Router->add('GET', '/students/create', 'StudentController','create');
$Router->add('GET', '/students/{id}', 'StudentController','show');

$Router->run();
?>