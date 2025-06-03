<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_1.index</title>
    <link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="../../index.php"><img src="../../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
    </header>
    <div class="page_container">
    <main class="bg-light">
  <div class="main_container_registro">
    <h2 class="mb-4 text-primary"><i>Crea un nuevo hilo y comparte tus ideas</i></h2>

    <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="POST">
      <fieldset class="mb-4">

        <!-- Título del hilo -->
        <div class="mb-3">
          <label for="titulo" class="form-label">Título del hilo:</label>
          <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
        <label class="form-label">Foro:</label>
        <select  class="form-select" name="foro" id="pais">
          <option selected disabled>Selecciona el foro en el que se añada:</option>
           <option value="social">Social</option>
              <option value="arte">Arte</option>
              <option value="videojuegos">Videojuegos</option>
              <option value="libros">Libros</option>
              <option value="tecnologia">Tecnología</option>
              <option value="cine">Cine</option>
              <option value="coches">Coches</option>            
        </select> 
        </div>
        

        <!-- Contenido del hilo -->
        <div class="mb-3">
          <label for="contenido" class="form-label">Descripción:</label>
          <textarea id="contenido" name="contenido" class="form-control" rows="6" placeholder="Escribe aquí tu pregunta, idea o comentario..." required></textarea>
        </div>

      </fieldset>

      <!-- Botón -->
      <div class="d-flex justify-content-end gap-4">
        <button type="submit" class="btn btn-primary">Publicar hilo</button>
      </div>
    </form>
  </div>
</main>


        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="../Contactanos.php">Contáctanos</a>
                    <a  target="_blank" href="https://www.php.net">Política y privacidad</a>
                    <a target="_blank" href="https://www.php.net">Ayuda</a>
                </div>
                <div class="footer_container_2_text">
                <p>© 2025 Giuseppe Fuentes Moreno. Todos los derechos reservados.</p>
                </div>
                <div class="footer_container_1_img">
                    <a target="_blank" href="https://github.com/Giuseppe21410/DESARROLLO-WEB-BACK-END/tree/main/DESARROLLO%20WEB%20BACK-END/PHP/PROYECTO"><img src="../../ASSETS/IMAGES/Logo_Github.png" alt="Logo_GitHub"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>