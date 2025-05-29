<?php
session_start();

// Redirigir si ya está logueado
if (isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit();
}

// Leer usuarios desde datos.json
$usuarios = json_decode(file_get_contents('../ASSETS/datos.json'), true);

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';

    foreach ($usuarios as $usuario) {
        if ($usuario['usuario'] === $nombre && $usuario['clave'] === $clave) {
            // Guardar datos en sesión
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['dinero'] = $usuario['dinero'];
            $_SESSION['usuarios'] = $usuarios;

            header('Location: ../index.php');
            exit();
        }
    }

    $error = "Usuario o contraseña incorrectos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h3 class="card-title text-center">Iniciar sesión</h3>
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="clave" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="clave" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
