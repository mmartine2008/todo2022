<?php
    require_once 'conexion.php';

    /**
     * Recupera las tareas desde la base de datos
     */
    function getTareas() {
        $conexion = getConexion();

        $sql = 'select * from tarea ORDER BY prioridad DESC';
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_NAMED);

        return $tareas;
    }