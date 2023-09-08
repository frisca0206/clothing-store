<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StokBajuTableSeeder extends Seeder
{
    private $table = 'stok_baju';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'baju_id' => 1,
                'gudang_id' =>  1,
                'jumlah_stok' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
