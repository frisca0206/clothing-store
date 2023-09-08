<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StokCelanaTable extends Migration
{
    private $table = 'stok_celana';    

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'celana_id' => [
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
        $this->forge->addForeignKey('celana_id', 'celana', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('gudang_id', 'gudang', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
