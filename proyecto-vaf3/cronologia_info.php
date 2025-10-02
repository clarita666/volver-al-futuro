<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";

$evento_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Obtener evento de la base de datos
$evento_data = categoria_particular($conn, 'linea_tiempo', $evento_id);
$evento = $evento_data[0] ?? null;

if (!$evento) {
    header('Location: previews.php?categoria=linea_tiempo');
    exit;
}
?>



<div class="container">
    <h1><?= $evento['año'] ?></h1>

    <div class="row">
        <div class="col-md-6">
            <div class="cronologia-imagen">
                <img src="../img/pruebaenblanco.png" alt="<?= $evento['año'] ?>" class="img-fluid cronologia-img">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="cronologia-info">
                <div class="año-principal"><?= $evento['año'] ?></div>
                
                <?php if ($evento['ubicacion']): ?>
                <div class="info-section">
                    <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
                    <p><?= $evento['ubicacion'] ?></p>
                </div>
                <?php endif; ?>
                
                <?php if ($evento['historia']): ?>
                <div class="info-section">
                    <h4><i class="fas fa-book"></i> Historia</h4>
                    <p><?= $evento['historia'] ?></p>
                </div>
                <?php endif; ?>
                
                <?php if ($evento['diferencias']): ?>
                <div class="info-section">
                    <h4><i class="fas fa-exchange-alt"></i> Diferencias</h4>
                    <p><?= $evento['diferencias'] ?></p>
                </div>
                <?php endif; ?>
                
                <?php if ($evento['apariciones']): ?>
                <div class="info-section">
                    <h4><i class="fas fa-film"></i> Apariciones</h4>
                    <p><?= $evento['apariciones'] ?></p>
                </div>
                <?php endif; ?>
                
                <?php if ($evento['fuentes']): ?>
                <div class="info-section">
                    <h4><i class="fas fa-users"></i> Fuentes</h4>
                    <p><?= $evento['fuentes'] ?></p>
                </div>
                <?php endif; ?>
                
                <?php if ($evento['referencias']): ?>
                <div class="info-section">
                    <h4><i class="fas fa-link"></i> Referencias</h4>
                    <p><?= $evento['referencias'] ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12 text-center">
            <a href="previews.php?categoria=linea_tiempo" class="btn btn-volver">
                ← Volver a Línea de Tiempo
            </a>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>