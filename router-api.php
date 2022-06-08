<?php
require_once 'lib/Router.php';
require_once 'api/ApiTaskController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('tareas', 'GET', 'ApiTaskController', 'obtenerTareas');
$router->addRoute('tareas', 'POST', 'ApiTaskController', 'crearTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);