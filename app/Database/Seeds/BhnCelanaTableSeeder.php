<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BhnCelanaTableSeeder extends Seeder
{
    private $table = 'bhn_celana';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'bhn_celana' => 'nilon',
            ],
            [
                'id' => 2,
                'bhn_celana' => 'kanvas',
            ],
            [
                'id' => 3,
                'bhn_celana' => 'corduroy',
            ],
            [
                'id' => 4,
                'bhn_celana' => 'lotto',
            ],
            [
                'id' => 5,
                'bhn_celana' => 'paragon',
            ],
            [
                'id' => 6,
                'bhn_celana' => 'adidas',
            ],
            [
                'id' => 7,
                'bhn_celana' => 'dri fit',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
