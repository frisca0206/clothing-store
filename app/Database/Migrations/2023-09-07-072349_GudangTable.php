<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GudangTable extends Migration
{
    private $table = 'gudang';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'gudang' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'deskripsi' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
