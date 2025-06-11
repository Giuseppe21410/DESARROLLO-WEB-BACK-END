<?php
// --- GESTIÓN DE LA SESIÓN Y DATOS INICIALES ---

// Inicia o reanuda una sesión. Es crucial que sea la primera instrucción del script.
session_start();

// Elimina la variable de sesión 'json_asociado' si existe.
// Esto limpia datos residuales de posibles acciones anteriores.
unset($_SESSION['json_asociado']);

// Inicializa una variable para llevar la cuenta total de mensajes en todos los foros.
$mensajes_total = 0;

// Comprobación inicial para el estado de la cuenta. Si no hay sesión ni cookie, el usuario no está logueado.
if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    $portal_cuenta = false; // El portal de cuenta no está activo.
}

// Inicializa la variable $portal_cuenta. Su valor se definirá a continuación.
// (Nota: esta línea es redundante por la comprobación anterior, pero se mantiene como en el original).
$portal_cuenta = "";

// --- VERIFICACIÓN DE SESIÓN O COOKIE DE USUARIO ---

// Comprueba si el usuario ya ha iniciado sesión a través de una sesión activa o una cookie.
if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
    // Si existe una sesión activa, se obtienen los datos del usuario directamente de $_SESSION.
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $foto_perfil = $_SESSION['foto_perfil'];
        $portal_cuenta = true; // Marca que el usuario está logueado.
    }
    // Si no hay sesión pero sí una cookie (opción "Recordarme"), se obtienen los datos de la cookie.
    elseif (isset($_COOKIE['usuario'])) {
        $usuario = $_COOKIE['usuario'];
        $foto_perfil = $_COOKIE['foto_perfil'];
        $portal_cuenta = true; // Marca que el usuario está logueado.
    }
}

// --- MANEJO DE REDIRECCIONES POR FORMULARIO (POST) ---

// Comprueba si la página se ha solicitado mediante el método POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se ha pulsado el botón con name="sesion_inciar".
    if (isset($_POST['sesion_inciar'])) {
        header('Location: ./PUBLIC/Iniciar_Sesion.php'); // Redirige a la página de inicio de sesión.
        exit(); // Detiene la ejecución del script para asegurar la redirección.
    }
    // Si se ha pulsado el botón con name="registrar".
    elseif (isset($_POST['registrar'])) {
        header('Location: ./PUBLIC/Registro.php'); // Redirige a la página de registro.
        exit(); // Detiene la ejecución.
    }
}

// --- CONTROL DE INACTIVIDAD DE LA SESIÓN ---

// Define el tiempo de inactividad permitido en segundos (600s = 10 minutos).
$inactividad = 600;

