<!-- FOOTER -->
<footer class="footer mt-auto py-3" style="background-color:#001BB7; position: fixed; bottom: 0; left: 0; right: 0; width: 100%; z-index: 9999;">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Links a la izquierda -->
    <div>
      <a href="previews.php?categoria=personajes" class="footer-link">Personajes</a>
      <a href="previews.php?categoria=peliculas" class="footer-link">Películas</a>
      <a href="previews.php?categoria=vehiculos" class="footer-link">Vehículos</a>
      <a href="previews.php?categoria=linea_tiempo" class="footer-link">Línea de Tiempo</a>
      <a href="previews.php?categoria=creditos" class="footer-link">Créditos</a>
    </div>

    <!-- Logo a la derecha -->
    <div class="text-end text-white fw-bold d-flex align-items-center">
      <img src="../img/logo_vaf.png" alt="Volver al Futuro" style="height: 30px; margin-right: 10px;">
      Volver al Futuro
    </div>
  </div>
</footer>

<!-- CSS -->
<style>
  .footer-link {
    color: white;
    margin-right: 15px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-link:hover {
    color: #FF8F00;
  }

  footer {
    border-top: 3px solid #FF8F00;
  }
</style>
