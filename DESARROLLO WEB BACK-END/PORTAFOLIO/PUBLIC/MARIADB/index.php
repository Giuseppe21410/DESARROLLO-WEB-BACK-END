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
	<a href="../../../../index.php"><img class="Logo_Google" src="../../ASSETS/IMAGES/Google_2015_logo.svg.png" alt="Google_Logo"></a>
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
		<div class="Imagen_fondo_1">
			<img  class="Logo_Usuario" src="../../ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
		</div>
    </div>
</header>
<div class="Elementos_sub">
	<a href="../PHP/index.php">PHP</a>
	<a class="active">Maria DB</a>
	<a href="../APUNTES/index.php">Apuntes</a>
	<a  href="../PROYECTOS/index.php">Proyectos</a>
</div>
<div class="Linea"></div>

<div class="page_content" id="mensaje_3">
	<main class="main">
	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Biblioteca</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https:/bases_datos_biblioteca.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a type="download" class="Link" href="../../../MARIADB/BASES DE DATOS/biblioteca_municipal.sql">Se genera un SQL sobre una biblioteca</a>
		<p class="subtitulo">Un foro es un espacio abierto de intercambio donde las ideas, dudas y conocimientos se comparten para que todos aprendan.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📱</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Redes Sociales</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https:/bases_datos_RRSS.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="../../../MARIADB/02_Insetar_datos-Crear_Tablas-Actualizar_y_eliminar_datos.php">Se genera un script para crear una base de datos en PHPMyAdmin</a>
		<p class="subtitulo">Una base de datos para redes sociales es el corazón que conecta usuarios, gestiona sus relaciones y almacena sus publicaciones para crear una experiencia interactiva y dinámica.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🐠</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Turismo</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https:/invent_turismo.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a type="download" class="Link" href="../../../EJERCICIOS/13_Inventario_de_datos_de_hoteles/index.php">Se genera un inventario sobre establecimientos hoteleros con filtros</a>
		<p class="subtitulo">El inventario de hoteles incluye la disponibilidad de habitaciones, tarifas, servicios y condiciones de reserva en tiempo real.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">🗣</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Agenda de Contactos</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https:/agenda_contactos.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>	
		</div>
		</div>
		<a class="Link" href="../../../EJERCICIOS/14_Agenda_Contactos/wiew.php">Se genera una agenda para almacenar, eliminar y modificar contactos.</a>
		<p class="subtitulo">Una agenda de contactos es una herramienta organizada que permite almacenar, consultar y gestionar fácilmente la información personal y profesional de diversas personas.
</p>
	</div>

    <h3  class="Titulo_Imagenes">Imágenes</h3>
    <div class="Imagenes">
		<img src="../../ASSETS/IMAGES/image_5.jpg" alt="Imagen_1">
		<img src="../../ASSETS/IMAGES/image_6.jpg" alt="Imagen_2">
		<img src="../../ASSETS/IMAGES/image_7.jpg" alt="Image_3">
	</div>
 </div>
</main>
<footer>
	<div class="footer_content_10">
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


	document.getElementById("mensaje_4").innerHTML='<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Cuántos integrantes tiene el grupo Europe?</p> </div>' + '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Qué es el socialismo?</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿La Teoría del todo existe?</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Cuántos planetas hay en el Universo?</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>Habitantes en China</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>Manual de Phyton</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Quién empezó la Guerra de Irak?</p> </div>'+ '<div class="busquedas_"><p><i>Denunciar predicciones inadecuadas.</i></p><a href=""> Más información</a></div>';

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

  const searchInput = document.getElementById("mensaje");
  const clearButton = document.getElementById("buscador_2");

  searchInput.addEventListener("input", () => {
      if (searchInput.value.trim() !== "") {
        searchInput.className = "Buscador_5";
        clearButton.style.display = 'block';
      } else {
        searchInput.className = "Buscador_4";
        clearButton.style.display = 'none';
      }
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