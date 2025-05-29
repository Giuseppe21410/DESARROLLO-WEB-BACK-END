<?php 

$cadena = "muciélago";

$contador = 0;

$array = str_split($cadena); // Convierte la cadena en un array de caracteres.

foreach ( $array as $elemento) {
    if ($elemento == "u" || $elemento == "i" || $elemento == "e" || $elemento == "a" || $elemento == "o") {
        $contador++;
    }
}


echo ' El número de vocales es ' . $contador;

?>