<?php

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmar_password = $_POST['confirmar_password'] ?? '';
    $imagen_perfil = $_POST['imagen_perfil'] ?? 'defecto.webp';
    $terminos = isset($_POST['terminos']);

    // Cargar usuarios existentes (si el archivo no existe, crear array vacío)
    $ruta_json = '../ASSETS/JSON/usuarios.json';
    if (file_exists($ruta_json)) {
        $usuarios = json_decode(file_get_contents($ruta_json), true);
        if (!is_array($usuarios)) {
            $usuarios = [];
        }
    } else {
        $usuarios = [];
    }

    // 1) Validar que las contraseñas coincidan
    if ($confirmar_password !== $password) {
        $error = 'Las contraseñas no coinciden.';
    }
    // 2) Validar que se acepten los términos
    elseif (! $terminos) {
        $error = 'Debes aceptar los términos y condiciones.';
    }
    // 3) Validar que el usuario no exista ya en el JSON
    else {
        foreach ($usuarios as $user) {
            if ($user['usuario'] === $usuario) {
                $error = 'El usuario ya existe.';
                break;
            }
        }
    }

    // 4) Si no hubo error, agregamos el usuario nuevo
    if ($error === '') {
        $nuevo_usuario = [
            'usuario'        => $usuario,
            'correo'         => $correo,
            'password'       => password_hash($password, PASSWORD_DEFAULT),
            'imagen_perfil'  => $imagen_perfil,
            'conectado'      => false // Por defecto, el usuario no está conectado
        ];

        $usuarios[] = $nuevo_usuario;
        file_put_contents($ruta_json, json_encode($usuarios, JSON_PRETTY_PRINT));

        header('Location: ./Iniciar_Sesion.php');
        exit();
    }
}
?>




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

    <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="post">
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
              <input type="radio" name="imagen_perfil" value="perfil_1.jpeg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_1.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 1">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 2 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="perfil_2.jpeg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_2.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 2">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 3 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="perfil_3.jpeg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_3.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 3">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 4 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="perfil_4.jpeg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_4.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 4">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 5 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="perfil_5.jpeg" class="d-none">
              <img src="../ASSETS/IMAGES/perfil_5.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 5">
              <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
            </label>

            <!-- Imagen 6 -->
            <label class="perfil-option position-relative">
              <input type="radio" name="imagen_perfil" value="perfil_6.jpg" class="d-none">
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
      <?php if ($error): ?>
        <div class="alert alert-danger mt-3" role="alert">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>
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