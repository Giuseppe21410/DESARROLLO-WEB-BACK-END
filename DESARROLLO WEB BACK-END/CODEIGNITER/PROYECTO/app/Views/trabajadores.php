<?php
    // Obtiene el rango del usuario de la sesión.
    // Esto se utiliza para la lógica de inclusión del encabezado, que podría variar según el rol del usuario.
    $rango = session()->get('rank');
    // Define la ruta del archivo parcial del encabezado.
    $headerView = 'partials/headers/header_A';
?>

<?= $this->include($headerView) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
    <link rel="icon" type="image/png" href="<?=base_url('favicon.png') ?>" sizes="96x96" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/styles_Trabajadores.css') ?>">
</head>
<body>

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



    <div id="Contenedor_Añadir" class="Contenedor_Añadir">
        <form action="/trabajadores/add" method="post" novalidate>
        <?= csrf_field() ?>
        <div class="Contenedor_Secundario Añadir">
            <h1 class="texto-secundario">Añadir Empleado</h1>
            <button type="submit" class="boton-secundario"><i class="bi bi-person-plus-fill"></i></button>
        </div>
        <hr>
            <div class="Contenedor_Añadir_2_1">
                <div class="Contenedor_Añadir_2">
                    <label for="usuario">Usuario:</label>
                    <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="usuario" name="usuario" required>
                </div>
                <div class="Contenedor_Añadir_2">
                    <label for="contraseña">Contraseña:</label>
                    <input class="Contenedor_Terciario_1_Buscador Añadir" type="password" id="contraseña" name="contraseña" required>
                </div>
            </div>
            <div class="Contenedor_Añadir_2_1">
                <div class="Contenedor_Añadir_2">
                    <label for="nombre">Nombre:</label>
                    <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="nombre" name="nombre" required>
                </div>
                <div class="Contenedor_Añadir_2">
                    <label for="apellidos">Apellidos:</label>
                    <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="apellidos" name="apellidos" required>
                </div>
            </div>

            <div class="Contenedor_Añadir_2_1">
                <div class="Contenedor_Añadir_2">
                    <label for="correo">Correo Electrónico:</label>
                    <input class="Contenedor_Terciario_1_Buscador Añadir" type="email" id="correo" name="correo" required>
                </div>
                <div class="Contenedor_Añadir_2">
                    <label for="fecha_contratacion">Fecha de Contratación:</label>
                    <input class="Contenedor_Terciario_1_Buscador Añadir" type="date" id="fecha_contratacion" name="fecha_contratacion" required>
                </div>
            </div>
            
            <div class="Contenedor_Añadir_2_2">
                <div class="Contenedor_Añadir_2 Estado">
                    <label for="estado">Estado:</label>
                    <select id="miSelect_3" name="estado" required>
                        <option value="" disabled selected>Seleccione un estado</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                        <option value="Suspendido">Suspendido</option>
                    </select>
                </div>
                <div class="Contenedor_Añadir_2 Empleo">
                    <label for="tipo_empleo">Tipo de Empleo:</label>
                    <select id="miSelect_4" name="tipo_empleo" required>
                        <option value="" disabled selected>Seleccione un tipo de empleo</option>
                        <option value="A">Gerente</option>
                        <option value="B">Subgerente</option>
                        <option value="C">Empleado</option>
                    </select>
                </div>
            </div>
        </form>
        <p class="Aviso_Validacion" id="Aviso_Validacion"></p>
    </div>

    <div id="Contenedor_Editar" class="Contenedor_Añadir">
    <form  id="form_editar_usuario_id" method="post" action="/trabajadores/editar">
     <div id="contenedor-hidden"></div>
    <div class="Contenedor_Secundario Añadir">
        <h1 class="texto-secundario">Editar Empleado</h1>
        <button id="btn_guardar_edit_id" class="boton-secundario"><i class="bi bi-pencil-fill"></i></button>
    </div>
    <hr>
         <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_usuario_id">Usuario:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="edit_usuario_id" name="usuario">
            </div>
            <div class="Contenedor_Añadir_2">
                <label for="edit_contraseña_id">Contraseña:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="password" id="edit_contraseña_id" name="contraseña">
            </div>
        </div>
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_nombre_id">Nombre:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="edit_nombre_id" name="nombre">
            </div>
            <div class="Contenedor_Añadir_2">
                <label for="edit_apellidos_id">Apellidos:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="text" id="edit_apellidos_id" name="apellidos">
            </div>
        </div>

        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_correo_id">Correo Electrónico:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="email" id="edit_correo_id" name="correo">
            </div>
            <div class="Contenedor_Añadir_2">
                <label for="edit_fecha_contratacion_id">Fecha de Contratación:</label>
                <input class="Contenedor_Terciario_1_Buscador Añadir" type="date" id="edit_fecha_contratacion_id" name="fecha_contratacion">
            </div>
        </div>
        
        <div class="Contenedor_Añadir_2_1">
            <div class="Contenedor_Añadir_2">
                <label for="edit_estado_id">Estado:</label>
                <select id="miSelect_5" name="estado"> <option value="" selected disabled>Seleccione un estado</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                    <option value="Suspendido">Suspendido</option>
                </select>
            </div>
            <div class="Contenedor_Añadir_2 Empleo">
                <label for="edit_tipo_empleo_id">Tipo de Empleo:</label>
                <select id="miSelect_6" name="tipo_empleo"> <option value="" selected disabled>Seleccione un tipo de empleo</option>
                    <option value="gerente">Gerente</option>
                    <option value="subgerente">Subgerente</option>
                    <option value="empleado">Empleado</option>
                </select>
            </div>
        </div>
    </form>
    <p class="Aviso_Validacion" id="Aviso_Validacion_Editar"></p>
