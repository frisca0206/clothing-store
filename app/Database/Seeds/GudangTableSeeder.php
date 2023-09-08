<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GudangTableSeeder extends Seeder
{
    private $table = 'gudang';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'gudang' => 'Gudang Baju 1',
                'deskripsi' => 'Gudang Baju 1',
            ],
            [
                'id' => 2,
                'gudang' => 'Gudang Baju 2',
                'deskripsi' => 'Gudang Baju 2',
            ],
            [
                'id' => 3,
                'gudang' => 'Gudang Celana 1',
                'deskripsi' => 'Gudang Celana 1',
            ],
            [
                'id' => 4,
                'gudang' => 'Gudang Celana 2',
                'deskripsi' => 'Gudang Celana 2',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
