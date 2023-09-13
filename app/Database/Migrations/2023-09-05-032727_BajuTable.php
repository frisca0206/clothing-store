<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BajuTable extends Migration
{
    private $table = 'baju';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_baju' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'bhn_baju_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'merek_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'harga' => [
                'type' => 'int',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('bhn_baju_id', 'bhn_baju', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('merek_id', 'merek', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
