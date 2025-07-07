<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableComposicion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_composicion' =>['type' => 'INT', 'auto_increment' => true],
            'producto_id'     => ['type' => 'INT', 'null' => false],
            'tiempo_elaboracion' => ['type' => 'INT', 'null' => true],
            'coste_estimado' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => true],
            'beneficio_estimado' => ['type' => 'DECIMAL', 'constraint' => '10,2', 'null' => true],
        ]);
        $this->forge->addKey('id_composicion', true);
        $this->forge->addForeignKey('producto_id', 'productos', 'id_producto', 'CASCADE', 'CASCADE');
        $this->forge->createTable('composicion');
    }

    public function down()
    {
        $this->forge->dropTable('composicion');
    }
}
