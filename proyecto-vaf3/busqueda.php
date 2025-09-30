
<?php

require_once "utils/db_connection.php";
require_once "utils/funciones.php";


//operador ternario
$termino_busqueda = $_GET['q'] ? $_GET['q'] : '';

$resultados = [];


//si hay termino de la busqueda, llamamos a la funcion buscar
if ($termino_busqueda) {
    $resultados = buscar($conn, $termino_busqueda);
}


?>



<?php require "partials/header.php"   ?>




<?php require "partials/footer.php"   ?>