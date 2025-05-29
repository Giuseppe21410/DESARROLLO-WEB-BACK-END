<?php
// Inicializamos las variables vacías para evitar "undefined variable" en el HTML
$name = $email = $gender = $comment = $website = "";

// Comprobamos si el formulario se ha enviado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Validamos y saneamos cada campo recibido del formulario
  $name    = test_input($_POST["name"]);     // Sanea el nombre
  $email   = test_input($_POST["email"]);    // Sanea el correo
  $website = test_input($_POST["website"]);  // Sanea la web (si se usa)
  $comment = test_input($_POST["comment"]);  // Sanea comentarios
  $gender  = test_input($_POST["gender"]);   // Sanea género
}

/**
 * Función de saneamiento de entradas.
 * Se usa para limpiar los datos del usuario antes de procesarlos o mostrarlos.
 * 
 * Medidas de seguridad implementadas:
 * - trim(): Elimina espacios innecesarios al principio y al final.
 * - stripslashes(): Elimina barras invertidas (\) usadas en algunas inyecciones.
 * - htmlspecialchars(): Convierte caracteres especiales en entidades HTML para evitar XSS.
 */
function test_input($data) {
  $data = trim($data);                  // Elimina espacios en blanco
  $data = stripslashes($data);         // Elimina las barras invertidas
  $data = htmlspecialchars($data);     // Convierte caracteres peligrosos en entidades HTML
  return $data;
}
?>

<!-- Formulario HTML de ejemplo para usar este código -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulario seguro</title>
</head>
<body>

<h2>Formulario con Validación en PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> <!--Envía el formulario al mismo archivo actual (autoprocesamiento), pero de forma segura para evitar ejecución de código malicioso en el navegador.-->
  Nombre: <input type="text" name="name">
  <br><br>
  Email: <input type="text" name="email">
  <br><br>
  Web: <input type="text" name="website">
  <br><br>
  Comentario: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Género:
  <input type="radio" name="gender" value="female">Femenino
  <input type="radio" name="gender" value="male">Masculino
  <input type="radio" name="gender" value="other">Otro
  <br><br>
  <input type="submit" name="submit" value="Enviar">
</form>

<?php
// Mostramos los datos saneados como ejemplo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h3>Datos recibidos:</h3>";
  echo "Nombre: $name<br>";
  echo "Email: $email<br>";
  echo "Web: $website<br>";
  echo "Comentario: $comment<br>";
  echo "Género: $gender<br>";
}
?>

</body>
</html>
