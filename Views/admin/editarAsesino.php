<?php include 'Views/templates/header.php'; ?>

</head>
<body>
<div class="container">
        <aside class="sidebar">
            <h2>Secciones</h2>
            <ul>
                <li><a href="<?php echo BASE_URL.'admin/ingresarAsesino';?>">Nuevo Asesino Serial 1</a></li>
                <li><a href="<?php echo BASE_URL.'admin/verAsesinos';?>">Coleccion de Asesinos</a></li>
                <!-- Puedes agregar más secciones aquí -->
            </ul>
        </aside>
        <main class="main-content">
        <h2> Editar Asesino Serial</h2>
        <form id="frmUpdateAS" action="">
            <label for="nombre">id:</label>
            <input type="text" hidden id="id" name="id" value="<?php echo htmlspecialchars($data['asesino']['id']); ?>">
            
            <input type="text" hidden id="imagen_url" name="imagen_url" value="<?php echo htmlspecialchars($data['asesino']['imagen_url']); ?>">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($data['asesino']['nombre']); ?>">

            <label for="alias">Alias:</label>
            <input type="text" id="alias" name="alias" value="<?php echo htmlspecialchars($data['asesino']['alias']); ?>">

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $data['asesino']['fecha_nacimiento']; ?>">

            <label for="fecha_fallecimiento">Fecha de Fallecimiento:</label>
            <input type="date" id="fecha_fallecimiento" name="fecha_fallecimiento" value="<?php echo $data['asesino']['fecha_fallecimiento']; ?>">

            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" value="<?php echo $data['asesino']['nacionalidad']; ?>" >

            <label for="numero_victimas">Número de Víctimas:</label>
            <input type="number" id="numero_victimas" name="numero_victimas" value="<?php echo $data['asesino']['numero_victimas']; ?>">

            <label for="metodo_operacion">Método de Operación:</label>
            <input type="text" id="metodo_operacion" name="metodo_operacion" value="<?php echo $data['asesino']['metodo_operacion']; ?>" >

            <label for="biografia">Biografía:</label>
            <textarea id="biografia" name="biografia"  ><?php echo $data['asesino']['biografia']; ?></textarea>
            
            <img src="<?php echo BASE_URL.$data['asesino']['imagen_url']; ?>" alt="Imagen de <?php echo htmlspecialchars($asesino['nombre']); ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" >

            <button type="submit">Guardar Asesino Serial</button>
        </form>
        </main>
    </div>

<?php include 'Views/templates/footer.php'; ?>
