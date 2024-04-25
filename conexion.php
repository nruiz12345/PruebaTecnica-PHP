<?php
// Datos de conexión
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'pruebaphp';

// Crear conexión
$conexion = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>