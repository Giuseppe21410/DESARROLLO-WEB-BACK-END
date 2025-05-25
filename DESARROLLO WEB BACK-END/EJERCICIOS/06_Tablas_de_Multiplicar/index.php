<?php
$error="";
$cantidad=null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $cantidad=$_POST['cantidad'] ?? 0;
  if ($cantidad > 10 || $cantidad < 0) {
    $error= 'Ingresa un número correcto.';
    $cantidad=null;
  }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabla de Multiplicar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Tabla de Multiplicar</h3>

            <form method="post">
              <div class="mb-3">
                <label for="numero" class="form-label">Introduce un número:</label>
                <input type="number" class="form-control" name="cantidad" placeholder="Por ejemplo, 5">
              </div>

              <div class="mb-4">
                <button type="submit" class="btn btn-primary w-100">Mostrar tabla</button>
              </div>
            </form>

            <table class="table table-bordered">
              <thead class="table-light">
                <tr>
                  <th>Operación</th>
                  <th>Resultado</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($cantidad)) {
                for ($i = 1; $i <= 10; $i++) {
                $resultado = $i * $cantidad;
                echo "<tr><td>$i × $cantidad</td><td>$resultado</td></tr>";
                }
              }
                ?>
                
              </tbody>
            </table>
                <?php if (isset($error)){
                echo '<div class="container-center w-100 mt-5" style="color:red;">' . htmlspecialchars($error) . '</div>';
                }
                ?>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
