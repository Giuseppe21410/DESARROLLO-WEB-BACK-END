<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableDesechos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_desecho'       => ['type' => 'INT', 'auto_increment' => true],
            'material_id'      => ['type' => 'INT'],
            'cantidad'         => ['type' => 'INT', 'null' => false, 'default' => 0],
            'fecha_desecho'    => ['type' => 'DATE', 'null' => true],
            'motivo_desecho'   => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'tarea_id'      => ['type' => 'INT', 'null' => true],
        ]);
        $this->forge->addKey('id_desecho', true);
        $this->forge->addForeignKey('material_id', 'materiales', 'id_material', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tarea_id', 'tareas', 'id_tarea', 'SET NULL', 'CASCADE');
        $this->forge->createTable('desechos');
    }

    public function down()
    {
        $this->forge->dropTable('desechos');

    }
}
