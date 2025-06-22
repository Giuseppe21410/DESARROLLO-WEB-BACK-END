<?php

// Recoger variables GET y limpiar
$Tipologia = isset($_GET['Tipologia']) ? htmlspecialchars($_GET['Tipologia']) : '';
$Provincia = isset($_GET['Provincia']) ? htmlspecialchars($_GET['Provincia']) : '';
$Isla = isset($_GET['Isla']) ? htmlspecialchars($_GET['Isla']) : '';
$Municipio = isset($_GET['Municipio']) ? htmlspecialchars($_GET['Municipio']) : '';
$Modalidad = isset($_GET['Modalidad']) ? htmlspecialchars($_GET['Modalidad']) : '';
$Calificacion = isset($_GET['Calificacion']) ? htmlspecialchars($_GET['Calificacion']) : '';
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$limit = 50;
$offset = ($page - 1) * $limit;

if (isset($_POST['Eliminar'])) {
  header("Location: ./index.php");
  exit();
}

// Mostrar filtro inferior (tipología y calificación) según modalidad
function mostrarFiltroInferior($Modalidad)
{
    if ($Modalidad == "Viviendas Vacacionales") {
        return "";
    } elseif ($Modalidad == "Establecimientos Hoteleros") {
        return '
        <select id="filtroTipologia" class="_" onchange="actualizarQuery(\'Tipologia\', this.value)">
          <option disabled selected>Selecciona tipología:</option>
          <option value="Hotel">Hotel</option>
          <option value="Hotel Urbano">Hotel Urbano</option>
          <option value="Pension">Pensión</option>      
          <option value="Hotel Emblematico">Hotel Emblemático</option>
          <option value="Hotel Rural">Hotel Rural</option>
          <option value="Medio Rural">Medio Rural</option>
        </select>

        <select id="filtroCalificacion" class="_" onchange="actualizarQuery(\'Calificacion\', this.value)">
          <option disabled selected>Selecciona calificación:</option>
          <option value="Categoria Unica">Categoría Única</option>
          <option value="Una Estrella">Una Estrella</option>
          <option value="Dos Estrellas">Dos Estrellas</option>
          <option value="Tres Estrellas">Tres Estrellas</option>
          <option value="Cuatro Estrellas">Cuatro Estrellas</option>
          <option value="Cinco Estrellas">Cinco Estrellas</option>
          <option value="Cinco Estrellas Lujo">Cinco Estrellas Lujo</option>
          <option value="Cinco Estrellas Gran Lujo">Cinco Estrellas Gran Lujo</option>
          <option value="1 Palmera">Una Palmera</option>
          <option value="2 Palmeras">Dos Palmeras</option>
        </select>';
    }
    return '';
}

