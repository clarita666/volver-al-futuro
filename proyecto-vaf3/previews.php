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
            <!-- Sección de Desarrolladores -->
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-center mb-4" style="color: #FF8F00; font-family: 'Orbitron', sans-serif;">Equipo de Desarrollo</h2>
                </div>
            </div>
            
            <div class="row g-4 mb-5">
                <!-- Desarrollador 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <div class="avatar-container mb-3">
                                <img src="../img/avatars/cynthia.jpg" alt="Cynthia" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #FF8F00;" onerror="this.src='https://ui-avatars.com/api/?name=Cynthia+de+Mey&background=FF8F00&color=000&size=80'">
                            </div>
                            <h5 style="color: #FF8F00; margin-bottom: 0.5rem;">Cynthia de Mey</h5>
                            <p style="color: #E0E0E0; font-size: 0.9rem;">Desarrolladora Full Stack</p>
                        </div>
                    </div>
                </div>
                
                <!-- Desarrollador 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <div class="avatar-container mb-3">
                                <img src="../img/avatars/angela.jpg" alt="Angela" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #FF8F00;" onerror="this.src='https://ui-avatars.com/api/?name=Angela+Choque&background=FF8F00&color=000&size=80'">
                            </div>
                            <h5 style="color: #FF8F00; margin-bottom: 0.5rem;">Angela Choque</h5>
                            <p style="color: #E0E0E0; font-size: 0.9rem;">Desarrolladora Frontend</p>
                        </div>
                    </div>
                </div>
                
                <!-- Desarrollador 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <div class="avatar-container mb-3">
                                <img src="../img/avatars/miriam.jpg" alt="Miriam" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #FF8F00;" onerror="this.src='https://ui-avatars.com/api/?name=Miriam+Ferreiro&background=FF8F00&color=000&size=80'">
                            </div>
                            <h5 style="color: #FF8F00; margin-bottom: 0.5rem;">Miriam Ferreiro</h5>
                            <p style="color: #E0E0E0; font-size: 0.9rem;">Desarrolladora Backend</p>
                        </div>
                    </div>
                </div>
                
                
                <!-- Desarrollador 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <div class="avatar-container mb-3">
                                <img src="../img/avatars/clara.jpg" alt="Clara" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #FF8F00;" onerror="this.src='https://ui-avatars.com/api/?name=Clara+Iriarte&background=FF8F00&color=000&size=80'">
                            </div>
                            <h5 style="color: #FF8F00; margin-bottom: 0.5rem;">Clara Iriarte</h5>
                            <p style="color: #E0E0E0; font-size: 0.9rem;">Desarrolladora Frontend</p>
                        </div>
                    </div>
                </div>
                
                <!-- Desarrollador 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <div class="avatar-container mb-3">
                                <img src="../img/avatars/lara.jpg" alt="Lara" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #FF8F00;" onerror="this.src='https://ui-avatars.com/api/?name=Lara+Devoto&background=FF8F00&color=000&size=80'">
                            </div>
                            <h5 style="color: #FF8F00; margin-bottom: 0.5rem;">Lara Devoto</h5>
                            <p style="color: #E0E0E0; font-size: 0.9rem;">Desarrolladora Full Stack</p>
                        </div>
                    </div>
                </div>
                
                <!-- Desarrollador 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <div class="avatar-container mb-3">
                                <img src="../img/avatars/miguel.jpg" alt="Miguel" class="rounded-circle" style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #FF8F00;" onerror="this.src='https://ui-avatars.com/api/?name=Miguel+Escobar&background=FF8F00&color=000&size=80'">
                            </div>
                            <h5 style="color: #FF8F00; margin-bottom: 0.5rem;">Miguel Escobar</h5>
                            <p style="color: #E0E0E0; font-size: 0.9rem;">Desarrollador Backend</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sección de Información del Proyecto -->
            <div class="row g-4">
                <!-- Tecnologías -->
                <div class="col-md-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-code fa-3x mb-3" style="color: #FF8F00;"></i>
                            <h3 class="card-title mb-3" style="color: #FF8F00;">Tecnologías Utilizadas</h3>
                            <div class="row text-start">
                                <div class="col-6">
                                    <ul class="list-unstyled" style="color: #E0E0E0;">
                                        <li><i class="fab fa-php" style="color: #FF8F00;"></i> PHP 8.0</li>
                                        <li><i class="fas fa-database" style="color: #FF8F00;"></i> MySQL</li>
                                        <li><i class="fab fa-bootstrap" style="color: #FF8F00;"></i> Bootstrap 5</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled" style="color: #E0E0E0;">
                                        <li><i class="fab fa-html5" style="color: #FF8F00;"></i> HTML5</li>
                                        <li><i class="fab fa-css3-alt" style="color: #FF8F00;"></i> CSS3</li>
                                        <li><i class="fab fa-js-square" style="color: #FF8F00;"></i> JavaScript</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inspiración -->
                <div class="col-md-6">
                    <div class="card h-100" style="background: rgba(26, 26, 26, 0.9); border: 2px solid #FF8F00; border-radius: 15px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-film fa-3x mb-3" style="color: #FF8F00;"></i>
                            <h3 class="card-title mb-3" style="color: #FF8F00;">Inspirado en</h3>
                            <div style="color: #E0E0E0;">
                                <h4 style="color: #FF8F00; margin-bottom: 1rem;">"Volver al Futuro"</h4>
                                <p><strong>Trilogía:</strong> 1985-1990</p>
                                <p><strong>Director:</strong> Robert Zemeckis</p>
                                <p><strong>Guionista:</strong> Bob Gale</p>
                                <p class="mt-3"><em>"El futuro no está escrito. Puede ser cambiado. ¡Tú sabes eso!"</em></p>
                            </div>
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
                    // Layout especial para línea de tiempo - 4 cards por fila, ordenado cronológicamente
                    $eventos = $conn->query("SELECT * FROM linea_tiempo ORDER BY año ASC")->fetch_all(MYSQLI_ASSOC);
                    echo '<div class="linea-tiempo-cronologica">';
                    echo '<div class="row g-3">';
                    foreach ($eventos as $evento):
            ?>
                        <div class="col-md-3">
                            <a href="cronologia_info.php?id=<?= $evento['id_evento'] ?>" class="text-decoration-none">
                                <div class="personaje-card-carrusel">
                                    <div class="personaje-imagen">
                                        <img src="<?= $evento['imagen_principal'] ?>" alt="<?= $evento['año'] ?>">
                                    </div>
                                    <div class="personaje-info" style="padding: 1rem; text-align: center;">
                                        <h3 class="personaje-nombre" style="font-size: 2rem; font-weight: bold; color: #FF8F00;"><?= $evento['año'] ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    echo '</div>';
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
                                <div class="col-md-4 mb-3">
                                    <img src="<?= $item['galeria_imagen1'] ?: '../img/pruebaenblanco.png' ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="<?= $item['galeria_imagen2'] ?: '../img/pruebaenblanco.png' ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <img src="<?= $item['galeria_imagen3'] ?: '../img/pruebaenblanco.png' ?>" alt="<?= $item['titulo'] ?>" class="pelicula-img-simple">
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
                            <img src="../img/Infografia/info1.jpg" alt="Infografía 1" style="width: 100%; height: 300px; object-fit: contain; border-radius: 8px; margin-bottom: 0.5rem; cursor: pointer; border: 2px solid #FF8F00;" data-bs-toggle="modal" data-bs-target="#modalImagenGrande" data-img="../img/Infografia/info1.jpg">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Datos Fascinantes</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Haz clic para ver en tamaño completo</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <img src="../img/Infografia/info2.jpg" alt="Infografía 2" style="width: 100%; height: 300px; object-fit: contain; border-radius: 8px; margin-bottom: 0.5rem; cursor: pointer; border: 2px solid #FF8F00;" data-bs-toggle="modal" data-bs-target="#modalImagenGrande" data-img="../img/Infografia/info2.jpg">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Curiosidades del DeLorean</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Haz clic para ver en tamaño completo</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <img src="../img/Infografia/info3.jpg" alt="Infografía 3" style="width: 100%; height: 300px; object-fit: contain; border-radius: 8px; margin-bottom: 0.5rem; cursor: pointer; border: 2px solid #FF8F00;" data-bs-toggle="modal" data-bs-target="#modalImagenGrande" data-img="../img/Infografia/info3.jpg">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Detalles de la Trilogía</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Haz clic para ver en tamaño completo</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <img src="../img/Infografia/info4.jpeg" alt="Infografía 4" style="width: 100%; height: 300px; object-fit: contain; border-radius: 8px; margin-bottom: 0.5rem; cursor: pointer; border: 2px solid #FF8F00;" data-bs-toggle="modal" data-bs-target="#modalImagenGrande" data-img="../img/Infografia/info4.jpeg">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Datos Especiales</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Haz clic para ver en tamaño completo</p>
                        </div>
                        
                        <div class="dato-card" style="background: rgba(127, 132, 135, 0.1); border-radius: 10px; padding: 1rem; margin-bottom: 1rem;">
                            <img src="../img/Infografia/info5.jpg" alt="Infografía 5" style="width: 100%; height: 300px; object-fit: contain; border-radius: 8px; margin-bottom: 0.5rem; cursor: pointer; border: 2px solid #FF8F00;" data-bs-toggle="modal" data-bs-target="#modalImagenGrande" data-img="../img/Infografia/info5.jpg">
                            <h6 style="color: #FF8F00; font-size: 0.9rem;">Más Curiosidades</h6>
                            <p style="color: #E0E0E0; font-size: 0.8rem; margin: 0;">Haz clic para ver en tamaño completo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<!-- Modal para ver imágenes grandes -->
<div class="modal fade" id="modalImagenGrande" tabindex="-1" aria-labelledby="modalImagenGrandeLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background: rgba(26, 26, 26, 0.95);">
            <div class="modal-header" style="border-bottom: 1px solid #FF8F00;">
                <h5 class="modal-title" id="modalImagenGrandeLabel" style="color: #FF8F00;">Infografía</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
            </div>
            <div class="modal-body text-center">
                <img id="imagenGrande" src="" class="img-fluid" style="max-height: 80vh; border-radius: 10px;" alt="Infografía">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap CSS (actualizado) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle con Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modalImagenGrande');
    const modalImg = modal.querySelector('#imagenGrande');

    // Delegación de eventos para cualquier clic en el documento
    document.body.addEventListener('click', function(event) {
        const target = event.target.closest('[data-bs-toggle="modal"][data-img]');
        if (target) {
            const imgSrc = target.getAttribute('data-img');
            modalImg.src = imgSrc;
        }
    });
});
</script>

<?php require "partials/footer.php"; ?>

