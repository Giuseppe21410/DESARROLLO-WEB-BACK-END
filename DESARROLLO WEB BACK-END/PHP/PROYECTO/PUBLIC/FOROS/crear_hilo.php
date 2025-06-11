<?php
// Inicia o reanuda una sesión. Es necesario para identificar al creador del hilo.
session_start();

// Inicializa una variable para almacenar mensajes de error.
$error = '';

// --- PROCESAMIENTO DEL FORMULARIO DE CREACIÓN DE HILO ---

// Comprueba si la solicitud a la página se ha hecho mediante el método POST (es decir, el formulario fue enviado).
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoge los datos del formulario. El operador '??' asigna una cadena vacía si el campo no existe.
    $titulo = $_POST['titulo'] ?? '';
    $foro = $_POST['foro'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';

    // --- CARGA DE DATOS EXISTENTES ---

    // Define la ruta al archivo JSON que contiene la lista de todos los hilos.
    $ruta_json = '../../ASSETS/JSON/hilos.json';
    // Comprueba si el archivo existe.
    if (file_exists($ruta_json)) {
        // Si existe, lee su contenido y lo decodifica a un array asociativo de PHP.
        $hilos = json_decode(file_get_contents($ruta_json), true);
        // Medida de seguridad: si el archivo está vacío o corrupto, se asegura que $hilos sea un array.
        if (!is_array($hilos)) {
            $hilos = [];
        }
    } else {
        // Si el archivo no existe, inicializa $hilos como un array vacío para poder añadir el primer hilo.
        $hilos = [];
    }

    // --- LÓGICA PARA GENERAR UN NOMBRE DE ARCHIVO ÚNICO ---
    
    // Inicializa un contador para los hilos del foro seleccionado.
    $cantidad_hilos = 0;
    // Recorre todos los hilos existentes.
    foreach ($hilos as $hilo) {
        // Si un hilo pertenece al foro que el usuario ha seleccionado, incrementa el contador.
        if ($hilo['foro'] == $foro) {
            $cantidad_hilos++;
        }
    }
    // El contador servirá para crear un nombre de archivo secuencial (ej. social_0, social_1, etc.).

    // --- VALIDACIONES DE LOS DATOS DEL FORMULARIO ---

    // 1) Validar que la descripción no supere los 180 caracteres.
    if (strlen($descripcion) > 180) {
        $error = 'Debe ingresar una descripción de menos de 180 caracteres.';
    }
    // 2) Validar que el título no supere los 20 caracteres.
    elseif (strlen($titulo) > 20) {
        $error = 'Debe ingresar un título de menos de 20 caracteres.';
    }
    // 3) Validar que ningún campo esté vacío.
    elseif (empty($titulo) || empty($descripcion) || empty($foro)) {
        $error = 'Todos los campos son obligatorios.';
    }
    // 4) Validar que no exista ya un hilo con el mismo título para evitar duplicados.
    else {
        foreach ($hilos as $hilo) {
            if ($hilo['titulo'] === $titulo) {
                $error = 'Ya existe un hilo con ese título.';
                break; // Detiene el bucle si encuentra un duplicado.
            }
        }
    }

    // --- CREACIÓN DEL HILO Y ARCHIVOS ASOCIADOS ---

    // Si la variable $error sigue vacía, significa que todas las validaciones fueron exitosas.
    if ($error === '') {
        // Construye el nombre base para el archivo JSON que guardará los mensajes de este hilo.
        // Usa el nombre del foro y el contador (ej: "social_5").
        $array_asociado = $foro . '_' . $cantidad_hilos;

        // Crea un array asociativo con toda la información del nuevo hilo.
        $nuevo_hilo = [
            'titulo' => $titulo,
            'foro' => $foro,
            'descripcion' => $descripcion,
            // Guarda el nombre del archivo de mensajes asociado a este hilo.
            'array_asociado' => $array_asociado . ".json",
            'fecha_creacion' => date('Y-m-d H:i:s'), // Añade la fecha y hora de creación.
            // Obtiene el nombre del creador de la sesión o de la cookie.
            'creador' => $_SESSION['usuario'] ?? ($_COOKIE['usuario'] ?? ''),
            // Obtiene la foto de perfil del creador.
            'foto_perfil_creador' => $_SESSION['foto_perfil'] ?? ($_COOKIE['foto_perfil'] ?? 'default.png')
        ];

        // Convierte el nombre del foro a mayúsculas para que coincida con la estructura de directorios.
        $foro = strtoupper($foro);
        // Construye la ruta completa para el nuevo archivo de mensajes.
        $nombre_archivo = "../../ASSETS/JSON_MENSAJES/" . $foro . "/" . $array_asociado . ".json";

        // Prepara el contenido inicial para el nuevo archivo: un array JSON vacío [].
        $contenido_archivo = json_encode([], JSON_PRETTY_PRINT);

        // Intenta crear y escribir el archivo de mensajes vacío en la ruta especificada.
        if (file_put_contents($nombre_archivo, $contenido_archivo) === false) {
            // Si falla la creación del archivo, detiene el script con un mensaje de error.
            die("Error: no se pudo crear el archivo en $nombre_archivo");
        }

        // Añade la información del nuevo hilo al array general de hilos.
        $hilos[] = $nuevo_hilo;
        // Guarda el array de hilos actualizado de vuelta en el archivo principal `hilos.json`.
        file_put_contents($ruta_json, json_encode($hilos, JSON_PRETTY_PRINT));

        // Redirige al usuario a la página de inicio después de crear el hilo con éxito.
        header('Location: ../../index.php');
        // Detiene la ejecución del script para asegurar que la redirección se complete.
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Hilo - ForoConecta</title>
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="../../ASSETS/CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="Logo">
            <!-- Enlace para volver a la página principal -->
            <a href="../../index.php"><img src="../../ASSETS/IMAGES/Logo.png" alt="Logo"></a>
        </div>
    </header>
    <div class="page_container">
        <main class="bg-light">
            <div class="main_container_registro">
                <h2 class="mb-4 text-primary"><i>Crea un nuevo hilo y comparte tus ideas</i></h2>

                <!-- Formulario de creación de hilo que envía los datos a este mismo archivo -->
                <form class="p-4 ml-5 mr-5 bg-white rounded shadow" method="post">
                    <fieldset class="mb-4">
                        <!-- Campo para el Título del hilo -->
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título del hilo:</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" required>
                        </div>

                        <!-- Campo para seleccionar el Foro -->
                        <div class="mb-3">
                            <label class="form-label">Foro:</label>
                            <select required class="form-select" name="foro" id="foro">
                                <option selected disabled value="">Selecciona el foro en el que se publicará:</option>
                                <option value="social">Social</option>
                                <option value="arte">Arte</option>
                                <option value="videojuegos">Videojuegos</option>
                                <option value="libros">Libros</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="oposiciones">Oposiciones</option>
                                <option value="anecdotas">Anécdotas</option>
                                <option value="cine">Cine</option>
                                <option value="coches">Coches</option>
                            </select>
                        </div>

                        <!-- Campo para la Descripción del hilo -->
                        <div class="mb-3">
                            <label for="contenido" class="form-label">Descripción:</label>
                            <textarea id="contenido" name="descripcion" class="form-control" rows="6" placeholder="Escribe aquí tu pregunta, idea o comentario..." required></textarea>
                        </div>
                    </fieldset>

                    <!-- Botón para enviar el formulario -->
                    <div class="d-flex justify-content-end gap-4">
                        <button type="submit" class="btn btn-primary">Publicar hilo</button>
                    </div>

                    <?php if ($error): ?>
                        <!-- Bloque que solo se muestra si la variable $error tiene contenido (hubo un error de validación) -->
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </main>
        <footer>
            <div class="footer_container_1">
                <div class="footer_container_1_text">
                    <a href="../Contactanos.php">Contáctanos</a>
                    <a target="_blank" href="https://www.php.net">Política y privacidad</a>
                    <a target="_blank" href="https://www.php.net">Ayuda</a>
                </div>
                <div class="footer_container_2_text">
                    <p>© 2025 Giuseppe Fuentes Moreno. Todos los derechos reservados.</p>
                </div>
                <div class="footer_container_1_img">
                    <a target="_blank" href="https://github.com/Giuseppe21410/DESARROLLO-WEB-BACK-END/tree/main/DESARROLLO%20WEB%20BACK-END/PHP/PROYECTO"><img src="../../ASSETS/IMAGES/Logo_Github.png" alt="Logo_GitHub"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>