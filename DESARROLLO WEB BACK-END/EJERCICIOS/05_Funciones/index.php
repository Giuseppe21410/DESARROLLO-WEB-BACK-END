<?php
require 'biblioteca_funciones.php';

$datos = [
  'porcentaje' => null,
  'parimpar' => null,
  'factorial' => null,
  'aproximar' => null,
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $formulario = $_POST['formulario'] ?? '';

  switch ($formulario) {
    case 'porcentaje':
      $cantidad_1 = $_POST['cantidad_1'] ?? 0;
      $porcentaje = $_POST['porcentaje'] ?? 0;
      $datos['porcentaje'] = porcentaje($cantidad_1, $porcentaje);
      break;

    case 'parimpar':
      $cantidad_2 = $_POST['cantidad_2'] ?? 0;
      $datos['parimpar'] = par_impar($cantidad_2);
      break;

    case 'factorial':
      $cantidad_3 = $_POST['cantidad_3'] ?? 0;
      $datos['factorial'] = factorial($cantidad_3);
      break;

    case 'aproximar':
      $cantidad_4 = $_POST['cantidad_4'] ?? 0;
      $decimal = $_POST['decimal'] ?? 0;
      $datos['aproximar'] = aproximar($cantidad_4, $decimal);
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Herramientas Numéricas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container my-5">

  <!-- 1. Calcula porcentaje -->
  <div class="card mb-4 shadow">
    <div class="card-header bg-light text-center">
      <h5>Calcular porcentaje</h5>
    </div>
    <div class="card-body">
      <form method="post">
        <input type="hidden" name="formulario" value="porcentaje">
        <div class="row g-3 align-items-center">
          <div class="col-md-5">
            <label class="form-label">Cantidad</label>
            <input type="number" name="cantidad_1" class="form-control" />
          </div>
          <div class="col-md-5">
            <label class="form-label">Porcentaje (%)</label>
            <input type="number" name="porcentaje" class="form-control" />
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-light w-100">Calcular</button>
          </div>
        </div>
        <div class="mt-3 fw-bold">
          <?= $datos['porcentaje'] !== null ? "Resultado: {$datos['porcentaje']}" : '' ?>
        </div>
      </form>
    </div>
  </div>

  <!-- 2. Par o impar -->
  <div class="card mb-4 shadow">
    <div class="card-header bg-light text-center">
      <h5>Determinar par o impar</h5>
    </div>
    <div class="card-body">
      <form method="post">
        <input type="hidden" name="formulario" value="parimpar">
        <div class="row g-3 align-items-center">
          <div class="col-md-10">
            <label class="form-label">Número entero</label>
            <input type="number" name="cantidad_2" class="form-control" />
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-light w-100">Determinar</button>
          </div>
        </div>
        <div class="mt-3 fw-bold">
          <?= $datos['parimpar'] !== null ? "Resultado: {$datos['parimpar']}" : '' ?>
        </div>
      </form>
    </div>
  </div>

  <!-- 3. Factorial -->
  <div class="card mb-4 shadow">
    <div class="card-header bg-light text-center">
      <h5>Calcular factorial</h5>
    </div>
    <div class="card-body">
      <form method="post">
        <input type="hidden" name="formulario" value="factorial">
        <div class="row g-3 align-items-center">
          <div class="col-md-10">
            <label class="form-label">Número entero no negativo</label>
            <input type="number" name="cantidad_3" class="form-control" />
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-light w-100">Calcular</button>
          </div>
        </div>
        <div class="mt-3 fw-bold">
          <?= $datos['factorial'] !== null ? "Resultado: {$datos['factorial']}" : '' ?>
        </div>
      </form>
    </div>
  </div>

  <!-- 4. Aproximación decimal -->
  <div class="card mb-4 shadow">
    <div class="card-header bg-light text-center">
      <h5>Aproximar número decimal</h5>
    </div>
    <div class="card-body">
      <form method="post">
        <input type="hidden" name="formulario" value="aproximar">
        <div class="row g-3 align-items-center">
          <div class="col-md-6">
            <label class="form-label">Número decimal</label>
            <input type="number" step="any" name="cantidad_4" class="form-control" />
          </div>
          <div class="col-md-4">
            <label class="form-label">Decimales</label>
            <input type="number" name="decimal" class="form-control" />
          </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-light w-100">Aproximar</button>
          </div>
        </div>
        <div class="mt-3 fw-bold">
          <?= $datos['aproximar'] !== null ? "Resultado: {$datos['aproximar']}" : '' ?>
        </div>
      </form>
    </div>
  </div>

</div>

</body>
</html>
