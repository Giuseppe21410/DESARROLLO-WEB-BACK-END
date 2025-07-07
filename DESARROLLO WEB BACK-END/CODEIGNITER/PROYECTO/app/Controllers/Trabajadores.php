<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\DatosUsuariosModel;
use CodeIgniter\Controller;

class Trabajadores extends Controller
{
    public function index()
    {
        helper(['form']);
          $model = new UsuarioModel();

        $page = $this->request->getGet('page') ?? 1;
        $search = $this->request->getGet('search') ?? '';
        $estado = $this->request->getGet('estado') ?? '';
        $rango = $this->request->getGet('rango') ?? '';

        $limit = 9;
        $offset = ($page - 1) * $limit;

        $filters = [
            'estado' => $estado,
            'rango' => $rango
        ];

        $usuarios = $model->getUsuariosConDatos($limit, $offset, $search, $filters);
        $total = $model->countUsuariosConDatos($search, $filters);

        $data = [
            'usuarios' => $usuarios,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'search' => $search,
            'estado' => $estado,
            'rango' => $rango,
            'totalPages' => ceil($total / $limit),
        ];

        return view('trabajadores',$data); 
    }
    public function guardar()
    {
        helper(['form']);

        // Validación básica
        $validationRules = [
            'usuario'     => 'required|is_unique[usuarios.usuario]',
            'contraseña'  => 'required|min_length[6]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to("/trabajadores")->withInput()->with('errors', 'Ingrese otro usuario o una contraseña de más de 6 carácteres.');
        }

        $usuarioModel = new UsuarioModel();
        $datosModel = new DatosUsuariosModel();

        // Guardar en `usuarios`
        $datosUsuario = [
            'nombre'     => $this->request->getPost('nombre'),
            'usuario'     => $this->request->getPost('usuario'),
            'password'  => password_hash($this->request->getPost('contraseña'), PASSWORD_DEFAULT),
            'rango' => $this->request->getPost('tipo_empleo'),
        ];

        $usuarioModel->insert($datosUsuario);
        $idUsuario = $usuarioModel->insertID();

        // Guardar en `datos_usuarios`
        $datosPersonales = [
            'usuario_id'         => $idUsuario,
            'apellidos'          => $this->request->getPost('apellidos'),
            'email'             => $this->request->getPost('correo'),
            'fecha_contratacion' => $this->request->getPost('fecha_contratacion'),
            'estado' => $this->request->getPost('estado'),
        ];

        $datosModel->insert($datosPersonales);

        return redirect()->to("/trabajadores")->with('success', 'Empleado añadido correctamente.');
    }
    public function eliminar()
{
    $usuario_id = $this->request->getPost('usuario_seleccionado'); 

    if (!$usuario_id) {
        return redirect()->back()->with('errors', 'No seleccionaste ningún usuario.');
    }

    // Carga el modelo
    $trabajadoresModel = new UsuarioModel();
    try {
    $trabajadoresModel->delete($usuario_id);
} catch (\Exception $e) {
    log_message('error', $e->getMessage());
}
    
    return redirect()->to('/trabajadores')->with('success', 'Usuario eliminado correctamente.');
}

public function editar()
{
    helper(['form']);
    $request = service('request');

    $id = $request->getPost('id_usuario');
    if (!$id) {
        return redirect()->back()->with('errors', 'No se proporcionó un ID de usuario.');
    }

    $usuarioModel = new UsuarioModel();
    $datosUsuariosModel = new DatosUsuariosModel();

    // Obtener datos actuales para comparar
    $usuarioActual = $usuarioModel->find($id);
    $datosActuales = $datosUsuariosModel->where('id_datos_usuarios', $id)->first();

    if (!$usuarioActual || !$datosActuales) {
        return redirect()->back()->with('errors', 'Usuario no encontrado.');
    }

    // Verificar si hay cambios
    $dataUsuario = [];
    $dataDatos = [];

    // ----------- UsuarioModel -----------
    $nuevoUsuario = trim($request->getPost('usuario'));
    if ($nuevoUsuario && $nuevoUsuario !== $usuarioActual['usuario']) {
        // Verificar que no se repita
        if ($usuarioModel->where('usuario', $nuevoUsuario)->where('id_usuario !=', $id)->first()) {
            return redirect()->back()->with('errors', 'Ese nombre de usuario ya está en uso.');
        }
        $dataUsuario['usuario'] = $nuevoUsuario;
    }

    $nuevoNombre = trim($request->getPost('nombre'));
    if ($nuevoNombre && $nuevoNombre !== $usuarioActual['nombre']) {
        $dataUsuario['nombre'] = $nuevoNombre;
    }

    $nuevaPass = $request->getPost('contraseña');
    if (!empty($nuevaPass)) {
        if (strlen($nuevaPass) < 6) {
            return redirect()->back()->with('errors', 'La contraseña debe tener al menos 6 caracteres.');
        }
        $dataUsuario['password'] = password_hash($nuevaPass, PASSWORD_DEFAULT);
    }

    $nuevoRango = $request->getPost('tipo_empleo');
    if ($nuevoRango !== null && $nuevoRango !== $usuarioActual['rango']) {
        $dataUsuario['rango'] = $nuevoRango;
    }

    // ----------- DatosUsuariosModel -----------
    $nuevoApellido = trim($request->getPost('apellidos'));
    if ($nuevoApellido && $nuevoApellido !== $datosActuales['apellidos']) {
        $dataDatos['apellidos'] = $nuevoApellido;
    }

    $nuevoEmail = trim($request->getPost('correo'));
    if ($nuevoEmail && $nuevoEmail !== $datosActuales['email']) {
        $dataDatos['email'] = $nuevoEmail;
    }

    $nuevaFecha = $request->getPost('fecha_contratacion');
    if ($nuevaFecha && $nuevaFecha !== $datosActuales['fecha_contratacion']) {
        $dataDatos['fecha_contratacion'] = $nuevaFecha;
    }

    $nuevoEstado = $request->getPost('estado');
    if ($nuevoEstado !== null && $nuevoEstado !== $datosActuales['estado']) {
        $dataDatos['estado'] = $nuevoEstado;
    }


    // Guardar cambios
    $successUsuario = true;
    $successDatos = true;

    if (!empty($dataUsuario)) {
        $successUsuario = $usuarioModel->update($id, $dataUsuario);
    }

    if (!empty($dataDatos)) {
        $successDatos = $datosUsuariosModel->where('id_datos_usuarios', $id)->set($dataDatos)->update();
    }

    if ($successUsuario && $successDatos) {
        return redirect()->to('/trabajadores')->with('success', 'Empleado actualizado correctamente.');
    } else {
        return redirect()->back()->with('errors', 'Error al actualizar el empleado.');
    }
}




}

?>