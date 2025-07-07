<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableComposicionTareas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_composicion_tarea' => ['type' => 'INT', 'auto_increment' => true],
            'composicion_id'       => ['type' => 'INT', 'null' => false],
            'tarea_id'             => ['type' => 'INT', 'null' => false],
            'cantidad'             => ['type' => 'INT', 'null' => false],
        ]);
        $this->forge->addKey('id_composicion_tarea', true);
        $this->forge->addForeignKey('composicion_id', 'composicion', 'id_composicion', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tarea_id', 'tareas', 'id_tarea', 'CASCADE', 'CASCADE');
        $this->forge->createTable('composicion_tareas');
    }

    public function down()
    {
        $this->forge->dropTable('composicion_tareas');
    }
}
