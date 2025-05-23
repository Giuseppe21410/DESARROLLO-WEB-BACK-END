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
echo "Estás visitando: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Método de solicitud: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Nombre del host: " . $_SERVER['HTTP_HOST'] . "<br>";

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

?>