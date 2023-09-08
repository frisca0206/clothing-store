<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StokBajuTable extends Migration
{
    private $table = 'stok_baju';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'baju_id' => [
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
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('baju_id', 'baju', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('gudang_id', 'gudang', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
