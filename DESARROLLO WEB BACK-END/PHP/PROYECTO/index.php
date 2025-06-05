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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['sesion_inciar'])) {
    header('Location: ./PUBLIC/Iniciar_Sesion.php');
    exit();
} elseif (isset($_POST['registrar'])) {
    header('Location: ./PUBLIC/Registro.php');
    exit();
}
}

if (isset($_POST['cerrar_sesion'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');

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
    header('Location: ./index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_1.index</title>
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
                    echo '<img style="width: 60px; height: 60px;" src="./ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                    echo '<p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p>';
                    echo '</div>';    
                    
                } elseif (isset($_COOKIE['usuario'])) {
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
            <div class="main_container_1">
                <p> <i>¡Bienvenido a ForoConecta!</i></p>
                <div class="barra"></div>
                <p class="p_1">Es el punto de encuentro donde ideas, dudas y conocimientos se comparten para crecer en comunidad.</p>
            </div>
            <div class="main_container_2">
                <div class="main_foros">
                    <div class="main_foro_contenido">
                        <div class="main_foro_titulo"><h1>Contenido</h1></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_social.php"><img src="./ASSETS/IMAGES/social.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_social.php">Social</a>
                            </div>
                            <div class="foro_hilos">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_arte.php"><img src="./ASSETS/IMAGES/arte.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_arte.php">Arte</a>
                            </div>
                            <div class="foro_hilos_2">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_videojuegos.php"><img src="./ASSETS/IMAGES/videojuegos.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_videojuegos.php">Videojuegos</a>
                            </div>
                            <div class="foro_hilos_3">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_libros.php"><img src="./ASSETS/IMAGES/libros.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_libros.php">Libros</a>
                            </div>
                            <div class="foro_hilos_4">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_tecnologia.php"><img src="./ASSETS/IMAGES/tecnologia.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_tecnologia.php">Tecnología</a>
                            </div>
                            <div class="foro_hilos_5">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_oposiciones.php"><img src="./ASSETS/IMAGES/oposiciones.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_oposiciones.php">Oposiciones</a>
                            </div>
                            <div class="foro_hilos_6">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_cine.php"><img src="./ASSETS/IMAGES/cine.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_cine.php">Cine</a>
                            </div>
                            <div class="foro_hilos_7">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_anecdotas.php"><img src="./ASSETS/IMAGES/anecdotas.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_anecdotas.php">Anecdotas</a>
                            </div>
                            <div class="foro_hilos_8">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                        <div class="barra_horizontal"></div>
                        <div class="foro">
                            <div class="foro_img">
                                <a href="./PUBLIC/FOROS/foro_coches.php"><img src="./ASSETS/IMAGES/coches.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_coches.php">Coches</a>
                            </div>
                            <div class="foro_hilos_9">
                                <p class="p_3">Hilos:</p>
                                <p class="p_4">0</p>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <p class="p_4">0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_usuarios">
                   <div class="main_usuarios_text">
                    <h1>Miembros conectados:</h1>
                   </div>
                   <div class="barra_horizontal"></div>
                    <div class="scroll">
                        <?php 
                   if (file_exists('./ASSETS/JSON/usuarios.json')) {
                      $usuarios = json_decode(file_get_contents('./ASSETS/JSON/usuarios.json'), true);
                      if (is_array($usuarios)) {
                         foreach ($usuarios as $idx => $usuario) {
                          if (isset($usuario['usuario']) && $usuario['conectado'] == 'true') {
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
                <div class="main_estadistica">
                    <div class="main_usuarios_text">
                    <h1>Estadísticas:</h1>
                   </div>
                   <div class="barra_horizontal"></div>
                   <div class="main_estadistica_text">
                    <?php 
                     if (file_exists('./ASSETS/JSON/usuarios.json')) {
                        $usuarios = json_decode(file_get_contents('./ASSETS/JSON/usuarios.json'), true);
                        $num_usuarios = is_array($usuarios) ? count($usuarios) : 0;
                        echo "<p>Usuarios registrados: $num_usuarios</p>";
                     }
                    ?>
                    <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos =count($hilos);
                        echo "<p>Hilos creados: $num_hilos</p>";
                     }
                    ?>
                    <p>Mensajes enviados: 0</p>
                </div>
            </div>

        </main>
        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="./PUBLIC/Contactanos.php">Contáctanos</a>
                    <a  target="_blank" href="https://www.php.net">Política y privacidad</a>
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