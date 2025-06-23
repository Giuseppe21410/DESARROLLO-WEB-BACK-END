<?php
// =============================================
// APUNTES PHP - INTERFACES Y CLASES ABSTRACTAS
// =============================================

/*
 * ¿Qué es una INTERFACE en PHP?
 *
 * - Una interfaz define un conjunto de métodos que una clase debe implementar.
 * - No puede contener implementación, solo la firma de los métodos. Debe añadirse el código a los métodos.
 * - Una clase puede implementar múltiples interfaces.
 * - Ideal para definir un contrato o comportamiento común entre clases distintas.
 */

interface Animal {
    public function hacerSonido();
    public function moverse();
}

// Una clase que implementa la interfaz debe definir todos los métodos
class Perro implements Animal { // Usamos el keyword "implements" para implementar la interfaz.
    public function hacerSonido() {
        echo "Guau guau\n";
    }

    public function moverse() {
        echo "El perro corre\n";
    }
}

class Pato implements Animal {
    public function hacerSonido() {
        echo "Cuac cuac\n";
    }

    public function moverse() {
        echo "El pato nada\n";
    }
}

/*
 * ¿Qué es una CLASE ABSTRACTA en PHP?
 *
 * - Es una clase que no puede instanciarse directamente. Ya que las clases niño tienen 
 * - Puede contener métodos abstractos (sin cuerpo) y métodos concretos (con cuerpo).
 * - Sirve como base para otras clases, que deben implementar los métodos abstractos.
 */

abstract class Figura {
    // Método abstracto: debe ser implementado por las subclases
    abstract public function calcularArea();

    // Método normal: puede tener lógica común
    public function mostrarTipo() {
        echo "Soy una figura geométrica\n";
    }
}

class Cuadrado extends Figura {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends Figura {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// ===========================================
// USO DE LOS EJEMPLOS
// ===========================================

echo "--- Interfaces ---\n";
$miPerro = new Perro();
$miPerro->hacerSonido();  // Guau guau
$miPerro->moverse();      // El perro corre

$miPato = new Pato();
$miPato->hacerSonido();   // Cuac cuac
$miPato->moverse();       // El pato nada

echo "\n--- Clases Abstractas ---\n";
$cuadrado = new Cuadrado(4);
echo "Área del cuadrado: " . $cuadrado->calcularArea() . "\n";

$circulo = new Circulo(3);
echo "Área del círculo: " . $circulo->calcularArea() . "\n";

$circulo->mostrarTipo();  // Llamada a método concreto de la clase abstracta
?>
