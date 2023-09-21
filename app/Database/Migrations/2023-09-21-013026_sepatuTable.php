<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class sepatuTable extends Migration
{
    private $table = 'sepatu';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_sepatu' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'ukuran_sepatu_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'merek_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'harga' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('ukuran_sepatu_id', 'ukuran_sepatu', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('merek_id', 'merek', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
