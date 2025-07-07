<?php
    $rango = session()->get('rank');
    $headerView = 'partials/headers/header_' . $rango;
?>

<!-- Incluimos el encabezado en función del rango del usuario: -->
<?= $this->include($headerView) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaterialComposicion</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/styles_MaterialComposicion.css")?>">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>

<!--Añadimos la lógica para generar erorres o aceptar cambios -->
  <?php if (session()->has('errors')): ?>
    <div id="errorAlert" class="alerta"></div>
    <div id="errorAlert_1" class="alertaContenedor">
        <i class="bi bi-x-lg"></i>
        <p><?= session()->get('errors') ?></p>
    </div> 

    <script>
        setTimeout(() => {
            const errorAlert = document.getElementById('errorAlert');
            const errorAlert_1 = document.getElementById('errorAlert_1');

            if (errorAlert && errorAlert_1) {
                errorAlert.style.transition = 'opacity 0.5s ease';
                errorAlert_1.style.transition = 'opacity 0.5s ease';

                errorAlert.style.opacity = '0';
                errorAlert_1.style.opacity = '0';

                setTimeout(() => {
                    errorAlert.style.display = 'none';
                    errorAlert_1.style.display = 'none';
                }, 500);
            }
        }, 1500);
    </script>              
<?php endif; ?>

<?php if (session()->has('success')): ?>
    <div id="errorAlert" class="alerta"></div>
    <div id="errorAlert_1" class="alertaContenedor_1">
        <i class="bi bi-check-lg"></i>
        <p><?= session()->get('success') ?></p>
    </div> 

    <script>
        setTimeout(() => {
            const errorAlert = document.getElementById('errorAlert');
            const errorAlert_1 = document.getElementById('errorAlert_1');

            if (errorAlert && errorAlert_1) {
                errorAlert.style.transition = 'opacity 0.5s ease';
                errorAlert_1.style.transition = 'opacity 0.5s ease';

                errorAlert.style.opacity = '0';
                errorAlert_1.style.opacity = '0';

                setTimeout(() => {
                    errorAlert.style.display = 'none';
                    errorAlert_1.style.display = 'none';
                }, 500);
            }
        }, 1500);
    </script>              
<?php endif; ?>

