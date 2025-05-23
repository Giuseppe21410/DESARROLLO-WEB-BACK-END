// STRING // 

<?php
echo "<br>"; // La clave es que "echo", puede imprimir elementos de "Html".
$string="Hola";

// Funciones para trabajar con strings:

$string.= " mundo"; // Concatenación de strings.
echo "<br>";
echo $string; 
echo "<br>";
echo strlen($string); // Cuenta el número de caracteres.
echo "<br>"; 
echo str_word_count($string);// Cuenta el número de palabras.
echo "<br>";
echo strpos($string,"mundo");
echo "<br>";
echo  strtoupper($string);// Convierte a mayúsculas.
echo "<br>";
echo strtolower($string); // Convierte a minúsculas.
echo "<br>";
echo str_replace("mundo", "world", $string); // Reemplaza una palabra por otra.
echo "<br>";
echo strrev($string);// Invierte el orden de los caracteres.
echo "<br>";
echo trim($string);// Elimina los espacios en blanco al principio y al final.
echo "<br>";
$array= explode(" ", $string); // Divide el string en un array.

// Concanetación de "Arrays": Para concatenar strin se utiliza el operador ".".
echo $array[0]." ".$array[1]; // Concaneta  e imprime los elementos de un array.
echo "<br>";
$x ="Hola";
$y= "mundo";
$z = "&x &y";

// Desempaquetado de Strings: 
echo substr($z,2,4); // Imprime los caracteres del string desde la posición 2 hasta la 4.
echo "<br>";
echo substr($z, 6);// Imprime los caracteres del string desde la posición 6 hasta el final.
echo "<br>";
echo substr($z,4,-2); // Imprime los caracteres del string desde la posición 4 hasta 2 caracteres antes del final.
 echo "<br>";
 echo substr($z, -5, 3);// Imprime los caracteres del string desde 5 caracteres contando desde el final  hasta 3 caracteres antes del final
?>
