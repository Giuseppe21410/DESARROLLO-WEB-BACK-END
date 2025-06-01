<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_1.index</title>
    <link rel="stylesheet" href="../ASSETS/CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="Logo">
            <a href="../index.php"><img src="../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
    </header>
    <div class="page_container">
    <main class="bg-light">
        <div class="main_container">
        <h2  class="mb-4 text-primary"> <i>Accede a tu cuenta para participar en la conversación...</i></h2>
      <form  class="p-4 ml-5 mr-5 bg-white rounded shadow" method="" enctype="multipart/form-data">
        <fieldset class="mb-4">
        <!--Usuario/Corrreo:-->
        <div class="mb-3">
        <label class="form-label" for="Usuario"> Usuario/Correo electrónico:</label><br>
        <input type="text" id="Usuario" name="Usuario" class="form-control" required>
        </div>
        <!--Contraseña:-->
        <div class="mb-3">
          <label for="password" class="form-label"> Contraseña:</label><br>
          <input type="text" id="password" name="password" class="form-control" required>
        </div>

        <div class="mb-0">
          <a class="enlace_registro" href="./Registro.php">¿Estás registrado?</a>
        </div>
    </fieldset>
        <!--Botones-->
        <div class="d-flex justify-content-end gap-4">
        <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
        </div>
      </form> 
   </div>
</main>
        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="./Contactanos.php">Contáctanos</a>
                    <a  target="_blank" href="https://www.php.net">Política y privacidad</a>
                    <a target="_blank" href="https://www.php.net">Ayuda</a>
                </div>
                <div class="footer_container_2_text">
                <p>© 2025 Giuseppe Fuentes Moreno. Todos los derechos reservados.</p>
                </div>
                <div class="footer_container_1_img">
                    <a target="_blank" href="https://github.com/Giuseppe21410/DESARROLLO-WEB-BACK-END/tree/main/DESARROLLO%20WEB%20BACK-END/PHP/PROYECTO"><img src="../ASSETS/IMAGES/Logo_Github.png" alt="Logo_GitHub"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>