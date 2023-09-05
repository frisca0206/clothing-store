<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BhnBajuTableSeeder extends Seeder
{
        private $table = 'bhn_baju';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'bhn_baju' => 'denim',
            ],
            [
                'id' => 2,
                'bhn_baju' => 'wool',
            ],
            [
                'id' => 3,
                'bhn_baju' => 'rajut',
            ],
            [
                'id' => 4,
                'bhn_baju' => 'jersey',
            ],
            [
                'id' => 5,
                'bhn_baju' => 'polyester',
            ],
            [
                'id' => 6,
                'bhn_baju' => 'drill',
            ],
            [
                'id' => 7,
                'bhn_baju' => 'katun',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
