<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenjualanSepatuTable extends Migration
{
    private $table = 'pnjln_sepatu';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'sepatu_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'tanggal' => [
                'type' => 'date',
                'null' => false,
            ],
            'nama_pembeli' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'jumlah_item' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'ttl_harga' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'ttl_dibayarkan' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'ttl_kembalian' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('sepatu_id', 'sepatu', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        //
    }
}
