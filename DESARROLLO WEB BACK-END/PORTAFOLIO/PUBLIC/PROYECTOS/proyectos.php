<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
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
<body>
<header class="Encabezado_Google" id="miEncabezado">
	<img class="Logo_Google" src="../../ASSETS/IMAGES/Google_2015_logo.svg.png" alt="Google_Logo">
	<div class="Buscador">
		<form action="" method="post">
			<input name="busqueda" type="text" class="Buscador_">
			<button class="Boton_1" type="reset">
				<img class="Imagen_Boton_1" src="../../ASSETS/IMAGES/Boton_Borrar.png" alt="Boton_borrar">
	        </button>
		<div class="Barra_lateral"></div>
		<button disabled class="Boton_2"><img class="Imagen_Boton_2" src="../../ASSETS/IMAGES/Sonido.png" alt="Boton_Voz"></button>
		<button  class="Boton_3"><img class="Imagen_Boton_3" src="../../ASSETS/IMAGES/Buscar.png" alt="Boton_Buscar"></button>
		</form>
	</div>
	<div class="Elementos_Derecha">
		<div class="Imagen_fondo_1">
			<img class="Imagen_Boton_5" src="../../ASSETS/IMAGES/config.png" alt="Boton_Configuración">
		</div>
		<div class="Imagen_fondo">
			<img class="Imagen_Boton_4" src="../../ASSETS/IMAGES/Aplicaciones.png" alt="Boton_Aplicaciones">
		</div>
	    <img  class="Logo_Usuario" src="../../ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
    </div>
</header>
<div class="Elementos_sub">
	<a href="../../../../index.php" >PHP</a>
	<a href="">Maria DB</a>
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
		<img src="../../ASSETS/IMAGES/image_4.jpg" alt="Imagen_1">
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