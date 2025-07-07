<!DOCTYPE html>
<html>
<head>
    <title>Login Inventario</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
        }

        body {
            background: #F6F1EB;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
        }


        .Imagen_1 {
            width: 200px;
            margin-bottom: 5px;
        }
        #maquina_letras::after {
         content: '|';
         animation: parpadeo 0.7s infinite;
    }

     @keyframes parpadeo {
       0%, 100% { opacity: 1; }
       50% { opacity: 0; }
     } 
     
     .Letras_Inicio {
         font-size: 2rem;
         color: #7C6A9D;
         font-weight: 700;
         margin-bottom: 20px;
         font-family: Georgia, 'Times New Roman', Times, serif;
     }
    
    </style>
    <link rel="icon" type="image/png" href="<?=base_url('favicon.png') ?>" sizes="96x96" />
</head>
<body>
    <div id="maquina" class="login-container">
        <div id="maquina_letras" class="Letras_Inicio">

        </div>  
    </div>
    <script>
  const baseUrl = "<?= base_url() ?>"; // Ruta base generada por PHP
  const texto = "Esencias Cálidas";
  const velocidad = 125;
  let i = 0;

  function escribir() {
    const contenedor = document.getElementById("maquina");
    const letras = document.getElementById("maquina_letras");

    // Limpiar solo la parte de texto, no todo el contenedor
    letras.innerHTML = "";

    // Resetear contenido visual
    contenedor.style.background = "none";
    contenedor.style.boxShadow = "none";
    
    // Asegurarse de que la imagen solo se inserta una vez
    if (!document.querySelector(".Imagen_1")) {
     const video = document.createElement("video");
     video.src = baseUrl + "assets/video/video_start.mp4";
     video.className = "Imagen_1";
  
     // Recomendado para que se vea y funcione correctamente:
     video.autoplay = true;
     video.loop = true;
     video.muted = true;      // Importante: los navegadores solo permiten autoplay si está silenciado
     video.playsInline = true; // Para móviles

     contenedor.insertBefore(video, letras);
   }
   

    function escribirLetra() {
      if (i < texto.length) {
        letras.innerHTML += texto.charAt(i);
        i++;
        setTimeout(escribirLetra, velocidad);
      } else{
        CambiarContenidoConDelay();
      }
    }

    escribirLetra();
  }

  window.onload = escribir;

  function Redirigir() {
    // Redirige a la página de inicio después de 3 segundos
    setTimeout(() => {
      window.location.href = baseUrl + '/login'; // Cambia a la ruta de login
    }, 3500);
  }

  Redirigir();
</script>
</body>
</html>