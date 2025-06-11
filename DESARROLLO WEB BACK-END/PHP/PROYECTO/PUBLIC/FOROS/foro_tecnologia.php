<?php
// --- INICIO Y GESTIÓN DE LA SESIÓN ---
session_start(); // Siempre al inicio y fuera de condicionales

// --- ENDPOINT PARA ACTUALIZACIÓN DE MENSAJES (AJAX) ---
// Este bloque de código se ejecuta cuando JavaScript solicita los mensajes más recientes de un hilo.
if (isset($_GET['actualizar_mensajes']) && isset($_SESSION['json_asociado'])) {
    // Construye la ruta al archivo de mensajes, apuntando a la carpeta específica de TECNOLOGIA.
    $ruta_json = '../../ASSETS/JSON_MENSAJES/TECNOLOGIA/' . $_SESSION['json_asociado'];

    if (file_exists($ruta_json)) {
        // Si el archivo existe, lo lee y lo devuelve como una respuesta en formato JSON.
        $mensajes = json_decode(file_get_contents($ruta_json), true);
        header('Content-Type: application/json'); // Indica al navegador que la respuesta es JSON.
        echo json_encode($mensajes, JSON_UNESCAPED_UNICODE);
        exit(); // Termina la ejecución para no enviar el resto del HTML.
    } else {
        // Si el archivo no se encuentra, devuelve un código de error 404.
        http_response_code(404);
        echo json_encode(['error' => 'Archivo no encontrado']);
        exit();
    }
}

