// VARIABLES Y TIPOS DE DATOS //

<?php 
$nombre= "Giuseppe"; // Se crean variables añadiendo el símbolo dolar $. Son Case Sensitive.

// Se pueden almacenar diferentes tipos de valores.
$nombre = "Juan";         // Cadena de texto (string)
$edad = 25;               // Número entero (integer)
$altura = 1.75;           // Número decimal (float)
$es_Estudiante = true;     // Valor booleano (boolean)

var_dump($nombre); // Muestra el tipo de varible ()

// Casting: Cambiar el tipo de dato de una variable.
// String  a Int: 
$x="25";
$int_x=(int)$x;

// String a Flot:
$y="25.5";
$float_y=(float)$Y;

// Int a String: 
$z=35;
$string_z= (string)$z;


// Objetos. 
// Son estructuras de datos que almacenan información relacionada entre sí. Cuando un objeto es creado, este hereda toda las propiedades de una clase, pero con valores diferentes.
class Car { // Se crea la clase "Car"
  public $color; // La propiedad "public", permite accedder desde fuera de la clase. La propiedad "private", no permite acceder desde fuera de la clase. La propiedad "protected", permite acceder desde fuera de la clase, pero solo desde la clase y sus hijos
  public $model;
  public function __construct($color, $model) { // Cuando creas la función constructor, PHP llama automáticamente cuando se crea un objeto.
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
echo $myCar->message(); // Muestra el mensaje "My car is a red Volvo!"

declare(strict_types= 1); // Declara tipado estricto.

?>