<!-- Añadimos el gestor de adición de desechos-->
<div id="Contenedor_DesechoGestorAñadir" class="Contenedor_Añadir" style="display: none;">
    <form action="" method="post" novalidate>
    <div class="Contenedor_Secundario Añadir">
        <h1 class="texto-secundario">Añadir Desechos</h1>
        <button id="btn_guardar_edit_id" class="boton-secundario"><i class="bi bi-plus-square"></i></button>
    </div>
    <hr>
       <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="">Material (Ninguno por defecto) :</label>
                <select id="miSelect_16" name="estado"> <option value="" selected disabled>Seleccione un material</option>
                    <option value="Cera">Cera de Abeja</option>
                        <option value="Recipiente">Recipiente</option>
                        <option value="Mecha">Mecha</option>
                        <option value="Lavanda">Lavanda</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Manzanilla">Manzanilla</option>
                        <option value="Limon">Limón</option>
                        <option value="Menta">Menta</option>
                        <option value="Canela">Canela</option>
                        <option value="Clavo">Clavo</option>
                        <option value="Eucalipto">Eucalipto</option>
                        <option value="Romero">Romero</option>
                        <option value="Te">Árbol de Té</option>
                        <option value="Geranio">Geranio</option>
                        <option value="Ylang">Ylang Ylang</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo_1">
                <label for="">Producto (Ninguno por Defecto):</label>
                <select id="miSelect_18" name="tarea"> <option value="" selected disabled>Seleccione un producto</option>
                    <option value="Relajacion">Relajación Profunda</option>
                    <option value="Energizante">Energizante Crítico</option>
                    <option value="Otoñal">Otoñal Especiada</option>
                    <option value="Purificacion">Purificacion</option>
                    <option value="Femenina">Femenina y Floral</option>
                </select>
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="">Tarea (Ninguna por Defecto):</label>
                <select id="miSelect_15" name="tarea"> <option value="" selected disabled>Seleccione una tarea</option>
                    <option value="Mayorista">Tarea 1</option>
                    <option value="Local">Tarea 2</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="">Cantidad:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="input" id="CantidadDesecho_1" name="cantidad">
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="">Fecha de Desecho:</label>
                <input  type="text" name="fecha" id="fecha_1" placeholder="Selecciona una fecha">
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="">Motivo:</label>
                <textarea style="width:300px" name="motivacion" id="" placeholder="Añade una breve descripción que documente el por qué del desecho..."></textarea>
            </div>
        </div>
    </form>
    <p class="Aviso_Validacion" id="Aviso_Validacion"></p>
 </div>


    <!-- Añadimos el gestor de edición de desechos -->
    <div id="Contenedor_DesechoGestorEditar" class="Contenedor_Añadir" style="display: none;">
    <form  id="form_editar_usuario_id" method="post" action="">
    <div id="contenedor-hidden"></div>
    <div class="Contenedor_Secundario Añadir">
        <h1 class="texto-secundario">Editar Desecho</h1>
        <button id="btn_guardar_edit_id" class="boton-secundario"><i class="bi bi-pencil-fill"></i></button>
    </div>
    <hr>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="">Material (Ninguno por defecto) :</label>
                <select id="miSelect_16" name="estado"> <option value="" selected disabled>Seleccione un material</option>
                    <option value="Cera">Cera de Abeja</option>
                        <option value="Recipiente">Recipiente</option>
                        <option value="Mecha">Mecha</option>
                        <option value="Lavanda">Lavanda</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Manzanilla">Manzanilla</option>
                        <option value="Limon">Limón</option>
                        <option value="Menta">Menta</option>
                        <option value="Canela">Canela</option>
                        <option value="Clavo">Clavo</option>
                        <option value="Eucalipto">Eucalipto</option>
                        <option value="Romero">Romero</option>
                        <option value="Te">Árbol de Té</option>
                        <option value="Geranio">Geranio</option>
                        <option value="Ylang">Ylang Ylang</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo_1">
                <label for="">Producto (Ninguno por Defecto):</label>
                <select id="miSelect_17" name="tarea"> <option value="" selected disabled>Seleccione un producto</option>
                    <option value="Relajacion">Relajación Profunda</option>
                    <option value="Energizante">Energizante Crítico</option>
                    <option value="Otoñal">Otoñal Especiada</option>
                    <option value="Purificacion">Purificacion</option>
                    <option value="Femenina">Femenina y Floral</option>
                </select>
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="">Tarea (Ninguna por Defecto):</label>
                <select id="miSelect_15" name="tarea"> <option value="" selected disabled>Seleccione una tarea</option>
                    <option value="Mayorista">Tarea 1</option>
                    <option value="Local">Tarea 2</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="">Cantidad:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="input" id="CantidadDesecho_1" name="cantidad">
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="">Fecha de Desecho:</label>
                <input  type="text" name="fecha" id="fecha_1" placeholder="Selecciona una fecha">
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="">Motivo:</label>
                <textarea style="width:300px" name="motivacion" id="" placeholder="Añade una breve descripción que documente el por qué del desecho..."></textarea>
            </div>
        </div>
    </form>
    <p class="Aviso_Validacion" id="Aviso_Validacion_Editar"></p>
