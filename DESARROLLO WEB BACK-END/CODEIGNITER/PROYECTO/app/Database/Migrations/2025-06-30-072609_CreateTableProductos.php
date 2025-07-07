<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableProductos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto' => ['type' => 'INT', 'auto_increment' => true],
            'nombre'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => false],
            'descripcion' => ['type' => 'TEXT', 'null' => true],
            'stock'       => ['type' => 'INT', 'null' => false, 'default' => 0],
        ]);
        $this->forge->addKey('id_producto', true);
        $this->forge->createTable('productos');
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
