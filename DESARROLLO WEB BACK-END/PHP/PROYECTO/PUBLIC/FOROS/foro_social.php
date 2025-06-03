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
    header('Location: ../Iniciar_Sesion.php');
    exit();
} elseif (isset($_POST['registrar'])) {
    header('Location: ../Registro.php');
    exit();
}
}

if (isset($_POST['cerrar_sesion'])) {
    $nombre_usuario = $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? '');

    if (file_exists('../../ASSETS/JSON/usuarios.json')) {
        $usuarios = json_decode(file_get_contents('../ASSETS/JSON/usuarios.json'), true);
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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_1.index</title>
    <link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
</head>
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
                echo '<div class="usuario_conectado">';
                echo '<img style="width: 60px; height: 60px;" src="../../ASSETS/IMAGES/' . $_SESSION['foto_perfil'] . '" alt="Foto de perfil" class="img-fluid rounded-circle perfil-img">';
                echo '<p class="usuario_nombre">' . htmlspecialchars($_SESSION['usuario']) . '</p>';
                echo '</div>';                        
            }
            ?>  
        </div>
    </header>
    <div class="page_container">
    <main>
        <div class="main_container_foro">
            <div class="main_container_4">
                <p> <i>Social</i></p>
                <div class="barra"></div>
                <p class="p_1">Inicia la conversación que todos quieren tener.</p>
                <a class="mas" href="./crear_hilo.php"><img class="mas" src="../../ASSETS/IMAGES/mas.png" alt="imagen_más"></a>
            </div>
            <div class="main_foro_1">
                <div class="main_foro_container_1">
                </div>
                <div class="main_foro_container_2">a
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
</body>
</html>