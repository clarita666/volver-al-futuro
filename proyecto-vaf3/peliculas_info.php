<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";

$pelicula_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Obtener película de la base de datos
$pelicula_data = categoria_particular($conn, 'peliculas', $pelicula_id);
$pelicula = $pelicula_data[0] ?? null;

if (!$pelicula) {
    header('Location: previews.php?categoria=peliculas');
    exit;
}
?>



<div class="container">
    <h1><?= $pelicula['titulo'] ?></h1>

    <div class="pelicula-detalle">
        <div class="pelicula-header">
            <img src="../img/pruebaenblanco.png" alt="<?= $pelicula['titulo'] ?>" class="pelicula-img">
            <div class="pelicula-info">
                <h2><?= $pelicula['titulo'] ?></h2>
                <div class="info-item"><strong>Director:</strong> <?= $pelicula['director'] ?></div>
                <div class="info-item"><strong>Productor:</strong> <?= $pelicula['productor'] ?></div>
                <div class="info-item"><strong>Escritor:</strong> <?= $pelicula['escritor'] ?></div>
            </div>
        </div>
        
        <div class="descripcion">
            <?= $pelicula['resumen'] ?>
        </div>
        
        <div class="mt-4 text-center">
            <a href="previews.php?categoria=peliculas" class="btn btn-volver">
                ← Volver a Películas
            </a>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>