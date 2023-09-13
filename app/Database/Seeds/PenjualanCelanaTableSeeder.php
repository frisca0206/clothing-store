<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenjualanCelanaTableSeeder extends Seeder
{
    private $table = 'pnjln_celana';

    public function run()
    {
         $data = [
            [
                'id' => 1,
                'celana_id' => 1,
                'tanggal' => '2023-09-11',
                'nama_pembeli' => 'rahmi',
                'jumlah_item' => 20,
                'ttl_harga' => '350000',
                'ttl_dibayarkan' => '350000',
                'ttl_kembalian' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
