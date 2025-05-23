// OPERADORES // 

<?php
// Operadores aritmeticos: 
$x=1; 
$y= 2;
echo $x+$y; // Suma. 
echo $x - $y; // Resta.
echo $x * $y; // Multiplicacion.
echo $x / $y; // Division.
echo $x % $y; // Resto de la division.
echo $x ** $y;// Exponente.

// Operadores de Asignación: 
$x=$y; // x=y;
$x += $y; // x=x+y;
$x -= $y; // x=x-y;
$x *= $y; // x=x*y;
$x /= $y; // x=x/y;
$x %= $y; // x=x % y;

// Operadordes de Comparación: 
echo $x==1; // Igual a.
echo $x!=1; // Diferente a.
echo $x===1; // Identico a. Es decir, igual y el mismo tipo de dato.
echo $x!==1; // No iddentico a.
echo $x > 2; // Mayor que.
echo $x < 2; // Menor que.
echo $x >= 1; // Mayor o igual que.
echo $x <= 2;// Menor o igual que dos. 

// Incremento / Decremento:
echo ++$x; // Incrementa el valor de x y lo muestra.
echo --$x; // Decrementa el valor de x y lo muestra.
echo $x++; // Muestra el valor de x y luego lo incrementa.
echo $x--; // Muestra el valor de x y luego lo decrementa.

// Operadores lógicos: 
if ($x >=1 && $x==1 ) { // Los símbolos "&&" son los operadores lógicos AND, "||" OR , "!" No.
    echo "Es verdadero";
}
if ($x >=1 || $x==1 ) { // Los símbolos "&&" son los operadores lógicos AND, "||" OR , "!" No.
    echo "Es verdadero";
}
if (!$x==1) { // Los símbolos "&&" son los operadores lógicos AND, "||" OR , "!" No.
    echo "Es verdadero";
}

// Operador Ternario: 
$nombre="Giuseppe"; 
$usuario= $nombre == "Giuseppe" ? "Bienvenido" : "No eres Giuseppe"; // Si la condición es verdadera, muestra el primer valor, si no muestra el segundo valor.
// Visualización larga: 
if ($nombre=="Giuseppe"){
    return "Bienvenido";
} else {
    return "No eres Giuseppe";
}







?>