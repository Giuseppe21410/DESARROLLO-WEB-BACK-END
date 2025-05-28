<?php
// 🕒 1. Establecer zona horaria
date_default_timezone_set('Europe/Madrid');

// 📅 2. Obtener la fecha y hora actual
echo "Fecha y hora actual: " . date('Y-m-d H:i:s') . "<br><br>";

// 🧾 3. Formateo de fechas
echo "Fecha formateada: " . date('l j F Y') . "<br><br>";

// 🛠️ 4. Crear fechas manualmente con mktime()
$navidad = mktime(0, 0, 0, 12, 25, 2025);
echo "Navidad 2025: " . date('Y-m-d', $navidad) . "<br><br>";

// 🛠️ 5. Crear fechas con strtotime()
$proximoLunes = strtotime("next Monday");
echo "Próximo lunes: " . date('Y-m-d', $proximoLunes) . "<br><br>";

// 🔄 6. Convertir formato de fecha
$fechaOriginal = "26/05/2025";
$fechaConvertida = date('Y-m-d', strtotime(str_replace('/', '-', $fechaOriginal)));
echo "Fecha convertida: $fechaConvertida<br><br>";

// 📤 7. Diferencia entre fechas
$fecha1 = new DateTime('2025-05-26');
$fecha2 = new DateTime('2025-06-01');
$diff = $fecha1->diff($fecha2);
echo "Diferencia: " . $diff->format('%R%a días') . "<br><br>";

// 📌 8. Uso de DateInterval con DateTime
$hoy = new DateTime();
$hoy->add(new DateInterval('P2W')); // Añadir 2 semanas
echo "Fecha en dos semanas: " . $hoy->format('Y-m-d') . "<br><br>";

// ⌛ 9. Timestamp actual
$timestamp = time();
echo "Timestamp actual: $timestamp<br>";
echo "Fecha desde timestamp: " . date('Y-m-d H:i:s', $timestamp) . "<br><br>";

// 🔁 10. Comparar fechas
if (strtotime('2025-06-01') > strtotime('2025-05-26')) {
    echo "01/06/2025 es posterior a 26/05/2025<br><br>";
}

// 🛑 11. Validar fecha
$esValida = checkdate(2, 29, 2025);
echo "¿Es válida la fecha 29/02/2025?: " . ($esValida ? 'Sí' : 'No') . "<br>";
?>
