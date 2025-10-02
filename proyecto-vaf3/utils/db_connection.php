<?php

// configuraciones de la BD 
$host = "localhost"; 
$user = "root";
$password = "";
$database = "volver_al_futuro3";

try {
    // Primero conectar sin base de datos para crearla si no existe
    $conn = new mysqli($host, $user, $password);
    
    if ($conn->connect_error) {
        throw new Exception("Error de conexión: " . $conn->connect_error);
    }
    
    // Crear la base de datos si no existe
    $conn->query("CREATE DATABASE IF NOT EXISTS $database");
    
    // Seleccionar la base de datos
    $conn->select_db($database);
    
    // Configurar codificación de caracteres
    $conn->set_charset("utf8mb4");
    
} catch (Exception $e) {
    error_log("Error de conexión con la base de datos: " . $e->getMessage());
    die("Error de conexión, intente más tarde");
}

?>