</div>

    <div id="Contenedor_Principal" class="Contenedor_Principal">
        <div class="Contenedor_Secundario">
            <h1 class="texto-secundario">Empleados</h1>
            <button id="Boton_Añadir" class="boton-secundario"><i class="bi bi-person-plus-fill"></i></button>
        </div>
        <hr>
        <form action="<?= base_url('/trabajadores') ?>" method="get">
        <div class="Contenedor_Terciario">
            
            <div class="Contenedor_Terciario_1">
                    <input type="text" class="Contenedor_Terciario_1_Buscador" name="search" value="<?= esc($search) ?>" placeholder="Buscar trabajador por su nombre..." aria-label="Buscar trabajador">
                    <button href="" class="Contenedor_Terciario_1_Boton"><i class="bi bi-download"></i></i></button>
            </div>
            <div class="Contenedor_Terciario_2">
                <div id="Contenedor_Terciario_2_Formulario" class="Contenedor_Terciario_2_Formulario">
                    <select name="estado" id="miSelect_1">
                        <option value="">Estado:</option>
                        <option value="Activo" <?= $estado == 'Activo' ? 'selected' : '' ?>>Activo</option>
                        <option value="Inactivo" <?= $estado == 'Inactivo' ? 'selected' : '' ?>>Inactivo</option>
                        <option value="Suspendido" <?= $estado == 'Suspendido' ? 'selected' : '' ?>>Suspendido</option>
                    </select>
                    <select name="rango" id="miSelect_2">
                        <option value="" >Rango:</option>
                        <option value="A" <?= $rango == 'A' ? 'selected' : '' ?>>Gerente</option>
                        <option value="B" <?= $rango == 'B' ? 'selected' : '' ?>>Subgerente</option>
                        <option value="C" <?= $rango == 'C' ? 'selected' : '' ?>>Empleado</option>
                    </select>
                </div>
            <button id="Boton_Enviar" style="display: none;">Enviar</button>
        </form>
        <form action="<?= base_url('trabajadores/eliminar') ?>" method="post">
                <div class="Contenedor_Terciario_3_Botones" id="Contenedor_Terciario_3_Botones">
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="Nombre">Nombre</th>
                    <th>Usuario</th>
                    <th>Apellidos</th>
                    <th>Estado</th>
                    <th>Tipo de Empleo</th>
                    <th>Correo Electrónico</th>
                    <th>Fecha de Contratación</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($usuarios) === 0): ?>
            <tr><td class="Resultado" colspan="7">No se encontraron usuarios.</td></tr>
        <?php else: ?>
            <?php foreach ($usuarios as $u): ?>
            <tr class="table-row">
                 <td class="Nombre_1">
                        <div class="Nombre_Dato">
                            <input type="checkbox" id="checkbox" class="checkbox" name="usuario_seleccionado" value="<?= esc($u['id_usuario']) ?>">
                            <p><?= esc($u['nombre']) ?></p>
                        </div>
                </td>
                <td><?= esc($u['usuario']) ?></td>
                <td><?= esc($u['apellidos']) ?></td>
                <td><p class="estado"><?= esc($u['estado']) ?></p></td>
                <td class="rango"><?= esc($u['rango']) ?></td>
                <td><?= esc($u['email']) ?></td>
                <td><?= esc($u['fecha_contratacion']) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
            </tbody>
        </table>
        </form>
  <p class="Visualizacion_Cantidad"> Mostrando <?= count($usuarios) ?> de <?= $total ?> trabajadores.</p>

        <div class="Contenedor_Paginacion">
            <?php if ($page > 1): ?>
              <a style="text-decoration: none" class="Contenedor_Terciario_1_Boton" href="<?= base_url('/trabajadores') . '?' . http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>"><i class="bi bi-arrow-left-short"></i>Anterior</a>
            <?php endif; ?>

            <?php if ($page < $totalPages): ?>
              <a style="text-decoration: none" class="Contenedor_Terciario_1_Boton" href="<?= base_url('/trabajadores' ). '?' . http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>">Siguiente <i class="bi bi-arrow-right-short"></i></a>
            <?php endif; ?>        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="<?=base_url("assets/js/script_Trabajadores.js")?>"></script>
    
</body>
</html>