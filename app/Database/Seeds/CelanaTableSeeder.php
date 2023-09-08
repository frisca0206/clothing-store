<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CelanaTableSeeder extends Seeder
{
    private $table = 'celana';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_celana' => 'lotto Matahari',
                'bhn_celana_id' => 4,
                'merek_id' => 4,
                'harga' => 'Rp. 300.000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
