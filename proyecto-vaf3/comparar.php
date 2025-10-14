<?php
require_once "utils/db_connection.php";

if ($_POST['tipo'] == 'personajes') {
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    
    $sql = "SELECT * FROM personajes WHERE id_personaje IN ($id1, $id2)";
    $result = $conn->query($sql);
    
    $personajes = [];
    while($row = $result->fetch_assoc()) {
        $personajes[] = $row;
    }
    
    if (count($personajes) == 2) {
        echo "<div class='row mt-3'>";
        foreach($personajes as $p) {
            echo "<div class='col-6'>";
            echo "<div class='card' style='background: rgba(26, 26, 26, 0.9); border: 1px solid #FF8F00;'>";
            if (!empty($p['imagen_principal'])) {
                echo "<img src='{$p['imagen_principal']}' class='card-img-top' style='height: 200px; object-fit: cover;'>";
            }
            echo "<div class='card-body'>";
            echo "<h5 style='color: #FF8F00;'>{$p['nombre']}</h5>";
            $edad = $p['fecha_nacimiento'] ? (date('Y') - date('Y', strtotime($p['fecha_nacimiento']))) . ' años' : 'No disponible';
            echo "<p style='color: #E0E0E0; font-size: 0.9em;'><strong>Edad:</strong> {$edad}</p>";
            echo "<p style='color: #E0E0E0; font-size: 0.9em;'><strong>Ocupación:</strong> {$p['ocupacion']}</p>";
            echo "<p style='color: #E0E0E0; font-size: 0.9em;'><strong>Descripción:</strong> " . substr($p['descripcion'], 0, 100) . "...</p>";
            echo "</div></div></div>";
        }
        echo "</div>";
    }
}

if ($_POST['tipo'] == 'vehiculos') {
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    
    $sql = "SELECT * FROM vehiculos WHERE id_vehiculo IN ($id1, $id2)";
    $result = $conn->query($sql);
    
    $vehiculos = [];
    while($row = $result->fetch_assoc()) {
        $vehiculos[] = $row;
    }
    
    if (count($vehiculos) == 2) {
        echo "<div class='row mt-3'>";
        foreach($vehiculos as $v) {
            echo "<div class='col-6'>";
            echo "<div class='card' style='background: rgba(26, 26, 26, 0.9); border: 1px solid #FF8F00;'>";
            if (!empty($v['imagen_principal'])) {
                echo "<img src='{$v['imagen_principal']}' class='card-img-top' style='height: 200px; object-fit: cover;'>";
            }
            echo "<div class='card-body'>";
            echo "<h5 style='color: #FF8F00;'>{$v['nombre']}</h5>";
            echo "<p style='color: #E0E0E0; font-size: 0.9em;'><strong>Fuente de Energía:</strong> {$v['fuente_energia']}</p>";
            echo "<p style='color: #E0E0E0; font-size: 0.9em;'><strong>Año:</strong> {$v['año']}</p>";
            echo "<p style='color: #E0E0E0; font-size: 0.9em;'><strong>Descripción:</strong> " . substr($v['descripcion'], 0, 100) . "...</p>";
            echo "</div></div></div>";
        }
        echo "</div>";
    }
}
?>