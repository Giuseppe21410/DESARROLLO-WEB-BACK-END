<?php
// Con la extensión "Filters()" en PHP podremos validar y sanitizar datos. Vemos diferentes ejemplos: 
    // La función "filter_var()" salinitiza y valida al mismo tiempo. 

    // Sanitizar una cadena de texto: 
    // En el siguiente ejemplo, "filter_var()" elimina todos los HTML tags de una cadena de texto: 
    $Cadena= "<h1>Hola</h1>";
    $NewCadena = filter_var($Cadena, FILTER_SANITIZE_STRING); // Tienes que pasar lo que quieres filtrar y el tipo de filtro.
    echo $NewCadena;

    // Validar un entero:
    // La función antes mencionada comprueba si una variable es un entero. 
    $int=100;

    if (filter_var($int,FILTER_VALIDATE_INT) === 0 || !$filter_var($int,FILTER_VALIDATE_INT) == false){
        echo "El entero es válido."; // Un pequeño detalle es que hemos añadido la execpción para enteros iguales a cero, ya que los función los interpreta como falsos.
    }else {
        echo "El entero no es válido.";
    }

    // Sanitizar y validar caracteres ilegáles de una correo electrónico:
    // La función, elimina caracteres ilegales y valida la comprobación de que es un correo electronico:
    $email = "john.doe@example.com";

     // ELimina caracteres ilegales con "FILTER_SANITIZE_EMAIL".
     $email = filter_var($email, FILTER_SANITIZE_EMAIL);

     // Valida con "FILTER_VALIDATE_EMAIL".
     if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
       echo("$email is a valid email address");
     } else {
       echo("$email is not a valid email address");
     }

     // Validar y sanitizar una url:
     $url = "https://www.w3schools.com";

      // Elimina caracteres ilegales con "FILTER_SANITIZE_URL":
      $url = filter_var($url, FILTER_SANITIZE_URL);

      // Valida con "FILTER_VALIDATE_URL".
      if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
      } else {
        echo("$url is not a valid URL");
      }
?>