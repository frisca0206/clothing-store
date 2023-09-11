<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenjualanBajuTableSeeder extends Seeder
{
    private $table = 'pnjln_baju';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'baju_id' => 2,
                'tanggal' => '2023-09-11',
                'nama_pembeli' => 'akbar',
                'jumlah_item' => 15,
                'ttl_harga' => 'Rp. 450.000',
                'ttl_dibayarkan' => 'Rp. 500.000',
                'ttl_kembalian' => 'Rp, 50.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
