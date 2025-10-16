<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Volver al Futuro</title>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS UNIFICADO -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/fav2.jpg" type="image/x-icon">
</head>
<body>
<header>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background-color:#001BB7;">
  <div class="container-fluid">
    <!-- Logo / Marca -->
    <a class="navbar-brand fw-bold text-light" href="index.php">
      <img src="../img/logo_vaf.png" alt="Volver al Futuro" style="height: 40px; margin-right: 10px;">
      Volver al Futuro
    </a>

    <!-- Botón Hamburguesa -->
    <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light" href="previews.php?categoria=personajes">Personajes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="previews.php?categoria=peliculas">Películas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="previews.php?categoria=vehiculos">Vehículos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="previews.php?categoria=linea_tiempo">Línea de Tiempo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="previews.php?categoria=creditos">Créditos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="extras.php">Extras</a>
        </li>
      </ul>

      <!-- Buscador -->
      <form action="busqueda.php" method="GET" class="d-flex ms-3" role="search">
        <input class="form-control me-2" name="q" type="search" placeholder="Buscar..." aria-label="Search"
               style="background-color:#D8D8D8; border:none; border-radius:10px;">
        <button class="btn" type="submit" style="background-color:#FF8F00; color:white; border-radius:10px;">
          Buscar
        </button>
      </form>
    </div>
  </div>
</nav>

<!-- CSS extra -->
<style>
  .nav-link {
    position: relative;
    transition: color 0.3s ease;
  }

  /* Hover Naranja neón */
  .nav-link:hover {
    color: #FF8F00 !important;
  }

  /* Subrayado animado */
  .nav-link::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    left: 0;
    bottom: 0;
    background-color: #FF8F00;
    transition: width 0.3s ease;
  }

  .nav-link:hover::after {
    width: 100%;
  }

  /* Toggler en blanco */
  .navbar-toggler {
    border: none;
  }
  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }
</style>

