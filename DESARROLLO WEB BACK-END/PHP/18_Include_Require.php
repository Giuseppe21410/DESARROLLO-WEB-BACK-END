<?php
// ===============================================
// APUNTES SOBRE include, require, include_once, require_once
// ===============================================

// 1. include
// Incluye y evalúa un archivo. Si no se encuentra, emite una *advertencia* (warning) y el script continúa.
echo "<h3>Ejemplo de include:</h3>";
include 'archivo_inexistente.php'; // No existe, genera warning pero sigue
echo "El script continúa después de un include fallido.<br>";

// 2. require
// Igual que include, pero si el archivo no se encuentra, produce un *error fatal* y el script se detiene.
echo "<h3>Ejemplo de require:</h3>";
// require 'archivo_inexistente.php'; // Provocaría un error fatal y detiene la ejecución
echo "Este mensaje NO se mostraría si el require falla.<br>";

// 3. include_once
// Igual que include, pero solo se incluirá el archivo UNA vez, aunque se llame varias veces.
echo "<h3>Ejemplo de include_once:</h3>";
include_once 'saludo.php'; // Se incluye
include_once 'saludo.php'; // No se vuelve a incluir
echo "Saludo incluido solo una vez con include_once.<br>";

// 4. require_once
// Igual que require, pero previene múltiples inclusiones.
echo "<h3>Ejemplo de require_once:</h3>";
require_once 'saludo.php';
require_once 'saludo.php';
echo "Saludo incluido solo una vez con require_once.<br>";

?>
