<?php 

$array = [1,4,6,7,9,12];



$cadena_invertida = [];

for ($i = count($array) - 1; $i >= 0; $i--) {
    array_push($cadena_invertida, $array[$i]);
}


echo ' La cadena invertida es ' . $cadena_invertida;

?>