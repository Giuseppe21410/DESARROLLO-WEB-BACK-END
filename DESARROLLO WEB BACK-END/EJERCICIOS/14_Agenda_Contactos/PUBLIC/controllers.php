<?php
// Conexión a la base de datos
$host = "localhost";
$user_name = "root";
$password = "";
$dbname = "agenda_contacto";

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user_name, $password);

// Lógica para añadir o modificar datos
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Guardar'])) {
    // Limpieza de datos
    function limpiar($valor) {
        return $valor === "_" ? "Dato desconocido" : $valor;
    }

    $Nombre = limpiar($_POST["nombre"]);
    $Nacionalidad = limpiar($_POST["nacionalidad"]);
    $Descripcion = limpiar($_POST["descripcion"]);
    $Oficio = limpiar($_POST["oficio"]);
    $Empresa = ($_POST["empresa"] === "1") ? 1 : 0; // Asegurar que es int
    $Correo = limpiar($_POST["correo"]);
    $Numero = limpiar($_POST["telefono"]);

    if ($_GET['modalidad'] == "Añadir") {
        // Insertamos en `datos`
        $stmtDatos = $pdo->prepare("INSERT INTO datos (nombre, nacionalidad, descripcion, oficio, empresa) VALUES (?, ?, ?, ?, ?)");
        $stmtDatos->execute([$Nombre, $Nacionalidad, $Descripcion, $Oficio, $Empresa]);
        $id_datos = $pdo->lastInsertId();

        // Insertamos en `datosContacto`
        $stmtDatosContacto = $pdo->prepare("INSERT INTO datosContacto (correo, numero) VALUES (?, ?)");
        $stmtDatosContacto->execute([$Correo, $Numero]);
        $id_datosContacto = $pdo->lastInsertId();

        // Insertamos en `usuarios`
        $stmtUsuarios = $pdo->prepare("INSERT INTO usuarios (datos_id, datoscontacto_id) VALUES (?, ?)");
        $stmtUsuarios->execute([$id_datos, $id_datosContacto]);

        header("Location:../wiew.php?page=" . $_GET["pagina"]);
    }else{
        // Vamos a recoger los datos de la base de datos por si el usuario no quiere modificar todos los datos: 
        $id = intval($_GET["id"]); 
        $stmt = $pdo->prepare("SELECT * FROM usuarios 
                JOIN datos ON usuarios.datos_id = datos.id_datos 
                JOIN datosContacto ON usuarios.datoscontacto_id = datosContacto.id_datosContacto 
                WHERE usuarios.id_usuarios = ?");
        $stmt->execute([$id]);
        $registroanterior = $stmt->fetch(PDO::FETCH_ASSOC);

        // Reingresamos todas las variables de nuevo:
        $Nombre        = ($Nombre === "") ? $registroanterior["nombre"] : $Nombre;
        $Nacionalidad  = ($Nacionalidad === "") ? $registroanterior["nacionalidad"] : $Nacionalidad;
        $Descripcion   = ($Descripcion === "") ? $registroanterior["descripcion"] : $Descripcion;
        $Oficio        = ($Oficio === "") ? $registroanterior["oficio"] : $Oficio;
        $Empresa       = ($_POST["empresa"] === "") ? $registroanterior["empresa"] : $Empresa;
        $Correo        = ($Correo === "") ? $registroanterior["correo"] : $Correo;
        $Numero        = ($Numero === "") ? $registroanterior["numero"] : $Numero;

        $id_datos = $registroanterior["id_datos"];
        $id_datosContacto = $registroanterior["id_datosContacto"];

        // Actualizar los valores: 
        $stmtDatos=$pdo->prepare("UPDATE datos SET nombre=?, nacionalidad=?, descripcion=?, oficio=?, empresa=? WHERE id_datos=?");
        $stmtDatos->execute([$Nombre,$Nacionalidad,$Descripcion,$Oficio,$Empresa, $id_datos]);

        $stmtDatosContacto=$pdo->prepare("UPDATE datosContacto SET correo=?, numero=? WHERE id_datosContacto=?");
        $stmtDatosContacto->execute([$Correo,$Numero,$id_datosContacto]);
        header("Location:../wiew.php?page=" . $_GET["pagina"]);
    }
}
?>


<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Contacto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <?php
    if ($_GET['modalidad'] == "Añadir"){
        echo '<h1 class="text-center mb-4">Añadir Contacto:</h1>';
        $condicion = true;
    }else{
        echo '<h1 class="text-center mb-4">Modificar Contacto:</h1>';
        $condicion=false;
    }
    ?>
  
  <form  method="POST" class="row g-3">

    <div class="col-md-6">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" <?= $condicion ? "required" : "" ?> >
    </div>

    <div class="col-md-6">
      <label for="nacionalidad" class="form-label">Nacionalidad</label>
      <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" <?= $condicion ? "required" : "" ?> >
    </div>

    <div class="col-12">
      <label for="descripcion" class="form-label">Descripción</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" <?= $condicion ? "required" : "" ?> >
    </div>

    <div class="col-md-6">
      <label for="oficio" class="form-label">Oficio</label>
      <input type="text" class="form-control" id="oficio" name="oficio" <?= $condicion ? "required" : "" ?> >
    </div>

    <div class="col-md-6">
      <label for="empresa" class="form-label">¿Trabaja en empresa?</label>
      <select id="empresa" name="empresa" class="form-select" required>
        <option value="1">Sí</option>
        <option value="0">No</option>
      </select>
    </div>

    <div class="col-md-6">
      <label for="correo" class="form-label">Correo</label>
      <input type="email" class="form-control" id="correo" name="correo" <?= $condicion ? "required" : "" ?> >
    </div>

    <div class="col-md-6">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="tel" class="form-control" id="telefono" name="telefono" <?= $condicion ? "required" : "" ?> >
    </div>

    <div class="col-12 text-center">
      <button type="submit" name="Guardar" class="btn btn-primary w-100">Guardar Cambios</button>
    </div>
    
  </form>
  <p>Leyenda: Si no quieres modificar un dato deja el campo vacío. Si quieres añadir información desconocida añade un "_".</p>
</div>

</body>
</html>
