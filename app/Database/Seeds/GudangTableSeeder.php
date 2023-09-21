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
                'gudang' => 'Gudang Baju 3',
                'deskripsi' => 'Gudang Baju 3',
            ],
            [
                'id' => 4,
                'gudang' => 'Gudang Celana 1',
                'deskripsi' => 'Gudang Celana 1',
            ],
            [
                'id' => 5,
                'gudang' => 'Gudang Celana 2',
                'deskripsi' => 'Gudang Celana 2',
            ],
            [
                'id' => 6,
                'gudang' => 'Gudang Celana 3',
                'deskripsi' => 'Gudang Celana 3',
            ],
            [
                'id' => 7,
                'gudang' => 'Gudang Sepatu 1',
                'deskripsi' => 'Gudang Sepatu 1',
            ],
            [
                'id' => 8,
                'gudang' => 'Gudang Sepatu 2',
                'deskripsi' => 'Gudang Sepatu 2',
            ],
            [
                'id' => 9,
                'gudang' => 'Gudang Sepatu 3',
                'deskripsi' => 'Gudang Sepatu 3',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
