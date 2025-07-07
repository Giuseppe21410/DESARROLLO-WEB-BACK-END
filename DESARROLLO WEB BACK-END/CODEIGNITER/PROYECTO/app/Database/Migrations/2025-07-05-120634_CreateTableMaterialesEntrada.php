<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableMaterialesEntrada extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_material_entrada'      => ['type' => 'INT', 'auto_increment' => true],
            'material_id'           => ['type' => 'INT', 'null' => false],
            'cantidad' => ['type' => 'INT', 'null' => false, 'default' => 0],
            'fecha_adquisicion'=> ['type' => 'DATE', 'null' => true],
            'tipo_adquisicion' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
        ]);
        $this->forge->addKey('id_material_entrada', true);
        $this->forge->addForeignKey('material_id','materiales','id_material');
        $this->forge->createTable('materiales_entrada');
    }

    public function down()
    {
        $this->forge->dropTable('materiales_entrada');
    }
}
