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
          <div class="flex">
            <div class="Primer_Input">
              <div class="mb-3">
               <label for="nombre" class="form-label">Nombre</label>
               <input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre">
            </div>
            </div>
            <div class="Primer_Selector">
              <div class="mb-3">
            <label for="grupo" class="form-label">Curso</label>
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

          <div class="flex">
            <div class="Primer_Input">
              <div class="mb-3">
            <label for="centro" class="form-label">Centro</label>
            <select required class="form-select" name="centro">
              <option selected disabled>Selecciona un centro</option>
              <option value="Centro Norte">Centro Norte</option>
              <option value="Centro Sur">Centro Sur</option>
              <option value="centro Este">Centro Este</option>
            </select>
          </div> 
            </div>
            <div class="Primer_Selector">
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
        </div>
        <table class="table table-bordered mt-4">
            <?php 
              $i = 0;
              $error = '';
              require './ASSETS/ARRAY/array_notas.php';
              if  ($_SERVER['REQUEST_METHOD'] == 'POST'){
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
                   echo '<tbody>';
                   echo '<tr>';
                   echo '<td>' . htmlspecialchars($_POST['nombre']) . '</td>';
                   echo '<td>'. htmlspecialchars($_POST['centro']) .'</td>';
                   echo '<td>' . htmlspecialchars($_POST['curso']) . '</td>';
                   echo '<td>'. htmlspecialchars($_POST['grupo']) . '</td>';
                   echo '</table>';
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
                   echo '<tr>';
                   foreach ($datos as $centro => $cursos) {
                     foreach ($cursos as $curso => $grupos) {
                        foreach ($grupos as $grupo => $alumnos) {
                          
                           foreach ($alumnos as $alumno) {
                                $i++;
                                 echo '<td>' . htmlspecialchars($alumno['nombre']) . '</td>';
                                  foreach ($alumno['notas'] as $asignatura => $nota) {
                                      echo '<td>' . htmlspecialchars($nota) . '</td>';
                                  }
                                  echo '</tr>';
                                  if ($i == 20) {
                                    break 4;
                                  }
                           }
                          }     
                     }
                 }
                  
                }
              
                if (!empty($_POST['nombre']) && isset($_POST['curso']) && isset($_POST['centro']) && isset($_POST['grupo'])){
                  echo '<table class="table table-bordered mt-4">';
                  echo '<thead class="table-light">
                        <tr>
                          <th>Nombre</th>
                          <th>Centro</th>
                          <th>Curso</th>
                          <th>Grupo</th>
                        </tr>
                      </thead>';
                   echo '<tbody>';
                   echo '<tr>';
                   echo '<td>' . htmlspecialchars($_POST['nombre']) . '</td>';
                   echo '<td>'. htmlspecialchars($_POST['centro']) .'</td>';
                   echo '<td>' . htmlspecialchars($_POST['curso']) . '</td>';
                   echo '<td>'. htmlspecialchars($_POST['grupo']) . '</td>';
                   echo '</table>';
                   $nombreBuscado= $_POST['nombre'];
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
                      </thead>';
                   echo '<tbody>';
                   echo '<tr>';
                   foreach ($datos as $centro => $cursos) {
                     foreach ($cursos as $curso => $grupos) {
                        foreach ($grupos as $grupo => $alumnos) {
                           foreach ($alumnos as $alumno) {
                                if ($alumno['nombre'] == $nombreBuscado) {           
                                   foreach ($alumno['notas'] as $asignatura => $nota) {
                                        echo '<td>' . htmlspecialchars($nota) . '</td>';
                                    }
                                    $encontrado = true;
                                    break 4; // Sale de los 4 bucles una vez encontrado
                                    if (!$encontrado) {
                                    $error= "No se encontraron notas para el alumno: " . htmlspecialchars($nombreBuscado);
                                    }
                                } 
                           }
                        }
                     }
                 }
                }
                echo '</tr>';
                echo '</tbody>';  
                echo '</table>';
              }
            ?>
      </table>
        <?php if ($error): ?>
               <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($error) ?>
                </div>
<?php endif; ?>
          <div class="d-grid">
            <button type="submit" class="btn btn-light">Buscar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>