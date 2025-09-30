<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";

$tabla = $_GET["categoria"] ? $_GET["categoria"] : FALSE;

$id = $_GET["id"] ? $_GET["id"] : FALSE;

$personajes = categoria_particular($conn, $tabla, $id);



?>


<?php require "partials/header.php"   ?>


<!-- ----------------- MODIFOCAR LARA----------------- -->



<?php require "partials/footer.php"   ?>

