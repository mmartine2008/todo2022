<?php

require_once('config.php');
class TareasModel{

    private $db;

    function __construct(){

        global $config;

        $user = $config['user'];
        $pass = $config['pass'];
        $dbname = $config['dbname'];
        $host = $config['host'];
        $port = $config['port'];

        $this->db  = new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $pass);
    }


    function getTareas(){
        $sql = 'select * from tarea ORDER BY prioridad DESC';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_NAMED);

        return $tareas;
    }

    function registrar($titulo, $descripcion, $prioridad) {

        $sql = "INSERT INTO tarea (titulo, descripcion, prioridad, finalizada) 
        VALUES (?, ?, ?, 0)";

        $sentencia = $this->db->prepare($sql);
        $sentencia->execute([$titulo, $descripcion, $prioridad]);

    }
}