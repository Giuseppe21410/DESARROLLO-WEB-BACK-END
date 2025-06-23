<?php
// Una clase constante puede ser útil si quieres definir algun dato constante en la clase. Se recomienda nombrar a las constantes con letras mayúsculas. Para acceder desde fuera utilizamos el operador (::). Podemos acceder dentro de la clase a la constante

class FrutaMadura{
    const LEAVING_MESSAGE = "La fruta está madura y  lista para comer.";
    public function Mensaje() {
    echo self::LEAVING_MESSAGE;
  }
}

$Manzana = new FrutaMadura();
$Manzana->Mensaje();
// echo FrutaMadura::LEAVING_MESSAGE; Para acceder desde fuera.

?>