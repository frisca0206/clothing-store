<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UkuranSepatuTable extends Migration
{
    private $table = 'ukuran_sepatu';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ukuran_sepatu' => [
                'type' => 'int',
                'unsigned' => true,
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
