<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";

$vehiculo_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Obtener vehículo de la base de datos
$vehiculo_data = categoria_particular($conn, 'vehiculos', $vehiculo_id);
$vehiculo = $vehiculo_data[0] ?? null;

if (!$vehiculo) {
    header('Location: previews.php?categoria=vehiculos');
    exit;
}
?>



<div class="container">
    <h1><?= $vehiculo['nombre'] ?></h1>

    <div class="vehiculo-detalle">
        <div class="vehiculo-header">
            <img src="../img/pruebaenblanco.png" alt="<?= $vehiculo['nombre'] ?>" class="vehiculo-img">
            <div class="vehiculo-info">
                <h2><?= $vehiculo['nombre'] ?></h2>
                <div class="info-item"><strong>Año:</strong> <?= $vehiculo['año'] ?></div>
                <div class="info-item"><strong>Fuente de Energía:</strong> <?= $vehiculo['fuente_energia'] ?></div>
                <div class="info-item"><strong>Características:</strong> <?= $vehiculo['caracteristicas'] ?></div>
            </div>
        </div>
        
        <div class="descripcion">
            <?= $vehiculo['descripcion'] ?>
        </div>
        
        <div class="mt-4 text-center">
            <a href="previews.php?categoria=vehiculos" class="btn btn-volver">
                ← Volver a Vehículos
            </a>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>