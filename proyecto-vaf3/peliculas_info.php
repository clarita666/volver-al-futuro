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
            <img src="<?= $pelicula['imagen_principal'] ?>" alt="<?= $pelicula['titulo'] ?>" class="pelicula-img">
            <div class="pelicula-info">
                <h2><?= $pelicula['titulo'] ?></h2>
                <div class="info-item"><strong>Año:</strong> <?= $pelicula['año'] ?></div>
                <div class="info-item"><strong>Director:</strong> <?= $pelicula['director'] ?></div>
                <div class="info-item"><strong>Productor:</strong> <?= $pelicula['productor'] ?></div>
                <div class="info-item"><strong>Escritor:</strong> <?= $pelicula['escritor'] ?></div>
                <div class="info-item"><strong>Duración:</strong> <?= $pelicula['duracion'] ?></div>
                <div class="info-item"><strong>Género:</strong> <?= $pelicula['genero'] ?></div>
            </div>
        </div>
        
        <div class="descripcion">
            <?= $pelicula['resumen'] ?>
        </div>
        

        
        <?php if ($pelicula['galeria_imagen1'] || $pelicula['galeria_imagen2'] || $pelicula['galeria_imagen3']): ?>
        <div class="mt-4">
            <h3 style="color: #FF8F00; margin-bottom: 1rem;">Galería de Imágenes</h3>
            <div class="row">
                <?php if ($pelicula['galeria_imagen1']): ?>
                <div class="col-md-4">
                    <img src="<?= $pelicula['galeria_imagen1'] ?>" alt="<?= $pelicula['titulo'] ?> - Imagen 1" class="img-fluid" style="border-radius: 10px;">
                </div>
                <?php endif; ?>
                <?php if ($pelicula['galeria_imagen2']): ?>
                <div class="col-md-4">
                    <img src="<?= $pelicula['galeria_imagen2'] ?>" alt="<?= $pelicula['titulo'] ?> - Imagen 2" class="img-fluid" style="border-radius: 10px;">
                </div>
                <?php endif; ?>
                <?php if ($pelicula['galeria_imagen3']): ?>
                <div class="col-md-4">
                    <img src="<?= $pelicula['galeria_imagen3'] ?>" alt="<?= $pelicula['titulo'] ?> - Imagen 3" class="img-fluid" style="border-radius: 10px;">
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="mt-4 text-center">
            <a href="previews.php?categoria=peliculas" class="btn btn-volver">
                ← Volver a Películas
            </a>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>