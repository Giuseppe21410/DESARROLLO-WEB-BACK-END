<?php
// --- INICIO Y GESTIÓN DE LA SESIÓN ---

// Inicia o reanuda una sesión. Es fundamental para el funcionamiento de la página.
session_start();

// --- ENDPOINT PARA ACTUALIZACIÓN DE MENSAJES (AJAX) ---
// Este bloque se ejecuta solo cuando JavaScript lo solicita para actualizar el chat sin recargar la página.
if (isset($_GET['actualizar_mensajes']) && isset($_SESSION['json_asociado'])) {
    // Construye la ruta al archivo JSON de mensajes del hilo actualmente seleccionado.
    // (NOTA: La ruta está fijada a 'SOCIAL', esto debería ser dinámico si se replica para otros foros).
    $ruta_json = '../../ASSETS/JSON_MENSAJES/SOCIAL/' . $_SESSION['json_asociado'];

    if (file_exists($ruta_json)) {
        // Si el archivo existe, lee su contenido.
        $mensajes = json_decode(file_get_contents($ruta_json), true);
        // Establece la cabecera para indicar que la respuesta es de tipo JSON.
        header('Content-Type: application/json');
        // Envía los mensajes codificados en JSON al cliente (JavaScript).
        echo json_encode($mensajes, JSON_UNESCAPED_UNICODE);
        exit(); // Termina la ejecución para no enviar el resto del HTML.
    } else {
        // Si el archivo no se encuentra, envía un error 404.
        http_response_code(404);
        echo json_encode(['error' => 'Archivo no encontrado']);
        exit();
    }
}

// --- GESTIÓN DE ELIMINACIÓN DE HILOS ---

// Comprueba si se ha enviado una solicitud para eliminar un hilo.
if (isset($_POST['eliminar_hilo'])) {
    // Guarda el nombre del archivo asociado al hilo que se va a eliminar.
    $_SESSION['json_asociado'] = $_POST['eliminar_hilo'];
    $array_a_eliminar = $_POST['eliminar_hilo'];
    
    // Ruta al archivo principal que contiene la lista de todos los hilos.
    $ruta_hilos = '../../ASSETS/JSON/hilos.json';
    $hilos = [];

    // Carga la lista de hilos desde el archivo JSON.
    if (file_exists($ruta_hilos)) {
        $hilos = json_decode(file_get_contents($ruta_hilos), true);
        if (!is_array($hilos)) {
            $hilos = [];
        }
    }

    // Ruta al archivo de mensajes del hilo que se va a eliminar.
    $ruta_mensajes = '../../ASSETS/JSON_MENSAJES/SOCIAL/' . $_SESSION['json_asociado'];

    // Filtra el array de hilos, manteniendo solo aquellos cuyo 'array_asociado' NO coincide con el que se quiere eliminar.
    $hilos = array_filter($hilos, function ($hilo) use ($array_a_eliminar) {
        return $hilo['array_asociado'] !== $array_a_eliminar;
    });

    // Guarda el array filtrado de vuelta en el archivo JSON, reindexando con array_values().
    file_put_contents($ruta_hilos, json_encode(array_values($hilos), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Si el archivo de mensajes del hilo existe, lo elimina del servidor.
    if (file_exists($ruta_mensajes)) {
        unlink($ruta_mensajes);
    }

    // Limpia la variable de sesión para que el hilo eliminado ya no esté seleccionado.
    unset($_SESSION['json_asociado']);
}

// --- CONFIGURACIÓN DE VARIABLES DE ESTADO DEL USUARIO ---

$portal_cuenta = ""; // Variable para controlar si se muestra el portal de cuenta (header).
$accion = ""; // Variable para controlar si el usuario puede realizar acciones (crear hilos, enviar mensajes).

// Comprueba si el usuario está logueado mediante sesión o cookie.
if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $foto_perfil = $_SESSION['foto_perfil'];
        $portal_cuenta = true; // El portal de cuenta está activo.
        $accion = true; // El usuario tiene permiso para actuar.
    } elseif (isset($_COOKIE['usuario'])) {
        $usuario = $_COOKIE['usuario'];
        $foto_perfil = $_COOKIE['foto_perfil'];
        $portal_cuenta = true;
        $accion = true;
    }
}

