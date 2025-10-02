<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";

$categoria = $_GET['categoria'] ?? 'personajes';

// Configuración por categoría
$config = [
    'personajes' => [
        'titulo' => 'Personajes',
        'tabla' => 'personajes',
        'info_page' => 'personajes_info.php'
    ],
    'peliculas' => [
        'titulo' => 'Películas de la Trilogía',
        'tabla' => 'peliculas',
        'info_page' => 'peliculas_info.php'
    ],
    'vehiculos' => [
        'titulo' => 'Vehículos y Máquinas del Tiempo',
        'tabla' => 'vehiculos',
        'info_page' => 'vehiculos_info.php'
    ],
    'linea_tiempo' => [
        'titulo' => 'Línea de Tiempo',
        'tabla' => 'linea_tiempo',
        'info_page' => 'cronologia_info.php'
    ],
    'creditos' => [
        'titulo' => 'Créditos',
        'tabla' => null,
        'info_page' => null
    ]
];

$current = $config[$categoria] ?? $config['personajes'];
?>

<div class="container">
    <h1 class="section-title text-center mb-4"><?= strtoupper($current['titulo']) ?></h1>

    <?php if ($categoria === 'creditos'): ?>
        <div class="creditos-content">
            <h3 style="color: #FF8F00;">Desarrollado por:</h3>
            <p>Tu Nombre - Desarrollador Web</p>
            <h3 style="color: #FF8F00;">Tecnologías utilizadas:</h3>
            <ul>
                <li>PHP & MySQL</li>
                <li>Bootstrap 5</li>
                <li>HTML5 & CSS3</li>
            </ul>
            <h3 style="color: #FF8F00;">Inspirado en:</h3>
            <p>La trilogía "Volver al Futuro" (1985-1990)<br>
                Dirigida por Robert Zemeckis</p>
        </div>
    <?php else: ?>
        <div class="container-fluid">
            <?php
            // Obtener datos de la base de datos
            if ($categoria === 'personajes') {
                // Para personajes, agrupar por película
                echo '<div class="personajes-por-pelicula">';
                $peliculas = listar_todo($conn, 'peliculas');
                foreach ($peliculas as $pelicula):
                    // Obtener personajes de esta película
                    $personajes_pelicula = $conn->query("SELECT * FROM personajes WHERE id_pelicula = " . $pelicula['id_pelicula'])->fetch_all(MYSQLI_ASSOC);
                    if (!empty($personajes_pelicula)):
            ?>
                        <div class="pelicula-section">
                            <h2><?= $pelicula['titulo'] ?></h2>
                            <div class="personajes-horizontal">
                                <?php foreach ($personajes_pelicula as $p): ?>
                                    <a href="personajes_info.php?id=<?= $p['id_personaje'] ?>" class="text-decoration-none">
                                        <div class="personaje-card-carrusel">
                                            <div class="personaje-imagen">
                                                <img src="../img/pruebaenblanco.png" alt="<?= $p['nombre'] ?>">
                                            </div>
                                            <div class="personaje-info">
                                                <h6 class="personaje-nombre"><?= $p['nombre'] ?></h6>
                                                <?php if ($p['descripcion']): ?>
                                                    <p class="personaje-descripcion"><?= substr($p['descripcion'], 0, 60) ?>...</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
                echo '</div>';
            } elseif ($categoria === 'vehiculos') {
                // Layout especial para vehículos agrupados por película
                echo '<div class="vehiculos-por-pelicula">';
                $peliculas = listar_todo($conn, 'peliculas');
                foreach ($peliculas as $pelicula):
                    // Obtener vehículos de esta película
                    $vehiculos_pelicula = $conn->query("SELECT * FROM vehiculos WHERE id_pelicula = " . $pelicula['id_pelicula'])->fetch_all(MYSQLI_ASSOC);
                    if (!empty($vehiculos_pelicula)):
            ?>
                        <div class="pelicula-section">
                            <h2><?= $pelicula['titulo'] ?></h2>
                            <div class="personajes-horizontal">
                                <?php foreach ($vehiculos_pelicula as $v): ?>
                                    <a href="vehiculos_info.php?id=<?= $v['id_vehiculo'] ?>" class="text-decoration-none">
                                        <div class="vehiculo-card-carrusel">
                                            <div class="vehiculo-imagen">
                                                <img src="../img/pruebaenblanco.png" alt="<?= $v['nombre'] ?>">
                                            </div>
                                            <div class="vehiculo-info">
                                                <h6 class="vehiculo-nombre"><?= $v['nombre'] ?></h6>
                                                <?php if ($v['descripcion']): ?>
                                                    <p class="vehiculo-descripcion"><?= substr($v['descripcion'], 0, 60) ?>...</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
                echo '</div>';
            } else {
                // Para otras categorías, usar el método normal
                $items = [];
                if ($current['tabla']) {
                    $items = listar_todo($conn, $current['tabla']);
                }

                if ($categoria === 'linea_tiempo') {
                    // Layout especial para línea de tiempo con col-3
                    echo '<div class="row">';
                    foreach($items as $item):
                        $id = $item['id_evento'];
                        $link = $current['info_page'] . "?id=" . $id;
                ?>
                        <div class="col-md-3 mb-4">
                            <a href="<?= $link ?>" class="text-decoration-none">
                                <div class="card timeline-card">
                                    <img src="../img/pruebaenblanco.png" alt="<?= $item['año'] ?>" class="card-img-top">
                                    <div class="card-body text-center">
                                        <h4 class="timeline-year"><?= $item['año'] ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php 
                    endforeach;
                    echo '</div>';
                } elseif ($categoria === 'peliculas') {
                    // Layout simple para películas
                    foreach ($items as $item):
                        $id = $item['id_pelicula'];
                        $link = $current['info_page'] . "?id=" . $id;
                ?>
                        <div class="pelicula-section-simple col-12">
                            <h2><a href="<?= $link ?>" class="pelicula-titulo-link"><?= $item['titulo'] ?></a></h2>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <img src="../img/pruebaenblanco.png" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <img src="../img/pruebaenblanco.png" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <img src="../img/pruebaenblanco.png" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <img src="../img/pruebaenblanco.png" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                }
            } ?>
        </div>
    <?php endif; ?>
</div>

<?php require "partials/footer.php"; ?>