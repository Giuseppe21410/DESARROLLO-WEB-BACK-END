<?php
if (!isset($_SESSION)) {
    $portal_cuenta=false;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['sesion_inciar'])) {
        header('Location: ./PUBLIC/Iniciar_Sesion.php');
        exit();
    } elseif (isset($_POST['registrar'])) {
        header('Location: ./PUBLIC/Registro.php');
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
    <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="./index.php"><img src="./ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
        <div class="Acceder">
            <?php
            if (!$portal_cuenta == true){ 
            echo '<form method="post">
            <button class="button_1" name="sesion_inciar">Iniciar Sesión</button>
            <button class="button_2" name="registrar">Registrarse</button>
            </form>';
            }else { 
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
                                <a href="./PUBLIC/FOROS/foro_videojuego.php"><img src="./ASSETS/IMAGES/videojuegos.png" alt=""></a>
                            </div>
                            <div class="foro_texto">
                                <a href="./PUBLIC/FOROS/foro_videojuego.php">Videojuegos</a>
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
                    <h1>Miembros conectados</h1>
                   </div>
                   <div class="barra_horizontal"></div>
                </div>
                <div class="main_estadistica">
                    <div class="main_usuarios_text">
                    <h1>Estadísticas</h1>
                   </div>
                   <div class="barra_horizontal"></div>
                   <div class="main_estadistica_text">
                    <p>Usuarios registrados: 0</p>
                    <p>Hilos creados: 0</p>
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