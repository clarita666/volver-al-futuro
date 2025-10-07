<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";

$tipo = $_POST['tipo'] ?? '';
$id1 = $_POST['id1'] ?? '';
$id2 = $_POST['id2'] ?? '';

if($tipo == 'personajes') {
    $p1 = categoria_particular($conn, 'personajes', $id1)[0];
    $p2 = categoria_particular($conn, 'personajes', $id2)[0];
    
    echo "<div class='row mt-3'>
            <div class='col-6'>
                <div class='card' style='background: rgba(127, 132, 135, 0.1); border: 1px solid #FF8F00;'>
                    <div class='card-body text-center'>
                        <img src='../img/pruebaenblanco.png' style='width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 2px solid #FF8F00;'>
                        <h5 style='color: #FF8F00; margin: 1rem 0;'>{$p1['nombre']}</h5>
                        <p style='color: #E0E0E0; font-size: 0.9rem;'>" . substr($p1['descripcion'], 0, 100) . "...</p>
                    </div>
                </div>
            </div>
            <div class='col-6'>
                <div class='card' style='background: rgba(127, 132, 135, 0.1); border: 1px solid #FF8F00;'>
                    <div class='card-body text-center'>
                        <img src='../img/pruebaenblanco.png' style='width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 2px solid #FF8F00;'>
                        <h5 style='color: #FF8F00; margin: 1rem 0;'>{$p2['nombre']}</h5>
                        <p style='color: #E0E0E0; font-size: 0.9rem;'>" . substr($p2['descripcion'], 0, 100) . "...</p>
                    </div>
                </div>
            </div>
          </div>";
          
} elseif($tipo == 'vehiculos') {
    $v1 = categoria_particular($conn, 'vehiculos', $id1)[0];
    $v2 = categoria_particular($conn, 'vehiculos', $id2)[0];
    
    echo "<div class='row mt-3'>
            <div class='col-6'>
                <div class='card' style='background: rgba(127, 132, 135, 0.1); border: 1px solid #FF8F00;'>
                    <div class='card-body text-center'>
                        <img src='../img/pruebaenblanco.png' style='width: 150px; height: 100px; object-fit: cover; border-radius: 10px; border: 2px solid #FF8F00;'>
                        <h5 style='color: #FF8F00; margin: 1rem 0;'>{$v1['nombre']}</h5>
                        <p style='color: #E0E0E0; font-size: 0.9rem;'>" . substr($v1['descripcion'], 0, 100) . "...</p>
                    </div>
                </div>
            </div>
            <div class='col-6'>
                <div class='card' style='background: rgba(127, 132, 135, 0.1); border: 1px solid #FF8F00;'>
                    <div class='card-body text-center'>
                        <img src='../img/pruebaenblanco.png' style='width: 150px; height: 100px; object-fit: cover; border-radius: 10px; border: 2px solid #FF8F00;'>
                        <h5 style='color: #FF8F00; margin: 1rem 0;'>{$v2['nombre']}</h5>
                        <p style='color: #E0E0E0; font-size: 0.9rem;'>" . substr($v2['descripcion'], 0, 100) . "...</p>
                    </div>
                </div>
            </div>
          </div>";
}
?>