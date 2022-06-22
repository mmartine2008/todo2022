<?php
require_once ('app/TareasModel.php');
require_once ('api/ApiView.php');

class ApiTaskController {
    private $model;
    private $data; 

    public function __construct() {
        $this->model = new TareasModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input"); 
    }

    private function auth() {
        $user = $_SERVER['PHP_AUTH_USER'];
        $pass = $_SERVER['PHP_AUTH_PW'];

        return (($user == 'prueba@gmail.com') && 
             ($pass == '12345'));
    }
    
    function obtenerTareas() {

        if ($this->auth()) {
            $tareas = $this->model->getTareas();
            $this->view->response($tareas, "200");
        } else 
        {
            $this->view->response([], "403");
        }

    }

    function crearTarea() {
        $datos = $this->getData();
        $titulo = $datos->titulo;
        $descripcion = $datos->descripcion;
        $prioridad = $datos->prioridad;

        $this->model->registrar($titulo, $descripcion, $prioridad);

        $this->view->response("agregado satisfactoriamente", "200");
    }

    function getData(){ 
        return json_decode($this->data); 
    }  
}