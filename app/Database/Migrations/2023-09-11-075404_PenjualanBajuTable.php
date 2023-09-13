<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenjualanBajuTable extends Migration
{
    private $table = 'pnjln_baju';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'baju_id' => [
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
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
