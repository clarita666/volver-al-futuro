<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";

$personaje_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Obtener personaje de la base de datos
$personaje_data = categoria_particular($conn, 'personajes', $personaje_id);
$personaje = $personaje_data[0] ?? null;

if (!$personaje) {
    header('Location: previews.php?categoria=personajes');
    exit;
}
?>

<div class="container">
    <h1><?= $personaje['nombre'] ?></h1>

    <div class="personaje-detalle">
        <div class="personaje-header">
            <img src="<?= $personaje['imagen_principal'] ?>" alt="<?= $personaje['nombre'] ?>" class="personaje-img">
            <div class="personaje-info">
                <h2><?= $personaje['nombre'] ?></h2>
                <?php if ($personaje['fecha_nacimiento']): ?>
                    <div class="info-item">
                        <i class="fas fa-calendar-alt"></i>
                        <strong>Fecha de Nacimiento:</strong> <?= date('d/m/Y', strtotime($personaje['fecha_nacimiento'])) ?>
                    </div>
                <?php endif; ?>
                
                <?php 
                // Obtener información de la película relacionada si existe
                if ($personaje['id_pelicula']) {
                    $pelicula_rel = categoria_particular($conn, 'peliculas', $personaje['id_pelicula']);
                    if (!empty($pelicula_rel)) {
                        $pelicula_info = $pelicula_rel[0];
                        echo '<div class="info-item">';
                        echo '<i class="fas fa-film"></i>';
                        echo '<strong>Aparece en:</strong> ' . $pelicula_info['titulo'];
                        echo '</div>';
                    }
                }
                ?>

            </div>
        </div>
        
        <?php if ($personaje['descripcion']): ?>
        <div class="descripcion-section">
            <h4><i class="fas fa-user"></i> Biografía</h4>
            <div class="descripcion">
                <?= nl2br($personaje['descripcion']) ?>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if ($personaje['galeria_imagen1'] || $personaje['galeria_imagen2'] || $personaje['galeria_imagen3']): ?>
        <div class="galeria-section">
            <h4><i class="fas fa-images"></i> Galería de Imágenes</h4>
            <div class="galeria-grid">
                <?php if ($personaje['galeria_imagen1']): ?>
                    <div class="galeria-item">
                        <img src="<?= $personaje['galeria_imagen1'] ?>" alt="<?= $personaje['nombre'] ?> - Imagen 1" class="galeria-img">
                        <div class="galeria-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($personaje['galeria_imagen2']): ?>
                    <div class="galeria-item">
                        <img src="<?= $personaje['galeria_imagen2'] ?>" alt="<?= $personaje['nombre'] ?> - Imagen 2" class="galeria-img">
                        <div class="galeria-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($personaje['galeria_imagen3']): ?>
                    <div class="galeria-item">
                        <img src="<?= $personaje['galeria_imagen3'] ?>" alt="<?= $personaje['nombre'] ?> - Imagen 3" class="galeria-img">
                        <div class="galeria-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Sección de datos curiosos -->
        <div class="datos-section">
            <h4><i class="fas fa-lightbulb"></i> Datos Curiosos</h4>
            <div class="datos-grid">
                <div class="dato-item">
                    <div class="dato-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="dato-content">
                        <h6>Viajes en el Tiempo</h6>
                        <p>Personaje clave en la saga de viajes temporales</p>
                    </div>
                </div>
                
                <div class="dato-item">
                    <div class="dato-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="dato-content">
                        <h6>Importancia</h6>
                        <p>Uno de los personajes principales de la trilogía</p>
                    </div>
                </div>
                
                <?php if ($personaje['fecha_nacimiento']): ?>
                <div class="dato-item">
                    <div class="dato-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <div class="dato-content">
                        <h6>Edad Actual</h6>
                        <p><?= date('Y') - date('Y', strtotime($personaje['fecha_nacimiento'])) ?> años</p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="mt-4 text-center">
            <a href="previews.php?categoria=personajes" class="btn btn-volver">
                ← Volver a Personajes
            </a>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>