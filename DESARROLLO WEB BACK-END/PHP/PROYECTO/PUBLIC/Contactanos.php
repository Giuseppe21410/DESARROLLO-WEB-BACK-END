<?php
session_start(); // Siempre al inicio y fuera de condicionales

if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    $portal_cuenta = false; // Portal de cuenta no activo
}

$portal_cuenta = ""; // Variable para controlar si el portal de cuenta está activo

if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
    // Si ya hay una sesión iniciada, se puede acceder a los datos del usuario
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $foto_perfil = $_SESSION['foto_perfil'];
        $portal_cuenta = true; // Portal de cuenta activo
    } elseif (isset($_COOKIE['usuario'])) {
        // Si no hay sesión pero hay una cookie, se puede usar la cookie
        $usuario = $_COOKIE['usuario'];
        $foto_perfil = $_COOKIE['foto_perfil']; // Valor por defecto si no existe la cookie de foto
        $portal_cuenta = true; // Portal de cuenta activo
    }
} 

$error = ''; // Inicializa la variable para errores

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sesion_inciar'])) {
    header('Location: ../PUBLIC/Iniciar_Sesion.php');
    exit();
} elseif (isset($_POST['registrar'])) {
    header('Location: ../PUBLIC/Registro.php');
    exit();
}elseif (isset($_POST['nombre'], $_POST['correo'], $_POST['asunto'], $_POST['mensaje'])) {
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $correo = htmlspecialchars(trim($_POST['correo']));
        $asunto = htmlspecialchars(trim($_POST['asunto']));
        $mensaje = htmlspecialchars(trim($_POST['mensaje']));

        if (file_exists('../ASSETS/JSON/contacto.json')) {
            $contactos = json_decode(file_get_contents('../ASSETS/JSON/contacto.json'), true);
            if (!is_array($contactos)) {
                $contactos = []; // Asegura que sea un array
            }
        }else {
            $contactos = []; // Si no existe el archivo, inicializa un array vacío
        }
        $ruta_json = '../ASSETS/JSON/contacto.json';
        if ($error === '') {
        $nuevo_contacto = [
            'nombre'        => $nombre,
            'correo'         => $correo,
            'asunto'  => $asunto,
            'mensaje'       => $mensaje,
            'fecha'         => date('Y-m-d H:i:s') // Agrega la fecha y hora del contacto
        ];

        $contactos[] = $nuevo_contacto; // Agrega el nuevo contacto al array
        // Guarda el array actualizado en el archivo JSON 
        file_put_contents($ruta_json, json_encode($contactos, JSON_PRETTY_PRINT));

        header('Location: ../index.php');
        exit();
    }
          
        
        
    }
}

if (isset($_POST['cerrar_sesion'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');

    if (file_exists('../ASSETS/JSON/usuarios.json')) {
        $usuarios = json_decode(file_get_contents('../ASSETS/JSON/usuarios.json'), true);
        if (is_array($usuarios)) {
            foreach ($usuarios as $idx => $usuario_data) {
                if (isset($usuario_data['usuario']) && $usuario_data['usuario'] == $nombre_usuario) {
                    $usuarios[$idx]['conectado'] = false;
                    break;
                }
            }
            file_put_contents('../ASSETS/JSON/usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }
    }

    session_destroy();
     // Eliminar cookies:
            setcookie('usuario', '', [
               'expires' => time() - 3600,
               'path' => '/',
               'secure' => true,
               'httponly' => true,
               'samesite' => 'Strict'       
            ]);
            setcookie('foto_perfil', '', [
               'expires' => time() - 3600,
               'path' => '/',
               'secure' => true,
               'httponly' => true,
               'samesite' => 'Strict'
            ]);        
    header('Location: ../index.php');
    exit();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="../index.php"><img src="../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
        <div class="Acceder">
            <?php
            if (!$portal_cuenta){ 
            echo '<form method="post">
            <button class="button_1" name="sesion_inciar">Iniciar Sesión</button>
            <button class="button_2" name="registrar">Registrarse</button>
            </form>';
            }else { 
                echo '<form method="post" class="cerrar-sesion-form">
                <button class="button_1" name="cerrar_sesion">Cerrar Sesión</button>
                </form>';  
                echo '<div class="usuario_conectado">';
                echo '<img style="width: 60px; height: 60px;" src="../ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                echo '<p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p>';
                echo '</div>';                        
            }
            ?>   
        </div>
    </header>
    <div class="page_container">
        <main class="bg-light">
  <div class="main_container_registro">
    <h2 class="mb-4 text-primary"><i>¿Tienes dudas o sugerencias? ¡Contáctanos!</i></h2>

    <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="POST">
      <fieldset class="mb-4">
        <!-- Nombre -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>

        <!-- Correo electrónico -->
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electrónico:</label>
          <input type="email" id="correo" name="correo" class="form-control" required>
        </div>

        <!-- Asunto -->
        <div class="mb-3">
          <label for="asunto" class="form-label">Asunto:</label>
          <input type="text" id="asunto" name="asunto" class="form-control" required>
        </div>

        <!-- Mensaje -->
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" class="form-control" rows="5" required></textarea>
        </div>
      </fieldset>

      <!-- Botón -->
      <div class="d-flex justify-content-end gap-4">
        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
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