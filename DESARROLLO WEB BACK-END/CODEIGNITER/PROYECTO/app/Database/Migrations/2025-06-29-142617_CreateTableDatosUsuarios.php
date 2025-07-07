<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableDatosUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_datos_usuarios'          => ['type' => 'INT', 'auto_increment' => true],
            'usuario_id'       => ['type' => 'INT'],
            'apellidos'          => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'email'             => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'fecha_contratacion' => ['type' => 'DATE', 'null' => true],
            'estado'            => ['type' => 'ENUM("Activo","Inactivo","Suspendido")', 'default' => 'activo', 'null' => true],
        ]);
        $this->forge->addKey('id_datos_usuarios', true);
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->createTable('datos_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('datos_usuarios');
    }
}
