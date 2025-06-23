<?php
// Un solo niño, solo puede heredar a un solo padre. Para que una clase herede multiples metodos usamos los "traits":
trait message1 { // Se pueden añadir multiples métodos al mismo trait.
  public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

class Welcome {
  use message1; // Con el keyword "use" implementamos el trait.
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2(); 
?>