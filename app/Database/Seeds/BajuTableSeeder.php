<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BajuTableSeeder extends Seeder
{
    private $table = 'baju';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_baju' => 'Rajut H&M',
                'bhn_baju_id' => 3,
                'merek_id' => 2,
                'harga' => '250000',
            ],
            [
                'id' => 2,
                'nama_baju' => 'Polyester Levis',
                'bhn_baju_id' => 3,
                'merek_id' => 2,
                'harga' => '300000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
