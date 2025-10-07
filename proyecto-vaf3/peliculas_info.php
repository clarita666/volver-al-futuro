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
        
        <?php 
        // Obtener URLs de video según el ID de la película
        $video_id = $pelicula_id + 6; // ID 1->7, ID 2->8, ID 3->9
        $videos_data = categoria_particular($conn, 'peliculas', $video_id);
        $videos = $videos_data[0] ?? null;
        
        // Función para convertir URL de YouTube a embed
        function convertToEmbed($url) {
            if (strpos($url, 'youtube.com/watch?v=') !== false) {
                $video_id = substr($url, strpos($url, 'v=') + 2);
                if (strpos($video_id, '&') !== false) {
                    $video_id = substr($video_id, 0, strpos($video_id, '&'));
                }
                return 'https://www.youtube.com/embed/' . $video_id;
            }
            return $url;
        }
        
        if ($videos && (!empty($videos['url_video1']) || !empty($videos['url_video2']) || !empty($videos['url_video3']))): ?>
        <div class="mt-4">
            <h3 style="color: #FF8F00; margin-bottom: 1rem;">Ver Película Online</h3>
            <div class="row">
                <?php if (!empty($videos['url_video1'])): ?>
                <div class="col-md-4">
                    <iframe width="100%" height="250" src="<?= convertToEmbed($videos['url_video1']) ?>" 
                            title="Ver Película - Opción 1" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($videos['url_video2'])): ?>
                <div class="col-md-4">
                    <iframe width="100%" height="250" src="<?= convertToEmbed($videos['url_video2']) ?>" 
                            title="Ver Película - Opción 2" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($videos['url_video3'])): ?>
                <div class="col-md-4">
                    <iframe width="100%" height="250" src="<?= convertToEmbed($videos['url_video3']) ?>" 
                            title="Ver Película - Opción 3" frameborder="0" allowfullscreen></iframe>
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