<?php
require "partials/header.php";

$personaje_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$personajes_ejemplo = [
    1 => [
        'nombre' => 'Marty McFly', 
        'descripcion' => 'Protagonista de la trilogía. Un adolescente de 17 años que viaja en el tiempo con su amigo Doc Brown. Estudiante de secundaria en Hill Valley, California, que accidentalmente viaja al pasado y debe asegurar que sus padres se enamoren para no alterar su propia existencia.',
        'imagen' => 'img/marty.jpg',
        'edad' => '17 años',
        'ocupacion' => 'Estudiante'
    ],
    2 => [
        'nombre' => 'Dr. Emmett Brown', 
        'descripcion' => 'Científico excéntrico e inventor de la máquina del tiempo DeLorean. Genio incomprendido que dedica su vida a la ciencia y los experimentos temporales. Su amistad con Marty McFly cambia el curso de la historia.',
        'imagen' => 'img/doc.jpg',
        'edad' => '65 años',
        'ocupacion' => 'Científico/Inventor'
    ],
    3 => [
        'nombre' => 'Biff Tannen', 
        'descripcion' => 'El antagonista principal de la saga. Matón del instituto que causa problemas en todas las épocas. Su familia ha sido una constante amenaza para los McFly a través de las generaciones.',
        'imagen' => 'img/biff.jpg',
        'edad' => '47 años',
        'ocupacion' => 'Matón/Empresario'
    ]
];

$personaje = $personajes_ejemplo[$personaje_id] ?? $personajes_ejemplo[1];
?>
<style>
body {
    background: linear-gradient(135deg, #001BB7, #0046FF);
    color: #FBFBFB;
    font-family: 'Roboto', sans-serif;
    min-height: 100vh;
}
h1 {
    font-family: 'Orbitron', sans-serif;
    color: #FF8F00;
    text-align: center;
    margin: 2rem 0;
    text-shadow: 0 0 10px rgba(255, 143, 0, 0.5);
}
.personaje-detalle {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 2rem;
    margin: 2rem auto;
    max-width: 800px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 143, 0, 0.3);
}
.personaje-header {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
    align-items: flex-start;
}
.personaje-img {
    width: 200px;
    height: 250px;
    object-fit: cover;
    border-radius: 15px;
    border: 3px solid #FF8F00;
}
.personaje-info h2 {
    color: #FF8F00;
    font-family: 'Orbitron', sans-serif;
    margin-bottom: 1rem;
}
.info-item {
    margin: 0.5rem 0;
    font-size: 1.1rem;
}
.descripcion {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-top: 2rem;
    text-align: justify;
}
.btn-volver {
    background-color: #FF8F00;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 10px;
    font-family: 'Orbitron', sans-serif;
    transition: all 0.3s ease;
}
.btn-volver:hover {
    background-color: #001BB7;
    transform: translateY(-2px);
}
@media (max-width: 768px) {
    .personaje-header {
        flex-direction: column;
        text-align: center;
    }
    .personaje-img {
        width: 100%;
        max-width: 250px;
    }
}
</style>

<div class="container">
    <h1><?= $personaje['nombre'] ?></h1>

    <div class="personaje-detalle">
        <div class="personaje-header">
            <img src="<?= $personaje['imagen'] ?>" alt="<?= $personaje['nombre'] ?>" class="personaje-img">
            <div class="personaje-info">
                <h2><?= $personaje['nombre'] ?></h2>
                <div class="info-item"><strong>Edad:</strong> <?= $personaje['edad'] ?></div>
                <div class="info-item"><strong>Ocupación:</strong> <?= $personaje['ocupacion'] ?></div>
            </div>
        </div>
        
        <div class="descripcion">
            <?= $personaje['descripcion'] ?>
        </div>
        
        <div class="mt-4 text-center">
            <a href="previews.php?categoria=personajes" class="btn btn-volver">
                ← Volver a Personajes
            </a>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>