<?php
// En el modelo.php, creamos la base de datos: // 

// Definimos las variables para conectarnos a la base de datos:
$host="localhost";
$user_name="root";
$password="";
$dbname="agenda_contacto";

// Nos conectamos a la base de datos: 
$pdo= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user_name, $password);

// Desvinculamos las claves foráneas para eliminar tablas existentes: 
$pdo->exec("SET FOREIGN_KEY_CHECKS=0");

$eliminar_tablas=[
    "DROP TABLE IF EXISTS datos",
    "DROP TABLE IF EXISTS usuarios",
    "DROP TABLE IF EXISTS datosContacto",
];

// Eliminamos las tablas existentes:
foreach ($eliminar_tablas as $eliminar){
    try{
        $pdo->exec($eliminar);
    }catch (PDOException $e){
        echo "No se ha podido eliminar las tablas:" . $e;
    }
}
$pdo->exec("SET FOREIGN_KEY_CHECKS=1");

// Procedemos a crear las tablas de la base de datos: 
$crearTablas=[
    "CREATE TABLE datos(
        id_datos INT NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(255) NOT NULL,
        nacionalidad VARCHAR(255) NOT NULL,
        descripcion VARCHAR(255) NOT NULL,
        oficio VARCHAR(255) NOT NULL,
        empresa BOOLEAN NOT NULL,
        PRIMARY KEY(id_datos)
    )",

    "CREATE TABLE datosContacto(
        id_datosContacto INT NOT NULL AUTO_INCREMENT,
        correo VARCHAR(255) NOT NULL,
        numero VARCHAR(255) NOT NULL,
        PRIMARY KEY(id_datosContacto)
    )",

    "CREATE TABLE usuarios(
        id_usuarios INT NOT NULL AUTO_INCREMENT,
        datos_id INT NOT NULL,
        datoscontacto_id INT NOT NULL,
        PRIMARY KEY(id_usuarios),
        FOREIGN KEY (datos_id) REFERENCES datos(id_datos)
            ON UPDATE CASCADE
            ON DELETE CASCADE,
        FOREIGN KEY (datoscontacto_id) REFERENCES datosContacto(id_datosContacto)
            ON UPDATE CASCADE
            ON DELETE CASCADE
    )"
];

// Creamos las tablas directamente.
foreach ($crearTablas as $Tabla){
    try{
        $pdo->exec($Tabla);
    }catch (PDOException $e){
        echo "No se ha podido crear las tablas:" . $e;
    }
}

// Procedemos a insertar tres contactos para visualizarlo en wiew.php:
// Las tablas con los contactos:
include "./datos.php";

$totalDatos = count($datos);
$totalContactos = count($contactos);

if ($totalDatos !== $totalContactos) {
    die("Error: Los arrays de datos y contactos deben tener la misma cantidad de elementos.");
}

try {
    for ($i = 0; $i < $totalDatos; $i++) {
        $stmtDatos = $pdo->prepare("INSERT INTO datos(nombre,nacionalidad,descripcion,oficio,empresa) VALUES (?,?,?,?,?)");
        $stmtDatos->execute($datos[$i]);
        $id_datos = $pdo->lastInsertId();

        $stmtDatosContacto = $pdo->prepare("INSERT INTO datosContacto(correo,numero) VALUES (?,?)");
        $stmtDatosContacto->execute($contactos[$i]);
        $id_datosContacto = $pdo->lastInsertId();

        $stmtUsuarios = $pdo->prepare("INSERT INTO usuarios(datos_id,datoscontacto_id) VALUES (?,?)");
        $stmtUsuarios->execute([$id_datos, $id_datosContacto]);
    }
} catch (PDOException $e) {
    echo 'No se ha podido insertar los datos en la base de datos: ' . $e->getMessage();
}

  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>