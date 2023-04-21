<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => 'Stress',
            'slug' => 'stress'
        ]);
        Category::create([
            'name' => 'Depresi',
            'slug' => 'depresi'
        ]);
        Category::create([
            'name' => 'Kecemasan',
            'slug' => 'kecemasan'
        ]);
        Category::create([
            'name' => 'Toxic Relationship',
            'slug' => 'toxic_relationship'
        ]);
        Category::create([
            'name' => 'Manajemen Emosi',
            'slug' => 'manajemen_emosi'
        ]);
        Category::create([
            'name' => 'Quarterlife Crisis',
            'slug' => 'quarterlife_crisis'
        ]);
    }
}
