<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StokSepatuTable extends Migration
{
    private $table = 'stok_sepatu';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'sepatu_id' => [
                'type' =>'int',
                'unsigned' => true,
            ],
            'gudang_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'jumlah_stok' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('sepatu_id', 'sepatu', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('gudang_id', 'gudang', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
