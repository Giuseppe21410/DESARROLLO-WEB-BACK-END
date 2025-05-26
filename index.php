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
	<link rel="stylesheet" href="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/CSS/styles.css">
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
	<img class="Logo_Google" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Google_2015_logo.svg.png" alt="Google_Logo">
	<div class="Buscador">
		<form action="" method="post">
			<input name="busqueda" type="text" class="Buscador_">
			<button class="Boton_1" type="reset">
				<img class="Imagen_Boton_1" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Boton_Borrar.png" alt="Boton_borrar">
	        </button>
		<div class="Barra_lateral"></div>
		<button disabled class="Boton_2"><img class="Imagen_Boton_2" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Sonido.png" alt="Boton_Voz"></button>
		<button  class="Boton_3"><img class="Imagen_Boton_3" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Buscar.png" alt="Boton_Buscar"></button>
		</form>
	</div>
	<div class="Elementos_Derecha">
		<div class="Imagen_fondo_1">
			<img class="Imagen_Boton_5" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/config.png" alt="Boton_Configuración">
		</div>
		<div class="Imagen_fondo">
			<img class="Imagen_Boton_4" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Aplicaciones.png" alt="Boton_Aplicaciones">
		</div>
	    <img  class="Logo_Usuario" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
    </div>
</header>
<div class="Elementos_sub">
	<a href="" class="active">PHP</a>
	<a href="">Maria DB</a>
	<a href="">Codelgniter</a>
	<a href="./DESARROLLO WEB BACK-END/PORTAFOLIO/apuntes.php">Apuntes</a>
</div>
<div class="Linea"></div>

<div class="page_content">
	<main>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">👋</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Hola Mundo!</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.hola_mundo.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		</div>
			
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/PHP/01_Hello_World.php">Se imprime "Hola Mundo"</a>
		<p class="subtitulo">Este proyecto imprime "Hola Mundo" como prueba inicial.Sirve para verificar que el entorno PHP está funcionando correctamente.</p>
	</div>

	
	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🧮</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Calculadora</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.calculadora.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/01_Calculadora/index.php">Permite crea una calculadora virtual</a>
		<p class="subtitulo">Una calculadora es una herramienta que permite realizar operaciones matemáticas de forma rápida, precisa y sencilla, facilitando la resolución de cálculos cotidianos o complejos.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">👤</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Inicia Sesión</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.sesion_inicio.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/02_Inicia_Sesion/index.php">Despliega una interfaz de sesión</a>
		<p class="subtitulo">Una buena interfaz de inicio de sesión debe ser intuitiva, rápida y transmitir seguridad al usuario desde el primer momento.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📝</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Notas Alumnado</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.notas.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/03_Notas/index.php">Despliega una interfaz que permite almacenar las notas del alumnado</a>
		<p class="subtitulo">La interfaz debe permitir al profesorado registrar, consultar y gestionar fácilmente las notas del alumnado de forma intuitiva y segura.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">💵</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Cambio divisa</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.divisa_change.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/04_Cambio_Divisa/index.php">Despliega una interfaz que permite cambiar el valor de una moneda a otra</a>
		<p class="subtitulo">La interfaz debe permitir al cliente cambiar y consultar fácilmente el valor de una cantidad de dinero para diferentes monedas.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">❔</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Funciones matemáticas</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.funciones.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/05_Funciones/index.php">Despliega una interfaz que te permite realizar diferentes tipos de operaciones</a>
		<p class="subtitulo">Estas herramientas interactivas facilitan cálculos numéricos comunes de manera sencilla y rápida, combinando la potencia de las funciones.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🧮</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Tabla de multiplicaciones</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.tabla_multiplicar.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/06_Tablas_de_Multiplicar/index.php">Despliega una tabla de multiplicar</a>
		<p class="subtitulo">Multiplicar 3 por 4 significa sumar el número 3 cuatro veces, lo que da como resultado 12.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📦</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Mostrar inventario</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.inventario.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/07_Inventario_Array/index.php">Despliega el inventario de productos de un cliente</a>
		<p class="subtitulo">El inventario de productos está actualizado y refleja con precisión la disponibilidad de cada artículo en el almacén.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📦</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Mostrar inventario de ventas</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.inventario_ventas.es</p>
					<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>		
		</div>
		</div>
		<a class="Link" href="./DESARROLLO WEB BACK-END/EJERCICIOS/08_Inventario_CSV/index.php">Despliega el inventario de ventas de una empresa</a>
		<p class="subtitulo">El inventario de ventas de la empresa refleja los productos comercializados, sus precios, unidades vendidas y fechas clave, permitiendo un control eficiente del rendimiento y la demanda del mercado.</p>
	</div>

    <h3  class="Titulo_Imagenes">Imágenes</h3>
    <div class="Imagenes">
		<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/image_1.jpeg" alt="Imagen_1">
		<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/image_2.jpg" alt="Imagen_2">
		<img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/image_3.jpg" alt="Image_3">
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