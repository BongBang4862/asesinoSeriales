<?php include 'Views/templates/header.php'; ?>

<div class="container">
    <aside class="sidebar">
        <h2>Secciones</h2>
        <ul>
            <li><a href="<?php echo BASE_URL . 'admin/ingresarAsesino'; ?>">Nuevo Asesino Serial 1</a></li>
            <li><a href="<?php echo BASE_URL . 'admin/verAsesinos'; ?>">Coleccion de Asesinos</a></li>
            <li><a href="<?php echo BASE_URL . 'admin/logout'; ?>">Desconectarse</a></li>

            <!-- Puedes agregar más secciones aquí -->
        </ul>
    </aside>
    <main class="main-content container py-4">
        <h2 class="mb-4">Agregar Nuevo Asesino Serial</h2>
        <form id="frmNuevoAS" action="" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: John Doe" required>
            </div>

            <div class="mb-3">
                <label for="alias" class="form-label">Alias</label>
                <input type="text" class="form-control" id="alias" name="alias" placeholder="Ej: El Destripador" required>
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            <div class="mb-3">
                <label for="fecha_fallecimiento" class="form-label">Fecha de Fallecimiento</label>
                <input type="date" class="form-control" id="fecha_fallecimiento" name="fecha_fallecimiento">
            </div>

            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ej: Estadounidense" required>
            </div>

            <div class="mb-3">
                <label for="numero_victimas" class="form-label">Número de Víctimas</label>
                <input type="number" class="form-control" id="numero_victimas" name="numero_victimas" min="0" placeholder="Ej: 10" required>
            </div>

            <div class="mb-3">
                <label for="metodo_operacion" class="form-label">Método de Operación</label>
                <textarea class="form-control" id="metodo_operacion" name="metodo_operacion" rows="3" placeholder="Describe el método..." required></textarea>
            </div>

            <div class="mb-3">
                <label for="biografia" class="form-label">Biografía</label>
                <textarea class="form-control" id="biografia" name="biografia" rows="5" placeholder="Describe la biografía..." required></textarea>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Agregar Asesino Serial</button>
        </form>
    </main>

</div>

<?php include_once 'Views/templates/footer.php'; ?>