<?php
// -------------------------------------------
// Funciones en PHP
// -------------------------------------------

// Esta es una función simple que no recibe parámetros
function saludar() {
    echo "¡Hola, mundo!<br>";
}

// Llamamos a la función
saludar();

// Esta función recibe un parámetro
function saludarPersona($nombre) {
    echo "Hola, $nombre<br>";
}

saludarPersona("Carlos");  // Salida: Hola, Carlos

// Función con valor de retorno
function sumar($a, $b) {
    return $a + $b;
}

$resultado = sumar(5, 3); // Guardamos el valor que devuelve la función
echo "5 + 3 = $resultado<br>";  // Salida: 5 + 3 = 8

// Función con valores por defecto
function presentar($nombre = "Anónimo", $edad = 0) {
    echo "Nombre: $nombre, Edad: $edad<br>";
}

presentar();  // Usará los valores por defecto
presentar("Laura", 25); // Mostrará los valores dados

// Función con tipo de retorno (PHP 7+)
function multiplicar(float $x, float $y): float { // Indicamos que devuelve un float.
    return $x * $y;
}

echo "4.5 x 2 = " . multiplicar(4.5, 2) . "<br>";

// Función anónima (función sin nombre, útil para callbacks)
$mensaje = function($texto) {
    echo "Mensaje: $texto<br>";
};

$mensaje("Este es un ejemplo de función anónima");

