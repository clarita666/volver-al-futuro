<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";


/* capturar lo que viene por url (GET) */
$tabla = $_GET["categoria"] ? $_GET["categoria"] : FALSE;


/*  llamar a la funcion  */
$categorias = listar_todo($conn, $tabla);

?>


<?php require "partials/header.php"   ?>




<?php require "partials/footer.php"   ?>