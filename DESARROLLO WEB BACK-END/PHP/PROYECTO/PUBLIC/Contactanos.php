<?php
// --- GESTIÓN DE LA SESIÓN Y DATOS DE USUARIO ---

// Inicia o reanuda una sesión. Debe ser la primera instrucción del script.
session_start();

// (El siguiente bloque es una lógica de header común, repetida en varias páginas)

// Comprobación inicial: si no hay sesión ni cookie, el usuario no está logueado.
if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    $portal_cuenta = false; // El portal de cuenta no está activo.
}

// Inicializa la variable que controla si el usuario está logueado.
$portal_cuenta = "";

// Verifica si el usuario tiene una sesión activa o una cookie de "recordarme".
if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
    // Si hay una sesión activa, se obtienen los datos de $_SESSION.
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $foto_perfil = $_SESSION['foto_perfil'];
        $portal_cuenta = true; // Marca que el usuario está logueado.
    }
    // Si no hay sesión pero sí cookie, se obtienen los datos de $_COOKIE.
    elseif (isset($_COOKIE['usuario'])) {
        $usuario = $_COOKIE['usuario'];
        $foto_perfil = $_COOKIE['foto_perfil'];
        $portal_cuenta = true; // Marca que el usuario está logueado.
    }
}

// Inicializa una variable para almacenar mensajes de error (aunque no se usa en la lógica de contacto actual).
$error = '';

// --- PROCESAMIENTO DE FORMULARIOS (MÉTODO POST) ---

// Comprueba si la página se ha solicitado mediante el método POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se pulsa el botón para iniciar sesión.
    if (isset($_POST['sesion_inciar'])) {
        header('Location: ../PUBLIC/Iniciar_Sesion.php'); // Redirige a la página de login.
        exit();
    }
    // Si se pulsa el botón para registrarse.
    elseif (isset($_POST['registrar'])) {
        header('Location: ../PUBLIC/Registro.php'); // Redirige a la página de registro.
        exit();
    }
    // Si se han enviado los campos del formulario de contacto.
    elseif (isset($_POST['nombre'], $_POST['correo'], $_POST['asunto'], $_POST['mensaje'])) {
        // Recoge y limpia los datos del formulario para evitar inyección de HTML (XSS).
        $nombre = htmlspecialchars(trim($_POST['nombre']));
        $correo = htmlspecialchars(trim($_POST['correo']));
        $asunto = htmlspecialchars(trim($_POST['asunto']));
        $mensaje = htmlspecialchars(trim($_POST['mensaje']));

        // Lee el archivo JSON de contactos.
        if (file_exists('../ASSETS/JSON/contacto.json')) {
            $contactos = json_decode(file_get_contents('../ASSETS/JSON/contacto.json'), true);
            // Asegura que, si el archivo está vacío o corrupto, se trate como un array vacío.
            if (!is_array($contactos)) {
                $contactos = [];
            }
        } else {
            // Si el archivo no existe, crea un array vacío para empezar.
            $contactos = [];
        }

        // Define la ruta donde se guardará el archivo JSON.
        $ruta_json = '../ASSETS/JSON/contacto.json';

        // Si no hay errores (en esta lógica, nunca los hay), procede a guardar.
        if ($error === '') {
            // Crea un nuevo array asociativo para el mensaje de contacto.
            $nuevo_contacto = [
                'nombre'    => $nombre,
                'correo'    => $correo,
                'asunto'    => $asunto,
                'mensaje'   => $mensaje,
                'fecha'     => date('Y-m-d H:i:s') // Agrega la fecha y hora actuales.
            ];

            // Añade el nuevo mensaje al final del array de contactos.
            $contactos[] = $nuevo_contacto;
            // Guarda el array actualizado de vuelta en el archivo JSON.
            file_put_contents($ruta_json, json_encode($contactos, JSON_PRETTY_PRINT));

            // Redirige al usuario a la página de inicio tras enviar el mensaje.
            header('Location: ../index.php');
            exit();
        }
    }
}

// --- CONTROL DE INACTIVIDAD DE LA SESIÓN ---

// Define el tiempo máximo de inactividad en segundos (10 minutos).
$inactividad = 600;
if (isset($_SESSION['tiempo'])) {
    // Obtiene el nombre del usuario de la sesión o de la cookie.
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    // Calcula el tiempo transcurrido desde la última actividad.
    $vida_sesion = time() - $_SESSION['tiempo'];

    // Si el tiempo de inactividad supera el límite.
    if ($vida_sesion > $inactividad) {
        // Busca al usuario en el archivo JSON para marcarlo como desconectado.
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
        // Destruye la sesión.
        session_unset();
        session_destroy();
        header("Location: ../index.php"); // Redirige al inicio.
        exit();
    }
}

// --- CIERRE DE SESIÓN MANUAL (LOGOUT) ---

if (isset($_POST['cerrar_sesion'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');

    // Actualiza el estado del usuario a "desconectado" en el archivo JSON.
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

    // Destruye la sesión y elimina las cookies.
    session_destroy();
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
    
    // Redirige al inicio.
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - ForoConecta</title>
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="../ASSETS/CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="../index.php"><img src="../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
        <div class="Acceder">
            <?php
            // Lógica para mostrar botones según si el usuario está logueado o no.
            if (!$portal_cuenta) {
                // Muestra botones de "Iniciar Sesión" y "Registrarse" si no hay sesión.
                echo '<form method="post">
                        <button class="button_1" name="sesion_inciar">Iniciar Sesión</button>
                        <button class="button_2" name="registrar">Registrarse</button>
                    </form>';
            } else {
                // Muestra el botón de "Cerrar Sesión" y los datos del perfil si hay sesión.
                echo '<form method="post" class="cerrar-sesion-form">
                        <button class="button_1" name="cerrar_sesion">Cerrar Sesión</button>
                    </form>';
                if (isset($_SESSION['usuario'])) {
                    echo '<div class="usuario_conectado">';
                    echo '<img style="width: 60px; height: 60px;" src="../ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p>';
                    echo '</div>';
                } elseif (isset($_COOKIE['usuario'])) {
                    echo '<div class="usuario_conectado">';
                    echo '<img style="width: 60px; height: 60px;" src="../ASSETS/IMAGES/' . $_COOKIE['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_COOKIE['usuario']) . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </header>
    <div class="page_container">
        <main class="bg-light">
            <div class="main_container_registro">
                <h2 class="mb-4 text-primary"><i>¿Tienes dudas o sugerencias? ¡Contáctanos!</i></h2>

                <!-- Formulario de contacto que envía los datos a este mismo archivo -->
                <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="POST">
                    <fieldset class="mb-4">
                        <!-- Campo para el Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>

                        <!-- Campo para el Correo electrónico -->
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" id="correo" name="correo" class="form-control" required>
                        </div>

                        <!-- Campo para el Asunto -->
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto:</label>
                            <input type="text" id="asunto" name="asunto" class="form-control" required>
                        </div>

                        <!-- Campo para el Mensaje (área de texto) -->
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="5" required></textarea>
                        </div>
                    </fieldset>

                    <!-- Botón para enviar el formulario -->
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
                    <a target="_blank" href="https://www.php.net">Política y privacidad</a>
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