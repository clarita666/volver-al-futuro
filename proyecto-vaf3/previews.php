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
                
                <!-- Sidebar de datos curiosos -->
                <div class="col-md-3">
                    <div class="datos-curiosos" style="background: rgba(26, 26, 26, 0.8); border-radius: 15px; padding: 1.5rem; margin-bottom: 2rem;">
                        <h4 style="color: #FF8F00; font-family: 'Orbitron', sans-serif; margin-bottom: 1.5rem;">Datos Curiosos</h4>
                        
                        <?php if ($categoria === 'personajes'): ?>
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">¿Sabías que...?</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Michael J. Fox no era la primera opción para Marty McFly.</p>
                            </div>
                            
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">Dato Curioso</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Doc Brown se inspiró en Albert Einstein y Leopold Stokowski.</p>
                            </div>
                        <?php elseif ($categoria === 'vehiculos'): ?>
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">DeLorean DMC-12</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Fue elegido porque parecía una nave espacial y tenía puertas de gaviota.</p>
                            </div>
                            
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">88 mph</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Esta velocidad se eligió porque se veía bien en el velocímetro digital.</p>
                            </div>
                        <?php elseif ($categoria === 'peliculas'): ?>
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">Trilogía Épica</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">La segunda y tercera película se filmaron consecutivamente.</p>
                            </div>
                            
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">Fecha Icónica</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">21 de octubre de 2015 se volvió una fecha mundialmente famosa.</p>
                            </div>
                        <?php else: ?>
                            <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                                <img src="../img/pruebaenblanco.png" alt="Dato curioso" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin-bottom: 0.5rem;">
                                <h6 style="color: #FF8F00; font-size: 0.9rem;">Viajes en el Tiempo</h6>
                                <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">La saga abarca desde 1885 hasta 2015, un total de 130 años.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php require "partials/footer.php"; ?>