<?php
// Consiste en que una clase deriva de otra clase. La clase niño hereda todas las propiedades públicas o protegidas de la clase adulta, y además, puede tener sus propios métodos y clases. Usamos la "keyword" extends para extender a la clase niño. 

class Fruit {
    public $name;

    public $color; 

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }

    protected function intro(){
        echo 'El nombre está fruta es {$this->name} y su color es {$this->color}.';
        
    }

    public function message(){ // Para evitar que el método se sobreescriba, puedes utilizar la keyword "final" al comienzo. Lo qe mostrará un error.
        echo 'El nombre está fruta es {$this->name} y su color es {$this->color}.';
    }
}

// Extendemos la clase Fruta a la clase Strawberry:
class Strawberry extends Fruit{
    public function mensaje(){
        echo '¿Soy una fruta o un arandano?';
        $this->intro(); // Permite llamar a un método protegido desde una clase derivada.
    }

    public function message(){ // De esta manera estamos "overriding", o lo que es lo mismo, sobrescribiendo al método.
        echo 'El nombre está fruta es {$this->name} y no tiene color.';
    }
}

$strawberry = new Strawberry("Strawberry","Rojo");
$strawberry->mensaje(); 
?>