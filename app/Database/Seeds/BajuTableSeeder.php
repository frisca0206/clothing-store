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
                'nama_pembeli' => 'tari',
                'bhn_baju_id' => 3,
                'merek_id' => 2,
                'harga' => 'Rp. 250.000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
