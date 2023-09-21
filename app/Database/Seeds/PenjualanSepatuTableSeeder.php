<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenjualanSepatuTableSeeder extends Seeder
{
    private $table = 'pnjln_sepatu';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'sepatu_id' => 1,
                'tanggal' => '2023-09-21',
                'nama_pembeli' => 'yati',
                'jumlah_item' => 1,
                'ttl_harga' => '500000',
                'ttl_dibayarkan' => '550000',
                'ttl_kembalian' => '50000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
