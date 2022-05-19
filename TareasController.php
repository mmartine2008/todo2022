<?php
require_once 'TareasView.php';
require_once 'TareasModel.php';

class TareasController{
    private $view;
    private $model;

    function __construct (){
        $this->view = new TareasView();
        $this->model = new TareasModel();
    }

    function showTareas() {
        $tareas = $this->model->getTareas();
        $this->view->renderTareas($tareas);
    }

    function registrarTarea() {

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $prioridad= $_POST['prioridad'];

        $this->model->registrar($titulo, $descripcion, $prioridad);

        $this->showTareas();
    }


}