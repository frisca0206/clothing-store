<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StokCelanaTableSeeder extends Seeder
{
    private $table = 'stok_celana';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'celana_id' => 1,
                'gudang_id' => 1,
                'jumlah_stok' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
