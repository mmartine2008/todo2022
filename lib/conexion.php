<?php

    function getConexion() {

        $user = 'root';
        $pass = 'tudai';
        $dbname = 'todo';
        $host = 'mysqldb';
        $port = '3306';

        $conexion = new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $pass);

        return $conexion;
    }
