<?php
// La función _construct permite inicializar las propiedades de un objeto a partir de la creación del objeto.
// Veamos un ejemplo: 
class Fruta{
    // Propiedades:
    public $nombre;

    public $color;

    // Métodos:

    function __construct($nombre,$color){
        $this->color=$color;
        $this->nombre=$nombre;
    }

    function __destruct(){
        echo "La fruta es {$this->nombre}";
    }
    
}

$manzana= new Fruta("Manzana","Verde");//Pasamos como parametros las variables y se llama directamente a la función.

//Imprimimos las propiedades del objeto manzana: 
echo "Nombre:" . $manzana->nombre;
echo "<br>";
echo "Color:" . $manzana->color;

// La función destructor es llamada cuando se elimina el objeto, el script finaliza o sale, es decir, se llamará automaticamente al final de un script.

?>