<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_1.index</title>
    <link rel="stylesheet" href="../ASSETS/CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="../index.php"><img src="../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
    </header>
    <div class="page_container">
        <main class="bg-light">
  <div class="main_container_registro">
    <h2 class="mb-4 text-primary"><i>¡Crea tu cuenta y únete a la conversación!</i></h2>

    <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="POST">
      <fieldset class="mb-4">
        <!-- Usuario -->
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario:</label>
          <input type="text" id="usuario" name="usuario" class="form-control" required>
        </div>

        <!-- Correo electrónico -->
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico:</label>
          <input type="email" id="correo" name="correo" class="form-control" required>
        </div>

        <!-- Contraseña -->
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña:</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <!-- Confirmar contraseña -->
        <div class="mb-3">
          <label for="confirmar_password" class="form-label">Confirmar contraseña:</label>
          <input type="password" id="confirmar_password" name="confirmar_password" class="form-control" required>
        </div>

        <!-- Términos y condiciones -->
        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="terminos" name="terminos" required>
          <label class="form-check-label" for="terminos">
            Acepto los <a href="https://www.php.net" target="_blank">términos y condiciones</a>
          </label>
        </div>

        <!-- Selección de imagen de perfil -->
        <div class="mb-3">
          <label class="form-label">Elige tu imagen de perfil:</label>
          <div class="d-flex flex-wrap gap-3">
            <!-- Imagen 1 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="img1.jpg" class="d-none" required>
              <img src="../ASSETS/IMAGES/perfil_1.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 1">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 2 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="img2.jpg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_2.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 2">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 3 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="img3.jpg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_3.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 3">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 4 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="img4.jpg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_4.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 4">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 5 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="img5.jpg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_5.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 5">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 6 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="img6.jpg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_6.jpg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 6">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>
          </div>
        </div>
        <div class="mb-0">
          <a class="enlace_registro" href="./Iniciar_Sesion.php">¿Tienes una cuenta?</a>
        </div>
      </fieldset>

      <!-- Botón -->
      <div class="d-flex justify-content-end gap-4">
        <button type="submit" class="btn btn-primary">Registrarme</button>
      </div>
    </form>
  </div>
</main>
        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="./Contactanos.php">Contáctanos</a>
                    <a  target="_blank" href="https://www.php.net">Política y privacidad</a>
                    <a target="_blank" href="https://www.php.net">Ayuda</a>
                </div>
                <div class="footer_container_2_text">
                <p>© 2025 Giuseppe Fuentes Moreno. Todos los derechos reservados.</p>
                </div>
                <div class="footer_container_1_img">
                    <a target="_blank" href="https://github.com/Giuseppe21410/DESARROLLO-WEB-BACK-END/tree/main/DESARROLLO%20WEB%20BACK-END/PHP/PROYECTO"><img src="../ASSETS/IMAGES/Logo_Github.png" alt="Logo_GitHub"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>