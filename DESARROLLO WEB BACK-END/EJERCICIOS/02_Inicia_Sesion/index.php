<?php
// Declaramos las variables inciales:
$usuario="Tu_padre23";
$contraseña="papa";
$no_completa="";
$error="El usuario o la contraseña no son correctas.";
// Creamos la interacción con el formulario:
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if (isset($_GET["usuario"]) && isset($_GET["contraseña"]) && isset($_GET["terms"])) {
            $usuario_recibido=$_GET["usuario"];
            $contraseña_recibida=$_GET["contraseña"];
            if ($usuario_recibido== $usuario && $contraseña== $contraseña_recibida){
                 header("Location:./index_1.php"); // De esta manera redirigimos a la página destino.
                 exit(); 
            } else { // Si la contraseña o el usario son incorrectos.
                $no_completa=1;
            }
    }   
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de sesión.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body class="bg-ligth">
    <div class="container mt-5"> 
    <h2 class="mb-4"> Inicia Sesión</h2>
    <form  class="p-4 bg-white rounded shadow" method="GET" enctype="multipart/form-data">
        <fieldset class="mb-4">
            <legend class="h5">Datos personales</legend>
        <!--Usuario:-->
        <div class="mb-3">
        <label class="form-label" for="Usuario"> Usuario:</label><br>
        <input type="text" id="Usuario" name="usuario" class="form-control">
        </div>
        <!--Contraseña:-->
        <div class="mb-3">
         <label for="password" class="form-label"> Contraseña:</label><br>
        <input type="password" name="contraseña" class="form-control">
        </div>       
        <!--Terms-->
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terms" name="terms" value="1">
           <label class="form-check-label"> Acepte los terminos y condiciones</label>
        </div>
        <!--Botones-->
        <div class="d-flex gap-4">
        <button class="btn btn-light" type="reset">Borrar todo</button>
        <button class="btn btn-light" type="submit">Enviar</button>
        </div>

        <?php 
        if ($no_completa == 1) { // De esta manera imprimimos un div con "$error".
         echo '<div class="container-center mt-5" style="color:black;">' . htmlspecialchars($error) . '</div>';
        }
        ?>
    </form> 
  </div>
</body>
</html>