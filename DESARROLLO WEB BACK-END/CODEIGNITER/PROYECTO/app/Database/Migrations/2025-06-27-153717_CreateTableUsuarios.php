<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'rango' => [
                'type'       => 'ENUM',
                'constraint' => ['A', 'B', 'C'],
                'default'    => 'C',
                'null'       => true
            ]
        ]);

        $this->forge->addKey('id_usuario', true); // Clave primaria
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}

