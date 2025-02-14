<?php include 'Views/templates/header.php'; ?>

<aside class="sidebar">
            <h2>Secciones</h2>
            <ul>
                <li><a href="<?php echo BASE_URL.'admin/ingresarAsesino';?>">Nuevo Asesino Serial 1</a></li>
                <li><a href="<?php echo BASE_URL.'admin/verAsesinos';?>">Coleccion de Asesinos</a></li>
                <!-- Puedes agregar más secciones aquí -->
            </ul>
        </aside>
    <div class="container">
        <h1>Detalles del Asesino</h1>
        <div class="asesino-detalles">
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($data['asesino']['nombre']); ?></p>
            <p><strong>Alias:</strong> <?php echo htmlspecialchars($data['asesino']['alias']); ?></p>
            <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($data['asesino']['fecha_nacimiento']); ?></p>
            <p><strong>Fecha de Fallecimiento:</strong> <?php echo htmlspecialchars($data['asesino']['fecha_fallecimiento']); ?></p>
            <p><strong>Metodo:</strong> <?php echo htmlspecialchars($data['asesino']['metodo_operacion']); ?></p>
            <p><strong>Descripción:</strong> <?php echo htmlspecialchars($data['asesino']['biografia']); ?></p>
            <p><strong>Víctimas:</strong> <?php echo htmlspecialchars($data['asesino']['numero_victimas']); ?></p>
            <p><strong>Imagen:</strong></p>
            <img src="<?php echo BASE_URL.$data['asesino']['imagen_url']; ?>" alt="Imagen de <?php echo htmlspecialchars($asesino['nombre']); ?>">
        </div>
        <a href="<?php echo BASE_URL.'admin/verAsesinos';?>" class="btn">Volver a la lista</a>
    </div>

    <script>
        const asesinos = <?php echo json_encode($data['asesino']); ?>;
    </script>
<?php include 'Views/templates/footer.php'; ?>