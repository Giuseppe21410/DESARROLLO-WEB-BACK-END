<?php
session_start(); // Siempre al inicio y fuera de condicionales

if (isset($_GET['actualizar_mensajes']) && isset($_SESSION['json_asociado'])) {
    $ruta_json = '../../ASSETS/JSON_MENSAJES/ARTE/' . $_SESSION['json_asociado'];

    if (file_exists($ruta_json)) {
        $mensajes = json_decode(file_get_contents($ruta_json), true);
        header('Content-Type: application/json');
        echo json_encode($mensajes, JSON_UNESCAPED_UNICODE);
        exit();
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Archivo no encontrado']);
        exit();
    }
}

if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario'])) {
    $portal_cuenta = false; // Portal de cuenta no activo
}

// Gestión eliminación de hilos
if (isset($_POST['eliminar_hilo'])) {
    $_SESSION['json_asociado'] = $_POST['eliminar_hilo'];
    $array_a_eliminar = $_POST['eliminar_hilo'];
    $ruta_hilos = '../../ASSETS/JSON/hilos.json';
    $hilos = [];

    if (file_exists($ruta_hilos)) {
        $hilos = json_decode(file_get_contents($ruta_hilos), true);
        if (!is_array($hilos)) {
            $hilos = [];
        }
    }

    $ruta_mensajes = '../../ASSETS/JSON_MENSAJES/ARTE/' . $_SESSION['json_asociado'];

    $hilos = array_filter($hilos, function ($hilo) use ($array_a_eliminar) {
        return $hilo['array_asociado'] !== $array_a_eliminar;
    });

    file_put_contents($ruta_hilos, json_encode(array_values($hilos), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    if (file_exists($ruta_mensajes)) {
        unlink($ruta_mensajes);
    }

    unset($_SESSION['json_asociado']);
}

$portal_cuenta = ""; // Variable para controlar si el portal de cuenta está activo
$accion= ""; // Variable para controlar la acción del usuario, sino está conectado, no puede acceder a los hilos del foro o crear nuevos hilos

if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
    // Si ya hay una sesión iniciada, se puede acceder a los datos del usuario
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $foto_perfil = $_SESSION['foto_perfil'];
        $portal_cuenta = true; // Portal de cuenta activo
        $accion= true;
    } elseif (isset($_COOKIE['usuario'])) {
        // Si no hay sesión pero hay una cookie, se puede usar la cookie
        $usuario = $_COOKIE['usuario'];
        $foto_perfil = $_COOKIE['foto_perfil']; // Valor por defecto si no existe la cookie de foto
        $portal_cuenta = true; // Portal de cuenta activo
        $accion= true;
    }
} 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sesion_inciar'])) {
    header('Location: ../Iniciar_Sesion.php');
    exit();
} elseif (isset($_POST['registrar'])) {
    header('Location: ../Registro.php');
    exit();
}
}

