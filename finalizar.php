<?php

require_once('lib/conexion.php');

$id = $_GET['id'];

$sql = "UPDATE tarea SET finalizada = 1 WHERE id = ?";

$conexion = getConexion();

$sentencia = $conexion->prepare($sql);
$sentencia->execute([$id]);

header('Location: index.php');