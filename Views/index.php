<?php include_once 'Views/templates/header.php'; ?>

  <!-- Main content area -->
  <div class="flex-grow-1 p-3">
    <form action="" id="frmBuscar" class="mb-4">
      <label for="detalle" class="form-label">Buscar Personajes:</label>
      <input type="text" id="detalle" name="detalle" class="form-control">
    </form>

    <div id="quick-search" class="mb-4">
      <h2>Busquedas Rápidas</h2>
      <ul>
        <li><a href="<?php echo BASE_URL.'principal/buscar/ted bundy'; ?>">Ted Bundy</a></li>
        <!-- Agrega más búsquedas rápidas si es necesario -->
      </ul>
    </div>

    <h1>Asesinos Seriales</h1>
    
    <nav id="paginationContainer" class="mt-3"></nav><br>
    <div id="galleryContainer" class="container mt-4"></div>



    <a href="<?php echo BASE_URL; ?>" class="btn btn-primary mt-4">Volver a la página principal</a>
  </div>
</div>

<script>
    let data = <?php echo json_encode($data['asesinos']); ?>;
</script>

<?php include_once 'Views/templates/footer.php'; ?>
