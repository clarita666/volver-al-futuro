<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";

$termino = $_GET['q'] ?? '';
$resultados = [];

if (!empty($termino)) {
    $resultados = buscar($conn, strtolower($termino));
}
?>



<div class="container">
    <h1>Resultados de Búsqueda</h1>
    
    <?php if (!empty($termino)): ?>
        <p class="text-center mb-4">Buscando: "<strong><?= htmlspecialchars($termino) ?></strong>"</p>
        
        <?php if (empty($resultados)): ?>
            <div class="no-resultados">
                <h3 style="color: #FF8F00;">No se encontraron resultados</h3>
                <p>Intenta con otros términos de búsqueda</p>
                <a href="index.php" class="btn btn-outline-light">Volver al Inicio</a>
            </div>
        <?php else: ?>
            <div class="resultados-container">
                <?php foreach($resultados as $resultado): ?>
                    <?php
                    $tabla = $resultado['tabla'];
                    $nombre = $resultado['nombre'] ?? $resultado['titulo'] ?? $resultado['evento'] ?? 'Sin nombre';
                    
                    // Determinar el link según la tabla
                    $link = '';
                    switch($tabla) {
                        case 'personajes':
                            $link = 'personajes_info.php?id=' . $resultado['id'];
                            break;
                        case 'peliculas':
                            $link = 'peliculas_info.php?id=' . $resultado['id'];
                            break;
                        case 'vehiculos':
                            $link = 'vehiculos_info.php?id=' . $resultado['id'];
                            break;
                        case 'linea_tiempo':
                            $link = 'cronologia_info.php?id=' . $resultado['id'];
                            break;
                        case 'cronologia':
                            $link = 'cronologia_info.php?id=' . $resultado['id'];
                            break;
                    }
                    ?>
                    
                    <a href="<?= $link ?>" class="text-decoration-none text-white">
                        <div class="resultado-item">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h4 style="color: #FF8F00;"><?= htmlspecialchars($nombre) ?></h4>
                                    <?php if (isset($resultado['descripcion'])): ?>
                                        <p><?= substr(htmlspecialchars($resultado['descripcion']), 0, 150) ?>...</p>
                                    <?php endif; ?>
                                </div>
                                <!-- CAMBIAR EN LA BASE DE DATOS EL NOMBRE DE LINEA_TIEMPO, aaaaaaaaaaaaaaaaa  -->
                                <span class="tipo-badge"><?= ucfirst($tabla) ?></span> 
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="no-resultados">
            <h3 style="color: #FF8F00;">Ingresa un término de búsqueda</h3>
            <p>Usa el buscador en la parte superior para encontrar personajes, películas, vehículos o eventos</p>
        </div>
    <?php endif; ?>
</div>

<?php require "partials/footer.php"; ?>