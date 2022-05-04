<?php
    require_once 'conexion.php';

    /**
     * Recupera las tareas desde la base de datos
     */
    function getTareas() {
        $conexion = getConexion();

        $sql = 'select * from tarea ORDER BY prioridad DESC';
        $resultado = $conexion->query($sql);
        $tareas = $resultado->fetchAll(PDO::FETCH_NAMED);

        return $tareas;
    }