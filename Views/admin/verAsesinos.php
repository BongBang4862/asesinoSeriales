<?php include 'Views/templates/header.php'; ?>

<aside class="sidebar">
    <h2>Secciones</h2>
    <ul>
        <li><a href="<?php echo BASE_URL . 'admin/ingresarAsesino'; ?>">Nuevo Asesino Serial 1</a></li>
        <li><a href="<?php echo BASE_URL . 'admin/verAsesinos'; ?>">Coleccion de Asesinos</a></li>
        <li><a href="<?php echo BASE_URL . 'admin/logout'; ?>">Desconectarse</a></li>
        <!-- Puedes agregar más secciones aquí -->
    </ul>
</aside>
<h1>Coleccion de Asesinos Seriales</h1>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody id="table-body">
        <!-- Las filas se agregarán dinámicamente aquí -->
    </tbody>
</table>


<script>
    const asesinos = <?php echo json_encode($data['asesinos']); ?>;
</script>
<?php include 'Views/templates/footer.php'; ?>