</div>

     <!--Añadimos el gestor principal de desechos --> 
    <div id="Contenedor_DesechosGestor" class="Contenedor_Principal" style="display: none;">
        <div class="Contenedor_Secundario">
            <h1 class="texto-secundario">Desechos</h1>
            <button id="Boton_Añadir_Desecho" class="boton-secundario"><i class="bi bi-plus-square"></i></i></button>
        </div>
        <hr>
        <form action="" method="get">
        <div class="Contenedor_Terciario">
            
            <div class="Contenedor_Terciario_1">
                    <input type="text" name="fecha" id="fecha" placeholder="Selecciona una fecha">
                    <button  class="Contenedor_Terciario_1_Boton"><i class="bi bi-download"></i></i></button>
            </div>
            <div class="Contenedor_Terciario_2">
                <div id="Contenedor_Terciario_2_Formulario" class="Contenedor_Terciario_2_Formulario">
                    <select name="material" id="miSelect_13">
                        <option value="" >Material:</option>
                        <option value="Cera">Cera de Abeja</option>
                        <option value="Recipiente">Recipiente</option>
                        <option value="Mecha">Mecha</option>
                        <option value="Lavanda">Lavanda</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Manzanilla">Manzanilla</option>
                        <option value="Limon">Limón</option>
                        <option value="Menta">Menta</option>
                        <option value="Canela">Canela</option>
                        <option value="Clavo">Clavo</option>
                        <option value="Eucalipto">Eucalipto</option>
                        <option value="Romero">Romero</option>
                        <option value="Te">Árbol de Té</option>
                        <option value="Geranio">Geranio</option>
                        <option value="Ylang">Ylang Ylang</option> 
                    </select>
                    <select name="tipo_adquisicion" id="miSelect_14">
                        <option value="" >Producto:</option>
                        <option value="Relajacion">Relajación Profunda</option>
                        <option value="Energizante">Energizante Crítico</option>
                        <option value="Otoñal">Otoñal Especiada</option>
                        <option value="Purificacion">Purificacion</option>
                        <option value="Femenina">Femenina y Floral</option>
                    </select>
                </div>
            <button id="Boton_Enviar" style="display: none;"></button>
        </form>
        <form action="" method="post">
                <div class="Contenedor_Terciario_3_Botones" id="Contenedor_Terciario_3_Botones">
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="Nombre">Material</th>
                    <th>Producto</th>
                    <th>Cantidad Material</th>
                    <th>Cantidad Producto</th>
                    <th>Fecha de Eliminación</th>
                    <th>Tarea</th>
                    <th>Motivo</th>
                </tr>
            </thead>
            <tbody>
            <tr class="table-row">
                 <td class="Nombre_1">
                        <div class="Nombre_Dato">
                            <input type="checkbox" id="checkbox" class="checkbox" name="usuario_seleccionado">
                            <p>Ninguno</p>
                        </div>
                </td>
                <td>Purificacion</td>
                <td>Ninguna Cantidad</td>
                <td>10 unidades</td>
                <td>07/07/2025</td>
                <td>Ninguna Tarea</td>
                <td>Se derritieron</td>
            </tr>
            </tbody>
        </table>
    </form>
  <p class="Visualizacion_Cantidad"> Mostrando 1 de 10 registros.</p>
       <div class="Contenedor_Paginacion">  
        </div> 
  </div>
</div>





