<?php

require_once('lib/conexion.php');
function borrarTarea($id){

    $sql = "DELETE FROM tarea WHERE id = ?";

    $conexion = getConexion();

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$id]);

header('Location: home');
}
