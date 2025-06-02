<?php


// Redirigir si ya está logueado
if (session_start()) {
    header('Location: ../index.php');
    exit();
}

// Leer usuarios desde usuarios.json
$ruta_json = '../ASSETS/JSON/usuarios.json';
if (file_exists($ruta_json)) {
    $usuarios = json_decode(file_get_contents($ruta_json), true);
    if (!is_array($usuarios)) {
        $usuarios = [];
    }
} else {
    $usuarios = [];
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['usuario'] ?? '';
    $clave  = $_POST['password'] ?? '';

    // Recorremos con índice para poder actualizar “conectado”
    foreach ($usuarios as $idx => $usuario) {
        // UTF-8: comparamos el campo ‘usuario’ y usamos password_verify
        if ($usuario['usuario'] === $nombre && password_verify($clave, $usuario['password'])) {
            // Guardar datos en sesión
            $_SESSION['usuario'] = $usuario['usuario'];

            // Marcar como conectado en el array completo
            $usuarios[$idx]['conectado'] = true;

            // Actualizar el JSON completo
            file_put_contents($ruta_json, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            
            session_start();
            header('Location: ../index.php');
            exit();
        }
    }

    $error = "Usuario o contraseña incorrectos.";
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
        <div class="main_container">
        <h2  class="mb-4 text-primary"> <i>Accede a tu cuenta para participar en la conversación...</i></h2>
      <form  class="p-4 ml-5 mr-5 bg-white rounded shadow" method="post" enctype="multipart/form-data">
        <fieldset class="mb-4">
        <!--Usuario/Corrreo:-->
        <div class="mb-3">
        <label class="form-label" for="Usuario"> Usuario:</label><br>
        <input type="text" id="Usuario" name="usuario" class="form-control" required>
        </div>
        <!--Contraseña:-->
        <div class="mb-3">
          <label for="password" class="form-label"> Contraseña:</label><br>
          <input type="text" id="password" name="password" class="form-control" required>
        </div>

        <div class="mb-0">
          <a class="enlace_registro" href="./Registro.php">¿Estás registrado?</a>
        </div>
    </fieldset>
        <!--Botones-->
        <div class="d-flex justify-content-end gap-4">
        <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
        </div>
        <?php if ($error): ?>
            <div class="alert alert-danger mt-3"><?= $error ?></div>
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