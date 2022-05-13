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

}