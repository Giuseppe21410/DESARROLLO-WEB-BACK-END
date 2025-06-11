<?php
// Inicia o reanuda una sesión. Es necesario para usar variables $_SESSION.
session_start();

// --- LECTURA DE DATOS DE USUARIOS ---

// Define la ruta al archivo JSON que almacena los datos de los usuarios.
$ruta_json = '../ASSETS/JSON/usuarios.json';
// Comprueba si el archivo JSON existe.
if (file_exists($ruta_json)) {
    // Si existe, lee su contenido y lo decodifica de JSON a un array asociativo de PHP.
    $usuarios = json_decode(file_get_contents($ruta_json), true);
    // Si la decodificación falla o el archivo está vacío, asegura que $usuarios sea un array vacío.
    if (!is_array($usuarios)) {
        $usuarios = [];
    }
} else {
    // Si el archivo no existe, inicializa $usuarios como un array vacío para evitar errores.
    $usuarios = [];
}

// Inicializa una variable para almacenar mensajes de error.
$error = '';

// --- PROCESAMIENTO DEL FORMULARIO DE LOGIN ---

// Comprueba si la solicitud a la página se ha hecho mediante el método POST (es decir, se ha enviado el formulario).
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Actualiza el timestamp de la última actividad en la sesión para controlar la inactividad.
    $_SESSION['tiempo'] = time();

    // Recoge los datos del formulario. El operador '??' asigna un valor por defecto si la variable no está definida.
    $nombre = $_POST['usuario'] ?? '';
    $clave  = $_POST['password'] ?? '';

    // Recorre el array de usuarios usando el índice ($idx) para poder modificarlo.
    foreach ($usuarios as $idx => $usuario) {
        // Compara el nombre de usuario introducido con el de la base de datos.
        // Usa password_verify() para comparar de forma segura la contraseña introducida con el hash almacenado.
        if ($usuario['usuario'] === $nombre && password_verify($clave, $usuario['password'])) {
            // --- INICIO DE SESIÓN EXITOSO ---

            // Guarda los datos del usuario en la sesión para usarlos en otras páginas.
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['foto_perfil'] = $usuario['imagen_perfil'];

            // Actualiza el estado del usuario a "conectado" en el array.
            $usuarios[$idx]['conectado'] = true;

            // Comprueba si el usuario marcó la casilla "Recordarme".
            if (isset($_POST['recordarme'])) {
                // Si marcó "Recordarme", no se controlará la inactividad por sesión.
                $_SESSION['tiempo'] = null;
                // Crea una cookie para el nombre de usuario que durará 30 días.
                setcookie('usuario', $usuario['usuario'], [
                    'expires' => time() + (86400 * 30), // 86400 segundos = 1 día
                    'path' => '/', // Disponible en todo el sitio web
                    'secure' => true, // Solo se enviará por conexiones HTTPS
                    'httponly' => true, // No accesible desde JavaScript (previene XSS)
                    'samesite' => 'Strict' // Ayuda a prevenir ataques CSRF
                ]);
                // Crea una cookie para la foto de perfil con la misma configuración.
                setcookie('foto_perfil', $usuario['imagen_perfil'], [
                    'expires' => time() + (86400 * 30),
                    'path' => '/',
                    'secure' => true,
                    'httponly' => true,
                    'samesite' => 'Strict'
                ]);
            } else {
                // Si no se marcó "Recordarme", se eliminan cookies existentes.
                // Se hace estableciendo su fecha de caducidad en el pasado.
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
            }

            // Guarda el array de usuarios actualizado (con el estado 'conectado') de vuelta en el archivo JSON.
            // JSON_PRETTY_PRINT formatea el JSON para que sea legible.
            // JSON_UNESCAPED_UNICODE evita que los caracteres como 'ñ' o tildes se escapen (ej. \u00f1).
            file_put_contents($ruta_json, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            
            // Redirige al usuario a la página de inicio.
            header('Location: ../index.php');
            // Termina la ejecución del script para asegurar que la redirección se complete.
            exit();
        }
    }

    // Si el bucle termina sin encontrar una coincidencia, se establece un mensaje de error.
    $error = "Usuario o contraseña incorrectos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - ForoConecta</title>
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="../ASSETS/CSS/styles.css"> <!-- Estilos personalizados -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"> <!-- Framework Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- Iconos de Bootstrap -->
</head>
<body>
    <header>
        <div class="Logo">
            <!-- Enlace al índice del sitio -->
            <a href="../index.php"><img src="../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
    </header>
    <div class="page_container">
        <main class="bg-light">
            <div class="main_container">
                <h2 class="mb-4 text-primary"> <i>Accede a tu cuenta para participar en la conversación...</i></h2>
                <!-- Formulario de inicio de sesión -->
                <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="post" enctype="multipart/form-data">
                    <fieldset class="mb-4">
                        <!-- Campo de entrada para el nombre de usuario -->
                        <div class="mb-3">
                            <label class="form-label" for="Usuario">Usuario:</label><br>
                            <input type="text" id="Usuario" name="usuario" class="form-control" required>
                        </div>
                        <!-- Campo de entrada para la contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label><br>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <!-- Enlace a la página de registro -->
                        <div class="mb-0">
                            <a class="enlace_registro" href="./Registro.php">¿No estás registrado?</a>
                        </div>
                    </fieldset>
                    <!-- Casilla para la opción "Recordarme" -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terminos" name="recordarme">
                        <label class="form-check-label" for="terminos">Recordarme</label>
                    </div>
                    <!-- Botón para enviar el formulario -->
                    <div class="d-flex justify-content-end gap-4">
                        <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                    </div>
                    <?php if ($error): ?>
                        <!-- Bloque que solo se muestra si la variable $error tiene contenido -->
                        <div class="alert alert-danger mt-3"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>
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