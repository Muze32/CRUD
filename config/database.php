<?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $database = 'materiasdb';
    $conexion = new mysqli($host, $user, $password, $database);

    if($conexion->connect_error) {
        die("Error de conexion: " . $conexion->connect_error);
    }
    $conexion->set_charset("utf8mb4");
?>