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
    }
}
