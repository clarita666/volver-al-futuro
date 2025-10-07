<?php
require_once "utils/db_connection.php";
require_once "utils/funciones.php";
require "partials/header.php";
?>

<div class="container-fluid px-3">
    <h1 class="section-title text-center mb-4">EXTRAS</h1>

    <!-- COMPARADOR -->
    <section class="mb-5">
        <h2 style="color: #FF8F00; text-align: center; margin-bottom: 2rem;">Comparador</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="background: rgba(26, 26, 26, 0.8); border: 2px solid #FF8F00;">
                    <div class="card-header" style="background: rgba(255, 143, 0, 0.1);">
                        <h4 style="color: #FF8F00; margin: 0;">Comparar Personajes</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label style="color: #E0E0E0;">Personaje 1:</label>
                                <select class="form-select mb-3" name="personaje1" style="background: #2d2d2d; color: #E0E0E0; border: 1px solid #FF8F00;">
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    $personajes = listar_todo($conn, 'personajes');
                                    foreach($personajes as $p) {
                                        echo "<option value='{$p['id_personaje']}'>{$p['nombre']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label style="color: #E0E0E0;">Personaje 2:</label>
                                <select class="form-select mb-3" name="personaje2" style="background: #2d2d2d; color: #E0E0E0; border: 1px solid #FF8F00;">
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    foreach($personajes as $p) {
                                        echo "<option value='{$p['id_personaje']}'>{$p['nombre']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-custom w-100" onclick="compararPersonajes()">Comparar</button>
                        <div id="resultadoPersonajes" class="mt-3"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card" style="background: rgba(26, 26, 26, 0.8); border: 2px solid #FF8F00;">
                    <div class="card-header" style="background: rgba(255, 143, 0, 0.1);">
                        <h4 style="color: #FF8F00; margin: 0;">Comparar Vehículos</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label style="color: #E0E0E0;">Vehículo 1:</label>
                                <select class="form-select mb-3" name="vehiculo1" style="background: #2d2d2d; color: #E0E0E0; border: 1px solid #FF8F00;">
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    $vehiculos = listar_todo($conn, 'vehiculos');
                                    foreach($vehiculos as $v) {
                                        echo "<option value='{$v['id_vehiculo']}'>{$v['nombre']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label style="color: #E0E0E0;">Vehículo 2:</label>
                                <select class="form-select mb-3" name="vehiculo2" style="background: #2d2d2d; color: #E0E0E0; border: 1px solid #FF8F00;">
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    foreach($vehiculos as $v) {
                                        echo "<option value='{$v['id_vehiculo']}'>{$v['nombre']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-custom w-100" onclick="compararVehiculos()">Comparar</button>
                        <div id="resultadoVehiculos" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERÍA -->
    <section class="mb-5">
        <h2 style="color: #FF8F00; text-align: center; margin-bottom: 2rem;">Galería de Imágenes</h2>
        <div class="row g-3">
            <div class='col-md-4 col-lg-3'>
                <img src='../img/Pelicula/Back to the Future.jpg' class='img-fluid' style='border-radius: 10px; cursor: pointer; height: 200px; width: 100%; object-fit: cover; border: 2px solid #FF8F00;' onclick='verImagen("../img/Pelicula/Back to the Future.jpg")'>
            </div>
            <div class='col-md-4 col-lg-3'>
                <img src='../img/Pelicula/Back to the Future 2.jpg' class='img-fluid' style='border-radius: 10px; cursor: pointer; height: 200px; width: 100%; object-fit: cover; border: 2px solid #FF8F00;' onclick='verImagen("../img/Pelicula/Back to the Future 2.jpg")'>
            </div>
            <div class='col-md-4 col-lg-3'>
                <img src='../img/Pelicula/Back to the Future 3.jpg' class='img-fluid' style='border-radius: 10px; cursor: pointer; height: 200px; width: 100%; object-fit: cover; border: 2px solid #FF8F00;' onclick='verImagen("../img/Pelicula/Back to the Future 3.jpg")'>
            </div>
            <div class='col-md-4 col-lg-3'>
                <img src='../img/Vehiculos/de LOREAN.jpg' class='img-fluid' style='border-radius: 10px; cursor: pointer; height: 200px; width: 100%; object-fit: cover; border: 2px solid #FF8F00;' onclick='verImagen("../img/Vehiculos/de LOREAN.jpg")'>
            </div>
        </div>
    </section>

    <!-- CÓMICS -->
    <section class="mb-5">
        <h2 style="color: #FF8F00; text-align: center; margin-bottom: 2rem;">Cómics PDF</h2>
        <div class="row g-4">
            <div class='col-md-4'>
                <div class='card' style='background: rgba(26, 26, 26, 0.8); border: 2px solid #FF8F00;'>
                    <div class='card-header' style='background: rgba(255, 143, 0, 0.1);'>
                        <h5 style='color: #FF8F00; margin: 0;'>Back to the Future (2015)</h5>
                    </div>
                    <div class='card-body'>
                        <a href='../img/Comics/Back to the Future (2015)/1.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Número 1</a>
                        <a href='../img/Comics/Back to the Future (2015)/2.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Número 2</a>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='card' style='background: rgba(26, 26, 26, 0.8); border: 2px solid #FF8F00;'>
                    <div class='card-header' style='background: rgba(255, 143, 0, 0.1);'>
                        <h5 style='color: #FF8F00; margin: 0;'>Back to the Future 1991</h5>
                    </div>
                    <div class='card-body'>
                        <a href='../img/Comics/Back to the future 1991/1.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Número 1</a>
                        <a href='../img/Comics/Back to the future 1991/2.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Número 2</a>
                        <a href='../img/Comics/Back to the future 1991/3.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Número 3</a>
                        <a href='../img/Comics/Back to the future 1991/4.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Número 4</a>
                        <a href='../img/Comics/Back to the future 1991/Especial.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Especial</a>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='card' style='background: rgba(26, 26, 26, 0.8); border: 2px solid #FF8F00;'>
                    <div class='card-header' style='background: rgba(255, 143, 0, 0.1);'>
                        <h5 style='color: #FF8F00; margin: 0;'>Biff to the Future</h5>
                    </div>
                    <div class='card-body'>
                        <a href='../img/Comics/Back to the future- Biff to the future/BIFF-DEL-FUTURO-VOLVER-AL-FUTURO 1.pdf' target='_blank' class='btn btn-custom btn-sm mb-2 d-block'>Biff del Futuro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal para ver imágenes -->
<div class="modal fade" id="modalImagen" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: rgba(26, 26, 26, 0.9);">
            <div class="modal-body text-center">
                <img id="imagenModal" src="" class="img-fluid" style="border-radius: 10px;">
            </div>
        </div>
    </div>
</div>

<script>
function compararPersonajes() {
    const p1 = document.querySelector('select[name="personaje1"]').value;
    const p2 = document.querySelector('select[name="personaje2"]').value;
    
    if(!p1 || !p2) {
        alert('Selecciona ambos personajes');
        return;
    }
    
    fetch('comparar.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `tipo=personajes&id1=${p1}&id2=${p2}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('resultadoPersonajes').innerHTML = data;
    });
}

function compararVehiculos() {
    const v1 = document.querySelector('select[name="vehiculo1"]').value;
    const v2 = document.querySelector('select[name="vehiculo2"]').value;
    
    if(!v1 || !v2) {
        alert('Selecciona ambos vehículos');
        return;
    }
    
    fetch('comparar.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `tipo=vehiculos&id1=${v1}&id2=${v2}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('resultadoVehiculos').innerHTML = data;
    });
}

function verImagen(src) {
    document.getElementById('imagenModal').src = src;
    new bootstrap.Modal(document.getElementById('modalImagen')).show();
}
</script>

<?php require "partials/footer.php"; ?>