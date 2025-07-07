<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Start extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('start'); 
    }
}

?>