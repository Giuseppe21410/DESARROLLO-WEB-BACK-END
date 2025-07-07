<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableComposicionMateriales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_materiales_comp' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'composicion_id' => [
                'type'       => 'INT',
            ],
            'material_id' => [
                'type'       => 'INT',
            ],
            'cantidad_material' => [
                'type'       => 'INT',
                'null'       => false
            ],
            'unidad' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
        ]);

        $this->forge->addKey('id_materiales_comp', true); // Primary key
        $this->forge->addForeignKey('composicion_id', 'composicion', 'id_composicion', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('material_id', 'materiales', 'id_material', 'CASCADE', 'CASCADE');

        $this->forge->createTable('materiales_composicion');
    }

    public function down()
    {
        $this->forge->dropTable('materiales_composicion');
    }
}
