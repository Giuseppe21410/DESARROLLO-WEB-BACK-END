<?php
// Eliminamos las tablas si estás existen: 
if (isset($H) || isset($VV) || isset($DVV) || isset($DH)){
    unset($H, $VV, $DVV, $DH);
}

$i_1=0;
$i_2= 0;

// Incluimos los nombres de los archivos:
$archivo_VV="../../CSV/Viviendas_Vacacionales.csv";
$archivo_H="../../CSV/Establecimientos_Hoteleros.csv";

// Creamos una tabla  preseleccionando las columnas que nos proponemos a añadir en la base de datos: 
$csv_1=fopen($archivo_VV,"r");
$csv_2=fopen($archivo_H,"r");

// Recogemos la primera fila con el nombre de las columnas:
$encabezados_1= fgetcsv($csv_1,0,";");
$encabezados_2= fgetcsv($csv_2,0,";");

// Creamos los arrays  para cada supuesta tabla: 
$H=[];// Hoteles
$VV=[];// Viviendas_Vacacionales.
$DVV=[]; // Las direcciones de  las tablas anteriores.
$DH=[]; // Las direcciones de  las tablas anteriores.


// Buscamos los nombres de las columnas que nos interesan de ambos CSV:
// Tabla  Viviendas vacacionales: 
$col_nombre_1= array_search("establecimiento_nombre_comercial", $encabezados_1);
$col_plazas_1= array_search("plazas", $encabezados_1);

// Tabla de Hoteles: 
$col_nombre_2=array_search("establecimiento_nombre_comercial", $encabezados_2);
$col_tipologia_2=array_search("establecimiento_tipologia", $encabezados_2);
$col_calificacion_2=array_search("establecimiento_clasificacion", $encabezados_2);
$col_plazas_2= array_search("plazas", $encabezados_2);
$col_unidades_2= array_search("unidades_explotacion", $encabezados_2);

// Tabla dirección VV:
$col_direccion_3=array_search("direccion", $encabezados_1);
$col_isla_3=array_search("direccion_isla_nombre", $encabezados_1);
$col_provincia_3=array_search("direccion_provincia_nombre", $encabezados_1);
$col_municipio_3=array_search("direccion_municipio_nombre", $encabezados_1);
$col_localidad_3=array_search("direccion_localidad_nombre", $encabezados_1);
$col_postal_3=array_search("direccion_codigo_postal", $encabezados_1);

// Tabla dirección H:
$col_direccion_4=array_search("direccion", $encabezados_2);
$col_isla_4=array_search("direccion_isla_nombre", $encabezados_2);
$col_provincia_4=array_search("direccion_provincia_nombre", $encabezados_2);
$col_municipio_4=array_search("direccion_municipio_nombre", $encabezados_2);
$col_localidad_4=array_search("direccion_localidad_nombre", $encabezados_2);
$col_postal_4=array_search("direccion_codigo_postal", $encabezados_2);


// Introducción a las dos tablas reccorriendo los dos CSV en función de las columnas descritas: 
// CSV Viviendas vacacionales:
while(($fila= fgetcsv($csv_1,0,";")) != false){
    $i_1++;
    $VV[]=[
        "nombre" => ($fila[$col_nombre_1] == "_U" || $fila[$col_nombre_1] == "") ? "Nombre desconocido" : trim($fila[$col_nombre_1]),
        "plazas" => ($fila[$col_plazas_1] == "_U" || $fila[$col_plazas_1] == 0) ? "Número de plazas desconocido" : trim($fila[$col_plazas_1]) ,
        "id_direccion" => $i_1,
        
    ];
    $DVV[]=[ // Añadimos "[]" para acumular el contenido de las array's.
        "direccion"=> ($fila[$col_direccion_3] == "_U" || $fila[$col_direccion_3] == "") ? "Dirección desconocida" : trim($fila[$col_direccion_3]),
        "isla"=> ($fila[$col_isla_3] == "_U" || $fila[$col_isla_3] == "") ? "Isla desconocida" : trim($fila[$col_isla_3]),
        "provincia"=> ($fila[$col_provincia_3] == "_U" || $fila[$col_provincia_3] == "") ? "Provincia desconocida" : trim($fila[$col_provincia_3]),
        "municipio"=> ($fila[$col_municipio_3] == "_U" || $fila[$col_municipio_3] == "") ? "Municipio desconocido" : trim($fila[$col_municipio_3]),
        "localidad"=> ($fila[$col_localidad_3]== "_U") ? "Localidad desconocida" : trim($fila[$col_localidad_3]),
        "CP"=> ($fila[$col_postal_3] == "_U") ? 0 : trim($fila[$col_postal_3]), 
    ];
}

// CSV Establecimientos Hoteleros:
while(($fila= fgetcsv($csv_2, 0, ";")) != false){
    $i_2++;
    $H[]=[
        "nombre" =>($fila[$col_nombre_2] == "_U" || $fila[$col_nombre_2]== "") ? "Nombre desconocido" : trim($fila[$col_nombre_2]),
        "tipologia" => ($fila[$col_tipologia_2] == "_U" || $fila[$col_tipologia_2] == "") ? "Tipología desconocida." : trim($fila[$col_tipologia_2]),
        "calificacion" => ($fila[$col_calificacion_2] == "_U" || $fila[$col_calificacion_2] == "") ?  "Sin estrellas" : trim($fila[$col_calificacion_2]),
        "plazas" => ($fila[$col_plazas_2] == "_U" || $fila[$col_plazas_2] == 0 ) ? "Plazas desconocidas" : trim($fila[$col_plazas_2]),
        "unidades" => ($fila[$col_unidades_2] == "_U" || $fila[$col_unidades_2] == 0 ) ? "Unidades desconocidas" : trim($fila[$col_unidades_2]),
        "id_direccion" => $i_2,
    ];
    $DH[]=[
        "direccion"=> ($fila[$col_direccion_4] == "_U" || $fila[$col_direccion_4] == "") ? "Dirección desconocida" : trim($fila[$col_direccion_4]) ,
        "isla"=> ($fila[$col_isla_4] == "_U" || $fila[$col_isla_4] == "") ? "Isla desconocida" : trim($fila[$col_isla_4]) ,
        "provincia"=>  ($fila[$col_provincia_4] == "_U" || $fila[$col_provincia_4] == "") ? "Provincia desconocida" : trim($fila[$col_provincia_4]),
        "municipio"=> ($fila[$col_municipio_4] == "_U" || $fila[$col_municipio_4] == "") ? "Municipio desconocido" : trim($fila[$col_municipio_4]),
        "localidad"=>($fila[$col_localidad_4] == "_U" || $fila[$col_localidad_4]== "") ? "Localidad desconocida" : trim($fila[$col_localidad_4]),
        "CP"=> ($fila[$col_postal_4] == "_U") ? 0 : trim($fila[$col_postal_4]), 
    ];
}

// Cerramos ambos archivos: 
fclose($csv_1);
fclose($csv_2);

?>