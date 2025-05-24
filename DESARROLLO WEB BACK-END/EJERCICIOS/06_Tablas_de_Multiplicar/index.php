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

            <form>
              <div class="mb-3">
                <label for="numero" class="form-label">Introduce un número:</label>
                <input type="number" class="form-control" id="numero" placeholder="Por ejemplo, 5">
              </div>

              <div class="mb-4">
                <button type="submit" class="btn btn-primary w-100" disabled>Mostrar tabla</button>
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
                <tr><td>1 ×</td><td></td></tr>
                <tr><td>2 ×</td><td></td></tr>
                <tr><td>3 ×</td><td></td></tr>
                <tr><td>4 ×</td><td></td></tr>
                <tr><td>5 ×</td><td></td></tr>
                <tr><td>6 ×</td><td></td></tr>
                <tr><td>7 ×</td><td></td></tr>
                <tr><td>8 ×</td><td></td></tr>
                <tr><td>9 ×</td><td></td></tr>
                <tr><td>10 ×</td><td></td></tr>
              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
