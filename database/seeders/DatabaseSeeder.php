<?php

namespace Database\Seeders;

use App\Models\kampus;
use App\Models\Post;
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
    $this->call([
      // KampusSeeder::class,
      // UserSeeder::class,
      // CategorySeeder::class,
      // AssessmentSeeder::class,
      // BiodataAssessmentSeeder::class,
    ]);
    // Post::factory(100)->create();

  }
}
