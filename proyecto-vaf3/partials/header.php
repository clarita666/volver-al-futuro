<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Star Wars</title>
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- cUSTOM CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/fav2.jpg" type="image/x-icon">
</head>
<body>
<header>
<!-- navegacion -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Biblioteca desconocido</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="previews.php?categoria=personajes">desconocido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="previews.php?categoria=naves">desconocido</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="previews.php?categoria=s???????">desconocido</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="previews.php?categoria=????????">desconocido</a>
        </li>
      
      </ul>


      <form action="busqueda.php" method="GET" class="d-flex" role="search">
        <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