$inactividad=600; // 600 segundo, lo que son 10 minutos.
    if (isset($_SESSION['tiempo'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $vida_sesion = time() - $_SESSION['tiempo'];
       if ($vida_sesion > $inactividad) {
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


if (isset($_POST['cerrar_sesion'])) {
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
    header('Location: ../../index.php');
    exit();
}



if (isset($_POST['enviar'])){
    $error = '';
    $contenido = $_POST['contenido'] ?? '';
    $creador = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $foto_perfil_creador = $_SESSION['foto_perfil'] ?? ($_COOKIE['foto_perfil'] ?? 'default.png');
    $ruta_json = '../../ASSETS/JSON_MENSAJES/ARTE/' . $_SESSION['json_asociado'];

    if (file_exists($ruta_json)) {
        $mensajes = json_decode(file_get_contents($ruta_json), true);
        if (!is_array($mensajes)) {
            $mensajes = [];
        }
    } else {
        $mensajes = [];
    }

    if ($error == '') {
        $nuevo_mensaje = [
            'contenido' => $contenido,
            'creador' => $creador,
            'foto_perfil_creador' => $foto_perfil_creador,
            'hora_creacion' => date("H:i")
        ];

        $mensajes[] = $nuevo_mensaje;

        if (file_put_contents($ruta_json, json_encode($mensajes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) === false) {
            die("Error: no se pudo crear el archivo en $ruta_json");
        }

        header('Location: foro_arte.php'); // Redirigir al foro después de enviar el mensaje
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
    <link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
</head>
<script>
    async function cargarMensajes() {
    try {
        const res = await fetch(window.location.pathname + '?actualizar_mensajes=1');
        if (!res.ok) throw new Error("No se pudieron cargar los mensajes");
        const mensajes = await res.json();

        const contenedor = document.getElementById('contenedorMensajes');
        contenedor.innerHTML = ''; // Vaciar mensajes anteriores

        mensajes.forEach(mensaje => {
            const esUsuario = mensaje.creador === "<?php echo $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? ''); ?>";
            let html = '';

            if (esUsuario) {
                html += `<div class="mensaje_usuario"><p class="contenido">${mensaje.contenido}</p>
                <p class="fecha">${mensaje.hora_creacion}</p></div>`;
            } else {
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

            contenedor.innerHTML += html;
        });

        

    } catch (e) {
        console.error(e);
    }
}


    //Cargar mensajes cada 3 segundos
    setInterval(cargarMensajes, 3000);
    cargarMensajes(); // Cargar inicialmente
</script>
<script>
    window.addEventListener('load', () => {
        const contenedor = document.getElementById('contenedorMensajes');
        if (contenedor) {
            contenedor.scrollTop = contenedor.scrollHeight;
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
            if (!$portal_cuenta){ 
            echo '<form method="post">
            <button class="button_1" name="sesion_inciar">Iniciar Sesión</button>
            <button class="button_2" name="registrar">Registrarse</button>
            </form>';
            }else { 
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
                <p> <i>Arte</i></p>
                <div class="barra"></div>
                <p class="p_1">Comparte ideas que dejan huella en el alma.</p>     
            </div>
            <div class="main_container_5">
                    <?php
                if ($accion) {
                    echo '<a class="mas" href="./crear_hilo.php"><img class="mas" src="../../ASSETS/IMAGES/mas.png" alt="imagen_más"></a>';
                } else {
                    echo '<p class="p_1">¡Inicia sesión para participar!</p>';
                }
                ?>
            </div>

        

        </div>  
            <div class="main_foro_1">
                <div class="main_foro_container_1">
                        <div class="main_foro_titulo"><h1>Hilos:</h1></div>
                        <div class="main_foro_container_hilos_1">
                            <?php
                            $ruta_json = '../../ASSETS/JSON/hilos.json';
                            if (file_exists($ruta_json)) {
                                $hilos = json_decode(file_get_contents($ruta_json), true);
                                if (is_array($hilos)) {
                                    foreach ($hilos as $hilo) {
                                        if ($hilo['foro'] === 'arte') {
                                            echo '<div class="main_foro_container_hilos">';
                                            echo '<div class="main_container_hilos_1" > ';
                                            echo '<div class="main_container_hilos_11" id="contenedor_1">';
                                            echo '</div>';
                                            echo '<img src="../../ASSETS/IMAGES/' . htmlspecialchars($hilo['foto_perfil_creador']) . '" alt="foto_perfil_creador_hilo" class="perfil_hilo">';
                                            echo '<p class="usuario_hilo">' . htmlspecialchars($hilo['creador']) . '</p>';
                                            echo '</div>';
                                            echo '<div class="main_container_hilos_2">';
                                            echo '<form method="post">';
                                            if (!isset($_SESSION['usuario']) && !isset($_COOKIE['usuario']) ) {
                                                 echo '<button class="boton_hilo_1" disabled type="submit" name="ver_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '">'. htmlspecialchars($hilo['titulo']) . '</button>';
                                            }else {
                                                echo '<div class="contenido_1">';
                                                echo '<button class="boton_hilo_2" type="submit" name="ver_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '">'. htmlspecialchars($hilo['titulo']) . '</button>';
                                                if (isset($_SESSION['json_asociado']) && $usuario === $hilo['creador'] ){  
                                                       echo '<button name="eliminar_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '" class="boton_eliminar">Eliminar</button>';
                                                } else {
                                                     if ($usuario === $hilo['creador']) {
                                                       echo '<button disabled name="eliminar_hilo" value="' . htmlspecialchars($hilo['array_asociado']) . '" class="boton_eliminar">Eliminar</button>';
                                                  }
                                                }
                                                
                                            echo '</div>';                                           
                                            }
                                            if (isset($_POST['ver_hilo'])){
                                                $_SESSION['json_asociado']=$_POST['ver_hilo'];
                                            }
                                            echo '<p>' . htmlspecialchars($hilo['descripcion']) . '</p>';
                                            echo '</form>';
                                            echo '</div>';
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
                <div class="main_foro_container_2">
                   <div class="Buscador">
		              <form class="Buscador_1"  method="post">
			          <textarea placeholder="Ingresa aquí tu mensaje..." id="mensaje" name="contenido" type="text" class="Buscador_"></textarea>
                      <?php
                      if (isset($_SESSION['json_asociado'])){
                        if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario']) && isset($_SESSION['json_asociado']) ) {
                         echo '<button id="enviar" name="enviar"  class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/enviar.png" alt="Boton_Buscar"></button>';
                          } 
                      } else{
                        echo '<button name="enviar" disabled  class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/enviar.png" alt="Boton_Buscar"></button>';

                      }
                      
                        ?>

                        <script>
                         document.addEventListener('DOMContentLoaded', () => {
                           const textarea = document.getElementById('mensaje');
                           const boton = document.getElementById('enviar');
                           boton.disabled = textarea.value.trim() === '';

                           textarea.addEventListener('input', () => {
                             boton.disabled = textarea.value.trim() === '';
                           });
                         });
                       </script>                           
		              </form>
	               </div>         
                   <div class="mensajes" id="contenedorMensajes">
                    <?php
                    if (!isset($_SESSION['json_asociado'])){
                        echo '<h2 class="aviso">¡Selecciona un hilo para empezar!</h2>';
                      }
                    ?>
                    </div>
                    
                   </div>
                </div>
            </div>
        </div>
    </main>


        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="../Contactanos.php">Contáctanos</a>
                    <a  target="_blank" href="https://www.php.net">Política y privacidad</a>
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
    window.addEventListener('load', () => {
        const mitad = document.body.scrollHeight / 8;
        window.scrollTo(0, mitad);
    });
</script>
</body>
</html>


