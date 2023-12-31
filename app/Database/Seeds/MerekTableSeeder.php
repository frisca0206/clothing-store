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
            [
                'id' => 7,
                'merek' => 'converse',
            ],
            [
                'id' => 8,
                'merek' => 'adidas',
            ],
            [
                'id' => 9,
                'merek' => 'vans',
            ],
            [
                'id' => 10,
                'merek' => 'Superga',
            ],
            [
                'id' => 11,
                'merek' => 'league',
            ],
            [
                'id' => 12,
                'merek' => 'piero',
            ],
            [
                'id' => 13,
                'merek' => 'puma',
            ],
            [
                'id' => 14,
                'merek' => 'nike',
            ],
            [
                'id' => 15,
                'merek' => 'new balance',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
