<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>index.php</title>
  <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
</head>
<body>
  <h1>Sector turístico de Canarias</h1>

  <div class="filtros">
    <select id="filtroModalidad" class="_">
      <option disabled >Selecciona modalidad:</option>
      <option value="Viviendas Vacacionales">Viviendas Vacacionales</option>
      <option value="Establecimientos Hoteleros">Establecimientos Hoteleros</option>
    </select>

    <select id="filtroProvincia">
      <option disabled value="">Selecciona una provincia:</option>
      <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
      <option value="Las Palmas de Grancanaria">Las Palmas de Grancanaria</option>
    </select>

    <select id="filtroIsla">
          <option disabled value="">Selecciona una isla:</option>
          <option value="Tenerife">Tenerife</option>
          <option value="La Gomera">La Gomera</option>
          <option value="La Palma">La Palma</option>
          <option value="El Hierro">El Hierro</option>
    </select>

  <select id="filtroMunicipio">
  <option selected disabled>Selecciona un municipio:</option>
  <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
  <option value="San Cristóbal de La Laguna">San Cristóbal de La Laguna</option>
  <option value="Arona">Arona</option>
  <option value="Adeje">Adeje</option>
  <option value="La Orotava">La Orotava</option>
  <option value="Granadilla de Abona">Granadilla de Abona</option>
  <option value="Los Realejos">Los Realejos</option>
  <option value="Puerto de la Cruz">Puerto de la Cruz</option>
  <option value="Candelaria">Candelaria</option>
  <option value="Guía de Isora">Guía de Isora</option>
  <option value="San Miguel de Abona">San Miguel de Abona</option>
  <option value="Tegueste">Tegueste</option>
  <option value="El Rosario">El Rosario</option>
  <option value="Arico">Arico</option>
  <option value="Icod de los Vinos">Icod de los Vinos</option>
  <option value="La Victoria de Acentejo">La Victoria de Acentejo</option>
  <option value="La Matanza de Acentejo">La Matanza de Acentejo</option>
  <option value="Tacoronte">Tacoronte</option>
  <option value="El Sauzal">El Sauzal</option>
  <option value="Los Silos">Los Silos</option>
  <option value="Buenavista del Norte">Buenavista del Norte</option>
  <option value="Garachico">Garachico</option>
  <option value="San Juan de la Rambla">San Juan de la Rambla</option>
  <option value="La Guancha">La Guancha</option>
  <option value="Santa Úrsula">Santa Úrsula</option>
  <option value="Vilaflor">Vilaflor</option>
  <option value="Fasnia">Fasnia</option>
  </select>

   

  </div>
  <div class="filtros_">
    <select id="filtroTipologia" class="_">
      <option disabled value="">Selecciona tipología:</option>
      <option value="Hotel">Hotel</option>
      <option value="Hotel Urbano">Hotel Urbano</option>
      <option value="Pension">Pension</option>
      <option value="Hotel Emblemático">Hotel Emblemático</option>
      <option value="Hotel Rural">Hotel Rural</option>
      <option value="Medio Rural">Medio Rural</option>
    </select>
    <select id="filtroCalificacion" class="_">
      <option disabled value="">Selecciona calificacion:</option>
      <option value="Categoria Unica">Categoria Unica</option>
      <option value="Una Estrella">Una Estrella</option>
      <option value="Dos Estrellas">Dos Estrellas</option>
      <option value="Tres Estrellas">Tres Estrellas</option>
      <option value="Cuatro Estrellas">Cuatro Estrellas</option>
      <option value="Cinco Estrellas">Cinco Estrellas</option>
      <option value="Cinco Estrellas Lujo">Cinco Estrellas Lujo</option>
      <option value="Cinco Estrellas Gran Lujo">Cinco Estrellas Gran Lujo</option>
      <option value="1 Palmera">Una Palmera</option>
      <option value="2 Palmeras">Dos Palmeras</option>
    </select>
  </div>
  
  <div class="inventario">
    <!-- Aquí van las tarjetas -->
  </div>

  <form method="post">
  <div class="paginacion">
    <button disabled>&laquo; Anterior</button>
    <button>Siguiente &raquo;</button>
  </div>
  </form> 