// --- MANEJO DE REDIRECCIONES (LOGIN/REGISTRO) ---

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sesion_inciar'])) {
        header('Location: ../Iniciar_Sesion.php');
        exit();
    } elseif (isset($_POST['registrar'])) {
        header('Location: ../Registro.php');
        exit();
    }
}

// --- CONTROL DE INACTIVIDAD DE LA SESIÓN ---
// (Lógica repetida de otros archivos para mantener la consistencia)
$inactividad = 600; // 10 minutos.
if (isset($_SESSION['tiempo'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $vida_sesion = time() - $_SESSION['tiempo'];
    if ($vida_sesion > $inactividad) {
        // ... (código para marcar como desconectado y destruir sesión) ...
        if (file_exists('../../ASSETS/JSON/usuarios.json')) {
            $usuarios = json_decode(file_get_contents('../../ASSETS/JSON/usuarios.json'), true);
            if (is_array($usuarios)) {
                foreach ($usuarios as $idx => $usuario_data) {
                    if (isset($usuario_data['usuario']) && $usuario_data['usuario'] == $nombre_usuario) {
                        $usuarios[$idx]['conectado'] = false;
                        break;
                    }
                }
                file_put_contents('../../ASSETS/JSON/usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            }
        }
        session_unset();
        session_destroy();
        header("Location: ../../index.php");
        exit();
    }
}

// --- CIERRE DE SESIÓN MANUAL (LOGOUT) ---
// (Lógica repetida de otros archivos)
if (isset($_POST['cerrar_sesion'])) {
    // ... (código para marcar como desconectado, destruir sesión y eliminar cookies) ...
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    if (file_exists('../../ASSETS/JSON/usuarios.json')) {
        $usuarios = json_decode(file_get_contents('../../ASSETS/JSON/usuarios.json'), true);
        if (is_array($usuarios)) {
            foreach ($usuarios as $idx => $usuario_data) {
                if (isset($usuario_data['usuario']) && $usuario_data['usuario'] == $nombre_usuario) {
                    $usuarios[$idx]['conectado'] = false;
                    break;
                }
            }
            file_put_contents('../../ASSETS/JSON/usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }
    }
    session_destroy();
    setcookie('usuario', '', ['expires' => time() - 3600, 'path' => '/', 'secure' => true, 'httponly' => true, 'samesite' => 'Strict']);
    setcookie('foto_perfil', '', ['expires' => time() - 3600, 'path' => '/', 'secure' => true, 'httponly' => true, 'samesite' => 'Strict']);
    header('Location: ../../index.php');
    exit();
}

// --- GESTIÓN DE ENVÍO DE NUEVOS MENSAJES ---

// Comprueba si se ha enviado un nuevo mensaje.
if (isset($_POST['enviar'])) {
    $error = '';
    $contenido = $_POST['contenido'] ?? '';
    $creador = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $foto_perfil_creador = $_SESSION['foto_perfil'] ?? ($_COOKIE['foto_perfil'] ?? 'default.png');
    // Construye la ruta al archivo de mensajes del hilo seleccionado.
    $ruta_json = '../../ASSETS/JSON_MENSAJES/SOCIAL/' . $_SESSION['json_asociado'];

    // Carga los mensajes existentes del archivo.
    if (file_exists($ruta_json)) {
        $mensajes = json_decode(file_get_contents($ruta_json), true);
        if (!is_array($mensajes)) {
            $mensajes = [];
        }
    } else {
        $mensajes = [];
    }

    // Si no hay errores, procede a añadir el nuevo mensaje.
    if ($error == '') {
        $nuevo_mensaje = [
            'contenido' => $contenido,
            'creador' => $creador,
            'foto_perfil_creador' => $foto_perfil_creador,
            'hora_creacion' => date("H:i") // Guarda la hora y minuto.
        ];

        // Añade el nuevo mensaje al array.
        $mensajes[] = $nuevo_mensaje;

        // Guarda el array actualizado de vuelta en el archivo JSON.
        if (file_put_contents($ruta_json, json_encode($mensajes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) === false) {
            die("Error: no se pudo escribir en el archivo $ruta_json");
        }

        // Redirige a la misma página para evitar reenvío del formulario al recargar.
        header('Location: foro_social.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro Social - ForoConecta</title>
    <link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
</head>
<script>
    // --- LÓGICA JAVASCRIPT PARA ACTUALIZACIÓN EN TIEMPO REAL ---

    // Función asíncrona para cargar los mensajes desde el servidor.
    async function cargarMensajes() {
        try {
            // Realiza una petición 'fetch' al endpoint PHP que creamos al principio del archivo.
            const res = await fetch(window.location.pathname + '?actualizar_mensajes=1');
            // Si la respuesta no es exitosa (ej. error 404), lanza un error.
            if (!res.ok) throw new Error("No se pudieron cargar los mensajes");
            // Convierte la respuesta JSON en un objeto JavaScript.
            const mensajes = await res.json();

            const contenedor = document.getElementById('contenedorMensajes');
            contenedor.innerHTML = ''; // Vacía el contenedor para evitar duplicados.

            // Recorre cada mensaje recibido y construye el HTML correspondiente.
            mensajes.forEach(mensaje => {
                // Comprueba si el creador del mensaje es el usuario actual.
                const esUsuario = mensaje.creador === "<?php echo $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? ''); ?>";
                let html = '';

                // Si es el usuario actual, usa una clase de estilo diferente.
                if (esUsuario) {
                    html += `<div class="mensaje_usuario"><p class="contenido">${mensaje.contenido}</p>
                             <p class="fecha">${mensaje.hora_creacion}</p></div>`;
                } else {
                    // Si es otro usuario, muestra su foto de perfil y nombre.
                    html += `
                        <div class="mensaje_otros_usuarios_img">
                            <img src="../../ASSETS/IMAGES/${mensaje.foto_perfil_creador}" alt="Foto de perfil">
                            <div class="mensaje_otros_usuarios">
                                <h4>${mensaje.creador}</h4>
                                <p class="contenido">${mensaje.contenido}</p>
                                <p class="fecha">${mensaje.hora_creacion}</p>
                            </div>
                        </div>
                    `;
                }
                // Añade el HTML del mensaje al contenedor.
                contenedor.innerHTML += html;
            });

        } catch (e) {
            // Muestra cualquier error en la consola del navegador.
            console.error(e);
        }
    }

    // Llama a la función 'cargarMensajes' cada 3 segundos para obtener actualizaciones.
    setInterval(cargarMensajes, 3000);
    // Llama a la función una vez al cargar la página para mostrar los mensajes iniciales.
    cargarMensajes();
</script>
<script>
    // Script para hacer auto-scroll hacia abajo en el contenedor de mensajes al cargar la página.
    window.addEventListener('load', () => {
        const contenedor = document.getElementById('contenedorMensajes');
        if (contenedor) {
            contenedor.scrollTop = contenedor.scrollHeight;
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const textarea = document.getElementById('mensaje');
    const botonEnviar = document.getElementById('enviar');

    if (textarea && botonEnviar) {
        textarea.addEventListener('keydown', function(event) {
            // Comprobamos si la tecla es 'Enter' Y la tecla Shift NO está presionada
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault(); // Prevenir la nueva línea

                if (!botonEnviar.disabled) {
                    botonEnviar.click(); // Hacer clic en el botón
                }
            }
            // Si el usuario presiona Shift + Enter, no hacemos nada y dejamos que el navegador
            // añada la nueva línea como lo hace normalmente.
        });
    }
});
</script>

<body>
    <header>
        <div class="Logo">
            <a href="../../index.php"><img src="../../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
        <div class="Acceder">
            <?php
            // --- Lógica de visualización del Header ---
            // Muestra botones de login/registro si no hay sesión, o perfil/logout si la hay.
            if (!$portal_cuenta) {
                echo '<form method="post">
                        <button class="button_1" name="sesion_inciar">Iniciar Sesión</button>
                        <button class="button_2" name="registrar">Registrarse</button>
                    </form>';
            } else {
                echo '<form method="post" class="cerrar-sesion-form">
                        <button class="button_1" name="cerrar_sesion">Cerrar Sesión</button>
                    </form>';
                if (isset($_SESSION['usuario'])) {
                    echo '<div class="usuario_conectado">';
                    echo '<img style="width: 60px; height: 60px;" src="../../ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p>';
                    echo '</div>';
                } elseif (isset($_COOKIE['usuario'])) {
                    echo '<div class="usuario_conectado">';
                    echo '<img style="width: 60px; height: 60px;" src="../../ASSETS/IMAGES/' . $_COOKIE['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_COOKIE['usuario']) . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </header>
    <div class="page_container">
        <main>
            <div class="main_container_foro">
                <div class="main_container_foro_6">
                    <div class="main_container_4">
                        <p> <i>Social</i></p>
                        <div class="barra"></div>
                        <p class="p_1">Comparte tus experiencias con todos.</p>
                    </div>
                    <div class="main_container_5">
                        <?php
                        // Muestra el botón para crear un nuevo hilo solo si el usuario está logueado.
                        if ($accion) {
                            echo '<a class="mas" href="./crear_hilo.php"><img class="mas" src="../../ASSETS/IMAGES/mas.png" alt="Crear nuevo hilo"></a>';
                        } else {
                            echo '<p class="p_1">¡Inicia sesión para participar!</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="main_foro_1">
                    <!-- Columna de Hilos -->
                    <div class="main_foro_container_1">
                        <div class="main_foro_titulo"><h1>Hilos:</h1></div>
                        <div class="main_foro_container_hilos_1">
                            <?php
                            $ruta_json = '../../ASSETS/JSON/hilos.json';
                            if (file_exists($ruta_json)) {
                                $hilos = json_decode(file_get_contents($ruta_json), true);
                                if (is_array($hilos)) {
                                    // Recorre todos los hilos y muestra solo los que pertenecen a este foro ('social').
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] === 'social') {
                                            echo '<div class="main_foro_container_hilos">';
                                            echo '  <div class="main_container_hilos_1">';
                                            echo '      <img src="../../ASSETS/IMAGES/' . htmlspecialchars($hilo['foto_perfil_creador']) . '" alt="foto_perfil_creador_hilo" class="perfil_hilo">';
                                            echo '      <p class="usuario_hilo">' . htmlspecialchars($hilo['creador']) . '</p>';
                                            echo '  </div>';
                                            echo '  <div class="main_container_hilos_2">';
                                            echo '      <form method="post">';
                                            // Si el usuario no está logueado, los botones de los hilos están deshabilitados.
                                            if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
                                                echo '<button class="boton_hilo_1" disabled type="submit" name="ver_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '">' . htmlspecialchars($hilo['titulo']) . '</button>';
                                            } else {
                                                echo '<div class="contenido_1">';
                                                // Botón para ver/seleccionar el hilo.
                                                echo '<button class="boton_hilo_2" type="submit" name="ver_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '">' . htmlspecialchars($hilo['titulo']) . '</button>';
                                                // Lógica para mostrar el botón de eliminar: solo si un hilo está seleccionado Y el usuario actual es el creador.
                                                if (isset($_SESSION['json_asociado']) && $usuario === $hilo['creador']) {
                                                    echo '<button name="eliminar_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '" class="boton_eliminar">Eliminar</button>';
                                                } else {
                                                    // Si no hay hilo seleccionado pero el usuario es el creador, el botón se muestra deshabilitado.
                                                    if ($usuario === $hilo['creador']) {
                                                        echo '<button disabled name="eliminar_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '" class="boton_eliminar">Eliminar</button>';
                                                    }
                                                }
                                                echo '</div>';
                                            }
                                            // Al hacer clic en un hilo, se guarda su archivo asociado en la sesión.
                                            if (isset($_POST['ver_hilo'])) {
                                                $_SESSION['json_asociado'] = $_POST['ver_hilo'];
                                            }
                                            echo '<p>' . htmlspecialchars($hilo['descripcion']) . '</p>';
                                            echo '      </form>';
                                            echo '  </div>';
                                            echo '</div>';
                                            echo '<div class="barra_hilo"></div>';
                                        }
                                    }
                                }
                            } else {
                                echo '<p>Error al cargar los hilos.</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Columna de Mensajes -->
                    <div class="main_foro_container_2">
                        <div class="Buscador">
                            <form class="Buscador_1" method="post">
                                <textarea placeholder="Ingresa aquí tu mensaje..." id="mensaje" name="contenido" type="text" class="Buscador_"></textarea>
                                <?php
                                // El botón de enviar solo está activo si se ha seleccionado un hilo.
                                if (isset($_SESSION['json_asociado'])) {
                                    if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
                                        echo '<button id="enviar" name="enviar" class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/enviar.png" alt="Enviar mensaje"></button>';
                                    }
                                } else {
                                    echo '<button name="enviar" disabled class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/enviar.png" alt="Enviar mensaje"></button>';
                                }
                                ?>
                                <script>
                                    // Script para deshabilitar el botón de enviar si el textarea está vacío.
                                    document.addEventListener('DOMContentLoaded', () => {
                                        const textarea = document.getElementById('mensaje');
                                        const boton = document.getElementById('enviar');
                                        if (boton) { // Comprobar si el botón existe
                                            boton.disabled = textarea.value.trim() === '';
                                            textarea.addEventListener('input', () => {
                                                boton.disabled = textarea.value.trim() === '';
                                            });
                                        }
                                    });
                                </script>
                            </form>
                        </div>
                        <!-- Contenedor donde JavaScript insertará los mensajes dinámicamente -->
                        <div class="mensajes" id="contenedorMensajes">
                            <?php
                            // Muestra un aviso inicial si no se ha seleccionado ningún hilo.
                            if (!isset($_SESSION['json_asociado'])) {
                                echo '<h2 class="aviso">¡Selecciona un hilo para empezar!</h2>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="../Contactanos.php">Contáctanos</a>
                    <a target="_blank" href="https://www.php.net">Política y privacidad</a>
                    <a target="_blank" href="https://www.php.net">Ayuda</a>
                </div>
                <div class="footer_container_2_text">
                    <p>© 2025 Giuseppe Fuentes Moreno. Todos los derechos reservados.</p>
                </div>
                <div class="footer_container_1_img">
                    <a target="_blank" href="https://github.com/Giuseppe21410/DESARROLLO-WEB-BACK-END/tree/main/DESARROLLO%20WEB%20BACK-END/PHP/PROYECTO"><img src="../../ASSETS/IMAGES/Logo_Github.png" alt="Logo_GitHub"></a>
                </div>
            </div>
        </footer>
    </div>
    <script>
        // Script para hacer un scroll inicial y que el usuario vea la parte media de la página.
        window.addEventListener('load', () => {
            const mitad = document.body.scrollHeight / 8;
            window.scrollTo(0, mitad);
        });
    </script>
</body>
</html>



