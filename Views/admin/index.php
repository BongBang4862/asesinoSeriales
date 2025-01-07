<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tu Nombre">
    <meta name="description" content="Formulario de inicio de sesión para acceder a tu cuenta de forma rápida y segura.">
    <meta name="keywords" content="login, autenticación, inicio de sesión, formulario web">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de sesión</title>
    <style>
      
    </style>
  </head>
  <body>
    <div class="login-container">
      <h2>Bienvenido de nuevo</h2>
      <form action="" id="loginForm">
        <div class="input-group">
          <label for="username" class="input-label">Nombre de usuario</label>
          <input type="text" id="username" name="username" class="input-field" placeholder="Introduce tu nombre de usuario" required>
        </div>
        <div class="input-group">
          <label for="password" class="input-label">Contraseña</label>
          <input type="password" id="password" name="password" class="input-field" placeholder="Introduce tu contraseña" required>
        </div>
        <div class="input-group">
          <button type="submit" class="submit-button">Iniciar sesión</button>
        </div>
        <div class="extra-options">
          <a href="#" class="forgot-password-link">¿Olvidaste tu contraseña?</a>
          <br>
          <a href="register.html" class="register-link">¿No tienes cuenta? Regístrate</a>
        </div>
      </form>
    </div>
    <script>
        const base_url='<?php echo BASE_URL;?>';
    </script>
    <script src="<?php echo BASE_URL.'Assets/js/sweetalert2@11.js';?>"></script>
    <script src="<?php echo BASE_URL.'Assets/js/custom.js';?>"></script>
    <script src="<?php echo BASE_URL.'Assets/js/pages/login.js';?>"></script>
  </body>

</html>
