// Suponiendo que 'data' contiene la lista de asesinos
<?php include_once 'Views/templates/header.php'; ?>
<?php include_once 'Views/templates/siderBar.php'; ?>

<div class="login-container">

  Dashboard
  <aside class="sidebar">
    <h2>Secciones</h2>
    <ul>
      <li><a href="<?php echo BASE_URL . 'admin/ingresarAsesino'; ?>">Nuevo Asesino Serial 1</a></li>
      <li><a href="<?php echo BASE_URL . 'admin/verAsesinos'; ?>">Coleccion de Asesinos</a></li>
      <li><a href="<?php echo BASE_URL . 'admin/logout'; ?>">Desconectarse</a></li>

      <!-- Puedes agregar más secciones aquí -->
    </ul>
  </aside>
</div>

<?php include_once 'Views/templates/footer.php'; ?>