<script>
  document.getElementById("filtroProvincia").addEventListener("change", function () {
    const provincia = this.value;
    const filtrosDiv = document.querySelector(".filtros");

    // Elimina el select de islas anterior si ya existe
    const filtroIslaExistente = document.getElementById("filtroIsla");
    if (filtroIslaExistente) {
      filtroIslaExistente.remove();
    }

    const filtroMunicipioExistente = document.getElementById("filtroMunicipio");
    if (filtroMunicipioExistente) {
      filtroMunicipioExistente.remove();
    }

    // Crea el nuevo select según la provincia elegida
    if (provincia === "Santa Cruz de Tenerife") {
      filtrosDiv.insertAdjacentHTML(
        "beforeend",
        `<select id="filtroIsla">
          <option disabled value="">Selecciona una isla:</option>
          <option value="Tenerife">Tenerife</option>
          <option value="La Gomera">La Gomera</option>
          <option value="La Palma">La Palma</option>
          <option value="El Hierro">El Hierro</option>
        </select>
        <select id="filtroMunicipio">
  <option selected disabled>Selecciona un municipio:</option>
  <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
  <option value="San Cristóbal de La Laguna">San Cristóbal de La Laguna</option>
  <option value="Arona">Arona</option>
  <option value="Adeje">Adeje</option>
  <option value="La Orotava">La Orotava</option>
  <option value="Granadilla de Abona">Granadilla de Abona</option>
  <option value="Los Realejos">Los Realejos</option>
  <option value="Puerto de la Cruz">Puerto de la Cruz</option>
  <option value="Candelaria">Candelaria</option>
  <option value="Guía de Isora">Guía de Isora</option>
  <option value="San Miguel de Abona">San Miguel de Abona</option>
  <option value="Tegueste">Tegueste</option>
  <option value="El Rosario">El Rosario</option>
  <option value="Arico">Arico</option>
  <option value="Icod de los Vinos">Icod de los Vinos</option>
  <option value="La Victoria de Acentejo">La Victoria de Acentejo</option>
  <option value="La Matanza de Acentejo">La Matanza de Acentejo</option>
  <option value="Tacoronte">Tacoronte</option>
  <option value="El Sauzal">El Sauzal</option>
  <option value="Los Silos">Los Silos</option>
  <option value="Buenavista del Norte">Buenavista del Norte</option>
  <option value="Garachico">Garachico</option>
  <option value="San Juan de la Rambla">San Juan de la Rambla</option>
  <option value="La Guancha">La Guancha</option>
  <option value="Santa Úrsula">Santa Úrsula</option>
  <option value="Vilaflor">Vilaflor</option>
  <option value="Fasnia">Fasnia</option>
  </select>`
      );
    } else if (provincia === "Las Palmas de Grancanaria") {
      filtrosDiv.insertAdjacentHTML(
        "beforeend",
        `<select id="filtroIsla">
          <option disabled value="">Selecciona una isla:</option>
          <option value="Gran Canaria">Gran Canaria</option>
          <option value="Lanzarote">Lanzarote</option>
          <option value="Fuerteventura">Fuerteventura</option>
        </select>
      <select id="filtroMunicipio">
         <option selected disabled>Selecciona un municipio:</option>
         <option value="Las Palmas de Gran Canaria">Las Palmas de Gran Canaria</option>
         <option value="Telde">Telde</option>
         <option value="Santa Lucía de Tirajana">Santa Lucía de Tirajana</option>
         <option value="San Bartolomé de Tirajana">San Bartolomé de Tirajana</option>
         <option value="Arucas">Arucas</option>
         <option value="Ingenio">Ingenio</option>
         <option value="Agüimes">Agüimes</option>
         <option value="Gáldar">Gáldar</option>
         <option value="Santa Brígida">Santa Brígida</option>
         <option value="Mogán">Mogán</option>
         <option value="Teror">Teror</option>
         <option value="Valsequillo">Valsequillo</option>
         <option value="Firgas">Firgas</option>
         <option value="Vega de San Mateo">Vega de San Mateo</option>
         <option value="La Aldea de San Nicolás">La Aldea de San Nicolás</option>
         <option value="Santa María de Guía">Santa María de Guía</option>
         <option value="Moya">Moya</option>
         <option value="Artenara">Artenara</option>
         <option value="Agaete">Agaete</option>
         <option value="Tejeda">Tejeda</option>
         <option value="Valleseco">Valleseco</option>
       </select> `
      );
    }
  });
  document.getElementById("filtroIsla").addEventListener("change", function(e) {
  const filtrosDiv = document.querySelector(".filtros");
  const filtroMunicipioExistente = document.getElementById("filtroMunicipio");

  // Elimina el select anterior si existe
  if (filtroMunicipioExistente) {
    filtroMunicipioExistente.remove();
  }

  const isla = e.target.value;

  if (isla === "Grancanaria") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option selected disabled>Selecciona un municipio:</option>
        <option value="Las Palmas de Gran Canaria">Las Palmas de Gran Canaria</option>
        <option value="Telde">Telde</option>
        <option value="Santa Lucía de Tirajana">Santa Lucía de Tirajana</option>
        <option value="San Bartolomé de Tirajana">San Bartolomé de Tirajana</option>
        <option value="Arucas">Arucas</option>
        <option value="Ingenio">Ingenio</option>
        <option value="Agüimes">Agüimes</option>
        <option value="Gáldar">Gáldar</option>
        <option value="Santa Brígida">Santa Brígida</option>
        <option value="Mogán">Mogán</option>
        <option value="Teror">Teror</option>
        <option value="Valsequillo">Valsequillo</option>
        <option value="Firgas">Firgas</option>
        <option value="Vega de San Mateo">Vega de San Mateo</option>
        <option value="La Aldea de San Nicolás">La Aldea de San Nicolás</option>
        <option value="Santa María de Guía">Santa María de Guía</option>
        <option value="Moya">Moya</option>
        <option value="Artenara">Artenara</option>
        <option value="Agaete">Agaete</option>
        <option value="Tejeda">Tejeda</option>
        <option value="Valleseco">Valleseco</option>
      </select>`
    );
  } else if (isla === "Tenerife") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option selected disabled>Selecciona un municipio:</option>
        <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
        <option value="San Cristóbal de La Laguna">San Cristóbal de La Laguna</option>
        <option value="Arona">Arona</option>
        <option value="Adeje">Adeje</option>
        <option value="La Orotava">La Orotava</option>
        <option value="Granadilla de Abona">Granadilla de Abona</option>
        <option value="Los Realejos">Los Realejos</option>
        <option value="Puerto de la Cruz">Puerto de la Cruz</option>
        <option value="Candelaria">Candelaria</option>
        <option value="Guía de Isora">Guía de Isora</option>
        <option value="San Miguel de Abona">San Miguel de Abona</option>
        <option value="Tegueste">Tegueste</option>
        <option value="El Rosario">El Rosario</option>
        <option value="Arico">Arico</option>
        <option value="Icod de los Vinos">Icod de los Vinos</option>
        <option value="La Victoria de Acentejo">La Victoria de Acentejo</option>
        <option value="La Matanza de Acentejo">La Matanza de Acentejo</option>
        <option value="Tacoronte">Tacoronte</option>
        <option value="El Sauzal">El Sauzal</option>
        <option value="Los Silos">Los Silos</option>
        <option value="Buenavista del Norte">Buenavista del Norte</option>
        <option value="Garachico">Garachico</option>
        <option value="San Juan de la Rambla">San Juan de la Rambla</option>
        <option value="La Guancha">La Guancha</option>
        <option value="Santa Úrsula">Santa Úrsula</option>
        <option value="Vilaflor">Vilaflor</option>
        <option value="Fasnia">Fasnia</option>
      </select>`
    );
  } else if (isla === "La Palma") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option selected disabled>Selecciona un municipio:</option>
        <option value="Santa Cruz de La Palma">Santa Cruz de La Palma</option>
        <option value="Los Llanos de Aridane">Los Llanos de Aridane</option>
        <option value="El Paso">El Paso</option>
        <option value="Breña Alta">Breña Alta</option>
        <option value="Breña Baja">Breña Baja</option>
        <option value="Fuencaliente">Fuencaliente</option>
        <option value="Garafía">Garafía</option>
        <option value="Puntagorda">Puntagorda</option>
        <option value="Tijarafe">Tijarafe</option>
        <option value="Villa de Mazo">Villa de Mazo</option>
        <option value="Puntallana">Puntallana</option>
        <option value="San Andrés y Sauces">San Andrés y Sauces</option>
        <option value="Barlovento">Barlovento</option>
      </select>`
    );
  } else if (isla === "Lanzarote") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option disabled selected>Selecciona un municipio:</option>
        <option value="Arrecife">Arrecife</option>
        <option value="Teguise">Teguise</option>
        <option value="San Bartolomé">San Bartolomé</option>
        <option value="Tías">Tías</option>
        <option value="Yaiza">Yaiza</option>
        <option value="Tinajo">Tinajo</option>
        <option value="Haría">Haría</option>
      </select>`
    );
  } else if (isla === "El Hierro") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option disabled selected>Selecciona un municipio:</option>
        <option value="Valverde">Valverde</option>
        <option value="La Frontera">La Frontera</option>
        <option value="El Pinar de El Hierro">El Pinar de El Hierro</option>
      </select>`
    );
  } else if (isla === "Fuerteventura") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option disabled selected>Selecciona un municipio:</option>
        <option value="Puerto del Rosario">Puerto del Rosario</option>
        <option value="La Oliva">La Oliva</option>
        <option value="Antigua">Antigua</option>
        <option value="Betancuria">Betancuria</option>
        <option value="Pájara">Pájara</option>
        <option value="Tuineje">Tuineje</option>
      </select>`
    );
  } else if (isla === "La Gomera") {
    filtrosDiv.insertAdjacentHTML(
      "beforeend",
      `<select id="filtroMunicipio">
        <option disabled selected>Selecciona un municipio:</option>
        <option value="San Sebastián de La Gomera">San Sebastián de La Gomera</option>
        <option value="Alajeró">Alajeró</option>
        <option value="Hermigua">Hermigua</option>
        <option value="Agulo">Agulo</option>
        <option value="Vallehermoso">Vallehermoso</option>
        <option value="Valle Gran Rey">Valle Gran Rey</option>
      </select>`
    );
  }
});

</script>

</body>
</html>



