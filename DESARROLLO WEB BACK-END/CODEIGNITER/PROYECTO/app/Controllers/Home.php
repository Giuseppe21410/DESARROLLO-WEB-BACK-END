<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        helper('session');
        if (!session()->has('logged_in')) {
        // Redirigir si no está logueado:
        return redirect()->to('/login');
    }
        return view('home');  
    }
}

?>