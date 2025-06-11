<?php
// --- PROCESAMIENTO DEL FORMULARIO DE REGISTRO ---

// Inicializa una variable para almacenar mensajes de error. Si permanece vacía, todo está bien.
$error = '';

// Comprueba si la solicitud a la página se ha hecho mediante el método POST (es decir, el usuario ha enviado el formulario).
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoge los datos del formulario. El operador '??' asigna un valor por defecto si la variable no está definida.
    $usuario = $_POST['usuario'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmar_password = $_POST['confirmar_password'] ?? '';
    $imagen_perfil = $_POST['imagen_perfil'] ?? 'defecto.webp'; // Si no se elige imagen, se asigna una por defecto.
    $terminos = isset($_POST['terminos']); // Devuelve true si la casilla fue marcada, false si no.

    // --- CARGA DE USUARIOS EXISTENTES ---

    // Define la ruta al archivo JSON que almacena los datos de los usuarios.
    $ruta_json = '../ASSETS/JSON/usuarios.json';
    // Comprueba si el archivo JSON existe.
    if (file_exists($ruta_json)) {
        // Si existe, lee su contenido y lo decodifica en un array asociativo de PHP.
        $usuarios = json_decode(file_get_contents($ruta_json), true);
        // Medida de seguridad: si el archivo está vacío o corrupto, asegura que $usuarios sea un array.
        if (!is_array($usuarios)) {
            $usuarios = [];
        }
    } else {
        // Si el archivo no existe, inicializa $usuarios como un array vacío para poder añadir el primer usuario.
        $usuarios = [];
    }

    // --- VALIDACIONES DE LOS DATOS ---

    // 1) Validar que las contraseñas introducidas coincidan.
    if ($confirmar_password !== $password) {
        $error = 'Las contraseñas no coinciden.';
    }
    // 2) Validar que el usuario haya aceptado los términos y condiciones.
    elseif (!$terminos) {
        $error = 'Debes aceptar los términos y condiciones.';
    }
    // 3) Validar que el nombre de usuario no esté ya en uso.
    else {
        // Recorre el array de usuarios existentes.
        foreach ($usuarios as $user) {
            // Compara si el nombre de usuario enviado ya existe en la base de datos.
            if ($user['usuario'] === $usuario) {
                $error = 'El nombre de usuario ya existe.';
                break; // Si se encuentra una coincidencia, no es necesario seguir buscando.
            }
        }
    }

    // --- CREACIÓN DEL NUEVO USUARIO ---

    // Si la variable $error sigue vacía, significa que todas las validaciones fueron exitosas.
    if ($error === '') {
        // Se crea un array asociativo con los datos del nuevo usuario.
        $nuevo_usuario = [
            'usuario'        => $usuario,
            'correo'         => $correo,
            // Se hashea la contraseña para almacenarla de forma segura. NUNCA se guarda en texto plano.
            'password'       => password_hash($password, PASSWORD_DEFAULT),
            'imagen_perfil'  => $imagen_perfil,
            'conectado'      => false // Por defecto, un usuario nuevo no está conectado.
        ];

        // Se añade el nuevo usuario al final del array de usuarios.
        $usuarios[] = $nuevo_usuario;
        
        // Se guarda el array de usuarios completo (con el nuevo miembro) de vuelta en el archivo JSON.
        file_put_contents($ruta_json, json_encode($usuarios, JSON_PRETTY_PRINT));

        // Se redirige al usuario a la página de inicio de sesión para que pueda acceder con su nueva cuenta.
        header('Location: ./Iniciar_Sesion.php');
        // Se detiene la ejecución del script para asegurar que la redirección se complete.
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - ForoConecta</title>
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
            <div class="main_container_registro">
                <h2 class="mb-4 text-primary"><i>¡Crea tu cuenta y únete a la conversación!</i></h2>

                <!-- Formulario de registro que envía los datos a este mismo archivo (método POST) -->
                <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="post">
                    <fieldset class="mb-4">
                        <!-- Campo para el nombre de usuario -->
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" id="usuario" name="usuario" class="form-control" required>
                        </div>

                        <!-- Campo para el correo electrónico -->
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" id="correo" name="correo" class="form-control" required>
                        </div>

                        <!-- Campo para la contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <!-- Campo para confirmar la contraseña -->
                        <div class="mb-3">
                            <label for="confirmar_password" class="form-label">Confirmar contraseña:</label>
                            <input type="password" id="confirmar_password" name="confirmar_password" class="form-control" required>
                        </div>

                        <!-- Casilla de verificación para aceptar los términos y condiciones -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="terminos" name="terminos" required>
                            <label class="form-check-label" for="terminos">
                                Acepto los <a href="https://www.php.net" target="_blank">términos y condiciones</a>
                            </label>
                        </div>

                        <!-- Sección para seleccionar una imagen de perfil -->
                        <div class="mb-3">
                            <label class="form-label">Elige tu imagen de perfil:</label>
                            <div class="d-flex flex-wrap gap-3">
                                <!-- Cada imagen es una etiqueta que envuelve un radio button oculto. -->
                                <!-- Esto permite que al hacer clic en la imagen, se seleccione el radio button correspondiente. -->
                                
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

                                <!-- (Se repite la misma estructura para las demás imágenes de perfil) -->
                                <label class="perfil-option position-relative">
                                    <input type="radio" name="imagen_perfil" value="perfil_3.jpeg" class="d-none">
                                    <img src="../ASSETS/IMAGES/perfil_3.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 3">
                                    <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
                                </label>
                                <label class="perfil-option position-relative">
                                    <input type="radio" name="imagen_perfil" value="perfil_4.jpeg" class="d-none">
                                    <img src="../ASSETS/IMAGES/perfil_4.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 4">
                                    <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
                                </label>
                                <label class="perfil-option position-relative">
                                    <input type="radio" name="imagen_perfil" value="perfil_5.jpeg" class="d-none">
                                    <img src="../ASSETS/IMAGES/perfil_5.jpeg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 5">
                                    <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
                                </label>
                                <label class="perfil-option position-relative">
                                    <input type="radio" name="imagen_perfil" value="perfil_6.jpg" class="d-none">
                                    <img src="../ASSETS/IMAGES/perfil_6.jpg" class="img-fluid rounded-circle border border-2 border-secondary perfil-img" alt="perfil 6">
                                    <div class="check-overlay"><i class="bi bi-check-circle-fill text-primary fs-2"></i></div>
                                </label>
                            </div>
                        </div>
                        <!-- Enlace a la página de inicio de sesión para usuarios ya registrados -->
                        <div class="mb-0">
                            <a class="enlace_registro" href="./Iniciar_Sesion.php">¿Ya tienes una cuenta?</a>
                        </div>
                    </fieldset>

                    <!-- Botón para enviar el formulario de registro -->
                    <div class="d-flex justify-content-end gap-4">
                        <button type="submit" class="btn btn-primary">Registrarme</button>
                    </div>

                    <?php if ($error): ?>
                        <!-- Este bloque PHP solo se ejecutará y mostrará si la variable $error contiene un mensaje. -->
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
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