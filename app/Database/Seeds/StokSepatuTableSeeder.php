<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StokSepatuTableSeeder extends Seeder
{
    private $table = 'stok_sepatu';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'sepatu_id' => 1,
                'gudang_id' =>  7,
                'jumlah_stok' => 4,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
