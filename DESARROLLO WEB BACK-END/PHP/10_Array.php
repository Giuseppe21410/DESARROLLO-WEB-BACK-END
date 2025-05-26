<?php
// -----------------------------
// Arrays en PHP
// -----------------------------

// 1. Array indexado (clásico)
$frutas = array("Manzana", "Banana", "Cereza");

// Mostrar elementos individuales
echo "Primera fruta: " . $frutas[0] . "<br>";
echo "Segunda fruta: " . $frutas[1] . "<br>";

// 2. Array asociativo (clave => valor)
$persona = array(
    "nombre" => "Carlos",
    "edad" => 30,
    "profesion" => "Ingeniero"
);

// Acceder a valores por sus claves
echo "<br>Nombre: " . $persona["nombre"] . "<br>";
echo "Edad: " . $persona["edad"] . "<br>";

// Recorrer el array asociativo
echo "<h3>Datos de la persona:</h3>";
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// 3. Array multidimensional (array dentro de otro)
$usuarios = array(
    array("nombre" => "Ana", "edad" => 22),
    array("nombre" => "Luis", "edad" => 28),
    array("nombre" => "Marta", "edad" => 35)
);

echo "<h3>Usuarios:</h3>";
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario["nombre"] . ", Edad: " . $usuario["edad"] . "<br>";
}


// -------------------------------
// FUNCIONES BÁSICAS DE ARRAYS
// -------------------------------

// array() - Crea un array
$numeros = array(1, 2, 3);

// array_change_key_case() - Cambia todas las claves a mayúsculas o minúsculas
$asociativo = ["Uno" => 1, "Dos" => 2];
print_r(array_change_key_case($asociativo, CASE_LOWER));

// array_chunk() - Divide un array en fragmentos
print_r(array_chunk($numeros, 2));

// array_column() - Devuelve una columna de un array multidimensional
$personas = [
    ["nombre" => "Ana", "edad" => 30],
    ["nombre" => "Luis", "edad" => 25],
];
print_r(array_column($personas, "nombre"));

// array_combine() - Combina dos arrays (uno como claves, otro como valores)
$claves = ["a", "b", "c"];
$valores = [10, 20, 30];
print_r(array_combine($claves, $valores));

// array_count_values() - Cuenta los valores de un array
$repetidos = [1, "a", 1, "a", 2];
print_r(array_count_values($repetidos));

// array_diff() - Devuelve diferencias entre arrays (solo valores)
$a1 = ["a", "b", "c"];
$a2 = ["a", "c"];
print_r(array_diff($a1, $a2));

// array_diff_assoc() - Compara arrays con clave y valor
$a1 = ["a" => "rojo", "b" => "verde"];
$a2 = ["a" => "rojo", "b" => "azul"];
print_r(array_diff_assoc($a1, $a2));

// array_diff_key() - Compara arrays solo por claves
print_r(array_diff_key($a1, $a2));

// array_fill() - Rellena un array con valores
print_r(array_fill(0, 5, "PHP"));

// array_fill_keys() - Rellena un array usando claves específicas
print_r(array_fill_keys(["uno", "dos"], 100));

// array_filter() - Filtra usando una función
print_r(array_filter($numeros, fn($v) => $v > 1));

// array_flip() - Intercambia claves por valores
print_r(array_flip($asociativo));

// array_intersect() - Devuelve coincidencias entre arrays
print_r(array_intersect($a1, $a2));

// array_key_exists() - Comprueba si existe una clave
var_dump(array_key_exists("Uno", $asociativo));

// array_keys() - Devuelve las claves
print_r(array_keys($asociativo));

// array_map() - Aplica una función a cada valor
print_r(array_map(fn($v) => $v * 2, $numeros));

// array_merge() - Une varios arrays
print_r(array_merge($a1, $a2));

// array_pop() - Extrae el último valor
array_pop($numeros);
print_r($numeros);

// array_push() - Añade al final
array_push($numeros, 99);
print_r($numeros);

// array_rand() - Devuelve claves aleatorias
print_r(array_rand($numeros, 1));

// array_reduce() - Reduce a un solo valor
print_r(array_reduce($numeros, fn($a, $b) => $a + $b, 0));

// array_replace() - Reemplaza valores
print_r(array_replace(["a" => 1], ["a" => 100]));

// array_reverse() - Invierte el orden
print_r(array_reverse($numeros));

// array_search() - Busca un valor y devuelve la clave
print_r(array_search(99, $numeros));

// array_shift() - Elimina el primer elemento
array_shift($numeros);
print_r($numeros);

// array_slice() - Extrae una porción
print_r(array_slice($numeros, 1));

// array_sum() - Suma todos los valores
echo array_sum($numeros);

// array_unique() - Elimina duplicados
print_r(array_unique([1, 1, 2, 2, 3]));

// array_unshift() - Añade elementos al principio
array_unshift($numeros, 0);
print_r($numeros);

// array_values() - Devuelve solo los valores
print_r(array_values($asociativo));

// array_walk() - Aplica una función a cada elemento
array_walk($numeros, function(&$v) { $v += 10; });
print_r($numeros);

// count() - Cuenta los elementos
echo count($numeros);

// in_array() - Comprueba si un valor existe
var_dump(in_array(10, $numeros));

// sort() - Ordena el array
sort($numeros);
print_r($numeros);

// rsort() - Ordena en orden inverso
rsort($numeros);
print_r($numeros);

// shuffle() - Mezcla aleatoriamente
shuffle($numeros);
print_r($numeros);

// range() - Crea un rango de números
print_r(range(1, 5));

?>

