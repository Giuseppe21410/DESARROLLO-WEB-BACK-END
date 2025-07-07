<!DOCTYPE html>
<html>
<head>
    <title>Login Inventario</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
        }

        body {
            background: #F6F1EB;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
            background-color: #7C6A9D;
        }

        h2 {
            margin-bottom: 25px;
            color:white;
            font-weight: 700;
            font-size: 1.8rem;
        }

        form label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
            font-weight: 600;
            color:white;
            font-size: 0.9rem;
        }

        form input[type="text"]{
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        form input[type="password"] {
          width: 100%;
            padding: 12px 15px;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        form input[type="text"]:focus,
        form input[type="password"]:focus {
            outline: none;
            border: 2px solid  #2E2E2E;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2E2E2E;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            transform: scale(1.05);
        }

        p.error-msg {
            color: #e74c3c;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 10px;
            text-align: end;
        }
        img {
            width: 70px;
            margin-bottom: 10px;
        }
    
    </style>
    <link rel="icon" type="image/png" href="<?=base_url('favicon.png') ?>" sizes="96x96" />
</head>
<body>
    <div id="maquina" class="login-container">
      <h2>Inicia Sesión</h2>
        <form action="/login/auth" method="post">
          <label for="usuario">Usuario:</label>
          <input type="text" name="usuario" id="usuario">
          <label for="password">Contraseña:</label>
          <input type="password" name="password" id="password">
          <p class="error-msg"><?= session()->getFlashdata('msg') ?></p>
          <button id="boton" type="submit">Entrar</button>
        </form>
    </div>

    <script>
        const usuarioInput = document.getElementById('usuario');
const passwordInput = document.getElementById('password');
const button = document.getElementById('boton');

function validarCampos() {
    if (usuarioInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
}

document.addEventListener('DOMContentLoaded', validarCampos);
usuarioInput.addEventListener('input', validarCampos);
passwordInput.addEventListener('input', validarCampos);
    </script>
</body>
</html>
