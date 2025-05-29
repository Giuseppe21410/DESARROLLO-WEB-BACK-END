<?php 

$array = [1,5,3,5,5,2];
$contador = 0;


foreach ( $array as $elemento) {
    if ($elemento == 5) {
        $contador++;
    }
}


echo ' El número 5 se repite ' . $contador . ' veces.';

?>