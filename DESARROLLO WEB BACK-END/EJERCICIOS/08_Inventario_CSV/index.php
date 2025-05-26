<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08_Inventario_CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Inventario de ventas</h3>

            <form method="post">
              <div class="mb-3">
                <label for="numero" class="form-label">Despliega el inventario:</label>
              </div>

              <table class="table table-bordered">
                <?php 
              if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo '<thead class="table-light">
                        <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Unidades vendidas</th>
                          <th>Categoría</th>
                          <th>Fecha de última venta.</th>
                        </tr>
                      </thead>';
                echo '<tbody>';
                $archivo_1='./ASSETS/CSV/inventario.csv';
                $archivo= fopen($archivo_1, 'r');
                $error = null;

                if ($archivo != false) {
                  $encabezados = fgetcsv($archivo); // Lee la primera línea del archivo CSV para obtener los encabezados.
                  while (($fila=fgetcsv($archivo)) !== false) {// Lee el archivo CSV línea por línea.
                    $producto=array_combine($encabezados, $fila); // Combina las claves y valores de la fila.
                    // Imprimir cada producto en una fila de la tabla.
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($producto['nombre']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['precio']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['unidades_vendidas']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['categoria']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['fecha_ultima_venta']) . '</td>';
                    echo '</tr>'; 
                  }
                } else {
                  $error = "Error al abrir el archivo.";
                } 
                echo '</tbody>';
              } 
              ?>
              </table>
              <div class="mb-4">
                <button type="submit" class="btn btn-danger w-100">Mostrar Inventario</button>
              </div>
            </form>
            <?php 
            if (isset($error) && $error !== null) {
              echo '<div class="alert alert-info text-center">' . htmlspecialchars($error) . '</div>'; // Muestra el error si no se pudo abrir el archivo.
            }  
            ?>

          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>