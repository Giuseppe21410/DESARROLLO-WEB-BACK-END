<?php
// ======================================
// 🔶 MANIPULACIÓN DE JSON EN PHP
// ======================================

// Crear un array asociativo con datos de ejemplo
$data = [
    'nombre' => 'Juan',
    'edad' => 30,
    'email' => 'juan@example.com'
];

// Convertir el array en una cadena JSON legible
$json = json_encode($data, JSON_PRETTY_PRINT);

// Guardar el JSON en un archivo llamado 'datos.json'
// Si ya existe, lo sobrescribe
file_put_contents('datos.json', $json);

// Leer el contenido del archivo JSON
$jsonContenido = file_get_contents('datos.json');

// Convertir la cadena JSON de nuevo en array asociativo
$dataLeida = json_decode($jsonContenido, true);

// Mostrar el contenido del JSON leído
echo "📌 JSON leído:\n";
print_r($dataLeida);

// Verificar si hubo un error al decodificar el JSON
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "❌ Error al decodificar JSON: " . json_last_error_msg() . "\n";
}


// ======================================
// 🔷 MANIPULACIÓN DE CSV EN PHP
// ======================================

// Crear una matriz de datos para el CSV
$personas = [
    ['Nombre', 'Edad', 'Email'],
    ['Ana', 25, 'ana@example.com'],
    ['Luis', 32, 'luis@example.com']
];

// Abrir el archivo 'personas.csv' en modo escritura ('w')
// Si el archivo ya existe, será sobrescrito
$fp = fopen('personas.csv', 'w');

// Escribir cada fila en el archivo CSV
foreach ($personas as $fila) {
    fputcsv($fp, $fila);
}

// Cerrar el archivo CSV
fclose($fp);


// Leer el archivo CSV línea por línea
if (($handle = fopen('personas.csv', 'r')) !== false) {
    echo "\n📌 CSV leído:\n";
    while (($fila = fgetcsv($handle)) !== false) {
        print_r($fila);
    }
    fclose($handle);
}


// ======================================
// 🛠️ SOBRESCRITURA DE ARCHIVOS
// ======================================

// ➤ JSON - sobrescribir el archivo con nuevos datos
$nuevosDatos = [
    'nombre' => 'Carlos',
    'edad' => 28,
    'email' => 'carlos@example.com'
];

// Guardar el nuevo JSON (sobrescribiendo el anterior)
file_put_contents('datos.json', json_encode($nuevosDatos, JSON_PRETTY_PRINT));

// ➤ CSV - sobrescribir el archivo con nuevos datos
$nuevasPersonas = [
    ['Nombre', 'Edad', 'Email'],
    ['Laura', 29, 'laura@example.com'],
    ['Mario', 35, 'mario@example.com']
];

// Abrir el archivo CSV en modo escritura ('a') para sobrescribir, sin eliminar el contenido anterior.
$fp = fopen('personas.csv', 'a');

// Escribir las nuevas filas en el archivo CSV
foreach ($nuevasPersonas as $fila) {
    fputcsv($fp, $fila);
}

// Cerrar el archivo
fclose($fp);

echo "\n✅ Archivos JSON y CSV han sido sobrescritos correctamente.\n";
?>
