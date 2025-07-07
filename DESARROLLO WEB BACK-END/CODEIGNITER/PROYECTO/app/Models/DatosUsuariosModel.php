<?php
namespace App\Models;

use CodeIgniter\Model;

class DatosUsuariosModel extends Model
{
    protected $table      = 'datos_usuarios';
    protected $primaryKey = 'id_datos_usuarios';
    protected $allowedFields = ['usuario_id', 'apellidos', 'email', 'fecha_contratacion', 'estado'];
}


?>