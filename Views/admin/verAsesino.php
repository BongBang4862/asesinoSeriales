<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Asesino</title>
    <link rel="stylesheet" href="/path/to/your/styles.css">
</head>
<body>
    <div class="container">
        <h1>Detalles del Asesino</h1>
        <div class="asesino-detalles">
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($data['asesino']['nombre']); ?></p>
            <p><strong>Alias:</strong> <?php echo htmlspecialchars($data['asesino']['alias']); ?></p>
            <p><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($data['asesino']['fecha_nacimiento']); ?></p>
            <p><strong>Fecha de Fallecimiento:</strong> <?php echo htmlspecialchars($data['asesino']['fecha_fallecimiento']); ?></p>
            <p><strong>Descripción:</strong> <?php echo htmlspecialchars($data['asesino']['biografia']); ?></p>
            <p><strong>Víctimas:</strong> <?php echo htmlspecialchars($data['asesino']['numero_victimas']); ?></p>
            <p><strong>Imagen:</strong></p>
            <img src="<?php echo BASE_URL.$data['asesino']['imagen_url']; ?>" alt="Imagen de <?php echo htmlspecialchars($asesino['nombre']); ?>">
        </div>
        <a href="<?php echo BASE_URL.'admin/verAsesinos';?>" class="btn">Volver a la lista</a>
    </div>

    <script>
        const base_url='<?php echo BASE_URL;?>';
        const asesinos = <?php echo json_encode($data['asesino']); ?>;
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/verAsesino.js';?>"></script>
</body>
</html>