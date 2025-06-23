<?php
// Una clase es un molde para crear objetos y un objeto es una instancia de una clase. Un objeto pueden heredar propiedades y metodos. Una clase puede crear diferentes objetos, con propiedades distintas.

// Creamos una clase de frutas: 
class Fruta_{
    // Propiedades (Variables): 
    public $name;
    public $color;

    // Métodos (Funciones)
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        echo 'El nombre de la fruta es ' . $this->name;
    }
}
// Definimos diferentes objetos a partir de la class "Fruta": 
$manzana = new Fruta_(); // Utilizamos la "keyword" new e indicamos la clase. Para acceder a un método utilizamos la función flecha "->".
$manzana->set_name("Manzana");
$manzana->get_name(); // Se imprime "El nombre de la fruta es manzana.

// La "keyword" $this hace referencia al objeto  y solo está disponible dentro de los métodos. El ejemplo está en la clase anterior.
// Otras dos maneras de obtener el nombre la fruta sin requerir métodos: 
echo $manzana->name; // Accedes direcctamente a la propiedad nombre.
$manzana->name="Pera"; // Accede a la propiedad name y le cambia el valor.
?>