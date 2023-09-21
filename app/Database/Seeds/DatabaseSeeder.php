<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('BhnBajuTableSeeder');
        $this->call('BhnCelanaTableSeeder');
        $this->call('MerekTableSeeder');
        $this->call('BajuTableSeeder');
        $this->call('CelanaTableSeeder');
        $this->call('GudangTableSeeder');
        $this->call('StokBajuTableSeeder');
        $this->call('StokCelanaTableSeeder');
        $this->call('PenjualanBajuTableSeeder');
        $this->call('PenjualanCelanaTableSeeder');
        $this->call('UkuranSepatuTableSeeder');
        $this->call('sepatuTableSeeder');
        $this->call('StokSepatuTableSeeder');
        $this->call('PenjualanSepatuTableSeeder');
    }
}
