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
	<img class="Logo_Google" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Google_2015_logo.svg.png" alt="Google_Logo">
	<div id="mensaje_1" class="Buscador">
		<form id="mensaje_5" method="post">
			<div id="buscador"></div>
			<input id="mensaje" name="busqueda" type="text" class="Buscador_">
			<button id="buscador_2" class="Boton_1" type="reset">
			<svg class="Imagen_Boton_1" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
	        </button>
		<div class="Barra_lateral"></div>
		<button disabled class="Boton_2"><svg class="Imagen_Boton_2" focusable="false" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg"><path fill="var(--bbQxAb)" d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm-40 280v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Z"></path></svg></button>
		<button  id="enviar" class="Boton_3"><svg  class="Imagen_Boton_3" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></button>
		</form>
		<div id="mensaje_4">
		</div>
	</div>
	<div class="Elementos_Derecha">
		<div class="Imagen_fondo">
		<a href="http://localhost/phpmyadmin/"><svg class="Imagen_Boton_4" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg></a>	
		</div>
	    <img  class="Logo_Usuario" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
    </div>
</header>
<div class="Elementos_sub">
	<a href="" class="active">PHP</a>
	<a href="./DESARROLLO WEB BACK-END/PORTAFOLIO/PUBLIC/MARIADB/index.php">Maria DB</a>
	<a href="">Codelgniter</a>
	<a href="./DESARROLLO WEB BACK-END/PORTAFOLIO/apuntes.php">Apuntes</a>
	<a  href="./DESARROLLO WEB BACK-END/PORTAFOLIO/PUBLIC/PROYECTOS/proyectos.php">Proyectos</a>
</div>
<div class="Linea"></div>

<div class="page_content" id="mensaje_3">
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

	<div class="Indexacion">
		<div class="Google_1">
			<div class="Google">
			<img class="G_1" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/G_1.png" alt="e_google">
			<p class="active">o</p>
			<p class="O">o</p>
			<p class="O">o</p>
			<img class="g" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/g.png" alt="g_google">
			<img class="L" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/l.png" alt="l_google">
			<img class="E" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Google_2015_logo.png" alt="e_google">
			<a class="mayor" href="./DESARROLLO WEB BACK-END/PORTAFOLIO/PUBLIC/PHP/index_1.php"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/mayor que.png" alt="mayor_google"></a>
		    </div>
		</div>
		
		<div class="Enlaces">
			<a class="active">1</a>
			<a href="./DESARROLLO WEB BACK-END/PORTAFOLIO/PUBLIC/PHP/index_1.php" class="Enlace_2">2</a>
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

<script>
  document.getElementById("mensaje_3").addEventListener("click", function () {
    document.getElementById("mensaje_1").className = "Buscador";
    document.getElementById("buscador").innerHTML = '';
    document.getElementById("buscador_2").style.display = 'block';
    const input = document.getElementById("mensaje");
    input.className = "Buscador_";
	document.getElementById("mensaje").value="";
	document.getElementById("mensaje_5").style.borderBottom = "0px";
	document.getElementById("mensaje_4").innerHTML="";
  });

window.addEventListener('pageshow', (event) => {
  document.getElementById('mensaje').value = '';
  document.getElementById("mensaje_1").className = "Buscador";
  document.getElementById("buscador_2").style.display = 'block';
  document.getElementById("buscador").innerHTML = '';
  document.getElementById("mensaje_5").style.borderBottom = "0px";
  document.getElementById("mensaje_4").innerHTML="";

});




  document.getElementById("mensaje_1").addEventListener("click", function () {
	const input = document.getElementById("mensaje");
    let texto = input.value;

    input.className = "Buscador_4";
    document.getElementById("buscador_2").style.display = 'none';

	document.getElementById("mensaje_5").style.borderBottom = "1px solid #dadce0";


	document.getElementById("mensaje_4").innerHTML='<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>Actores de Hollywood</p> </div>' + '<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Qué es el capitalismo?</p> </div>'+ '<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Existen los extreterrestes?</p> </div>'+ '<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Quién fue el escritor de Hamlet?</p> </div>'+ '<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>Habitantes en España</p> </div>'+ '<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>Manual de PHP</p> </div>'+ '<div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Cuándo empezó la Segunda Guerra Munidal?</p> </div>'+ '<div class="busquedas_"><p><i>Denunciar predicciones inadecuadas.</i></p><a href=""> Más información</a></div>';
	
    input.addEventListener("keydown", function () {
	  let texto = input.value;
      if (texto.trim() !== "") {
        input.className = "Buscador_5";
        document.getElementById("buscador_2").style.display = 'block';
      } else {
        input.className = "Buscador_4";
        document.getElementById("buscador_2").style.display = 'none';
      }
    });


    input.className = "Buscador_4";
    document.getElementById("mensaje_1").className = "Buscador_2";
    document.getElementById("buscador").innerHTML = `
      <svg class="buscador_3" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5
        6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5
        4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5
        9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
      </svg>`;
  });

  document.addEventListener("reset", function () {
    const input = document.getElementById("mensaje");
    setTimeout(() => {
      input.disabled = false;
      input.readOnly = false;
      input.className = "Buscador_4";
      document.getElementById("buscador_2").style.display = "none";
	  input.focus();
    }, 0);
  });
</script>



</body>
</html>