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
	    <img  class="Logo_Usuario" src="../../ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Logo_Usuario">
    </div>
</header>
<div class="Elementos_sub">
	<a href="../../../../index_1.php">PHP</a>
	<a href="../MARIADB/index.php">Maria DB</a>
	<a href="">Codelgniter</a>
	<a class="active" href="../../apuntes.php">Apuntes</a>
	<a  href="../PROYECTOS/proyectos.php">Proyectos</a>
</div>
<div class="Linea"></div>

<div class="page_content" id="mensaje_3">
	<main class="main">

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

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">MARIADB</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.mariadb.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="01_MariaDB.txt" class="Link" href="../../../MARIADB/APUNTES/01_MariaDB_comandos.txt">Se descarga los apuntes sobre como manipular bases de datos.</a>
		<p class="subtitulo">MariaDB es un sistema de gestión de bases de datos relacional, libre y de alto rendimiento, desarrollado como una alternativa compatible con MySQL.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Clases-Objetos</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.clases_objetos.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="21_Clases_Objetos.php" class="Link" href="../../../PHP/21_Clases_Objetos.php">Se descarga los apuntes sobre las clases y los objetos.</a>
		<p class="subtitulo">En PHP, una clase es un molde que define las propiedades y métodos comunes, mientras que un objeto es una instancia concreta de esa clase que puede usar sus funcionalidades.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Constructor-Destructor</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.constructor_destructor.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="21_OPP_Constructor_Destructor.php" class="Link" href="../../../PHP/22_OPP_Constructor_Destructor.php">Se descarga los apuntes sobre las palabras clave constructor y destructor.</a>
		<p class="subtitulo">En PHP, el constructor (__construct) se ejecuta automáticamente al crear un objeto para inicializarlo, mientras que el destructor (__destruct) se llama cuando el objeto se destruye, permitiendo liberar recursos o realizar tareas finales.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Modificadores de Acceso</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.modificadoresacceso.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="23_Modificadores_de_Acceso.php" class="Link" href="../../../PHP/23_Modificadores_de_Acceso.php">Se descarga los apuntes sobre los modificadores de acceso en OPP.</a>
		<p class="subtitulo">Los modificadores de acceso en PHP —public, protected y private— controlan la visibilidad de propiedades y métodos, definiendo desde dónde pueden ser accedidos dentro del código.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Herencia</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.herencia.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="24_Herencia.php" class="Link" href="../../../PHP/24_Herencia.php">Se descarga los apuntes sobre la herencia en OPP.</a>
		<p class="subtitulo">La herencia en PHP permite que una clase derive de otra, heredando sus propiedades y métodos, lo que favorece la reutilización de código y la creación de jerarquías lógicas entre clases.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Constant Class</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.contactclass.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="25_Constant_Class.php" class="Link" href="../../../PHP/25_Constant_Class.php">Se descarga los apuntes sobre las constantes en clases.</a>
		<p class="subtitulo">En PHP, una constante de clase se define con const y representa un valor fijo que no puede cambiar; se accede a ella usando el operador de resolución de ámbito (::) sin necesidad de instanciar la clase.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Clases Abstractas e Interfaces</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://www.interfaces_abstract_classes.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="26_Interfaces_Abstract_Classes.php" class="Link" href="../../../PHP/26_Interfaces_Abstract_Classes.php">Se descarga los apuntes sobre las clases abstractas y las interfaces en OPP.</a>
		<p class="subtitulo">Tanto las clases abstractas como las interfaces permiten definir estructuras comunes para varias clases, pero mientras las clases abstractas pueden incluir implementación parcial, las interfaces solo definen métodos sin cuerpo que deben ser implementados por completo.</p>
	</div>

	<div class="Contenedor_Proyect">
		<div class="Titulo_Logo">
			<p class="Logo_Proyecto">📚</p>
			<div class="Contenedor">
				<h4 class="Titulo_">Traits</h4>
				<div class="Contenedor_1">
					<p class="Subtitulo_">https://traits.es</p>
					<img src="../../ASSETS/IMAGES/Tres_Puntos.png" alt="Tres_Puntos" class="Tres_Puntos">
				</div>
				
		    </div>
		</div>
		<a download="27_Traits.php" class="Link" href="../../../PHP/27_Traits.php">Se descarga los apuntes sobre los "traits" en OPP.</a>
		<p class="subtitulo">Los Traits en PHP permiten reutilizar métodos entre múltiples clases, resolviendo la limitación de la herencia simple al proporcionar una forma flexible de compartir funcionalidades sin necesidad de heredar.</p>
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


	document.getElementById("mensaje_4").innerHTML='<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Cuántos integrantes tiene el grupo Cutting Crew?</p> </div>' + '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Qué es el anarcocapitalismo?</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿La Tierra es plana?</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Hay multiversos?</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>Habitantes en Italia</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>Manual de Node.JS</p> </div>'+ '<div class="busquedas"><img src="../../ASSETS/IMAGES/reloj.png" alt=""> <p>¿Quién empezó la Guerra de los Cien Años?</p> </div>'+ '<div class="busquedas_"><p><i>Denunciar predicciones inadecuadas.</i></p><a href=""> Más información</a></div>';
	

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