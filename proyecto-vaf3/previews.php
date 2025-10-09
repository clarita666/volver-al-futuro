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

<div class="container-fluid px-3">
    <h1 class="section-title text-center mb-4"><?= strtoupper($current['titulo']) ?></h1>

    <?php if ($categoria === 'creditos'): ?>
        <div class="container my-5">
            <div class="row justify-content-center g-4">
                <!-- Desarrolladores -->
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-3 h-100" style="background: #2d2d2d; color: #fff;">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3" style="color: #b8860b;">Desarrollado por</h3>
                            <p class="mb-1">Cynthia de Mey</p>
                            <p class="mb-1">Angela Choque</p>
                            <p class="mb-1">Miriam Ferreiro</p>
                            <p class="mb-1">Silvia</p>
                            <p class="mb-1">Clara Iriarte</p>
                            <p class="mb-1">Lara Devoto</p>
                            <p class="mb-1">Miguel Escobar</p>
                        </div>
                    </div>
                </div>

                <!-- Tecnologías -->
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-3 h-100" style="background: #3a3a3a; color: #fff;">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3" style="color: #b8860b;">Tecnologías utilizadas</h3>
                            <ul class="list-unstyled">
                                <li>PHP & MySQL</li>
                                <li>Bootstrap 5</li>
                                <li>HTML5 & CSS3</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Inspiración -->
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded-3 h-100" style="background: #1a1a2e; color: #fff;">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3" style="color: #b8860b;">Inspirado en</h3>
                            <p>
                                La trilogía <strong>"Volver al Futuro"</strong> (1985-1990) <br>
                                Dirigida por <em>Robert Zemeckis</em>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Contenido principal -->
                <div class="col-md-9">
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
                            <div class="row g-3">
                                <?php foreach ($personajes_pelicula as $p): ?>
                                <div class="col-md-4">
                                    <a href="personajes_info.php?id=<?= $p['id_personaje'] ?>" class="text-decoration-none">
                                        <div class="personaje-card-carrusel">
                                            <div class="personaje-imagen">
                                                <img src="<?= $p['imagen_principal'] ?>" alt="<?= $p['nombre'] ?>">
                                            </div>
                                            <div class="personaje-info" style="padding: 1rem; text-align: center;">
                                                <h6 class="personaje-nombre"><?= $p['nombre'] ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
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
                            <div class="row g-3">
                                <?php foreach ($vehiculos_pelicula as $v): ?>
                                <div class="col-md-4">
                                    <a href="vehiculos_info.php?id=<?= $v['id_vehiculo'] ?>" class="text-decoration-none">
                                        <div class="vehiculo-card-carrusel">
                                            <div class="vehiculo-imagen">
                                                <img src="<?= $v['imagen_principal'] ?>" alt="<?= $v['nombre'] ?>">
                                            </div>
                                            <div class="vehiculo-info" style="padding: 1rem; text-align: center;">
                                                <h6 class="vehiculo-nombre"><?= $v['nombre'] ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
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
                                    <img src="<?= $item['imagen_principal'] ?>" alt="<?= $item['año'] ?>" class="card-img-top">
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
                                    <img src="<?= $item['imagen_principal'] ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $item['imagen_principal'] ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $item['imagen_principal'] ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $item['imagen_principal'] ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                }
            } ?>
                </div>
                
                <!-- Sidebar de datos curiosos -->
                <div class="col-md-3">
                    <div class="datos-curiosos" style="background: rgba(26, 26, 26, 0.8); border-radius: 15px; padding: 1.5rem; margin-bottom: 2rem;">
                        <h4 style="color: #FF8F00; font-family: 'Orbitron', sans-serif; margin-bottom: 1.5rem;">Datos Curiosos</h4>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <img src="../img/Infografia/Infografías y un video sobre Volver al Futuro para tus favoritos.jpg" alt="Infografía completa" style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Infografía Completa</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Descubre todos los datos fascinantes y curiosidades sobre la trilogía de Volver al Futuro.</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">DeLorean DMC-12</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">El DeLorean fue elegido como máquina del tiempo porque parecía una nave espacial y tenía puertas de gaviota únicas. Solo se fabricaron 9,000 unidades de este auto exótico que se convirtió en un ícono del cine.</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <img src="../img/Infografia/Volver_.jpg" alt="Datos especiales" style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Datos Especiales</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Información detallada sobre los elementos más importantes de la saga.</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">88 mph - La Velocidad Mágica</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Esta velocidad se eligió porque se veía bien en el velocímetro digital del DeLorean y sonaba futurista. En el guion original era 65 mph, pero se cambió porque no era lo suficientemente espectacular para el cine.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>



<?php require "partials/footer.php"; ?>

