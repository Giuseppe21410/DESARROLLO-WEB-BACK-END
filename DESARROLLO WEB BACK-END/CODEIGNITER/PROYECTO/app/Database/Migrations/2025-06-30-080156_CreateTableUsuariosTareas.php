<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsuariosTareas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario_tarea' => ['type' => 'INT', 'auto_increment' => true],
            'usuario_id'       => ['type' => 'INT', 'null' => false],
            'tarea_id'         => ['type' => 'INT', 'null' => false],
            'fecha_asignacion' => ['type' => 'DATETIME', 'null' => false],
        ]);
        $this->forge->addKey('id_usuario_tarea', true);
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id_usuario', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tarea_id', 'tareas', 'id_tarea', 'CASCADE', 'CASCADE');
        $this->forge->createTable('usuarios_tareas');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios_tareas');
    }
}
