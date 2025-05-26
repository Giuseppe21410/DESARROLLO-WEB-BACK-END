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
        $archivo_1 = './ASSETS/CSV/inventario.csv'; // Ruta del archivo CSV
        $archivo = fopen($archivo_1, 'r');
        $error = null;
        $i_2 = 0;
        $i_1 = 0;

        if ($archivo !== false) {
            // Contar las filas reales (excluyendo encabezado)
            fgetcsv($archivo); // Saltar encabezado
            while (fgetcsv($archivo) !== false) {
                $i_2++;
            }

            $total_paginas = ceil($i_2 / 10);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo '<thead class="table-light">
                        <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Unidades vendidas</th>
                        <th>Categoría</th>
                        <th>Fecha de última venta</th>
                        </tr>
                      </thead>';
                echo '<tbody>';

                // Reiniciar puntero y volver a leer
                rewind($archivo);
                $encabezados = fgetcsv($archivo);

                $pagina = isset($_POST['pagina']) ? (int)$_POST['pagina'] : 1;
                $inicio = ($pagina - 1) * 10;
                $fin = $inicio + 10;

                while (($fila = fgetcsv($archivo)) !== false) {
                   if ($i_1 < $inicio) {
                        $i_1++;
                        continue;
                    }

                    if ($i_1 >= $fin) {
                        break;
                    }

                    $producto = array_combine($encabezados, $fila);
                    if ($producto === false) continue; // Evita errores si hay columnas vacías

                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($producto['nombre']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['precio']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['unidades_vendidas']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['categoria']) . '</td>';
                    echo '<td>' . htmlspecialchars($producto['fecha_ultima_venta']) . '</td>';
                    echo '</tr>';

                    $i_1++;
                }

                echo '</tbody>';
                fclose($archivo);
            }
        } else {
            $error = "Error al abrir el archivo.";
        }
        ?>
              </table>
              <div class="mb-4">
                <button type="submit" class="btn btn-danger w-100">Mostrar Inventario</button>
              </div>
            </form>
            
            <?php 
            // Colocamos un íncice en la parte inferior de la página.
            if (isset($total_paginas)) {
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo '<form method="post" class="d-inline">';
                    echo '<input type="hidden" name="pagina" value="1">';
                    echo '<button type="submit" name="pagina" value="' . $i . '" class="btn btn-secondary btn-sm me-1">' . $i . '</button>';
                    echo '</form>';
                }
            }
            ?>

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