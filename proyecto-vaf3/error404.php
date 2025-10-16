<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";
?>
<!-- ERROR 404 -->
<section class="container my-5 text-center">            

    <h1 class="mb-4" style="color: #FF8F00;">Error 404 - Página No Encontrada</h1>
    <p style="color: #E0E0E0; font-size: 1.2em;">Lo sentimos, la página que buscas no existe.</p>
    <img src="../img/error404.jpg" alt="">
    <a href="index.php" class="btn btn-warning mt-3">Volver al Inicio</a>

</section>  
     


<?php require "partials/footer.php"; ?>