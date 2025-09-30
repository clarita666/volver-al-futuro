<?php

// configuraciones de la BD 

$host = "localhost"; 
$user = "root";
$password = "";
$database = "";

 try {
    //crear la conexion 
    $conn = new mysqli($host,$user,$password,$database);
    
    //configurar codificacion de caracteres
$conn->set_charset("utf8mb4");

echo "conexion exitosa";


 } catch (mysqli_sql_exception $e) {
    error_log("Error de conexion con la base de datos");
die("Error de conexion, intente mas tarde");
 }


?>

