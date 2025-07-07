<?php

namespace App\Controllers;

use App\Models\UsuarioModel; // Modelo que crearás después
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login'); // Vista del formulario
    }

    public function auth()
    {
        
        helper(['form']);
        $session = session();
        $model = new UsuarioModel();
        

        $username = $this->request->getVar('usuario');
        $password = $this->request->getVar('password');

        

        $user = $model->where('usuario', $username)->first();

        try{
            if ($user) {
            if (password_verify($password, $user['password'])) {
                $ses_data = [
                    'id_usuarios' => $user['id_usuario'],
                    'nombre'     => $user['nombre'],
                    'rank'        => $user['rango'], 
                    'logged_in'   => true
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('home')); 
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Usuario no encontrado');
            return redirect()->to('/login');
        }    
    } catch (\Exception $e) {
    log_message('error', $e->getMessage());
}
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
