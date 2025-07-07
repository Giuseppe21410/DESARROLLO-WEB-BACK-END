<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTareas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tarea' => ['type' => 'INT', 'auto_increment' => true],
            'nombre' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'descripcion' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'fecha_inicio' => ['type' => 'DATETIME', 'null' => false],
            'fecha_fin' => ['type' => 'DATETIME', 'null' => true],
            'estado' => ['type' => 'ENUM', 'constraint' => "'pendiente','en_proceso','completada'", 'default' => 'pendiente'],
            'tiempo_elaboracion_H' => ['type' => 'INT', 'null' => true],
            'tiempo_elaboracion_M' => ['type' => 'INT', 'null' => true],
        ]);
        $this->forge->addKey('id_tarea', true);
        $this->forge->createTable('tareas');
    }

    public function down()
    {
        $this->forge->dropTable('tareas');
    }
}
