<?php require "partials/header.php"   ?>



<!-- CARRUSEL -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner1.jpg" class="d-block w-100" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="Banner 2">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="Banner 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
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
  <div class="row text-center">
    <div class="col-md-3">
      <div class="card">
        <a href="previews.php?categoria=personajes">
          <img src="img/personajes.jpg" class="card-img-top" alt="Personajes">
        </a>
        <div class="card-body"><h5>Personajes</h5></div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <a href="previews.php?categoria=peliculas">
          <img src="img/peliculas.jpg" class="card-img-top" alt="Películas">
        </a>
        <div class="card-body"><h5>Películas</h5></div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <a href="previews.php?categoria=vehiculos">
          <img src="img/vehiculos.jpg" class="card-img-top" alt="Vehículos">
        </a>
        <div class="card-body"><h5>Vehículos</h5></div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <a href="previews.php?categoria=linea_tiempo">
          <img src="img/linea_tiempo.jpg" class="card-img-top" alt="Línea de Tiempo">
        </a>
        <div class="card-body"><h5>Línea de Tiempo</h5></div>
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