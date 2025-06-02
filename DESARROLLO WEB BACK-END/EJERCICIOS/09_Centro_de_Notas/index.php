<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Búsqueda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title mb-4 text-center">Centro de Notas (Primaria)</h5>

        <form method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="curso" class="form-label">Curso</label>
                <select required class="form-select" name="curso">
                  <option selected disabled>Selecciona un curso</option>
                  <option value="Primero">Primero</option>
                  <option value="Segundo">Segundo</option>
                  <option value="Tercero">Tercero</option>
                  <option value="Cuarto">Cuarto</option>
                  <option value="Quinto">Quinto</option>
                  <option value="Sexto">Sexto</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="centro" class="form-label">Centro</label>
                <select required class="form-select" name="centro">
                  <option selected disabled>Selecciona un centro</option>
                  <option value="Centro Norte">Centro Norte</option>
                  <option value="Centro Sur">Centro Sur</option>
                  <option value="Centro Este">Centro Este</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="grupo" class="form-label">Grupo</label>
                <select required class="form-select" name="grupo">
                  <option selected disabled>Selecciona un grupo</option>
                  <option value="A">Grupo A</option>
                  <option value="B">Grupo B</option>
                  <option value="C">Grupo C</option>
                </select>
              </div>
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </form>

        <?php 
  $i = 0;
  $error = '';
  $encontrado = false;
  require './ASSETS/ARRAY/array_notas.php';

  // Añadimos esta línea para mantener el nombre cuando se envía la actualización de notas
  if (isset($_POST['nombre'])) {
    $nombreBuscado = $_POST['nombre'];
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['nombre'])) {
      echo '<table class="table table-bordered mt-4">';
      echo '<thead class="table-light">
            <tr>
              <th>Nombre</th>
              <th>Centro</th>
              <th>Curso</th>
              <th>Grupo</th>
            </tr>
          </thead>';
      echo '<tbody><tr>';
      echo '<td>' . htmlspecialchars($_POST['nombre']) . '</td>';
      echo '<td>' . htmlspecialchars($_POST['centro']) . '</td>';
      echo '<td>' . htmlspecialchars($_POST['curso']) . '</td>';
      echo '<td>' . htmlspecialchars($_POST['grupo']) . '</td>';
      echo '</tr></tbody></table>';

      $grupoBuscado = $_POST['grupo'];
      echo '<table class="table table-bordered mt-4">';
      echo '<thead class="table-light">
            <tr>
              <th>Nombre</th>
              <th>Lengua</th>
              <th>Historia</th>
              <th>Educación Física</th>
              <th>Inglés</th>
              <th>Matemáticas</th>
              <th>Música</th>
              <th>Ciencias</th>
              <th>Tecnología</th>
            </tr>
          </thead>';
      echo '<tbody>';

      foreach ($datos as $centro => $cursos) {
        foreach ($cursos as $curso => $grupos) {
          foreach ($grupos as $grupo => $alumnos) {
            foreach ($alumnos as $alumno) {
              $i++;
              echo '<tr>';
              echo '<td>' . htmlspecialchars($alumno['nombre']) . '</td>';
              foreach ($alumno['notas'] as $nota) {
                echo '<td>' . htmlspecialchars($nota) . '</td>';
              }
              echo '</tr>';
              if ($i == 20) break 4;
            }
          }
        }
      }
      echo '</tbody></table>';
    }

    if (!empty($_POST['nombre']) && isset($_POST['curso'], $_POST['centro'], $_POST['grupo'])) {
      $nombreBuscado = $_POST['nombre'];
      echo '<table class="table table-bordered mt-4">';
      echo '<thead class="table-light">
            <tr>
              <th>Nombre</th>
              <th>Centro</th>
              <th>Curso</th>
              <th>Grupo</th>
            </tr>
          </thead>';
      echo '<tbody><tr>';
      echo '<td>' . htmlspecialchars($nombreBuscado) . '</td>';
      echo '<td>' . htmlspecialchars($_POST['centro']) . '</td>';
      echo '<td>' . htmlspecialchars($_POST['curso']) . '</td>';
      echo '<td>' . htmlspecialchars($_POST['grupo']) . '</td>';
      echo '</tr></tbody></table>';

      echo '<table class="table table-bordered mt-4">';
      echo '<thead class="table-light">
            <tr>
              <th>Lengua</th>
              <th>Historia</th>
              <th>Educación Física</th>
              <th>Inglés</th>
              <th>Matemáticas</th>
              <th>Música</th>
              <th>Ciencias</th>
              <th>Tecnología</th>
            </tr>
          </thead><tbody><tr>';

      foreach ($datos as $centro => $cursos) {
        foreach ($cursos as $curso => $grupos) {
          foreach ($grupos as $grupo => $alumnos) {
            foreach ($alumnos as $alumno) {
              if ($alumno['nombre'] == $nombreBuscado) {
                foreach ($alumno['notas'] as $nota) {
                  echo '<td>' . htmlspecialchars($nota) . '</td>';
                }
                $encontrado = true;
                break 4;
              }
            }
          }
        }
      }

      echo '</tr></tbody></table>';

      if ($encontrado) {
        echo '<h5 class="card-title mb-4 mt-4 text-start">Editor de notas de ' . htmlspecialchars($nombreBuscado) . '</h5>';
        echo '<form method="post"><div class="row g-3">';
        echo '<div class="col-md-6">
                <label for="notaSelect" class="form-label">Selecciona una asignatura</label>
                <select required class="form-select" name="notaSelect">
                  <option value="Lengua">Lengua</option>
                  <option value="Historia">Historia</option>
                  <option value="Educación Física">Educación Física</option>
                  <option value="Inglés">Inglés</option>
                  <option value="Matemáticas">Matemáticas</option>
                  <option value="Música">Música</option>
                  <option value="Ciencias">Ciencias</option>
                  <option value="Tecnología">Tecnología</option>
                </select>
              </div>';
        echo '<div class="col-md-6">
                <label for="notaInput" class="form-label">Introduce una nota:</label>
                <input required type="number" class="form-control" name="notaInput" min="0" max="10" step="0.1" placeholder="Ej: 7.5">
              </div>';
        echo '</div><div class="d-grid mt-3">
                <button type="submit" name="notas_actualizar" class="btn btn-primary">Actualizar Notas</button>
                <input type="hidden" name="nombre" value="' . htmlspecialchars($nombreBuscado) . '">
              </div></form>';
      }
    }

    function guardar_array_notas($ruta, $array) { // Función para guardar el array en un archivo PHP. Evitar la inyección de código PHP.
      $contenido = "<?php\n\$datos = " . var_export($array, true) . ";\n";
      file_put_contents($ruta, $contenido);
    }

    if (isset($_POST['notas_actualizar'])) {
      $notaSelect = $_POST['notaSelect'];
      $notaInput = $_POST['notaInput'];
      foreach ($datos as $centro => &$cursos) {
        foreach ($cursos as &$grupos) {
          foreach ($grupos as &$alumnos) {
            foreach ($alumnos as &$alumno) {
              if ($alumno['nombre'] == $nombreBuscado) {
                $alumno['notas'][$notaSelect] = floatval($notaInput);
                guardar_array_notas('./ASSETS/ARRAY/array_notas.php', $datos);
                echo '<div class="alert alert-success mt-4">Nota actualizada y guardada correctamente.</div>';
                break 4;
              }
            }
          }
        }
      }
    }
  }
?>


        <?php if (!empty($error)): ?>
          <div class="alert alert-danger" role="alert">
            <?= htmlspecialchars($error) ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

</body>
</html>
