<?php
// Existen tres modificadores de acceso para las propiedades  y métodos:
    // 1. "public" : Presente por defecto donde la propiedad y el método son accesibles desde cualquier lugar del script.
    // 2. "protected": Solo se puede modificar la propiedad y el métood de una clase a partir de clases derivadas de esa clase.
    // 3. "private": Solo se pueden modificar los métodos y propiedades desde la clase.
// El siguiente método es con propiedades, pero es igual de extensible para los métodos: 
class Fruta_1{
    public $nombre;
    protected $color;

    private $peso; 
}
$mango=new Fruta_1();
$mango->nombre = 'Mango'; // OK
//$mango->color = 'Yellow'; // ERROR
//$mango->peso = '300'; // ERROR
?>