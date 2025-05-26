<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07_Inventario_Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Inventario de productos</h3>

            <form method="post">
              <div class="mb-3">
                <label for="numero" class="form-label">Despliega el inventario:</label>
              </div>

              <table class="table table-bordered">
                <?php 
              require 'inventario.php';
              if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<thead class="table-light">
                        <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Altura (cm)</th>
                          <th>Ancho (cm)</th>
                          <th>Peso (kg)</th>
                          <th>Color</th>
                        </tr>
                      </thead>';
                echo '<tbody>';
                foreach ($productos as $producto){
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($producto['nombre']) . '</td>'; // Escapar caracteres especiales.
                    echo '<td>' . htmlspecialchars($producto['precio']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['altura']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['ancho']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['peso']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['color']) . '</td>';
                    echo '</tr>';
                }
                echo '</tbody>';  
              }
              ?>
              </table>
              <div class="mb-4">
                <button type="submit" class="btn btn-light w-100">Mostrar Inventario</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>