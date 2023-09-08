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
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
