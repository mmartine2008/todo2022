<?php

class TareasModel{

    private $db;

    function __construct(){

        $user = 'root';
        $pass = '';
        $dbname = 'todo';
        $host = 'localhost';
        $port = '3306';

        $this->db  = new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $pass);
    }


    function getTareas(){
        $sql = 'select * from tarea ORDER BY prioridad DESC';
        $sentencia = $this->db->prepare($sql);
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_NAMED);

        return $tareas;
    }
}