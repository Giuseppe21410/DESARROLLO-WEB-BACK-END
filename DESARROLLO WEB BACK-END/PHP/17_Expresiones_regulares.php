<?php 
// Con las expresiones regulares, podemos buscar patrones en cadenas de texto, o lo que es lo mismo, buscar coincidencias de un patrón en una cadena de texto. Limitamos el contenido de una cadena de texto a un patrón específico, como por ejemplo, buscar un número de teléfono, un correo electrónico, una URL, etc.// 

// Validar nombre: 
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) { // La función preg_match() se utiliza para realizar una búsqueda de patrones en una cadena de texto. En este caso, estamos buscando un patrón que coincida con letras, espacios, guiones y apóstrofes. Devolverá true si la cadena cumple con el patrón, o false si no lo hace.
  $nameErr = "Only letters and white space allowed";
}

// Validar correo electrónico:
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // La función filter_var() se utiliza para validar el formato de un correo electrónico. En este caso, estamos utilizando el filtro FILTER_VALIDATE_EMAIL para verificar si la cadena es un correo electrónico válido. Devolverá true si la cadena cumple con el formato de correo electrónico, o false si no lo hace.
  $emailErr = "Invalid email format";
}

// Validar URL:
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}
?>