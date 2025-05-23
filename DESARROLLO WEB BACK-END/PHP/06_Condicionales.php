// Condicionales If Else ElseIf // 

<?php
// Sintáxis básica de los condicionales: 
$numero=20;

if ($numero>0) {
    echo "El número".$numero,"es mayor que 0";
} elseif ($numero< 0) { // Elseif permite anidar condicionales.
    echo "El número".$numero,"es menor que 0";
} else {
    echo "Ingresa un número.";
}

//Recuerda el uso de operadores logicos y de comparación.

?>