<!--  Manejo de errores. -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>División de dos números</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-body">
      <h3 class="card-title mb-4">Dividir dos números</h3>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
          <label for="num1" class="form-label">Número 1</label>
          <input type="number" step="any" class="form-control" id="num1" name="num1" required>
        </div>

        <div class="mb-3">
          <label for="num2" class="form-label">Número 2</label>
          <input type="number" step="any" class="form-control" id="num2" name="num2" required>
        </div>

        <button type="submit" class="btn btn-primary">Dividir</button>
      </form>

      <?php
      // Comprobamos si el formulario ha sido enviado
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recogemos y limpiamos los datos
        $num1 = filter_input(INPUT_POST, "num1", FILTER_VALIDATE_FLOAT); // Validamos que el primer número sea un float. FILTER_VALIDATE_FLOAT asegura que el valor sea un número de punto flotante.
        $num2 = filter_input(INPUT_POST, "num2", FILTER_VALIDATE_FLOAT);

        function dividir($num1, $num2) {
          if ($num1 == 0) {
            throw new Exception("No se puede dividir entre cero."); // Lanzamos una excepción si el primer número es cero.
          }
          return $num1 / $num2;
        }

        // Con try-catch manejamos la excepción, capturando errores de división por cero.

        try {
            echo ' <div class="mb-3">
                  <label for="num1" class="form-label">Número 1</label>
                  <input type="number" step="any" class="form-control" id="num1" name="num1" value="' . htmlspecialchars(dividir($num1,$num2)) . '" required>
                  </div>';
        } catch (Exception $e) {
            // Mostramos un mensaje de error si ocurre una excepción
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Error: ' . htmlspecialchars($e->getMessage()); // Mostramos el mensaje de error de la excepción.
            echo '</div>';
        }

        // Conjunto de excepciones básicas en PHP y cómo usarlas

        try {
            // Ejemplo 1: División por cero
            $a = 10;
            $b = 0;
            if ($b == 0) {
                throw new DivisionByZeroError("No se puede dividir entre cero."); // Cunando se intenta dividir por cero, lanzamos una excepción específica de PHP y se redirige a la sección de manejo de excepciones directamente a catch.        
            }
            echo  $a / $b;
 
        } catch (DivisionByZeroError $e) {
            echo "Error: " . $e->getMessage();
        }

        echo "<hr>";

        try {
            // Ejemplo 2: Tipo de argumento no válido
            function saludar(string $nombre) {
                if (!is_string($nombre)) {
                    throw new InvalidArgumentException("Se esperaba una cadena de texto.");
                }
            return "Hola, $nombre";
        }

        echo saludar(123); // Esto lanza una excepción

        } catch (InvalidArgumentException $e) {
            echo "Excepción: " . $e->getMessage();
        }

        echo "<hr>";

        try {
            // Ejemplo 3: Archivo no encontrado
            $ruta = "archivo_que_no_existe.txt";
            if (!file_exists($ruta)) {
                throw new RuntimeException("El archivo '$ruta' no existe.");
            }

              $contenido = file_get_contents($ruta);

          } catch (RuntimeException $e) {
              echo "Problema en tiempo de ejecución: " . $e->getMessage();
          }

          echo "<hr>";

        try {
            // Ejemplo 4: Valor fuera de rango
            $edad = -5;
            if ($edad < 0 || $edad > 120) {
                throw new OutOfRangeException("Edad no válida: debe estar entre 0 y 120.");
            }

        } catch (OutOfRangeException $e) {
            echo "Excepción de rango: " . $e->getMessage();
        }
    }
        ?>
    </div>
  </div>
</div>

</body>
</html>