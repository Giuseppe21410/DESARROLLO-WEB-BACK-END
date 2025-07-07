<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableMateriales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_material'      => ['type' => 'INT', 'auto_increment' => true],
            'nombre'           => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false],
            'cantidad' => ['type' => 'INT', 'null' => false, 'default' => 0],
        ]);
        $this->forge->addKey('id_material', true);
        $this->forge->createTable('materiales');
    }

    public function down()
    {
        $this->forge->dropTable('materiales');
    }
}
