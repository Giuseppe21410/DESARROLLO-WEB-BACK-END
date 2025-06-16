<?php
// Complentamos los datos iniciales para poder conectarnos a la base de datos.
$host="localhost";
$username="root";
$password= "";
$dbname= "rrss_0";

// $sql_2=" CREATE DATABASE caca";
// Todo lo que hagamos con bases de datos, se incluira dentro de un "try-catch": 
try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password); // En "DSN" (Data Source Name) indicamos el tipo de la base de datos, el host, el nombre de la base de datos y la codificación "UTF8".
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activar el modo errores.

    // Debemos crear varias sentencias por separado y ejecutarlas por separado. Creamos uno a uno el conjunto de tablas de la aplicación de redes sociales a partir de un bucle: 
    $tablas= [
     "CREATE TABLE usuarios(
     id_usuarios INT  PRIMARY KEY AUTO_INCREMENT,
     nombre VARCHAR(255) NOT NULL,
     password_hash VARCHAR(255) NOT NULL,
     correo VARCHAR(255) NOT NULL,
     bi TEXT
     )",
     "CREATE TABLE relaciones (
     id_relaciones INT AUTO_INCREMENT PRIMARY KEY,
     seguido INT NOT NULL,
     seguidor INT NOT NULL,
     FOREIGN KEY (seguido) REFERENCES usuarios(id_usuarios), 
     FOREIGN KEY (seguidor) REFERENCES usuarios(id_usuarios)
     )",
     "CREATE TABLE mensajes (
     id_mensajes INT AUTO_INCREMENT PRIMARY KEY,
     contenido VARCHAR(255) NOT NULL,
     fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     emisor INT NOT NULL,
     receptor INT NOT NULL,
     leido BOOLEAN DEFAULT false,
     FOREIGN KEY (emisor) REFERENCES usuarios(id_usuarios), 
     FOREIGN KEY (receptor) REFERENCES usuarios(id_usuarios)
     )",
      "CREATE TABLE publicaciones (
     id_publicaciones INT AUTO_INCREMENT PRIMARY KEY,
     contenido VARCHAR(255) NOT NULL,
     fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     usuario_creador INT NOT NULL,
     imagen VARCHAR(255),
     leido BOOLEAN DEFAULT false,
     FOREIGN KEY (usuario_creador) REFERENCES usuarios(id_usuarios)
     )",
     "CREATE TABLE comentarios (
     id_comentarios INT AUTO_INCREMENT PRIMARY KEY,
     contenido VARCHAR(255) NOT NULL,
     fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     usuario_creador INT NOT NULL,
     publicacion_id INT NOT NULL,
     FOREIGN KEY (usuario_creador) REFERENCES usuarios(id_usuarios),
     FOREIGN KEY (publicacion_id) REFERENCES publicaciones(id_publicaciones)
     )"
    ];
    foreach ($tablas as $table){
        try{
            $pdo->exec($table); // De esta manera ejecutamos e insertamos todas las tablas.
        } catch(PDOException $e) {
            echo "Error de creación de tablas:". $e->getMessage(); // Manejamos errores.
        }
    }

    // Planteamos la estructura para insertar filas en las correspondientes tablas. Vamos a crear un array para poder guardar los datos y una transacción para que todos los inserts se hagan juntos: 
   
    
    try{
        $pdo->beginTransaction(); 

        // Añadimos tres filas para la tabla usuarios.

         $usuarios = [
    ['nombre' => 'Ana', 'correo' => 'ana@ejemplo.com', 'password_hash' => password_hash('1234', PASSWORD_DEFAULT), 'bi' => 'Hola!'],
    ['nombre' => 'Luis', 'correo' => 'luis@ejemplo.com', 'password_hash' => password_hash('abcd', PASSWORD_DEFAULT), 'bi' => 'Desarrollador'],
    ['nombre' => 'Marta', 'correo' => 'marta@ejemplo.com', 'password_hash' => password_hash('pass', PASSWORD_DEFAULT), 'bi' => null]]; // Estas serán las filas que se añaden en la tabla usuarios.

        $columnas= $pdo->prepare("INSERT INTO usuarios(nombre,correo,password_hash,bi) VALUES (?,?,?,?)"); // Prepara una sentencia SQL para ejecutarla después con datos que se pasan como parámetros. Solo prepara la consulta

        foreach ($usuarios  as $usuario){
            $columnas->execute([
                $usuario['nombre'],
                $usuario['correo'],
                $usuario['password_hash'],
                $usuario['bi'],
            ]);
        }

        // Añadir tres filas a relaciones: 
        $relaciones = [
    ['seguido' => 2, 'seguidor' => 1], // Usuario 1 sigue a usuario 2
    ['seguido' => 3, 'seguidor' => 1], // Usuario 1 sigue a usuario 3
    ['seguido' => 1, 'seguidor' => 3], // Usuario 3 sigue a usuario 1
];
    $columnas_1= $pdo->prepare('INSERT INTO relaciones(seguido,seguidor) VALUES (?,?)');

    foreach ($relaciones as $relacion){
        $columnas_1->execute([
            $relacion['seguido'],
            $relacion['seguidor'],
        ]);
    }

    // Datos para mensajes
   $mensajes = [
    ['contenido' => 'Hola Luis, ¿qué tal?', 'emisor' => 1, 'receptor' => 2, 'leido' => false],
    ['contenido' => 'Todo bien, Ana. Gracias!', 'emisor' => 2, 'receptor' => 1, 'leido' => true],
    ['contenido' => 'Hola Marta, ¿vienes a la reunión?', 'emisor' => 1, 'receptor' => 3, 'leido' => false],
   ];

   $stmtMensajes = $pdo->prepare("INSERT INTO mensajes(contenido, emisor, receptor, leido) VALUES (?, ?, ?, ?)");
   foreach ($mensajes as $msg) {
    $stmtMensajes->execute([
        $msg['contenido'],
        $msg['emisor'],
        $msg['receptor'],
        $msg['leido'],
    ]);
   }

// Datos para publicaciones
  $publicaciones = [
    ['contenido' => 'Esta es mi primera publicación', 'usuario_creador' => 1, 'imagen' => null, 'leido' => false],
    ['contenido' => 'Disfrutando del día soleado', 'usuario_creador' => 2, 'imagen' => 'sol.jpg', 'leido' => false],
    ['contenido' => 'Acabo de leer un libro increíble', 'usuario_creador' => 3, 'imagen' => null, 'leido' => false],
  ];

   $stmtPublicaciones = $pdo->prepare("INSERT INTO publicaciones(contenido, usuario_creador, imagen, leido) VALUES (?, ?, ?, ?)");
   foreach ($publicaciones as $pub) {
    $stmtPublicaciones->execute([
        $pub['contenido'],
        $pub['usuario_creador'],
        $pub['imagen'],
        $pub['leido'],
    ]);
   }

// Datos para comentarios
   $comentarios = [
    ['contenido' => '¡Me gusta!', 'usuario_creador' => 2, 'publicacion_id' => 1],
    ['contenido' => 'Qué bien se ve esa foto', 'usuario_creador' => 3, 'publicacion_id' => 2],
    ['contenido' => 'Lo quiero leer también', 'usuario_creador' => 1, 'publicacion_id' => 3],
   ];

   $stmtComentarios = $pdo->prepare("INSERT INTO comentarios(contenido, usuario_creador, publicacion_id) VALUES (?, ?, ?)");
   foreach ($comentarios as $com) {
    $stmtComentarios->execute([
        $com['contenido'],
        $com['usuario_creador'],
        $com['publicacion_id'],
    ]);
   }    

        $pdo->commit(); // De esta manera completamos la trasacción e insertamos de forma multiple los datos.
    
        //$last_id = $pdo->lastInsertId();// Obtiene el último id al insertarse una fila.

    }catch (PDOException $e) {
        $pdo ->rollBack();// Revierte un transacción en curso a una base de datos.
        echo 'No se han insetado los datos'. $e->getMessage();
    }

    // Para eliminar una fila en una tabla en específico: 
    $sql_1= "DELETE FROM usuarios WHERE id_usuarios=1"; // Podrías hacer varias eliminaciones si lo añades en un array.

    $pdo->exec($sql_1); // Elimina la fila uno de la tabla de usuarios.

    // Para actualizar una fila en una tabla específica:
    $sql_3= "UPDATE usuarios SET nombre='Pepe' WHERE id='1'";

    $pdo->exec($sql_3);

}catch (PDOException $e){
    echo 'Error en la conexión:' . $e->getMessage();
}

$pdo=null; // De esta manera cerramos la conexión con la base de datos.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_RRSS</title>
</head>
<body>
    <p>Crea una base de datos sobre redes sociales.</p>
</body>
</html>