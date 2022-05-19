<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('TareasController.php');

$tareasControllers = new TareasController();

if (!empty($_GET['action'])) {
    $accion = $_GET['action'];
} else {
    $accion = 'home';
}

$params = explode('/', $accion);

switch ($params[0]) {
    case 'home':
        $tareasControllers->showTareas();
        break;
    case 'agregar':
        $tareasControllers->registrarTarea();
        break;
    case 'eliminar':
        $id = $params[1];
        $tareasControllers->borrarTarea($id);
        break;
    case 'terminar':
        $id = $params[1];
        $tareasControllers->finalizarTarea($id);
        break;
    default:
        echo ('404 page not found');
        break;
}
