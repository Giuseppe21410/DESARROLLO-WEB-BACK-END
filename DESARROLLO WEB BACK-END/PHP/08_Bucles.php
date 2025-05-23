// BUCLES //

<?php
// Bucle While:
$i = 1; // Se inicializa una variable de indexación.
while ($i < 6) { // Corre a traves de un bloque codigo mientras la condición sea verdadera.
  echo $i;
  $i++;
}

// Bucle For: 
for ($i = 1; $i < 5; $i++) { // Corre a traves de un bloque de codigo a traves de un rango de valores.
    echo "The number is $i <br>";
}

// Bucle Foreach:
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) { // Corre  a traves de los elementos de un array.
  echo "$x : $y <br>";
}

// Bucle Do-While:
$i = 1;

do{ // Ejecuta un bloque de código al menos una vez, y luego repite la ejecución mientras una condición sea verdadera.
    $i++;
    echo $i;
}while ($i < 5);

// Break: 
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break; // Detiene por completo la ejecución del bloque de código.
    }
    echo "$i ";
}

// Continue:
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;// Salta a la siguiente iteración del bucle.
    }
    echo "$i ";
}
?>