<!-- Añadimos el gestor de adición de materiales -->
<div id="Contenedor_MaterialGestorAñadir" class="Contenedor_Añadir" style="display: none;">
    <form action="" method="post" novalidate>
    <div class="Contenedor_Secundario Añadir">
        <h1 class="texto-secundario">Añadir Material</h1>
        <button id="btn_guardar_edit_id" class="boton-secundario"><i class="bi bi-plus-square"></i></button>
    </div>
    <hr>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_estado_id">Material:</label>
                <select id="miSelect_8" name="estado"> <option value="" selected disabled>Seleccione un material</option>
                    <option value="Cera">Cera de Abeja</option>
                        <option value="Recipiente">Recipiente</option>
                        <option value="Mecha">Mecha</option>
                        <option value="Lavanda">Lavanda</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Manzanilla">Manzanilla</option>
                        <option value="Limon">Limón</option>
                        <option value="Menta">Menta</option>
                        <option value="Canela">Canela</option>
                        <option value="Clavo">Clavo</option>
                        <option value="Eucalipto">Eucalipto</option>
                        <option value="Romero">Romero</option>
                        <option value="Te">Árbol de Té</option>
                        <option value="Geranio">Geranio</option>
                        <option value="Ylang">Ylang Ylang</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="edit_tipo_empleo_id">Tipo de Adquisición:</label>
                <select id="miSelect_9" name="tipo_empleo"> <option value="" selected disabled>Seleccione un tipo de Adquisición</option>
                    <option value="Mayorista">Proveedor Mayorista</option>
                    <option value="Local">Proveedor Local</option>
                    <option value="Productor">Productor Directo</option>
                    <option value="Importacion Internacional">Importación Internacional</option>
                    <option value="B2B">Plataforma B2B</option>
                </select>
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_nombre_id">Entidad:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="edit_nombre_id" name="nombre">
            </div>
            <div class="Contenedor_Añadir_2">
                <label for="edit_apellidos_id">Cantidad:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="number" id="edit_apellidos_id" name="apellidos">
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_nombre_id">Fecha de Adquisición:</label>
                <input style="width: 300px;" type="text" name="fecha" id="fecha_1" placeholder="Selecciona una fecha">
            </div>
            <div class="Contenedor_Añadir_2 Empleo_1">
                <label for="edit_tipo_empleo_id">Estado:</label>
                <select id="miSelect_10" name="tipo_empleo"> <option value="" selected disabled>Seleccione el estado:</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Recibido">Recibido</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
            </div>
        </div>   
        </form>
        <p class="Aviso_Validacion" id="Aviso_Validacion"></p>
    </div>

    <!-- Añadimos el gestor de edición de materiales -->
    <div id="Contenedor_MaterialGestorEditar" class="Contenedor_Añadir" style="display: none;">
    <form  id="form_editar_usuario_id" method="post" action="">
    <div id="contenedor-hidden"></div>
    <div class="Contenedor_Secundario Añadir">
        <h1 class="texto-secundario">Editar Material</h1>
        <button id="btn_guardar_edit_id" class="boton-secundario"><i class="bi bi-pencil-fill"></i></button>
    </div>
    <hr>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_estado_id">Material:</label>
                <select id="miSelect_5" name="estado"> <option value="" selected disabled>Seleccione un material</option>
                    <option value="Cera">Cera de Abeja</option>
                        <option value="Recipiente">Recipiente</option>
                        <option value="Mecha">Mecha</option>
                        <option value="Lavanda">Lavanda</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Manzanilla">Manzanilla</option>
                        <option value="Limon">Limón</option>
                        <option value="Menta">Menta</option>
                        <option value="Canela">Canela</option>
                        <option value="Clavo">Clavo</option>
                        <option value="Eucalipto">Eucalipto</option>
                        <option value="Romero">Romero</option>
                        <option value="Te">Árbol de Té</option>
                        <option value="Geranio">Geranio</option>
                        <option value="Ylang">Ylang Ylang</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="edit_tipo_empleo_id">Tipo de Adquisición:</label>
                <select id="miSelect_6" name="tipo_empleo"> <option value="" selected disabled>Seleccione un tipo de Adquisición</option>
                    <option value="Mayorista">Proveedor Mayorista</option>
                    <option value="Local">Proveedor Local</option>
                    <option value="Productor">Productor Directo</option>
                    <option value="Importacion Internacional">Importación Internacional</option>
                    <option value="B2B">Plataforma B2B</option>
                </select>
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_nombre_id">Entidad:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="edit_nombre_id" name="nombre">
            </div>
            <div class="Contenedor_Añadir_2">
                <label for="edit_apellidos_id">Cantidad:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="number" id="edit_apellidos_id" name="apellidos">
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_nombre_id">Fecha de Adquisición:</label>
                <input style="width: 300px;" type="text" name="fecha" id="fecha_1" placeholder="Selecciona una fecha">
            </div>
            <div class="Contenedor_Añadir_2 Empleo_1">
                <label for="edit_tipo_empleo_id">Estado:</label>
                <select id="miSelect_7" name="tipo_empleo"> <option value="" selected disabled>Seleccione el estado:</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Recibido">Recibido</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
            </div>
        </div>
        
    </form>
    <p class="Aviso_Validacion" id="Aviso_Validacion_Editar"></p>
</div>

     <!--Añadimos el gestor principal de materiales --> 
    <div id="Contenedor_MaterialesGestor" class="Contenedor_Principal" style="display: none;">
        <div class="Contenedor_Secundario">
            <h1 class="texto-secundario">Materiales</h1>
            <button id="Boton_Añadir" class="boton-secundario"><i class="bi bi-plus-square"></i></i></button>
        </div>
        <hr>
        <form action="" method="get">
        <div class="Contenedor_Terciario">
            
            <div class="Contenedor_Terciario_1">
                    <input type="text" name="fecha" id="fecha" placeholder="Selecciona una fecha">
                    <button  class="Contenedor_Terciario_1_Boton"><i class="bi bi-download"></i></i></button>
            </div>
            <div class="Contenedor_Terciario_2">
                <div id="Contenedor_Terciario_2_Formulario" class="Contenedor_Terciario_2_Formulario">
                    <select name="ultima_fechas" id="miSelect_2">
                        <option value="">Estado:</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="recibido">Recibido</option>
                        <option value="cancelado">Cancelado</option>
                    </select>
                    <select name="material" id="miSelect_3">
                        <option value="" >Material:</option>
                        <option value="Cera">Cera de Abeja</option>
                        <option value="Recipiente">Recipiente</option>
                        <option value="Mecha">Mecha</option>
                        <option value="Lavanda">Lavanda</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Manzanilla">Manzanilla</option>
                        <option value="Limon">Limón</option>
                        <option value="Menta">Menta</option>
                        <option value="Canela">Canela</option>
                        <option value="Clavo">Clavo</option>
                        <option value="Eucalipto">Eucalipto</option>
                        <option value="Romero">Romero</option>
                        <option value="Te">Árbol de Té</option>
                        <option value="Geranio">Geranio</option>
                        <option value="Ylang">Ylang Ylang</option>
                        
                    </select>
                    <select name="tipo_adquisicion" id="miSelect_4">
                        <option value="" >Tipo de Adquisición:</option>
                        <option value="Mayorista">Proveedor Mayorista</option>
                        <option value="Local">Proveedor Local</option>
                        <option value="Productor">Productor Directo</option>
                        <option value="Importacion Internacional">Importación Internacional</option>
                        <option value="B2B">Plataforma B2B</option>
                    </select>
                </div>
            <button id="Boton_Enviar" style="display: none;"></button>
        </form>
        <form action="" method="post">
                <div class="Contenedor_Terciario_3_Botones" id="Contenedor_Terciario_3_Botones">
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="Nombre">Material</th>
                    <th>Cantidad</th>
                    <th>Fecha de Adquisición</th>
                    <th>Tipo de Adquisición</th>
                    <th>Entidad</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            <tr class="table-row">
                 <td class="Nombre_1">
                        <div class="Nombre_Dato">
                            <input type="checkbox" id="checkbox" class="checkbox" name="usuario_seleccionado">
                            <p>Lavanda</p>
                        </div>
                </td>
                <td>10</td>
                <td>5/07/2025</td>
                <td>Impotación Internacional</td>
                <td>Amazon</td>
                <td> <p class="estado" >pendiente</p></td>
            </tr>
            </tbody>
        </table>
    </form>
  <p class="Visualizacion_Cantidad"> Mostrando 1 de 10 registros.</p>

       <div class="Contenedor_Paginacion">  
        </div> 
  </div>
