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
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