// --- LÓGICA DE ELIMINACIÓN DE HILOS ---
// Se activa cuando el creador de un hilo pulsa el botón "Eliminar".
if (isset($_POST['eliminar_hilo'])) {
    $_SESSION['json_asociado'] = $_POST['eliminar_hilo'];
    $array_a_eliminar = $_POST['eliminar_hilo'];
    $ruta_hilos = '../../ASSETS/JSON/hilos.json'; // Archivo maestro con la lista de todos los hilos.
    $hilos = [];

    // Carga todos los hilos existentes del archivo principal.
    if (file_exists($ruta_hilos)) {
        $hilos = json_decode(file_get_contents($ruta_hilos), true);
        if (!is_array($hilos)) {
            $hilos = [];
        }
    }

    // Ruta al archivo de mensajes del hilo a eliminar, en la carpeta TECNOLOGIA.
    $ruta_mensajes = '../../ASSETS/JSON_MENSAJES/TECNOLOGIA/' . $_SESSION['json_asociado'];

    // Filtra el array, eliminando el hilo que coincide con el ID a eliminar.
    $hilos = array_filter($hilos, function ($hilo) use ($array_a_eliminar) {
        return $hilo['array_asociado'] !== $array_a_eliminar;
    });

    // Guarda la lista de hilos actualizada.
    file_put_contents($ruta_hilos, json_encode(array_values($hilos), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Elimina el archivo de mensajes asociado al hilo.
    if (file_exists($ruta_mensajes)) {
        unlink($ruta_mensajes);
    }

    // Limpia la variable de sesión para que el hilo ya no esté activo.
    unset($_SESSION['json_asociado']);
}

// --- CONFIGURACIÓN DE VARIABLES DE ESTADO DEL USUARIO ---
$portal_cuenta = ""; // Controla la visualización del header.
$accion = ""; // Controla si el usuario puede realizar acciones (requiere estar logueado).

// Comprueba el estado de login del usuario (sesión o cookie).
if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $foto_perfil = $_SESSION['foto_perfil'];
        $portal_cuenta = true;
        $accion = true;
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

// --- CONTROL DE INACTIVIDAD Y CIERRE DE SESIÓN ---
// (Lógica estándar presente en todas las páginas para consistencia de sesión)

// Control de inactividad de sesión (10 minutos).
$inactividad = 600;
if (isset($_SESSION['tiempo'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $vida_sesion = time() - $_SESSION['tiempo'];
    if ($vida_sesion > $inactividad) {
        // ... (código para marcar usuario como desconectado y destruir sesión)
        if (file_exists('../../ASSETS/JSON/usuarios.json')) {
            $usuarios = json_decode(file_get_contents('../../ASSETS/JSON/usuarios.json'), true);
            if(is_array($usuarios)) {
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

// Cierre de sesión manual (logout).
if (isset($_POST['cerrar_sesion'])) {
    // ... (código para marcar usuario como desconectado, destruir sesión y eliminar cookies)
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    if (file_exists('../../ASSETS/JSON/usuarios.json')) {
        $usuarios = json_decode(file_get_contents('../../ASSETS/JSON/usuarios.json'), true);
        if(is_array($usuarios)) {
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
if (isset($_POST['enviar'])) {
    $error = '';
    $contenido = $_POST['contenido'] ?? '';
    $creador = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $foto_perfil_creador = $_SESSION['foto_perfil'] ?? ($_COOKIE['foto_perfil'] ?? 'default.png');
    // Ruta al archivo de mensajes del hilo actual, en la carpeta TECNOLOGIA.
    $ruta_json = '../../ASSETS/JSON_MENSAJES/TECNOLOGIA/' . $_SESSION['json_asociado'];

    // Carga los mensajes existentes del hilo.
    if (file_exists($ruta_json)) {
        $mensajes = json_decode(file_get_contents($ruta_json), true);
        if (!is_array($mensajes)) {
            $mensajes = [];
        }
    } else {
        $mensajes = [];
    }

    // Si no hay errores, se añade el nuevo mensaje.
    if ($error == '') {
        $nuevo_mensaje = [
            'contenido' => $contenido,
            'creador' => $creador,
            'foto_perfil_creador' => $foto_perfil_creador,
            'hora_creacion' => date("H:i")
        ];
        $mensajes[] = $nuevo_mensaje;

        // Guarda el array de mensajes actualizado.
        if (file_put_contents($ruta_json, json_encode($mensajes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) === false) {
            die("Error: no se pudo escribir en el archivo en $ruta_json");
        }

        // Redirige a la misma página para limpiar el POST y evitar reenvíos de formulario.
        header('Location: foro_tecnologia.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro de Tecnología - ForoConecta</title>
    <link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
</head>
<script>
    // --- LÓGICA JAVASCRIPT PARA CHAT EN TIEMPO REAL ---

    // Función asíncrona para solicitar y renderizar los mensajes.
    async function cargarMensajes() {
        try {
            // Realiza una petición GET al endpoint PHP definido al inicio del archivo.
            const res = await fetch(window.location.pathname + '?actualizar_mensajes=1');
            if (!res.ok) throw new Error("No se pudieron cargar los mensajes");
            const mensajes = await res.json(); // Convierte la respuesta a un objeto JS.

            const contenedor = document.getElementById('contenedorMensajes');
            contenedor.innerHTML = ''; // Limpia el contenedor antes de añadir los nuevos mensajes.

            // Itera sobre cada mensaje y construye su HTML.
            mensajes.forEach(mensaje => {
                const esUsuario = mensaje.creador === "<?php echo $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? ''); ?>";
                let html = '';
                
                // Aplica un estilo si el mensaje es del usuario actual.
                if (esUsuario) {
                    html += `<div class="mensaje_usuario"><p class="contenido">${mensaje.contenido}</p><p class="fecha">${mensaje.hora_creacion}</p></div>`;
                } else {
                    // Aplica otro estilo si es de otro usuario.
                    html += `<div class="mensaje_otros_usuarios_img"><img src="../../ASSETS/IMAGES/${mensaje.foto_perfil_creador}" alt="Foto de perfil"><div class="mensaje_otros_usuarios"><h4>${mensaje.creador}</h4><p class="contenido">${mensaje.contenido}</p><p class="fecha">${mensaje.hora_creacion}</p></div></div>`;
                }
                contenedor.innerHTML += html;
            });
        } catch (e) {
            console.error(e); // Muestra errores en la consola.
        }
    }

    // Llama a la función 'cargarMensajes' cada 3 segundos para refrescar el chat.
    setInterval(cargarMensajes, 3000);
    // Carga los mensajes una vez al entrar en la página.
    cargarMensajes();
</script>
<script>
    // Script para hacer scroll automático hacia el final del chat.
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
            // Muestra dinámicamente el header según el estado de la sesión.
            if (!$portal_cuenta) {
                echo '<form method="post"><button class="button_1" name="sesion_inciar">Iniciar Sesión</button><button class="button_2" name="registrar">Registrarse</button></form>';
            } else {
                echo '<form method="post" class="cerrar-sesion-form"><button class="button_1" name="cerrar_sesion">Cerrar Sesión</button></form>';
                if (isset($_SESSION['usuario'])) {
                    echo '<div class="usuario_conectado"><img style="width: 60px; height: 60px;" src="../../ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img"><p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p></div>';
                } elseif (isset($_COOKIE['usuario'])) {
                    echo '<div class="usuario_conectado"><img style="width: 60px; height: 60px;" src="../../ASSETS/IMAGES/' . $_COOKIE['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img"><p class="usuario_nombre">' . htmlspecialchars($_COOKIE['usuario']) . '</p></div>';
                }
            }
            ?>
        </div>
    </header>
    <div class="page_container">
        <main>
            <div class="main_container_foro">
                <!-- Encabezado específico del Foro de Tecnología -->
                <div class="main_container_foro_6">
                    <div class="main_container_4">
                        <p> <i>Tecnología</i></p>
                        <div class="barra"></div>
                        <p class="p_1">Comparte la innovación que importa.</p>
                    </div>
                    <div class="main_container_5">
                        <?php
                        // Muestra el botón de "crear hilo" solo si el usuario está logueado.
                        if ($accion) {
                            echo '<a class="mas" href="./crear_hilo.php"><img class="mas" src="../../ASSETS/IMAGES/mas.png" alt="Crear nuevo hilo"></a>';
                        } else {
                            echo '<p class="p_1">¡Inicia sesión para participar!</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="main_foro_1">
                    <!-- Columna Izquierda: Lista de Hilos -->
                    <div class="main_foro_container_1">
                        <div class="main_foro_titulo"><h1>Hilos:</h1></div>
                        <div class="main_foro_container_hilos_1">
                            <?php
                            $ruta_json = '../../ASSETS/JSON/hilos.json';
                            if (file_exists($ruta_json)) {
                                $hilos = json_decode(file_get_contents($ruta_json), true);
                                if (is_array($hilos)) {
                                    // Bucle que muestra solo los hilos cuyo campo 'foro' es 'tecnologia'.
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] === 'tecnologia') {
                                            echo '<div class="main_foro_container_hilos">';
                                            echo '  <div class="main_container_hilos_1">';
                                            echo '    <img src="../../ASSETS/IMAGES/' . htmlspecialchars($hilo['foto_perfil_creador']) . '" alt="foto_perfil_creador_hilo" class="perfil_hilo">';
                                            echo '    <p class="usuario_hilo">' . htmlspecialchars($hilo['creador']) . '</p>';
                                            echo '  </div>';
                                            echo '  <div class="main_container_hilos_2">';
                                            echo '    <form method="post">';
                                            if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
                                                echo '<button class="boton_hilo_1" disabled type="submit" name="ver_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '">' . htmlspecialchars($hilo['titulo']) . '</button>';
                                            } else {
                                                echo '<div class="contenido_1">';
                                                echo '<button class="boton_hilo_2" type="submit" name="ver_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '">' . htmlspecialchars($hilo['titulo']) . '</button>';
                                                // El botón de eliminar solo aparece si el hilo está seleccionado y el usuario es el creador.
                                                if (isset($_SESSION['json_asociado']) && $usuario === $hilo['creador']) {
                                                    echo '<button name="eliminar_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '" class="boton_eliminar">Eliminar</button>';
                                                } else {
                                                    if ($usuario === $hilo['creador']) {
                                                        echo '<button disabled name="eliminar_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '" class="boton_eliminar">Eliminar</button>';
                                                    }
                                                }
                                                echo '</div>';
                                            }
                                            // Al pulsar un hilo, su archivo asociado se guarda en la sesión.
                                            if (isset($_POST['ver_hilo'])) {
                                                $_SESSION['json_asociado'] = $_POST['ver_hilo'];
                                            }
                                            echo '<p>' . htmlspecialchars($hilo['descripcion']) . '</p>';
                                            echo '    </form>';
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
                    <!-- Columna Derecha: Mensajes y caja de envío -->
                    <div class="main_foro_container_2">
                        <div class="Buscador">
                            <form class="Buscador_1" method="post">
                                <textarea placeholder="Ingresa aquí tu mensaje..." id="mensaje" name="contenido" type="text" class="Buscador_"></textarea>
                                <?php
                                // El botón de enviar solo está habilitado si se ha seleccionado un hilo.
                                if (isset($_SESSION['json_asociado'])) {
                                    if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
                                        echo '<button id="enviar" name="enviar" class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/enviar.png" alt="Enviar mensaje"></button>';
                                    }
                                } else {
                                    echo '<button name="enviar" disabled class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/enviar.png" alt="Enviar mensaje"></button>';
                                }
                                ?>
                                <script>
                                    // Deshabilita el botón de enviar si el textarea está vacío.
                                    document.addEventListener('DOMContentLoaded', () => {
                                        const textarea = document.getElementById('mensaje');
                                        const boton = document.getElementById('enviar');
                                        if (boton) {
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
                            // Muestra un aviso inicial si no hay ningún hilo seleccionado.
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
        // Script para hacer scroll a una parte media de la página al cargarla.
        window.addEventListener('load', () => {
            const mitad = document.body.scrollHeight / 8;
            window.scrollTo(0, mitad);
        });
    </script>
</body>
</html>