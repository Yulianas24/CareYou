<?php

namespace Database\Seeders;

use App\Models\kampus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kampus::create([
            'name' => 'UTY',
            'alamat' => 'Yogyakarta',
        ]);
        kampus::create([
            'name' => 'UII',
            'alamat' => 'Yogyakarta',
        ]);  
    }
}
