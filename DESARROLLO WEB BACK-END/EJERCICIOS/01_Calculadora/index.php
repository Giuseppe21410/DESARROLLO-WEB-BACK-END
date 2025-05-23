<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["limpiar"])) {
        $_POST = [];
        $resultado=""; 
    } else {
        // Usaremos $_SESSION para persistir entre requests.
        session_start();
        
        if (isset($_POST["agregar"])) {
            // Guardar primer número en sesión
            $_SESSION['primerNumero'] = (int)($_POST["num1"] ?? 0);
            $resultado=  (string)$_SESSION['primerNumero'];
        }
        elseif (isset($_POST["operacion"]) && isset($_SESSION['primerNumero'])) {
            // Realizar operación
            $num1 = $_SESSION['primerNumero'];
            $num2 = (int)($_POST["num1"] ?? 0);
            
            switch ($_POST["operacion"]) {
                case "sumar": $resultado = $num1 + $num2; break;
                case "restar": $resultado = $num1 - $num2; break;
                case "multiplicar": $resultado = $num1 * $num2; break;
                case "dividir": $resultado = $num2 != 0 ? $num1 / $num2 : 'Error'; break;
            }
            
            // Limpiar sesión para nueva operación
            unset($_SESSION['primerNumero']);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_Calculadora</title>
    <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
</head>
<body>
  <form method="post">
      <div class="calculadora">
        <div class="cabecera">
          <button type="submit" name="agregar" value="1" class="ingresar"></button>
          <input type="number" name="num1" id="pantalla" placeholder="0" value="<?= isset($resultado) ? $resultado : '' ?>">
        </div>
        <div class="botones">
            <button type="submit" name="operacion" value="sumar">+</button>
            <button type="submit" name="operacion" value="restar">-</button>
            <button type="submit" name="operacion" value="multiplicar">*</button>
            <button type="submit" name="operacion" value="dividir">/</button>
         </div>
        <button type="submit" name="limpiar" value="1" class="limpiar">Limpiar</button>
    </div>
</form>
</body>
</html>