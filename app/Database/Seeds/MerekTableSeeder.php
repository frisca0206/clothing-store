<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MerekTableSeeder extends Seeder
{
    private $table = 'merek';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'merek' => 'uniqlo',
            ],
            [
                'id' => 2,
                'merek' => 'h&m',
            ],
            [
                'id' => 3,
                'merek' => 'zara',
            ],
            [
                'id' => 4,
                'merek' => 'matahari',
            ],
            [
                'id' => 5,
                'merek' => 'erigo',
            ],
            [
                'id' => 6,
                'merek' => 'levis',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
