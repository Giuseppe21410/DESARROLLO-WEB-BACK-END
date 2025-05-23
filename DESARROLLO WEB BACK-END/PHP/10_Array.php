<?php
// -----------------------------
// Arrays en PHP
// -----------------------------

// 1. Array indexado (clásico)
$frutas = array("Manzana", "Banana", "Cereza");

// Mostrar elementos individuales
echo "Primera fruta: " . $frutas[0] . "<br>";
echo "Segunda fruta: " . $frutas[1] . "<br>";

// 2. Array asociativo (clave => valor)
$persona = array(
    "nombre" => "Carlos",
    "edad" => 30,
    "profesion" => "Ingeniero"
);

// Acceder a valores por sus claves
echo "<br>Nombre: " . $persona["nombre"] . "<br>";
echo "Edad: " . $persona["edad"] . "<br>";

// Recorrer el array asociativo
echo "<h3>Datos de la persona:</h3>";
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// 3. Array multidimensional (array dentro de otro)
$usuarios = array(
    array("nombre" => "Ana", "edad" => 22),
    array("nombre" => "Luis", "edad" => 28),
    array("nombre" => "Marta", "edad" => 35)
);

echo "<h3>Usuarios:</h3>";
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario["nombre"] . ", Edad: " . $usuario["edad"] . "<br>";
}

?>
