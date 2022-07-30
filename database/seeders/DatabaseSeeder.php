<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\counselorProfile;
use App\Models\kampus;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    User::factory()->create([
      'name' => 'User Konselor1',
      'username' => 'konselor1',
      'email' => 'user@gmail.com',
      'password' => bcrypt('password'),
      'level' => 'konselor',
      'nomor_hp' => random_int(1, 1000000000),

    ]);

    User::factory()->create([
      'name' => 'User Konselor2',
      'username' => 'konselor2',
      'email' => 'user2@gmail.com',
      'password' => bcrypt('password'),
      'level' => 'konselor',
      'nomor_hp' => random_int(1, 1000000000),

    ]);

    User::factory()->create([
      'name' => 'User Konselor3',
      'username' => 'konselor3',
      'email' => 'user3@gmail.com',
      'password' => bcrypt('password'),
      'level' => 'konselor',
      'nomor_hp' => random_int(1, 1000000000),

    ]);
    User::factory(3)->create();

    counselorProfile::factory()->create([
      'username' => 'konselor1',
      'user_id' => 1,
    ]);

    counselorProfile::factory()->create([
      'username' => 'konselor2',
      'user_id' => 2,
    ]);

    counselorProfile::factory()->create([
      'username' => 'konselor3',
      'user_id' => 3,
    ]);

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
      'slug' => 'toxic relationship'
    ]);


    kampus::create([
      'name' => 'UTY',
      'alamat' => 'Yogyakarta',
    ]);
    kampus::create([
      'name' => 'UII',
      'alamat' => 'Yogyakarta',
    ]);


    Post::factory(100)->create();
  }
}
