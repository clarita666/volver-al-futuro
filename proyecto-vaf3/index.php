<?php require "partials/header.php"   ?>

<div class="container-fluid p-0">
    <!-- BANNER PRINCIPAL -->
    <img src="../img/a.jpg" class="w-100" alt="Volver al Futuro" style="height: 400px; object-fit: cover;">
</div>

<!-- TEXTO DESCRIPTIVO -->
<section class="container my-5">
  <h2 class="text-center mb-4">Sinopsis de la Trilogía</h2>
  <p class="lead text-center">
    "Volver al Futuro" es una de las sagas más queridas del cine. 
    Acompañamos a Marty McFly y al Dr. Emmett Brown en un viaje a través del tiempo, 
    donde descubrirán el poder de cambiar el pasado, el futuro y enfrentarse a las consecuencias de sus actos.
    A lo largo de tres películas, viajamos al pasado de 1955, al futuro del 2015, 
    y hasta al Viejo Oeste de 1885, con el icónico DeLorean como máquina del tiempo.
  </p>
</section>

<!-- ENLACES CON IMAGENES -->
<section class="container my-5">
  <div class="row text-center mb-4">
    <div class="col-md-4">
      <div class="card" style="background-color: #FF8F00;">
        <a href="previews.php?categoria=personajes">
          <img src="../img/cards-inicio/personajes.jpg" class="card-img-top" alt="Personajes">
        </a>
        <div class="card-body"><h5>Personajes</h5></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="background-color: #FF8F00;">
        <a href="previews.php?categoria=peliculas">
          <img src="../img/cards-inicio/peliculas.jpg" class="card-img-top" alt="Películas">
        </a>
        <div class="card-body"><h5>Películas</h5></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="background-color: #FF8F00;">
        <a href="previews.php?categoria=vehiculos">
          <img src="../img/cards-inicio/vehiculos.webp" class="card-img-top" alt="Vehículos">
        </a>
        <div class="card-body"><h5>Vehículos</h5></div>
      </div>
    </div>
  </div>
  <div class="row text-center justify-content-center">
    <div class="col-md-4">
      <div class="card" style="background-color: #FF8F00;">
        <a href="previews.php?categoria=linea_tiempo">
          <img src="../img/cards-inicio/cronologia.jpg" class="card-img-top" alt="Línea de Tiempo">
        </a>
        <div class="card-body"><h5>Cronología</h5></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="background-color: #FF8F00;">
        <a href="extras.php">
          <img src="../img/cards-inicio/extras.jpg" class="card-img-top" alt="Extras">
        </a>
        <div class="card-body"><h5>Extras</h5></div>
      </div>
    </div>
  </div>
</section>

<!-- TRAILERS -->
<section class="container my-5">
  <h2 class="text-center mb-4">Tráilers Oficiales</h2>
  <div class="row">
    <div class="col-md-4">
      <iframe width="100%" height="250" src="https://www.youtube.com/embed/qvsgGtivCgs" 
              title="Volver al Futuro 1" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-md-4">
      <iframe width="100%" height="250" src="https://www.youtube.com/embed/n9yx0uJ2IbM?si=vkfeyPWXkoOhrbaA" 
              title="Volver al Futuro 2" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-md-4">
      <iframe width="100%" height="250" src="https://www.youtube.com/embed/3C8c3EoEfw4" 
              title="Volver al Futuro 3" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</section>


<?php require "partials/footer.php"   ?>