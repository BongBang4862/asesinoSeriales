<?php include_once 'Views/templates/header.php'; ?>

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

<?php include_once 'Views/templates/footer.php'; ?>
