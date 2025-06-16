<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['busqueda'])) {
		header("Location:https://www.google.com ");
		exit();
	}
	if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {
		$busqueda = htmlspecialchars(trim($_POST['busqueda']));
		header("Location:https://www.google.com/search?q=" . urlencode($busqueda));
		exit();
	} else {
		// Si no hay término de búsqueda, redirigir a la página principal
		header("Location: ./DESARROLLO WEB BACK-END/PORTAFOLIO/apuntes.php");
		exit();
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portafolio_Giuseppe</title>
	<link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
</head>
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
<header class="Encabezado_Google" id="miEncabezado">
	<img class="Logo_Google" src="../../ASSETS/IMAGES/Google_2015_logo.svg.png" alt="Google_Logo">
	<div class="Buscador">
		<form action="" method="post">
			<input id="mensaje" name="busqueda" type="text" class="Buscador_">
			<button class="Boton_1" type="reset">
				<svg class="Imagen_Boton_1" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
	        </button>
		<div class="Barra_lateral"></div>
		<button disabled class="Boton_2"><svg class="Imagen_Boton_2" focusable="false" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg"><path fill="var(--bbQxAb)" d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm-40 280v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Z"></path></svg></button>
		<button  id="enviar" class="Boton_3"><svg  class="Imagen_Boton_3" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></button>
		</form>
	</div>
	<div class="Elementos_Derecha">
		<div class="Imagen_fondo">
			<svg class="Imagen_Boton_4" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
		</div>
	    <img  class="Logo_Usuario" src="../../ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
    </div>
</header>
<div class="Elementos_sub">
	<a href="../../../../index.php" >PHP</a>
	<a href="../MARIADB/index.php">Maria DB</a>
	<a href="">Codelgniter</a>
	<a href="../../apuntes.php">Apuntes</a>
    <a class="active" href="./proyectos.php">Proyectos</a>
</div>
<div class="Linea"></div>

<div class="page_content">
	<main>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🗣</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Proyecto PHP</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https:/proyecto_1/www..es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="../../../PHP/PROYECTO/index.php">Se genera un foro multifuncional</a>
		<p class="subtitulo">Un foro es un espacio abierto de intercambio donde las ideas, dudas y conocimientos se comparten para que todos aprendan.</p>
	</div>

    <h3  class="Titulo_Imagenes">Imágenes</h3>
    <div class="Imagenes">
		<img styles="width:400px" src="../../ASSETS/IMAGES/image_1.png" alt="Imagen_1">
		<img src="../../ASSETS/IMAGES/image_5.webp" alt="Imagen_2">
		<img src="../../ASSETS/IMAGES/image_6.webp" alt="Image_3">
	</div> 

</main>
<footer>
	<div class="footer_content">
		<div class="footer_content_1">
		<p class="españa">España</p>
		<div class="barra"></div>
		<div class="circulo"></div>
		<p class="ubiación">38830,Guamasa-Santa Cruz de Tenerife</p>
	    </div>
		<div class="linea_1"></div>
		<div class="footer_content_2">
			<p>Ayuda</p>
			<p>Enviar Comentarios</p>
			<p>Privacidad</p>
			<p>Términos</p>
		</div>
	</div>
</footer>
</div>
	
</body>
</html>