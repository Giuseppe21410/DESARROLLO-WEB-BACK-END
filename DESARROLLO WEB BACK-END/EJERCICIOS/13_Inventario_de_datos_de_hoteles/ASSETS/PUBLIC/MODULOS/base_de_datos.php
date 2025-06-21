<?php
// Incluimos los datos
include("./traer_datos_corregir.php");

// Establecemos un límite infinito.
set_time_limit(0); // 0 significa tiempo ilimitado

// Conexión a la base de datos
$host = "localhost";
$username = "root";
$password = "";
$dbname = "viviendas_vacacionales_establecimientos_hoteleros";

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Desactivamos restricciones de claves foráneas
$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");

// Eliminamos las tablas si existen
$eliminar_tablas = [
    "DROP TABLE IF EXISTS viviendaVacacional",
    "DROP TABLE IF EXISTS establecimientoHotelero",
    "DROP TABLE IF EXISTS direccionViviendas",
    "DROP TABLE IF EXISTS direccionHoteles",
];

foreach ($eliminar_tablas as $eliminar) {
    try {
        $pdo->exec($eliminar);
    } catch (PDOException $e) {
        // echo "Error al eliminar tabla: " . $e->getMessage();
    }
}

// Activamos de nuevo las restricciones
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

// Creamos las tablas en orden correcto
$tablas = [
    "CREATE TABLE direccionViviendas(
        direccion_VV_id INT PRIMARY KEY AUTO_INCREMENT,
        direccion VARCHAR(255) NOT NULL,
        isla VARCHAR(255) NOT NULL,
        provincia VARCHAR(255) NOT NULL,
        municipio VARCHAR(255) NOT NULL,
        localidad VARCHAR(255) NOT NULL,
        CP INT NOT NULL
    )",

    "CREATE TABLE direccionHoteles(
        direccion_H_id INT PRIMARY KEY AUTO_INCREMENT,
        direccion VARCHAR(255) NOT NULL,
        isla VARCHAR(255) NOT NULL,
        provincia VARCHAR(255) NOT NULL,
        municipio VARCHAR(255) NOT NULL,
        localidad VARCHAR(255) NOT NULL,
        CP INT NOT NULL
    )",

    "CREATE TABLE viviendaVacacional( 
        vivienda_id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(255) NOT NULL,
        plazas INT NOT NULL,
        id_direccion INT NOT NULL,
        FOREIGN KEY (id_direccion) REFERENCES direccionViviendas(direccion_VV_id)
            ON UPDATE CASCADE
            ON DELETE CASCADE
    )",

    "CREATE TABLE establecimientoHotelero( 
        establecimiento_id INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(255) NOT NULL,
        plazas INT NOT NULL,
        tipologia VARCHAR(255) NOT NULL,
        calificacion VARCHAR(255) NOT NULL,
        unidades_explotacion INT NOT NULL,
        id_direccion INT NOT NULL,
        FOREIGN KEY (id_direccion) REFERENCES direccionHoteles(direccion_H_id)
            ON UPDATE CASCADE
            ON DELETE CASCADE
    )"
];

foreach ($tablas as $query) {
    try {
        $pdo->exec($query);
    } catch (PDOException $e) {
        echo "Error al crear tabla: " . $e->getMessage();
    }
}

// Insertamos los datos

$pdo->beginTransaction();
// Tabla direccionHoteles
$columnas_3 = $pdo->prepare("INSERT INTO direccionHoteles(direccion, isla, provincia, municipio, localidad, CP) VALUES (?, ?, ?, ?, ?, ?)");
foreach ($DH as $query) {
    $columnas_3->execute([
        $query["direccion"],
        $query["isla"],
        $query["provincia"],
        $query["municipio"],
        $query["localidad"],
        $query["CP"]
    ]);
}

// Tabla direccionViviendas
$columnas_4 = $pdo->prepare("INSERT INTO direccionViviendas(direccion, isla, provincia, municipio, localidad, CP) VALUES (?, ?, ?, ?, ?, ?)");
foreach ($DVV as $query) {
    $columnas_4->execute([
        $query["direccion"],
        $query["isla"],
        $query["provincia"],
        $query["municipio"],
        $query["localidad"],
        $query["CP"]
    ]);
}

// Tabla viviendaVacacional
$columnas_1 = $pdo->prepare("INSERT INTO viviendaVacacional(nombre, plazas, id_direccion) VALUES (?, ?, ?)");
foreach ($VV as $query) {
    $columnas_1->execute([
        $query["nombre"],
        $query["plazas"],
        $query["id_direccion"]
    ]);
}

// Tabla establecimientoHotelero
$columnas_2 = $pdo->prepare("INSERT INTO establecimientoHotelero(nombre, plazas, tipologia, calificacion, unidades_explotacion, id_direccion) VALUES (?, ?, ?, ?, ?, ?)");
foreach ($H as $query) {
    $columnas_2->execute([
        $query["nombre"],
        $query["plazas"],
        $query["tipologia"],
        $query["calificacion"],
        $query["unidades"],
        $query["id_direccion"]
    ]);
}
$pdo->commit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <p>Holaaa</p>
</body>
</html>