</div>





<div id="ContenedorPRINCIPAL" class="ContenedorPrincipal">
    <!-- Añadimos el contenedor de composición de los productos -->
     <div id="ContenedorPrincipalComposicion" class="ContenedorPrincipal_1">
      <div class="ContenedorPrincipal_1_Secundario_1">
        <h1>Composición</h1>
      </div>
      <hr class="BordeContenedorPrincipal_1">
      <div class="ContenedorPrincipal_1_Secundario_2">
        <div class="Contendor_Secundario_2_Productos">
          <img class="Contendor_Secundario_2_Productos_img" src="<?=base_url(relativePath: "assets/img/Fragancia_1.webp")?>" alt="">
          <div class="Contenedor_Secundario_2_Informacion">
            <h2 class="NombreProducto">Relajación Profunda</h2>
            <p class="TituloCaracteristica">Descripción:</p>
            <p class="ContenidoDescripcion">Una vela aromática diseñada para inducir calma y serenidad. Es ideal para usar antes de dormir, en baños relajantes o en momentos de alta tensión, ayudando a reducir el estrés y favorecer un descanso reparador.</p>
          </div>
          <div class="Contenedor_Secundario_2_Informacion">
            <h2 class="NombreProducto">Datos:</h2>
            <div class="Contenedor_Secundario_2_Informacion_1">
              <p class="TituloCaracteristica">Coste: <strong class="ContenidoCoste">-20<i class="bi bi-currency-euro"></i></strong></p>
              <p class="TituloCaracteristica">Beneficio:<strong class="ContenidoBeneficio">+20<i class="bi bi-currency-euro"></i></strong></p>
            </div>
            <div class="Contenedor_Secundario_2_Informacion_1">
              <p class="TituloCaracteristica"><i class="bi bi-alarm"></i>Tiempo Empleado: <strong class="ContenidoTiempo">1 hora y 20 minutos</strong></p>
            </div>
            <div class="Contenedor_Secundario_2_Informacion_1">
              <p class="TituloCaracteristica">Stock: <strong class="ContenidoTiempo">30 unidades</strong></p>
            </div>
          </div>
          <div class="Contenedor_Secundario_2_Informacion">
            <p class="TituloCaracteristica" style="margin-left:0px !important">Ingredientes:</p>
            <div class="Contenedor_Secundario_2_Informacion_1_2">
              <img src="<?=base_url("assets/img/food.png")?>" alt="">
              <p><strong class="ContenidoTiempo">1 ud</strong></p>
              <img src="<?=base_url("assets/img/cotton.png")?>" alt="">
              <p><strong class="ContenidoTiempo">1 ud</strong></p>
            </div>
            <div class="Contenedor_Secundario_2_Informacion_1_2">
              <img src="<?=base_url("assets/img/beeswax.png")?>" alt="">
              <p><strong class="ContenidoTiempo">150 g</strong></p>
               <img src="<?=base_url("assets/img/lavender.png")?>" alt="">
              <p><strong class="ContenidoTiempo">7 ml</strong></p>
            </div>
            <div class="Contenedor_Secundario_2_Informacion_1_2">
              <img src="<?=base_url("assets/img/chamomile.png")?>" alt="">
              <p><strong class="ContenidoTiempo">5 ml</strong></p>
            </div>
          </div>
        </div>
        <hr>
      </div>
     </div>

     <!-- Añadimos el contenedor de desechos y materiales: -->
     <div id="ContenedorDesechosMateriales" class="ContenedorPrincipal_2_Small">
        <div id="ContenedorDesechosMateriales_1_1" class="ContenedorSecundario_1_1">
            <h2>
                Materiales
            </h2>
            <button id="BotonAgrandarMateriales_2" class="botonContenedorPrincipal_2"><i class="bi bi-arrows-angle-expand"></i></button>
        </div>
        <div id="ContenedorDesechosMateriales_1_2" class="ContenedorSecundario_1_1" style="display:none;" >
            <h2>
                Materiales
            </h2>
            <div class="ContenedorSecundario_1_2">
                <select name="" id="miSelect_1">
                  <option value="">Filtros:</option>
                  <option value="">Dia</option>
                  <option value="">Semana</option>
                  <option value="">Mes</option>
                  <option value="">Trimestre</option>
                  <option value="">Año</option>
                </select>
                <button id="BotonGestor_1" class="botonContenedorPrincipal_2"><i class="bi bi-device-hdd"></i></button>
            </div>
        </div>
        <hr class="BordeContenedorPrincipal_1">
      <div id="ContenedorDesechosMateriales_Mostrar" style="display:none">
          <div class="ContenedorSecundario_2_1">
              <img src="<?=base_url("assets/img/beeswax.png")?>" alt="">
              <img src="<?=base_url("assets/img/food.png")?>" alt="">
              <img src="<?=base_url("assets/img/cotton.png")?>" alt="">
              <img src="<?=base_url("assets/img/lavender.png")?>" alt="">
              <img src="<?=base_url("assets/img/chamomile.png")?>" alt="">
              <img src="<?=base_url("assets/img/hojas-de-te.png")?>" alt="">
              <img src="<?=base_url("assets/img/orange.png")?>" alt="">
              <img src="<?=base_url("assets/img/lemon.png")?>" alt="">
              <img src="<?=base_url("assets/img/spice.png")?>" alt="">
              <img src="<?=base_url("assets/img/ylang-ylang.png")?>" alt="">
              <img src="<?=base_url("assets/img/geranio.png")?>" alt="">
              <img src="<?=base_url("assets/img/eucalipto.png")?>" alt="">
              <img src="<?=base_url("assets/img/romero.png")?>" alt="">
              <img src="<?=base_url("assets/img/clove.png")?>" alt="">
              <img src="<?=base_url("assets/img/cinammon.png")?>" alt="">
            </div>
          <hr class="BordeContenedorPrincipal_1">
          <div class="ContenedorSecundario_3_1">
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
              <p>+10</p>
            </div>
          <hr class="BordeContenedorPrincipal_1">
          <div class="ContenedorSecundario_4_1">
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
              <p>10</p>
            </div>
            <hr class="BordeContenedorPrincipal_1">
            <div class="ContenedorSecundario_5_1">
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
              <p>-10 / -10</p> 
            </div>
            <hr class="BordeContenedorPrincipal_1">
         <div class="ContenedorSecundario_1_2">
            <h2>
                Desechos/Consumidos
            </h2>
            <button id="BotonGestor_2" class="botonContenedorPrincipal_2"><i class="bi bi-device-hdd"></i></button>
        </div>

      </div>
        
   </div>

  </div>
</div>
  <!-- Añadimos los scripts -->

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>
  <script>
    // Desarrollamos la lógica para los "input-DATE":
   flatpickr("#fecha", {
    dateFormat: "Y-m-d", 
    altInput: true,      
    altFormat: "F j, Y", 
    locale: "es",
    maxDate: "today",  
    minDate: "2020-01-01",
    });
    flatpickr("#fecha_1", {
    dateFormat: "Y-m-d", 
    altInput: true,      
    altFormat: "F j, Y", 
    locale: "es",
    maxDate: "today",  
    minDate: "2020-01-01",
    });   
  </script>
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="<?=base_url("assets/js/script_MaterialComposicion.js")?>"></script>
</body>
</html>