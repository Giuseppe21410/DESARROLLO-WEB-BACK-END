<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'usuario', 'password', 'rango'];

    public function getUsuariosConDatos($limit = 10, $offset = 0, $search = '', $filters = [])
    {
        $builder = $this->db->table('usuarios u');
        $builder->select('u.id_usuario, u.nombre, u.usuario, u.rango, d.apellidos, d.email, d.fecha_contratacion, d.estado');
        $builder->join('datos_usuarios d', 'd.usuario_id = u.id_usuario', 'left');

        if (!empty($search)) {
            $builder->groupStart();
            $builder->like('u.nombre', $search);
            $builder->groupEnd();
        }

        if (isset($filters['estado']) && $filters['estado'] !== '') {
            $builder->where('d.estado', $filters['estado']);
        }

        if (isset($filters['rango']) && $filters['rango'] !== '') {
            $builder->where('u.rango', $filters['rango']);
        }

        $builder->limit($limit, $offset);

        $query = $builder->get();

        return $query->getResultArray();
    }

    public function countUsuariosConDatos($search = '', $filters = [])
    {
        $builder = $this->db->table('usuarios u');
        $builder->join('datos_usuarios d', 'd.usuario_id = u.id_usuario', 'left');

        if (!empty($search)) {
            $builder->groupStart();
            $builder->like('u.nombre', $search);
            $builder->orLike('d.apellidos', $search);
            $builder->orLike('u.usuario', $search);
            $builder->groupEnd();
        }

        if (isset($filters['estado']) && $filters['estado'] !== '') {
            $builder->where('d.estado', $filters['estado']);
        }

        if (isset($filters['rango']) && $filters['rango'] !== '') {
            $builder->where('u.rango', $filters['rango']);
        }

        return $builder->countAllResults();
    }
}
