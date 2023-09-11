<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PenjualanCelanaTable extends Migration
{
    private $table = 'pnjln_celana';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'celana_id' => [
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
        $this->forge->addForeignKey('celana_id', 'celana', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
