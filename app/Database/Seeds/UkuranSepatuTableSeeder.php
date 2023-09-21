<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UkuranSepatuTableSeeder extends Seeder
{
    private $table = 'ukuran_sepatu';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'ukuran_sepatu' => 30,
            ],
            [
                'id' => 2,
                'ukuran_sepatu' => 31,
            ],
            [
                'id' => 3,
                'ukuran_sepatu' => 32,
            ],
            [
                'id' => 4,
                'ukuran_sepatu' => 33,
            ],
            [
                'id' => 5,
                'ukuran_sepatu' => 34,
            ],
            [
                'id' =>6,
                'ukuran_sepatu' => 35,
            ],
            [
                'id' => 7,
                'ukuran_sepatu' => 36,
            ],
            [
                'id' => 8,
                'ukuran_sepatu' => 37,
            ],
            [
                'id' => 9,
                'ukuran_sepatu' => 38,
            ],
            [
                'id' => 10,
                'ukuran_sepatu' => 39,
            ],
            [
                'id' => 11,
                'ukuran_sepatu' => 40,
            ],
            [
                'id' => 12,
                'ukuran_sepatu' => 41,
            ],
            [
                'id' => 13,
                'ukuran_sepatu' => 42,
            ],
            [
                'id' => 14,
                'ukuran_sepatu' => 43,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
