<?php
$archivo = "./ASSETS/CSV/Notas.csv";

// Define la cabecera que quieres para tu CSV
$cabeceraCsv = [
    "Nombre Alumno", "Repite", "Matemáticas", "Física", "Historia",
    "Inglés", "Alemán", "Educación física", "Lengua", "Arte"
];

// Comprobar si el archivo existe y está vacío o no existe para escribir la cabecera
$escribirCabecera = false;
if (!file_exists($archivo) || filesize($archivo) === 0) {
    $escribirCabecera = true;
}

// Si llega el formulario:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre'] ?? ''); // Usar trim y el operador de fusión null

    if (empty($nombre)) {
        // Manejar error: nombre vacío (puedes mostrar un mensaje)
        echo "<div class='alert alert-danger container mt-3'>Error: El nombre del alumno no puede estar vacío.</div>";
    } else {
        $repite = $_POST['repetidor'] ?? 'no'; // Valor por defecto si no se envía

        // Recoger todas las notas. Si no se selecciona, será "" (cadena vacía)
        $nota_mat = $_POST['notas2'] ?? "";
        $nota_fis = $_POST['notas3'] ?? "";
        $nota_hist = $_POST['notas4'] ?? "";
        $nota_ing = $_POST['notas5'] ?? "";
        $nota_ale = $_POST['notas6'] ?? "";
        $nota_ef = $_POST['notas7'] ?? "";
        $nota_len = $_POST['notas8'] ?? "";
        $nota_art = $_POST['notas9'] ?? "";

        // Crear la fila de datos a añadir
        $nuevaFila = [
            $nombre,
            $repite,
            $nota_mat,
            $nota_fis,
            $nota_hist,
            $nota_ing,
            $nota_ale,
            $nota_ef,
            $nota_len,
            $nota_art
        ];

        // Abrir el archivo en modo append ("a")
        if (($handle = fopen($archivo, "a")) !== false) {
            // Si es necesario, escribir la cabecera (solo la primera vez o si el archivo está vacío)
            if ($escribirCabecera) {
                fputcsv($handle, $cabeceraCsv);
                $escribirCabecera = false; // Marcar como escrita para esta ejecución
            }

            // Escribir la nueva fila de datos
            fputcsv($handle, $nuevaFila);
            fclose($handle);

            echo "<div class='alert alert-success container mt-3'>Notas añadidas correctamente.</div>";
        } else {
            echo "<div class='alert alert-danger container mt-3'>Error: No se pudo abrir el archivo para escribir.</div>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>03_Notas - Varias asignaturas</title>
  <link rel="stylesheet" href="./ASSETS/styles.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-light text-black text-center">
      <h5 class="mb-0">AÑADA LAS NOTAS DEL ALUMNO/ALUMNA</h5>
    </div>
    <div class="card-body">
      <form method="POST">
        <!-- Nombre del alumno y repetidor -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="flex-grow-1 me-3">
            <label for="nombreAlumno" class="form-label">Nombre del alumno</label>
            <input
              type="text"
              name="nombre"
              style="width: 100%"
              class="form-control"
              placeholder="Introduce el nombre"
              required
            />
          </div>
          <div class="mb-3" style="min-width: 150px;">
            <label class="form-label d-block">Repite:</label>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="repetidor"
                value="si"
                id="repiteSi"
              />
              <label class="form-check-label" for="repiteSi">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="repetidor"
                value="no"
                id="repiteNo"
                checked
              />
              <label class="form-check-label" for="repiteNo">No</label>
            </div>
          </div>
        </div>

        <!-- Tabla de asignaturas con selectores de nota -->
        <div class="table-responsive">
          <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
              <tr>
                <th>Asignatura</th>
                <th>Nota</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Matemáticas</td>
                <td>
                  <select name="notas2" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Física</td>
                <td>
                  <select name="notas3" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Historia</td>
                <td>
                  <select name="notas4" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Inglés</td>
                <td>
                  <select name="notas5" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Alemán</td>
                <td>
                  <select name="notas6" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Educación física</td>
                <td>
                  <select name="notas7" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Lengua</td>
                <td>
                  <select name="notas8" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Arte</td>
                <td>
                  <select name="notas9" class="form-select">
                    <option value="" selected>Selecciona una nota</option>
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Botón de envío -->
        <button type="submit" class="btn btn-light float-end">Guardar notas</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>

