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
	<link rel="stylesheet" href="./ASSETS/CSS/styles.css">
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
</head>
<body>
<header class="Encabezado_Google" id="miEncabezado">
	<a href="../../index.php"><img class="Logo_Google" src="./ASSETS/IMAGES/Google_2015_logo.svg.png" alt="Google_Logo"></a>
	<div class="Buscador">
		<form action="" method="post">
			<input id="mensaje" name="busqueda" type="text" class="Buscador_">
			<button class="Boton_1" type="reset">
				<svg class="Imagen_Boton_1" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
			</button>
			<div class="Barra_lateral"></div>
		    <button disabled class="Boton_2"><svg class="Imagen_Boton_2" focusable="false" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg"><path fill="var(--bbQxAb)" d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm-40 280v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Z"></path></svg></button>
		    <button id="enviar" name="buscar" class="Boton_3"><svg  class="Imagen_Boton_3" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></button>
		</form>
		
	</div>
	<div class="Elementos_Derecha">
		<div class="Imagen_fondo">
			<svg class="Imagen_Boton_4" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
		</div>
	    <img  class="Logo_Usuario" src="./ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
    </div>
</header>
<div class="Elementos_sub">
	<a href="../../index.php" >PHP</a>
	<a href="./PUBLIC/MARIADB/index.php">Maria DB</a>
	<a href="">Codelgniter</a>
	<a class="active" href="./apuntes.php">Apuntes</a>
	<a  href="./PUBLIC/PROYECTOS/proyectos.php">Proyectos</a>
</div>
<div class="Linea"></div>
<div class="page_content">
	<main>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Variables</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.Variables.com</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		</div>
			
		</div>
		<a download="02_Variables_y_tipos_de_datos.php" class="Link" href="../PHP/02_Variables_y_tipos_de_datos.php">Se descarga los apuntes sobre variables y tipos de datos</a>
		<p class="subtitulo">Las variables en PHP se utilizan para almacenar información que puede cambiar a lo largo de la ejecución del programa, como números, textos o resultados de operaciones.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">String</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.string.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		</div>
			
		</div>
		<a download="03_String.php" class="Link" href="../PHP/03_String.php">Se descarga los apuntes sobre cadenas de texto</a>
		<p class="subtitulo">Los strings son secuencias de caracteres que permiten trabajar con texto, ya sea para mostrar mensajes, guardar nombres o realizar búsquedas dentro de palabras y frases.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Maths</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.maths.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="04_Matemáticas.php" class="Link" href="../PHP/04_Matemáticas.php">Se descarga los apuntes sobre matemáticas básicas.</a>
		<p class="subtitulo">PHP incluye operadores matemáticos para realizar cálculos como sumas, restas, multiplicaciones,raíces o incluso potencias, muy útiles en todo tipo de programas.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Operadores</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.operadores.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="05_Operadores.php" class="Link" href="../PHP/05_Operadores.php">Se descarga los apuntes sobre operadores.</a>
		<p class="subtitulo">Los operadores permiten manipular valores y variables, ya sea comparándolos (==, >, <), realizando cálculos (+, -) o evaluando condiciones lógicas (&&, ||).</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Condicionales</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.condicionales.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="06_Condicionales.php" class="Link" href="../PHP/06_Condicionales.php">Se descarga los apuntes sobre condicionales.</a>
		<p class="subtitulo">Las estructuras condicionales como if y else permiten ejecutar distintos bloques de código según se cumplan o no ciertas condiciones, lo que añade lógica al flujo del programa.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Switch</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.switch.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="07_Switch.php" class="Link" href="../PHP/07_Switch.php">Se descarga los apuntes sobre switch.</a>
		<p class="subtitulo">El switch es una alternativa a múltiples if, útil cuando una variable puede tener varios valores distintos, y se desea ejecutar un bloque de código específico según el caso.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Bucles</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.bucles.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="08_Bucles.php" class="Link" href="../PHP/08_Bucles.php">Se descarga los apuntes sobre bucles.</a>
		<p class="subtitulo">Los bucles (while, for, foreach) permiten ejecutar una o más instrucciones de forma repetida, facilitando tareas como recorrer listas, repetir acciones o procesar formularios.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Funciones</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.funciones.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="09_Funciones.php" class="Link" href="../PHP/09_Funciones.php">Se descarga los apuntes sobre funciones.</a>
		<p class="subtitulo">Las funciones son bloques de código que se pueden definir una vez y reutilizar muchas veces, ayudando a organizar mejor el código y evitar repeticiones innecesarias.</p>
	</div> 

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Super Globals</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.super_globals.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="11_SuperGlobals.php" class="Link" href="../PHP/11_Super_Globals.php">Se descarga los apuntes sobre los Super Globals.</a>
		<p class="subtitulo">Las superglobales son variables predefinidas en PHP que permiten acceder a información importante como los datos enviados por formularios ($_POST), parámetros de URL ($_GET), sesiones ($_SESSION), y más.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Array</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.array.es</p>
					<img src="./ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="10_Array.php" class="Link" href="../PHP/10_Array.php">Se descarga los apuntes sobre los array</a>
		<p class="subtitulo">Un array permite almacenar múltiples valores en una sola variable, ya sea como una lista (índices numéricos) o como un conjunto de pares clave-valor (arrays asociativos).</p>
	</div>

	

	<div class="Indexacion">
		<div class="Google_1">
			<div class="Google">
			<img class="G_1" src="./ASSETS/IMAGES/G_1.png" alt="e_google">
			<p class="active">o</p>
			<p class="O">o</p>
			<p class="O">o</p>
			<img class="g" src="./ASSETS/IMAGES/g.png" alt="g_google">
			<img class="L" src="./ASSETS/IMAGES/l.png" alt="l_google">
			<img class="E" src="./ASSETS/IMAGES/Google_2015_logo.png" alt="e_google">
			<a class="mayor" href="./DESARROLLO WEB BACK-END/PORTAFOLIO/PUBLIC/PHP/index_1.php"><img src="./ASSETS/IMAGES/mayor que.png" alt="mayor_google"></a>
		    </div>
		</div>
		
		<div class="Enlaces">
			<a class="active">1</a>
			<a href="./PUBLIC/APUNTES/apuntes_1.php" class="Enlace_2">2</a>
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