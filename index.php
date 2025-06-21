<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['busqueda'])){
    header("Location:https://www.google.com ");
		exit();
  }
	if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {
		header("Location:./index_1.php");
		exit();
  }
}
?>

<!DOCTYPE html>
<!-- CORRECCIÓN: El idioma del contenido es español, no inglés. -->
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- CORRECCIÓN: Un título más descriptivo es mejor para el usuario y SEO. -->
  <title>Buscador - Réplica</title>
  
  <!-- RECOMENDACIÓN IMPORTANTE: Las rutas con espacios y mayúsculas ("DESARROLLO WEB BACK-END") son una mala práctica y pueden fallar en algunos servidores. 
       Es mucho mejor usar una estructura simple como "./assets/css/styles.css".
       He mantenido tu ruta, pero te recomiendo cambiarla. -->
  <link rel="stylesheet" href="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/CSS/styles.css"/>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    const textarea = document.getElementById('search-input').value;
    const botonEnviar = document.getElementById('enviar');

    if (textarea !== "" && botonEnviar) {
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
  <div class="wrapper">
    <!-- ENCABEZADO -->
    <header class="Encabezado_Google_Portal">
      <div class="Encabezado_Google_Portal_1">
        <a href="https://about.google/?fg=1&utm_source=google-ES&utm_medium=referral&utm_campaign=hp-header">Sobre Google</a>
        <a href="https://store.google.com/es/?utm_source=hp_header&utm_medium=google_ooo&utm_campaign=GS100042&hl=es">Tienda</a>
      </div>
      <div class="Encabezado_Google_Portal_2">
        <a href="https://mail.google.com/mail/u/0/?ogbl#inbox">Gmail</a>
        <a href="https://www.google.com/imghp?hl=es&authuser=0&ogbl">Imágenes</a>
        <div class="Imagen_fondo">
          <a href="http://localhost/phpmyadmin/">
            <svg class="Imagen_Boton_4" focusable="false" viewBox="0 0 24 24">
              <path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path>
            </svg>
          </a>
        </div>
        <!-- CORRECCIÓN: El texto alternativo debe ser más descriptivo para la accesibilidad. -->
        <img class="Logo_Usuario_Portal" src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/Diseño sin título-Photoroom.png" alt="Avatar de usuario" />
      </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="footer_main_content" id="main-content">
      <div class="footer_main_center">
        <!-- CORRECCIÓN: Usar párrafos para cada letra es malo para la accesibilidad y SEO. 
             Un lector de pantalla leería "B a c k E n d". 
             Es mejor usar un solo encabezado (h1 o h2) y spans para dar estilo a cada letra. -->
        <h1 class="footer_main_titulo">
          <span class="B_footer">B</span><span class="a_footer">a</span><span class="c_footer">c</span><span class="k_footer">k</span>
          <span class="titulo_space"></span>
          <span class="E_footer">E</span><span class="n_footer">n</span><span class="d_footer">d</span>
        </h1>

        <!-- Búsqueda -->
        <div id="search-container" class="Buscador_Portal">
          <!-- CORRECCIÓN: Es buena práctica añadir el atributo 'action' al formulario. -->
          <form id="search-form" method="post" action="index.php">
            <button class="Boton_7" type="submit" name="submit_search" id="enviar">
              <svg class="buscador_3" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg> 
            </button>      
            <input id="search-input" name="busqueda" type="text" class="Buscador_" autocomplete="off" />
            <button id="clear-button" class="Boton_1" type="reset">
              <svg class="Imagen_Boton_1" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
              </svg>
            </button>
            <div class="Barra_lateral"></div>
            <button disabled class="Boton_2">
              <svg class="Imagen_Boton_2" focusable="false" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg">
                <path d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm-40 280v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Z"></path>
              </svg>
            </button>
            <button disabled id="enviar" class="Boton_8">
              <svg class="Gdd5U" focusable="false" viewBox="0 -960 960 960" xmlns="http://www.w3.org/2000/svg"><path d="M480-320q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm240 160q-33 0-56.5-23.5T640-240q0-33 23.5-56.5T720-320q33 0 56.5 23.5T800-240q0 33-23.5 56.5T720-160Zm-440 40q-66 0-113-47t-47-113v-80h80v80q0 33 23.5 56.5T280-200h200v80H280Zm480-320v-160q0-33-23.5-56.5T680-680H280q-33 0-56.5 23.5T200-600v120h-80v-120q0-66 47-113t113-47h80l40-80h160l40 80h80q66 0 113 47t47 113v160h-80Z"></path></svg>
            </button>
          </form>
          <div id="suggestions-box"></div>
        </div>
        <div class="footer_main_botones" id="searchBottons">
            <a href="./index_1.php">Buscar con Google</a>
            <a href="https://doodles.google">Voy a tener suerte</a>
        </div>
      </div>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer>
      <div class="footer_Portal_1">
        <p>España</p>
      </div>
      <div class="footer_barra_horizontal"></div>
      <div class="footer_Portal_2">
        <div class="footer_Portal_2_1">
          <a href="https://business.google.com/es/google-ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpafooter&fg=1">Publicidad</a>
          <a href="https://business.google.com/es/business-profile/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpbfooter&fg=1">Empresa</a>
          <a href="https://www.google.com/search/howsearchworks/?fg=1">Cómo funciona la Búsqueda</a>
        </div>
        <div class="footer_Portal_2_2">
          <a href="https://policies.google.com/privacy?hl=es&fg=1">Privacidad</a>
          <a href="https://policies.google.com/terms?hl=es&fg=1">Términos</a>
          <a href="https://www.google.com/preferences?hl=es&fg=1">Configuración</a>
        </div>
      </div>
    </footer>
  </div>

  <!-- SCRIPT -->
  <script>
    // Seleccionamos los elementos una sola vez para mejor rendimiento.
    const mainContent = document.getElementById("main-content");
    const searchContainer = document.getElementById("search-container");
    const searchForm = document.getElementById("search-form");
    const searchInput = document.getElementById("search-input");
    const clearButton = document.getElementById("clear-button");
    const suggestionsBox = document.getElementById("suggestions-box");
    const searchBottons = document.getElementById("searchBottons");
    
    // Función para poner el buscador en su estado "activo"
    function activateSearch(event) {
      // CORRECCIÓN LÓGICA: Evita que el clic se propague al 'main' y active el 'reset' por error.
      event.stopPropagation(); 
      
      searchContainer.className = "Buscador_2_1";
      searchInput.className = "Buscador_4";
      clearButton.style.display = 'none';
      
      searchForm.style.borderBottom = "1px solid #dadce0";
      searchBottons.innerHTML=""
      
      // Muestra las predicciones
      suggestionsBox.innerHTML = `
        <div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>Actores de Hollywood</p></div>
        <div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Qué es el capitalismo?</p></div>
        <div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Existen los extraterrestres?</p></div>
        <div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Quién fue el escritor de Hamlet?</p></div>
        <div class="busquedas"><img src="./DESARROLLO WEB BACK-END/PORTAFOLIO/ASSETS/IMAGES/reloj.png" alt=""> <p>¿Años de las piramides?</p></div>
        <div class="footer_main_botones" id="searchBottons">
            <a href="./index_1.php" >Buscar con Google</a>
            <a href="https://doodles.google">Voy a tener suerte</a>
        </div>
        <div class="busquedas_"><p><i>Denunciar predicciones inadecuadas.</i></p><a href=""> Más información</a></div>
      `;
    }
    
    // Función para resetear el buscador a su estado inicial
    function resetSearch() {
      searchContainer.className = "Buscador_Portal";
      searchInput.className = "Buscador_";
      searchInput.value = ""; // Limpiar valor por si acaso
      clearButton.style.display = 'block';
      searchForm.style.borderBottom = "0px";
      suggestionsBox.innerHTML = "";
      searchBottons.innerHTML='<a href="./index_1.php" >Buscar con Google</a><a href="https://doodles.google">Voy a tener suerte</a>';
    }

    // Al hacer clic fuera del buscador (en el main), se resetea.
    mainContent.addEventListener("click", resetSearch);
    
    // Al volver a la página desde el historial, se resetea.
    window.addEventListener('pageshow', resetSearch);

    // Al hacer clic DENTRO del buscador, se activa.
    searchContainer.addEventListener("click", activateSearch);
    
    // CORRECCIÓN LÓGICA: Este evento se define una sola vez, no dentro del evento de click.
    // Usamos 'input' que es más versátil que 'keydown' (cubre tecleo, pegar, etc.).
    searchInput.addEventListener("input", () => {
      if (searchInput.value.trim() !== "") {
        searchInput.className = "Buscador_5";
        clearButton.style.display = 'block';
      } else {
        searchInput.className = "Buscador_4";
        clearButton.style.display = 'none';
      }
    });

    // CORRECCIÓN: Escuchamos el evento en el formulario específico, no en todo el documento.
    searchForm.addEventListener("reset", function () {
      // El setTimeout es un buen truco para que esto se ejecute después del reset del navegador.
      setTimeout(() => {
        searchInput.className = "Buscador_4";
        clearButton.style.display = "none";
        searchInput.focus(); // Devolvemos el foco al input.
      }, 0);
    });
  </script>
</body>
</html>

