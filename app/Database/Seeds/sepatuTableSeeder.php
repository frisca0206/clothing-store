<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class sepatuTableSeeder extends Seeder
{
    private $table = 'sepatu';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_sepatu' => 'Nike Air Rift Gold Black',
                'ukuran_sepatu_id' => 10,
                'merek_id' => 14,
                'harga' => '500000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