// Construcción de consulta
function construirConsulta($filters, $limit, $offset)
{
    $where = [];
    $params = [];

    if (!empty($filters['Modalidad']) && $filters['Modalidad'] == 'Viviendas Vacacionales') {
        $sql = "SELECT * FROM direccionviviendas 
                INNER JOIN viviendavacacional 
                ON direccionviviendas.direccion_VV_id = viviendavacacional.id_direccion";

        if (!empty($filters['Provincia'])) {
            $where[] = "direccionviviendas.provincia = :provincia";
            $params[':provincia'] = $filters['Provincia'];
        }
        if (!empty($filters['Isla'])) {
            $where[] = "direccionviviendas.isla = :isla";
            $params[':isla'] = $filters['Isla'];
        }
        if (!empty($filters['Municipio'])) {
            $where[] = "direccionviviendas.municipio = :municipio";
            $params[':municipio'] = $filters['Municipio'];
        }

    } else {
        $sql = "SELECT * FROM direccionhoteles 
                INNER JOIN establecimientohotelero 
                ON direccionhoteles.direccion_H_id = establecimientohotelero.id_direccion";

        if (!empty($filters['Provincia'])) {
            $where[] = "direccionhoteles.provincia = :provincia";
            $params[':provincia'] = $filters['Provincia'];
        }
        if (!empty($filters['Isla'])) {
            $where[] = "direccionhoteles.isla = :isla";
            $params[':isla'] = $filters['Isla'];
        }
        if (!empty($filters['Municipio'])) {
            $where[] = "direccionhoteles.municipio = :municipio";
            $params[':municipio'] = $filters['Municipio'];
        }
        if (!empty($filters['Tipologia'])) {
            $where[] = "establecimientohotelero.tipologia = :tipologia";
            $params[':tipologia'] = $filters['Tipologia'];
        }
        if (!empty($filters['Calificacion'])) {
            $where[] = "establecimientohotelero.calificacion = :calificacion";
            $params[':calificacion'] = $filters['Calificacion'];
        }
    }

    if (count($where) > 0) {
        $sql .= " WHERE " . implode(" AND ", $where);
    }

    $sql .= " LIMIT $limit OFFSET $offset";
    return ['sql' => $sql, 'params' => $params];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sector turístico de Canarias</title>
  <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
  <style>
    .disabled {
      pointer-events: none;
      color: gray;
      opacity: 0.5;
    }
    .pagina {
      margin: 0 8px;
    }
  </style>
</head>
<body>
  <h1>Sector turístico de Canarias</h1>

  <div class="filtros">
     <select id="filtroModalidad" class="_" onchange="actualizarQuery('Modalidad', this.value)">
      <option disabled <?php if(!$Modalidad) echo 'selected'; ?>>Selecciona modalidad:</option>
      <option value="Viviendas Vacacionales" <?php if($Modalidad == "Viviendas Vacacionales"){ echo 'selected'; $Tipologia=""; $Calificacion="";}?>>Viviendas Vacacionales</option>
      <option value="Establecimientos Hoteleros" <?php if($Modalidad == "Establecimientos Hoteleros") echo 'selected'; ?>>Establecimientos Hoteleros</option>
    </select>

    <select id="filtroProvincia" onchange="actualizarQuery('Provincia', this.value)">
      <option disabled value="" <?php if(!$Provincia) echo 'selected'; ?>>Selecciona una provincia:</option>
      <option value="Santa Cruz de Tenerife" <?php if($Provincia == "Santa  Cruz de Tenerife") echo 'selected'; ?>>Santa Cruz de Tenerife</option>
      <option value="Palmas (Las)" <?php if($Provincia == "Palmas (Las)") echo 'selected'; ?>>Las Palmas de Grancanaria</option>
    </select>

    <select id="filtroIsla" onchange="actualizarQuery('Isla', this.value)">
      <option disabled value="" <?php if(!$Isla) echo 'selected'; ?>>Selecciona una isla:</option>
      <?php
        $islasTenerife = ["Tenerife", "La Gomera", "La Palma", "El Hierro"];
        $islasLasPalmas = ["Gran Canaria", "Lanzarote", "Fuerteventura"];

        if ($Provincia == "Santa Cruz de Tenerife") {
          foreach ($islasTenerife as $islaOpt) {
            $selected = ($Isla == $islaOpt) ? 'selected' : '';
            echo "<option value='$islaOpt' $selected>$islaOpt</option>";
          }
        } elseif ($Provincia == "Palmas (Las)") {
          foreach ($islasLasPalmas as $islaOpt) {
            $selected = ($Isla == $islaOpt) ? 'selected' : '';
            echo "<option value='$islaOpt' $selected>$islaOpt</option>";
          }
        }
      ?>
    </select>

    <select id="filtroMunicipio" onchange="actualizarQuery('Municipio', this.value)">
      <option disabled <?php if(!$Municipio) echo 'selected'; ?>>Selecciona un municipio:</option>
      <?php
      // Mostrar municipios según isla
      $municipiosPorIsla = [
        "Gran Canaria" => ["Las Palmas de Gran Canaria","Telde","Santa Lucía de Tirajana","San Bartolomé de Tirajana","Arucas","Ingenio","Agüimes","Gáldar","Santa Brígida","Mogán","Teror","Valsequillo De Gran Canaria","Firgas","Vega San Mateo","La Aldea de San Nicolás","Santa Maria De Guia De Gran Canaria","Moya","Artenara"],
        "Lanzarote" => ["Arrecife","Teguise","San Bartolomé","Tías","Haría","Tinajo"],
        "Fuerteventura" => ["Puerto del Rosario","Tuineje","La Oliva"],
        "Tenerife" => ["Santa Cruz Tenerife","San Cristóbal de La Laguna","Arona","Adeje","La Orotava","Granadilla de Abona","Los Realejos","Puerto de la Cruz","Candelaria","Guia Isora","San Miguel de Abona","Tegueste","El Rosario","Arico","Icod de los Vinos","La Victoria de Acentejo","La Matanza de Acentejo","Tacoronte","El Sauzal","Los Silos","Buenavista del Norte","Garachico","San Juan de la Rambla","La Guancha","Santa Úrsula","Vilaflor De Chasna","Fasnia"],
        "La Gomera" => ["Valle Gran Rey","San Sebastián de La Gomera","Hermigua","Agulo","Alajeró"],
        "La Palma" => ["Santa Cruz de La Palma","Los Llanos de Aridane","Breña Alta","Breña Baja","Tazacorte","El Paso","Fuencaliente de La Palma","Garafía","Villa De Mazo","Puntagorda","San Andrés y Sauces"],
        "El Hierro" => ["Valverde","Frontera","El Pinar De El Hierro"]
      ];

      if (array_key_exists($Isla, $municipiosPorIsla)) {
        foreach ($municipiosPorIsla[$Isla] as $mun) {
          $selected = ($Municipio == $mun) ? 'selected' : '';
          echo "<option value='$mun' $selected>$mun</option>";
        }
      }
      ?>
    </select>

    <form method="post" class="eliminar">
      <button value="Eliminar" name="Eliminar">Eliminar Filtros</button>
    </form>
  </div>

  <div id="FiltroInferior" class="filtros_">
    <?php echo mostrarFiltroInferior($Modalidad); ?>
  </div>

  <div class="inventario">
    <?php
    $filtros = [
      'Modalidad' => $Modalidad,
      'Provincia' => $Provincia,
      'Isla' => $Isla,
      'Municipio' => $Municipio,
      'Tipologia' => $Tipologia,
      'Calificacion' => $Calificacion,
    ];

    $pdo = new PDO("mysql:host=localhost;dbname=viviendas_vacacionales_establecimientos_hoteleros;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = construirConsulta($filtros, $limit, $offset);
    $stmt = $pdo->prepare($consulta['sql']);
    $stmt->execute($consulta['params']);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultados) > 0) {
      foreach ($resultados as $fila) {
        echo '<div class="tarjeta">';
        echo '<h2>' . htmlspecialchars($fila['nombre']) . '</h2>';
        echo "<p>Dirección: " . htmlspecialchars($fila['direccion']) . "</p>";
        echo "<p>Isla: " . htmlspecialchars($fila['isla']) . "</p>";
        echo "<p>Municipio: " . htmlspecialchars($fila['municipio']) . "</p>";
        echo "<p>Localidad: " . htmlspecialchars($fila['localidad']) . "</p>";
        echo "<p>CP: " . htmlspecialchars($fila['CP']) . "</p>";
        echo "<p>Plazas: " . htmlspecialchars($fila['plazas']) . "</p>";
        if ($Modalidad == "Establecimientos Hoteleros") {
          echo "<p>Tipología: " . htmlspecialchars($fila['tipologia']) . "</p>";
          echo "<p>Calificación: " . htmlspecialchars($fila['calificacion']) . "</p>";
        }
        echo '</div>';
      }
    } else {
      echo "<p>No se encontraron resultados. Haga una nueva selección.</p>";
    }
    ?>
  </div>

  <div class="paginacion">
    <?php
      $baseUrl = strtok($_SERVER["REQUEST_URI"], '?');
      $queryParams = $_GET;
      $queryParams['page'] = $page - 1;
      $prevUrl = $baseUrl . '?' . http_build_query($queryParams);
      $queryParams['page'] = $page + 1;
      $nextUrl = $baseUrl . '?' . http_build_query($queryParams);
    ?>
    <a href="<?= ($page > 1) ? $prevUrl : '#' ?>" class="pagina <?= ($page <= 1 ? 'disabled' : '') ?>">&laquo; Anterior</a>
    <span class="pagina">Página <?= $page ?></span>
    <a href="<?= (count($resultados) >= $limit) ? $nextUrl : '#' ?>" class="pagina <?= (count($resultados) < $limit ? 'disabled' : '') ?>">Siguiente &raquo;</a>
  </div>

  <script>
    function actualizarQuery(param, valor) {
      const url = new URL(window.location);
      if (valor) {
        url.searchParams.set(param, valor);
      } else {
        url.searchParams.delete(param);
      }
      url.searchParams.delete('page');
      window.location.href = url.toString();
    }
  </script>
</body>
</html>





