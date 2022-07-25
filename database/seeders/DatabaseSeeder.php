<?php

namespace Database\Seeders;

use App\Models\Category;
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
    User::factory(3)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    User::factory()->create([
      'name' => 'User Konselor',
      'username' => 'konselor',
      'email' => 'user@gmail.com',
      'password' => bcrypt('aaaaaaaa'),
      'level' => 'konselor',

    ]);
    User::factory()->create([
      'name' => 'User Konseli',
      'username' => 'konseli',
      'email' => 'user2@gmail.com',
      'password' => bcrypt('aaaaaaaa'),
      'level' => 'konseli',

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


    Post::factory(100)->create();
  }
}
