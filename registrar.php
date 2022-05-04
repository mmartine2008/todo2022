<?php
    // Array ( [titulo] => todo [descripcion] => hacer el programa todo [prioridad] => 5 )
    require_once('lib/conexion.php');

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $prioridad= $_POST['prioridad'];

    $sql = "INSERT INTO tarea (titulo, descripcion, prioridad, finalizada) 
            VALUES ('$titulo', '$descripcion', $prioridad, 0)";

    $conexion = getConexion();
    $conexion->exec($sql);
?>
<h2>Se insertó correctamente</h2>
<a href="index.php">Volver</a>
