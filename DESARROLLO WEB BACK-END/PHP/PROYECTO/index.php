<?php
session_start(); // Siempre al inicio y fuera de condicionales

unset($_SESSION['json_asociado']);

$mensajes_total=0;

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

$inactividad=600; // 600 segundo, lo que son 10 minutos.
    if (isset($_SESSION['tiempo'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');
    $vida_sesion = time() - $_SESSION['tiempo'];
       if ($vida_sesion > $inactividad) {
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
          session_unset();
          session_destroy();
          header("Location: index.php");
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Social=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='social'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Social = 0;

                                 for ($i=0; $i<100; $i++) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/SOCIAL/social_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Social += $num_mensajes; // suma acumulativa
                                         $i++;
                                 }
                                }

                                 $mensajes_total += $num_mensajes_Social;
                                 echo '<p class="p_4">' . $mensajes_total . '</p>';
                             ?>

                                
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Arte=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='arte'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Arte = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/ARTE/arte_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Arte += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Arte;
                                 echo '<p class="p_4">' . $num_mensajes_Arte . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Videojuegos=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='videojuegos'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Videojuegos = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/VIDEOJUEGOS/videojuegos_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Videojuegos += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Videojuegos;
                                 echo '<p class="p_4">' . $num_mensajes_Videojuegos . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Libros=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='libros'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Libros = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/LIBROS/libros_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Libros += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Libros;
                                 echo '<p class="p_4">' . $num_mensajes_Libros . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Tecnología=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='tecnologia'){
                                $num_hilos_Tecnología++;
                
                        }
                     }
                     echo '<p class="p_4">' . $num_hilos_Tecnología . '</p>';
                    }
                    ?>
                            </div>
                            <div class="foro_mensajes">
                                <p class="p_3">Mensajes:</p>
                                <?php
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Tecnologia = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/TECNOLOGIA/tecnologia_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Tecnologia += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Tecnologia;
                                 echo '<p class="p_4">' . $num_mensajes_Tecnologia . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Oposiciones=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='oposiciones'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Oposiciones = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/OPOSICIONES/oposiciones_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Oposiciones += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Oposiciones;
                                 echo '<p class="p_4">' . $num_mensajes_Oposiciones . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Cine=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='cine'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Cine = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/CINE/cine_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Cine += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Cine;
                                 echo '<p class="p_4">' . $num_mensajes_Cine . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Anecdotas=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='anecdotas'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Anecdotas = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/ANECDOTAS/anecdotas_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Anecdotas += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Anecdotas;
                                 echo '<p class="p_4">' . $num_mensajes_Anecdotas . '</p>';
                             ?>
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
                                <?php 
                     if (file_exists('./ASSETS/JSON/hilos.json')) {
                        $hilos = json_decode(file_get_contents('./ASSETS/JSON/hilos.json'), true);
                        $num_hilos_Coches=0;
                        foreach ($hilos as $hilo){
                            if ($hilo['foro']=='coches'){
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
                                 $condicion = true;
                                 $i = 0;
                                 $num_mensajes_Coches = 0;

                                 while ($condicion) {
                                     $ruta = "./ASSETS/JSON_MENSAJES/COCHES/coches_" . $i . ".json";
                                     if (file_exists($ruta)) {
                                         $mensajes = json_decode(file_get_contents($ruta), true);
                                         $num_mensajes = count($mensajes);
                                         $num_mensajes_Coches += $num_mensajes; // suma acumulativa
                                         $i++;
                                     } else {
                                         $condicion = false;
                                     }
                                 }

                                 $mensajes_total += $num_mensajes_Coches;
                                 echo '<p class="p_4">' . $num_mensajes_Coches . '</p>';
                             ?>
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
                    <?php
                    echo '<p>Mensajes enviados:'. '                              ' . $mensajes_total . '</p>';
                    ?>
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