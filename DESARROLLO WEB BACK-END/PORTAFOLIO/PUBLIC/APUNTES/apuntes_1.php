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
	<a href="../../../../index.php">PHP</a>
	<a href="">Maria DB</a>
	<a href="">Codelgniter</a>
	<a class="active" href="../../apuntes.php">Apuntes</a>
	<a  href="../PROYECTOS/proyectos.php">Proyectos</a>
</div>
<div class="Linea"></div>

<div class="page_content">
	<main>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">PHPMailer</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.phpmailer.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="14_PHPMailer.php" class="Link" href="../../../PHP/14_PHPMailer.php">Se descarga los apuntes sobre emails</a>
		<p class="subtitulo">PHPMailer es una de las bibliotecas más utilizadas en PHP para enviar correos electrónicos de forma segura y sencilla mediante protocolos SMTP, con soporte para adjuntos, HTML y autenticación.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Validación</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.form_validation.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="15_Form_Validation.php" class="Link" href="../../../PHP/15_Form_Validation.php">Se descarga los apuntes sobre validación de formularios</a>
		<p class="subtitulo">La validación de formularios en PHP es esencial para garantizar que los datos introducidos por el usuario sean seguros, estén completos y tengan el formato correcto antes de ser procesados o almacenados.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Manejo de errores</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.manejo_de_errores.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="16_Manejo_de_errores.php" class="Link" href="../../../PHP/16_Manejo_de_errores.php">Se descarga los apuntes sobre el manejo de errores</a>
		<p class="subtitulo">El manejo de errores en PHP permite detectar, controlar y registrar fallos en la ejecución del código, mejorando la estabilidad, seguridad y experiencia del usuario en una aplicación web.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Expresiones regulares</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.expresiones_regulares.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="17_Expresiones_regulares.php" class="Link" href="../../../PHP/17_Expresiones_regulares.php">Se descarga los apuntes sobre las expresiones regulares</a>
		<p class="subtitulo">Las expresiones regulares permiten buscar, validar y manipular patrones complejos dentro de cadenas de texto, siendo una herramienta poderosa para el procesamiento de datos en PHP y otros lenguajes.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Include y Require</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.include_require.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="18_Include_Require.php" class="Link" href="../../../PHP/18_Include_Require.php">Se descarga los apuntes sobre la inclusión de archivos</a>
		<p class="subtitulo">Las sentencias include y require permiten reutilizar código en PHP importando archivos externos, mejorando la organización y el mantenimiento de las aplicaciones.</p>
	</div>


	

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Fechas</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.fechas.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="12_Fechas.php" class="Link" href="../../../PHP/12_Fechas.php">Se descarga los apuntes sobre las fechas</a>
		<p class="subtitulo">Las fechas marcan momentos, pero los recuerdos les dan sentido.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">PDF</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.pdf.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="13_PDF.php" class="Link" href="../../../PHP/13_PDF.php">Se descarga los apuntes sobre como generar un PDF.</a>
		<p class="subtitulo">Los documentos PDF conservan la forma, el contenido y la intención, sin importar dónde o cómo se abran.</p>
	</div>

	<div class="Indexacion">
		<div class="Google_1">
			<div class="Google_2">
            <a class="mayor_1" href="../../apuntes.php"><img src="../../ASSETS/IMAGES/mayor que.png" alt="mayor_google"></a>
			<img class="G_1" src="../../ASSETS/IMAGES/G_1.png" alt="e_google">
			<p class="O">o</p>
			<p class="active">o</p>
			<p class="O">o</p>
			<img class="g" src="../../ASSETS/IMAGES/g.png" alt="e_google">
			<img class="L" src="../../ASSETS/IMAGES/l.png" alt="e_google">
			<img class="E" src="../../ASSETS/IMAGES/Google_2015_logo.png" alt="e_google">
            <a class="mayor" href="../../apuntes.php"><img src="../../ASSETS/IMAGES/mayor que.png" alt="mayor_google"></a>
		    </div>
		</div>
		
		<div class="Enlaces_1">
			<a href="../../apuntes.php" class="Enlace_4">1</a>
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