// Si existe una marca de tiempo en la sesión, se comprueba la inactividad.
if (isset($_SESSION['tiempo'])) {
    // Se obtiene el nombre de usuario de la sesión o, en su defecto, de la cookie.
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    // Se calcula el tiempo que ha pasado desde la última actividad.
    $vida_sesion = time() - $_SESSION['tiempo'];

    // Si el tiempo de inactividad supera el límite.
    if ($vida_sesion > $inactividad) {
        // Se busca al usuario en el archivo JSON para marcarlo como desconectado.
        if (file_exists('./ASSETS/JSON/usuarios.json')) {
            $usuarios = json_decode(file_get_contents('./ASSETS/JSON/usuarios.json'), true);
            if (is_array($usuarios)) {
                // Se recorre el array de usuarios.
                foreach ($usuarios as $idx => $usuario_data) {
                    if (isset($usuario_data['usuario']) && $usuario_data['usuario'] == $nombre_usuario) {
                        $usuarios[$idx]['conectado'] = false; // Se cambia el estado a desconectado.
                        break; // Se detiene el bucle al encontrar al usuario.
                    }
                }
                // Se guardan los cambios en el archivo JSON.
                file_put_contents('./ASSETS/JSON/usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            }
        }
        // Se destruye la sesión por inactividad.
        session_unset(); // Se eliminan las variables de sesión.
        session_destroy(); // Se destruye la sesión.
        header("Location: index.php"); // Se redirige al inicio.
        exit();
    }
}

// --- CIERRE DE SESIÓN MANUAL (LOGOUT) ---

// Si se ha pulsado el botón con name="cerrar_sesion".
if (isset($_POST['cerrar_sesion'])) {
    // Se obtiene el nombre de usuario de la sesión o cookie.
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');

    // Se actualiza el estado del usuario a "desconectado" en el archivo JSON.
    if (file_exists('./ASSETS/JSON/usuarios.json')) {
        $usuarios = json_decode(file_get_contents('./ASSETS/JSON/usuarios.json'), true);
        if (is_array($usuarios)) {
            foreach ($usuarios as $idx => $usuario_data) {
                if (isset($usuario_data['usuario']) && $usuario_data['usuario'] == $nombre_usuario) {
                    $usuarios[$idx]['conectado'] = false;
                    break;
                }
            }
            file_put_contents('./ASSETS/JSON/usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }
    }
    // Se destruye la sesión.
    session_destroy();

    // Se eliminan las cookies estableciendo su fecha de expiración en el pasado.
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

    // Se redirige al usuario a la página de inicio.
    header('Location: ./index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_1.index</title>
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="./index.php"><img src="./ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
        <div class="Acceder">
            <?php
            // --- LÓGICA DE VISUALIZACIÓN DEL HEADER ---
            // Si el usuario no está logueado ($portal_cuenta no es true).
            if (!$portal_cuenta) {
                // Se muestran los botones de "Iniciar Sesión" y "Registrarse".
                echo '<form method="post">
                        <button class="button_1" name="sesion_inciar">Iniciar Sesión</button>
                        <button class="button_2" name="registrar">Registrarse</button>
                    </form>';
            } else {
                // Si el usuario está logueado, se muestra el botón de "Cerrar Sesión".
                echo '<form method="post" class="cerrar-sesion-form">
                        <button class="button_1" name="cerrar_sesion">Cerrar Sesión</button>
                    </form>';

                // A continuación, se muestra la información del usuario (foto y nombre).
                // Si los datos provienen de una sesión activa.
                if (isset($_SESSION['usuario'])) {
                    echo '<div class="usuario_conectado">';
                    echo '<img style="width: 60px; height: 60px;" src="./ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p>';
                    echo '</div>';
                }
                // Si los datos provienen de una cookie.
                elseif (isset($_COOKIE['usuario'])) {
                    echo '<div class="usuario_conectado">';
                    echo '<img style="width: 60px; height: 60px;" src="./ASSETS/IMAGES/' . $_COOKIE['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_COOKIE['usuario']) . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </header>
    <div class="page_container">
        <main>
            <!-- Sección de bienvenida -->
            <div class="main_container_1">
                <p> <i>¡Bienvenido a ForoConecta!</i></p>
                <div class="barra"></div>
                <p class="p_1">Es el punto de encuentro donde ideas, dudas y conocimientos se comparten para crecer en comunidad.</p>
            </div>
            <!-- Contenedor principal con foros, usuarios y estadísticas -->
            <div class="main_container_2">
                <!-- Columna de los Foros -->
                <div class="main_foros">
                    <div class="main_foro_contenido">
                        <div class="main_foro_titulo"><h1>Contenido</h1></div>
                        
                        <!-- FORO SOCIAL -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_social.php"><img src="./ASSETS/IMAGES/social.png" alt="Icono del foro Social"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_social.php">Social</a>
                            </div>
                            <div class="foro_hilos">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Lee el archivo de hilos y cuenta los que pertenecen a "social".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Social = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'social') {
                                            $num_hilos_Social++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Social . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Cuenta los mensajes buscando archivos JSON secuenciales (social_0.json, social_1.json...).
                                $i = 0;
                                $num_mensajes_Social = 0;
                                // Este bucle tiene un límite de 100 archivos por foro para evitar bucles infinitos.
                                for ($i = 0; $i < 100; $i++) {
                                    $ruta = "./ASSETS/JSON_MENSAJES/SOCIAL/social_" . $i . ".json";
                                    if (file_exists($ruta)) {
                                        $mensajes = json_decode(file_get_contents($ruta), true);
                                        $num_mensajes_Social += count($mensajes);
                                    }
                                }
                                // Suma los mensajes de este foro al total general.
                                $mensajes_total += $num_mensajes_Social;
                                echo '<p class="p_4">' . $num_mensajes_Social . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO ARTE -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_arte.php"><img src="./ASSETS/IMAGES/arte.png" alt="Icono del foro Arte"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_arte.php">Arte</a>
                            </div>
                            <div class="foro_hilos_2">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Se repite la lógica: contar hilos del foro "arte".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Arte = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'arte') {
                                            $num_hilos_Arte++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Arte . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Se repite la lógica: contar mensajes del foro "arte".
                                $i = 0;
                                $num_mensajes_Arte = 0;
                                // Este bucle se detiene cuando no encuentra el siguiente archivo.
                                while (file_exists("./ASSETS/JSON_MENSAJES/ARTE/arte_" . $i . ".json")) {
                                    $ruta = "./ASSETS/JSON_MENSAJES/ARTE/arte_" . $i . ".json";
                                    $mensajes = json_decode(file_get_contents($ruta), true);
                                    $num_mensajes_Arte += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Arte;
                                echo '<p class="p_4">' . $num_mensajes_Arte . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO VIDEOJUEGOS -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_videojuegos.php"><img src="./ASSETS/IMAGES/videojuegos.png" alt="Icono del foro Videojuegos"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_videojuegos.php">Videojuegos</a>
                            </div>
                            <div class="foro_hilos_3">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Se repite la lógica: contar hilos del foro "videojuegos".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Videojuegos = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'videojuegos') {
                                            $num_hilos_Videojuegos++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Videojuegos . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Se repite la lógica: contar mensajes del foro "videojuegos".
                                $i = 0;
                                $num_mensajes_Videojuegos = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/VIDEOJUEGOS/videojuegos_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/VIDEOJUEGOS/videojuegos_" . $i . ".json"), true);
                                    $num_mensajes_Videojuegos += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Videojuegos;
                                echo '<p class="p_4">' . $num_mensajes_Videojuegos . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO LIBROS -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_libros.php"><img src="./ASSETS/IMAGES/libros.png" alt="Icono del foro Libros"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_libros.php">Libros</a>
                            </div>
                            <div class="foro_hilos_4">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Contar hilos del foro "libros".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Libros = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'libros') {
                                            $num_hilos_Libros++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Libros . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Contar mensajes del foro "libros".
                                $i = 0;
                                $num_mensajes_Libros = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/LIBROS/libros_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/LIBROS/libros_" . $i . ".json"), true);
                                    $num_mensajes_Libros += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Libros;
                                echo '<p class="p_4">' . $num_mensajes_Libros . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO TECNOLOGÍA -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_tecnologia.php"><img src="./ASSETS/IMAGES/tecnologia.png" alt="Icono del foro Tecnología"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_tecnologia.php">Tecnología</a>
                            </div>
                            <div class="foro_hilos_5">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Contar hilos del foro "tecnologia".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Tecnologia = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'tecnologia') {
                                            $num_hilos_Tecnologia++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Tecnologia . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Contar mensajes del foro "tecnologia".
                                $i = 0;
                                $num_mensajes_Tecnologia = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/TECNOLOGIA/tecnologia_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/TECNOLOGIA/tecnologia_" . $i . ".json"), true);
                                    $num_mensajes_Tecnologia += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Tecnologia;
                                echo '<p class="p_4">' . $num_mensajes_Tecnologia . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO OPOSICIONES -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_oposiciones.php"><img src="./ASSETS/IMAGES/oposiciones.png" alt="Icono del foro Oposiciones"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_oposiciones.php">Oposiciones</a>
                            </div>
                            <div class="foro_hilos_6">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Contar hilos del foro "oposiciones".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Oposiciones = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'oposiciones') {
                                            $num_hilos_Oposiciones++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Oposiciones . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Contar mensajes del foro "oposiciones".
                                $i = 0;
                                $num_mensajes_Oposiciones = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/OPOSICIONES/oposiciones_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/OPOSICIONES/oposiciones_" . $i . ".json"), true);
                                    $num_mensajes_Oposiciones += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Oposiciones;
                                echo '<p class="p_4">' . $num_mensajes_Oposiciones . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO CINE -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_cine.php"><img src="./ASSETS/IMAGES/cine.png" alt="Icono del foro Cine"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_cine.php">Cine</a>
                            </div>
                            <div class="foro_hilos_7">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Contar hilos del foro "cine".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Cine = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'cine') {
                                            $num_hilos_Cine++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Cine . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Contar mensajes del foro "cine".
                                $i = 0;
                                $num_mensajes_Cine = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/CINE/cine_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/CINE/cine_" . $i . ".json"), true);
                                    $num_mensajes_Cine += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Cine;
                                echo '<p class="p_4">' . $num_mensajes_Cine . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO ANÉCDOTAS -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_anecdotas.php"><img src="./ASSETS/IMAGES/anecdotas.png" alt="Icono del foro Anécdotas"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_anecdotas.php">Anécdotas</a>
                            </div>
                            <div class="foro_hilos_8">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Contar hilos del foro "anecdotas".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Anecdotas = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'anecdotas') {
                                            $num_hilos_Anecdotas++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Anecdotas . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Contar mensajes del foro "anecdotas".
                                $i = 0;
                                $num_mensajes_Anecdotas = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/ANECDOTAS/anecdotas_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/ANECDOTAS/anecdotas_" . $i . ".json"), true);
                                    $num_mensajes_Anecdotas += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Anecdotas;
                                echo '<p class="p_4">' . $num_mensajes_Anecdotas . '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>

                        <!-- FORO COCHES -->
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_coches.php"><img src="./ASSETS/IMAGES/coches.png" alt="Icono del foro Coches"></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_coches.php">Coches</a>
                            </div>
                            <div class="foro_hilos_9">
                                <p class="p_3">Hilos:</p>
                                <?php
                                // Contar hilos del foro "coches".
                                if (file_exists('./ASSETS/JSON/hilos.json')) {
                                    $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                                    $num_hilos_Coches = 0;
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] == 'coches') {
                                            $num_hilos_Coches++;
                                        }
                                    }
                                    echo '<p class="p_4">' . $num_hilos_Coches . '</p>';
                                }
                                ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                // Contar mensajes del foro "coches".
                                $i = 0;
                                $num_mensajes_Coches = 0;
                                while (file_exists("./ASSETS/JSON_MENSAJES/COCHES/coches_" . $i . ".json")) {
                                    $mensajes = json_decode(file_get_contents("./ASSETS/JSON_MENSAJES/COCHES/coches_" . $i . ".json"), true);
                                    $num_mensajes_Coches += count($mensajes);
                                    $i++;
                                }
                                $mensajes_total += $num_mensajes_Coches;
                                echo '<p class="p_4">' . $num_mensajes_Coches . '</p>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna de Miembros Conectados -->
                <div class="main_usuarios">
                    <div class="main_usuarios_text">
                        <h1>Miembros conectados:</h1>
                    </div>
                    <div class="barra_horizontal"></div>
                    <div class="scroll">
                        <?php
                        // Lee el archivo de usuarios para mostrar los que están conectados.
                        if (file_exists('./ASSETS/JSON/usuarios.json')) {
                            $usuarios = json_decode(file_get_contents('./ASSETS/JSON/usuarios.json'), true);
                            if (is_array($usuarios)) {
                                // Recorre el array de usuarios.
                                foreach ($usuarios as $usuario) {
                                    // Si el usuario tiene el estado 'conectado' como 'true'.
                                    if (isset($usuario['conectado']) && $usuario['conectado'] == 'true') {
                                        // Muestra la información del usuario conectado.
                                        echo '<div class="usuario_conectado_1">';
                                        echo '<img style="width: 40px; margin-left:20px; height: 40px;" src="./ASSETS/IMAGES/' . htmlspecialchars($usuario['imagen_perfil']) . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                                        echo '<p class="usuario_nombre_1">' . htmlspecialchars($usuario['usuario']) . '</p>';
                                        echo '</div>';
                                        echo '<div class="barra_horizontal"></div>';
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                
                <!-- Columna de Estadísticas del Foro -->
                <div class="main_estadistica">
                    <div class="main_usuarios_text">
                        <h1>Estadísticas:</h1>
                    </div>
                    <div class="barra_horizontal"></div>
                    <div class="main_estadistica_text">
                        <?php
                        // Muestra el número total de usuarios registrados.
                        if (file_exists('./ASSETS/JSON/usuarios.json')) {
                            $usuarios = json_decode(file_get_contents('./ASSETS/JSON/usuarios.json'), true);
                            $num_usuarios = is_array($usuarios) ? count($usuarios) : 0;
                            echo "<p>Usuarios registrados: $num_usuarios</p>";
                        }
                        ?>
                        <?php
                        // Muestra el número total de hilos creados.
                        if (file_exists('./ASSETS/JSON/hilos.json')) {
                            $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                            $num_hilos = count($hilos);
                            echo "<p>Hilos creados: $num_hilos</p>";
                        }
                        ?>
                        <?php
                        // Muestra el total de mensajes calculados previamente.
                        echo '<p>Mensajes enviados: ' . $mensajes_total . '</p>';
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="./PUBLIC/Contactanos.php">Contáctanos</a>
                    <a target="_blank" href="https://www.php.net">Política y privacidad</a>
                    <a target="_blank" href="https://www.php.net">Ayuda</a>
                </div>
                <div class="footer_container_2_text">
                    <p>© 2025 Giuseppe Fuentes Moreno. Todos los derechos reservados.</p>
                </div>
                <div class="footer_container_1_img">
                    <a target="_blank" href="https://github.com/Giuseppe21410/DESARROLLO-WEB-BACK-END/tree/main/DESARROLLO%20WEB%20BACK-END/PHP/PROYECTO"><img src="./ASSETS/IMAGES/Logo_Github.png" alt="Logo_GitHub"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>