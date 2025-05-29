<?php 

$array = [1,4,6,7,9,12];

$numeros_pares = [];

foreach ($array as $number) {
  if ($number%2 == 0) {
     array_push($numeros_pares,$number);
}
}

echo ' Los números pares son' . $numeros_pares;

?>