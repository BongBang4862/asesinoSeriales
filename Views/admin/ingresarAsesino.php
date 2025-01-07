<?php include 'Views/template/header.php'; ?>

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
        <h2>Agregar Nuevo Asesino Serial</h2>
        <form id="frmNuevoAS" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" >

            <label for="alias">Alias:</label>
            <input type="text" id="alias" name="alias">

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">

            <label for="fecha_fallecimiento">Fecha de Fallecimiento:</label>
            <input type="date" id="fecha_fallecimiento" name="fecha_fallecimiento">

            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" >

            <label for="numero_victimas">Número de Víctimas:</label>
            <input type="number" id="numero_victimas" name="numero_victimas" >

            <label for="metodo_operacion">Método de Operación:</label>
            <textarea id="metodo_operacion" name="metodo_operacion" ></textarea>

            <label for="biografia">Biografía:</label>
            <textarea id="biografia" name="biografia" ></textarea>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" >
d
            <button type="submit">Agregar Asesino Serial</button>
        </form>
        </main>
    </div>



    <script>
        const base_url='<?php echo BASE_URL;?>';
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/dashboard.js';?>"></script>
</body>
</html>