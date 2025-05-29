<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ./PUBLIC/login.php');
    exit();
}

require './ASSETS/datos.php';

$usuario = $_SESSION['usuario'];
$dinero = $_SESSION['dinero'];
$resultado = '';
$error = '';

function retirar($monto) {
    if ($monto <= 0) {
        throw new Exception("El monto debe ser mayor que cero.");
    }
    if ($monto > $_SESSION['dinero']) {
        throw new Exception("Fondos insuficientes.");
    }
    $_SESSION['dinero'] -= $monto;
}

function depositar($monto) {
    if ($monto <= 0) {
        throw new Exception("El monto debe ser mayor que cero.");
    }
    $_SESSION['dinero'] += $monto;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuarios = $_SESSION['usuarios'];

    if (isset($_POST['depositar']) || isset($_POST['retirar'])) {
        $monto = floatval($_POST['monto']);

        try {
            if (isset($_POST['depositar'])) {
                depositar($monto);
                $resultado = "Depósito exitoso.";
            } elseif (isset($_POST['retirar'])) {
                retirar($monto);
                $resultado = "Retiro exitoso.";
            }

            // Actualizar dinero en usuario
            foreach ($usuarios as &$user) {
                if ($user['usuario'] === $usuario) {
                    $user['dinero'] = $_SESSION['dinero'];
                    break;
                }
            }
            unset($user); // rompes la referencia

            $_SESSION['usuarios'] = $usuarios;
            file_put_contents('./ASSETS/datos.json', json_encode($usuarios, JSON_PRETTY_PRINT));

        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }

    if (isset($_POST['cerrar'])) {
        session_destroy();
        header('Location: ./PUBLIC/login.php');
        exit();
    }

    $dinero = $_SESSION['dinero'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cuenta Bancaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="card-title">Bienvenido, <strong><?= htmlspecialchars($usuario) ?></strong> 👋</h3>
        <p class="fs-5">Saldo actual: <strong><?= number_format($dinero, 2, ',', '.') ?> €</strong></p>

        <form method="post" class="row g-3">
          <div class="col-md-6">
            <label for="monto" class="form-label">Monto (€)</label>
            <input type="number" class="form-control" id="monto" name="monto" placeholder="Ej: 100.00" step="0.01" min="0">
          </div>
          <div class="col-md-6 d-flex align-items-end">
            <button type="submit" name="depositar" class="btn btn-success me-2">Depositar</button>
            <button type="submit" name="retirar" class="btn btn-warning">Retirar</button>
          </div>
          <?php if ($resultado): ?>
            <div class="alert alert-success mt-3"><?= $resultado ?></div>
          <?php elseif ($error): ?>
            <div class="alert alert-danger mt-3"><?= $error ?></div>
          <?php endif; ?>
          <hr>
          <button type="submit" name="cerrar" class="btn btn-danger mt-2">Cerrar sesión</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
