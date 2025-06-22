<?php
// -----------------------------
// Ejemplo de Superglobales en PHP
// -----------------------------

// $_GET se usa para obtener datos pasados por la URL
// Ejemplo de URL: superglobals_demo.php?nombre=Juan&edad=25

if (isset($_GET["nombre"]) && isset($_GET["edad"])) {
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    echo "Hola, $nombre. Tienes $edad años.<br>";
} else {
    echo "No se ha proporcionado nombre o edad en la URL.<br>";
}

// $_SERVER devuelve información sobre el servidor y el entorno de ejecución
echo "Estás visitando: " . $_SERVER['PHP_SELF'] . "<br>"; // Muestra el nombre del archivo actual-
echo "Método de solicitud: " . $_SERVER['REQUEST_METHOD'] . "<br>"; // Muestra el método de solicitud (GET, POST, etc.)
echo "Nombre del host: " . $_SERVER['HTTP_HOST'] . "<br>"; // Muestra el nombre del host del servidor
echo "Agente de usuario: " . $_SERVER['HTTP_USER_AGENT'] . "<br>"; // Muestra el agente de usuario del navegador


// Formulario para usar $_POST
?>

<hr>
<h3>Formulario con método POST</h3>
<form method="POST">
    <label>Tu color favorito: <input type="text" name="color"></label>
    <button type="submit">Enviar</button>
</form>

<?php
// $_POST recoge datos enviados desde formularios
if (isset($_POST["color"])) {
    $color = $_POST["color"];
    echo "Tu color favorito es: $color<br>";
}

// $_REQUEST puede acceder tanto a datos de $_GET como de $_POST
// Pero no se debe usar si necesitas diferenciar entre ambos métodos
if (isset($_REQUEST["color"])) {
    echo "Tu color favorito accedido con REQUEST es: " . $_REQUEST["color"] . "<br>";
}


// $_GET vs $_POST, mientras que $_GET es visible en la URL, $_POST no lo es. Por lo tanto, si se trata de datos sensibles, es mejor usar $_POST. Además, $_GET tiene un límite de tamaño en la URL, mientras que $_POST no lo tiene (aunque hay límites en el tamaño del cuerpo de la solicitud que pueden variar según la configuración del servidor).

// $_SESSION se usa para almacenar datos entre diferentes solicitudes del usuario. 
session_start(); // Inicia la sesión
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0; // Inicializa el contador si no existe
}
$_SESSION["contador"]++;
echo "Has visitado esta página " . $_SESSION["contador"] . " veces.<br>";
// $_COOKIE se usa para almacenar datos en el navegador del usuario
if (!isset($_COOKIE["visitas"])) {
    setcookie("visitas", 1, time() + (86400 * 30)); // Establece una cookie que expira en 30 días
    echo "Bienvenido por primera vez.<br>";
} else  {
    $visitas = $_COOKIE["visitas"] + 1;
    setcookie("visitas", $visitas, time() + (86400 * 30)); // Actualiza la cookie
    echo "Has visitado esta página $visitas veces.<br>";
}

// Para eliminar la coockie: 
setcookie("visitas","",time()-3600); // De esta manera, envimos  la coockie al pasado y se elimina automaticamente.
// $_FILES se usa para manejar archivos subidos por el usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    if ($archivo['error'] == UPLOAD_ERR_OK) {
        $nombreTemporal = $archivo['tmp_name'];
        $nombreArchivo = $archivo['name'];
        move_uploaded_file($nombreTemporal, "uploads/$nombreArchivo");
        echo "Archivo '$nombreArchivo' subido exitosamente.<br>";
    } else {
        echo "Error al subir el archivo.<br>";
    }
}
?>