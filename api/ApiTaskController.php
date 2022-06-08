<?php
require_once ('app/TareasModel.php');
require_once ('api/ApiView.php');

class ApiTaskController {
    private $model;
    
    public function __construct() {
        $this->model = new TareasModel();
        $this->view = new ApiView();
    }
    
    function obtenerTareas() {
        $tareas = $this->model->getTareas();

        $this->view->response($tareas, "200");
    }

    function crearTarea() {
        $datos = $_POST;
        $titulo = $datos['titulo'];
        $descripcion = $datos['descripcion'];
        $prioridad = $datos['prioridad'];

        $this->model->registrar($titulo, $descripcion, $prioridad);

        $this->view->response("", "200");
    }
}