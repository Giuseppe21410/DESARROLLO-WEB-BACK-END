<?php
// Tasas de cambio
$cambio_moneda = [
    "EUR_USD" => 1.14, "USD_EUR" => 0.88,
    "MXN_USD" => 0.054, "USD_MXN" => 18.5,
    "GBP_USD" => 1.30, "USD_GBP" => 0.77,
    "JPY_USD" => 0.0071, "USD_JPY" => 141.0,
    "EUR_MXN" => 21.1, "MXN_EUR" => 0.047,
    "EUR_GBP" => 0.85, "GBP_EUR" => 1.17,
    "EUR_JPY" => 132.5, "JPY_EUR" => 0.0075,
    "MXN_GBP" => 0.041, "GBP_MXN" => 24.3,
    "MXN_JPY" => 7.0, "JPY_MXN" => 0.14,
    "GBP_JPY" => 156.0, "JPY_GBP" => 0.0064,
];

// Inicializar variables para evitar notices y para persistencia en el form
$cantidad_ingresada = '';
$moneda_origen_seleccionada = '';
$moneda_destino_seleccionada = '';
$resultado_conversion = null;
$error="";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $moneda_origen_seleccionada = $_POST['monedaOrigen'] ?? '';
    $moneda_destino_seleccionada = $_POST['monedaDestino'] ?? '';
    $cantidad_ingresada = $_POST['cantidad'] ?? '';

    // Validar que la cantidad sea un número
    if (!is_numeric($cantidad_ingresada) || $cantidad_ingresada < 0) {
        $error = "Por favor, introduce una cantidad numérica válida.";
    } else {
        $cantidad_float = (float)$cantidad_ingresada;

        if ($moneda_origen_seleccionada === $moneda_destino_seleccionada) {
            // Si las monedas son iguales, el resultado es la misma cantidad
            $resultado = $cantidad_float;
        } else {
            $clave_conversion = $moneda_origen_seleccionada . "_" . $moneda_destino_seleccionada;

            if (isset($cambio_moneda[$clave_conversion])) {
                $tasa = $cambio_moneda[$clave_conversion];
                $resultado= $tasa * $cantidad_float;
             }
    }
}
}
// No hay 'else' con 'return 0;' aquí. El script simplemente continúa.
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Conversor de Monedas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-light text-center">
      <h5 class="mb-0">Conversor de Monedas</h5>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="mb-3">
          <label for="cantidad" class="form-label">Cantidad</label>
          <input type="number" name="cantidad" step="any" class="form-control" id="cantidad" placeholder="Introduce la cantidad" required  value="<?= isset($resultado) ? $resultado : '' ?>" />
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <label for="monedaOrigen" class="form-label">Moneda origen</label>
            <select name="monedaOrigen" class="form-select" required>
              <option value="" disabled selected>Selecciona moneda</option>
              <option value="USD">Dólar estadounidense (USD)</option>
              <option value="EUR">Euro (EUR)</option>
              <option value="GBP">Libra esterlina (GBP)</option>
              <option value="JPY">Yen japonés (JPY)</option>
              <option value="MXN">Peso mexicano (MXN)</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="monedaDestino" class="form-label">Moneda destino</label>
            <select name="monedaDestino" class="form-select" required>
              <option value="" disabled selected>Selecciona moneda</option>
              <option value="USD">Dólar estadounidense (USD)</option>
              <option value="EUR">Euro (EUR)</option>
              <option value="GBP">Libra esterlina (GBP)</option>
              <option value="JPY">Yen japonés (JPY)</option>
              <option value="MXN">Peso mexicano (MXN)</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-light w-100">Convertir</button>
        <?php if (isset($error)){
          echo '<div class="container-center w-100 mt-5" style="color:red;">' . htmlspecialchars($error) . '</div>';
        }
        ?>
      </form>
    </div>
  </div>
</div>

</body>
</html>
