<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CelanaTable extends Migration
{
    private $table = 'celana';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_pembeli' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'bhn_celana_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'merek_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'harga' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('bhn_celana_id', 'bhn_celana', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('merek_id', 'merek', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
