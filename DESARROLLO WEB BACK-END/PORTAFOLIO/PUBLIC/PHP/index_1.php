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
    <script>
     // Espera a que el DOM esté completamente cargado
     document.addEventListener("DOMContentLoaded", function() {
        const header = document.getElementById("miEncabezado");
        // Es buena idea verificar si el header existe antes de añadir el listener
        if (header) {
            const posicionTrigger = 108; // Aumenté un poco para que sea más notable

            window.addEventListener("scroll", function () {
                if (window.scrollY >= posicionTrigger) {
                    header.classList.add("fijo");
                } else {
                    header.classList.remove("fijo");
                }
            });
        } else {
            console.error("El elemento con ID 'miEncabezado' no fue encontrado.");
        }
     });
    </script>
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
	<a href="" class="active">PHP</a>
	<a href="">Maria DB</a>
	<a href="">Codelgniter</a>
	<a href="../../apuntes.php">Apuntes</a>
</div>
<div class="Linea"></div>

<div class="page_content">
	<main>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🧾</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Facturas</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.facturas.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="../../../EJERCICIOS/10_Facturas/index.php">Se genera una interfaz para visualizar facturas</a>
		<p class="subtitulo">Una factura no es solo un documento: es el reflejo formal de un compromiso cumplido entre quien ofrece y quien recibe.</p>
</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🧷</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Centro de notas</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.centro_notas.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>		
		</div>
		</div>
		<a class="Link" href="../../../EJERCICIOS/09_Centro_de_Notas/index.php">Despliega el conjunto de las notas de los alumnos de varios centro</a>
		<p class="subtitulo">Un buen centro de notas no solo guarda calificaciones, sino que refleja el esfuerzo, el progreso y el compromiso del estudiante.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🏧</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Centro Bancario</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.banco.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>		
		</div>
		</div>
		<a class="Link" href="../../../EJERCICIOS/11_Transferencia_Bancaria/index.php">Despliega una interfaz bancaria</a>
		<p class="subtitulo">Una interfaz bancaria debe ser clara, segura y fácil de usar, permitiendo al usuario gestionar su dinero con confianza y comodidad.</p>
	</div>

    <h3  class="Titulo_Imagenes">Imágenes</h3>
    <div class="Imagenes">
		<img src="../../ASSETS/IMAGES/image_4.jpg" alt="Imagen_1">
		<img src="../../ASSETS/IMAGES/image_5.webp" alt="Imagen_2">
		<img src="../../ASSETS/IMAGES/image_6.webp" alt="Image_3">
	</div>

	<div class="Indexacion">
		<div class="Google_1">
			<div class="Google_2">
            <a class="mayor_1" href="./../../../../index.php"><img src="../../ASSETS/IMAGES/mayor que.png" alt="mayor_google"></a>
			<img class="G_1" src="../../ASSETS/IMAGES/G_1.png" alt="e_google">
			<p class="O">o</p>
			<p class="active">o</p>
			<p class="O">o</p>
			<img class="g" src="../../ASSETS/IMAGES/g.png" alt="e_google">
			<img class="L" src="../../ASSETS/IMAGES/l.png" alt="e_google">
			<img class="E" src="../../ASSETS/IMAGES/Google_2015_logo.png" alt="e_google">
            <a class="mayor" href="./../../../../index.php"><img src="../../ASSETS/IMAGES/mayor que.png" alt="mayor_google"></a>
		    </div>
		</div>
		
		<div class="Enlaces_1">
			<a href="../../../../index.php" class="Enlace_4">1</a>
			<a class="active">2</a>
			<a class="Enlace_3">3</a>
	   </div>
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