<?php

require_once('lib/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM tarea WHERE id = ?";

$conexion = getConexion();

$sentencia = $conexion->prepare($sql);
$sentencia->execute([$id]);

header('Location: /loberia/todo/index.php');