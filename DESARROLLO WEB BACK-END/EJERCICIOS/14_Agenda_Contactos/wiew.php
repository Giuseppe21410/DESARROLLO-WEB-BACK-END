<?php
     if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['AñadirFila']) || isset($_POST['EditarFila'])){
          $Modalidad = $_POST["modalidad"] ; // De esta manera indicamos la modalidad editar.
          $id_fila=intval($_POST["id"]);
          $pagina=intval($_POST["pagina"]);

          header("Location: ./PUBLIC/controllers.php?modalidad=$Modalidad&id=$id_fila&pagina=$pagina");
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Agenda de Contactos</title>
  <link rel="stylesheet" href="./ASSETS/CSS/styles.css" />
</head>
<body>

  <div class="container">
    <div class="Titulo">
      <form method="post">
         <input type="hidden" name="modalidad" value="Añadir">
         <button name="AñadirFila"><img src="./ASSETS/IMAGES/mas.png" alt=""></button>
      </form>
      <h1>Agenda de Contactos</h1>
    </div>
    

    <table class="contact-table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Nacionalidad</th>
          <th>Descripción</th>
          <th>Oficio</th>
          <th>Empresa</th>
          <th>Correo</th>
          <th>Teléfono</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Insertamos las variables para conectarnos a la base de datos: 
        $host="localhost";
        $user_name="root";
        $password="";
        $dbname="agenda_contacto";
        // Variables de paginación:
        $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
        $limit= 15;
        $offset=($page-1)*$limit;

        // Con la función "construirConsulta" construiremos la consulta de los contactos en función de la paginación:
        function construirConsulta_1($limit,$offset){
            $sql= "SELECT * FROM usuarios JOIN datos ON usuarios.datos_id=datos.id_datos JOIN datosContacto ON usuarios.datoscontacto_id = datosContacto.id_datosContacto";
            $sql.=" LIMIT $limit OFFSET $offset";
            return $sql;
        };

        // Nos conectamos a la base de datos: 
        $pdo= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user_name, $password);

        // Recogemos los datos de la base de datos: 
        $consulta = construirConsulta_1($limit, $offset);
        $stmt= $pdo->prepare($consulta);
        $stmt->execute();
        $resultados= $stmt->fetchAll(PDO::FETCH_ASSOC); 

        if (count($resultados)>0){
            foreach ($resultados as $fila){
                $id= $fila["id_usuarios"];
                echo '
                <tr>
                   <td>' . htmlspecialchars($fila["nombre"]) . '</td>
                   <td>' . htmlspecialchars($fila["nacionalidad"]) . '</td>
                   <td>' . htmlspecialchars($fila["descripcion"]) . '</td>
                   <td>' . htmlspecialchars($fila["oficio"]) . '</td>
                   <td>' . ((int)$fila["empresa"] === 1 ? "Sí" : "No") . '</td>
                   <td>' . htmlspecialchars($fila["correo"]) . '</td>
                   <td>' . htmlspecialchars($fila["numero"]) . '</td>
                   <td><form method="POST" class="Eliminar_Fila">
                   <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                   <input type="hidden" name="pagina" value="' . htmlspecialchars($page) . '">
                   <input type="hidden" name="modalidad" value="Editar">
                   <button class="eliminar" type="submit" name="EliminarFila">Eliminar</button>
                   <button class="editar" type="submit" name="EditarFila">Editar</button>
                   </form></td>          
                </tr>';
            }
        }

        // Lógica para eliminar: 
        if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['EliminarFila'])) {
         $id_fila = intval($_POST['id']);

         $sql_eliminar = "DELETE FROM usuarios WHERE id_usuarios = :id";

         $stmt = $pdo->prepare($sql_eliminar);
         $stmt->execute(['id' => $id_fila]);
        }
        ?>
      </tbody>
    </table>

    <div class="pagination">
      <?php
      $base_url= $baseUrl = strtok($_SERVER["REQUEST_URI"], '?');
      $queryParams=$_GET;
      $queryParams['page'] = $page - 1;
      $prevUrl = $baseUrl . '?' . http_build_query($queryParams);
      $queryParams['page'] = $page + 1;
      $nextUrl = $baseUrl . '?' . http_build_query($queryParams);
      ?>
      <a href="<?= ($page > 1) ? $prevUrl : '#' ?>" class="pagina <?= ($page <= 1 ? 'disabled' : '') ?>">&laquo; Anterior</a>
      <span class="pagina">Página <?= $page ?></span>
      <a href="<?= (count($resultados) >= $limit) ? $nextUrl : '#' ?>" class="pagina <?= (count($resultados) < $limit ? 'disabled' : '') ?>">Siguiente &raquo;</a>
    </div>
  </div>

</body>
</html>
