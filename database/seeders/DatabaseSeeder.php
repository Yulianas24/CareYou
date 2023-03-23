<?php

namespace Database\Seeders;

use App\Models\Assessment;
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
    User::factory()->create([
      'name' => 'User Konselor4',
      'username' => 'konselor4',
      'email' => 'user4@gmail.com',
      'password' => bcrypt('password'),
      'level' => 'konselor',
      'nomor_hp' => random_int(1, 1000000000),

    ]);
    User::factory(3)->create();

    counselorProfile::factory()->create([
      'username' => 'konselor1',
      'user_id' => 1,
      'penanganan_masalah' => '["Stress"]',
      'tentang' => '<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, molestiae! Temporibus facere ipsam ducimus praesentium necessitatibus voluptatum exercitationem vel officia nam. Laboriosam non sequi minus vero sapiente dicta at ullam doloribus blanditiis corrupti, iusto animi possimus aspernatur earum ratione sed magni. At inventore nesciunt unde repellat doloribus expedita dolorem harum rem, molestiae delectus laboriosam tempore molestias vitae dolore accusamus non ea maiores nulla quos omnis, ad aspernatur necessitatibus earum. Culpa dicta quia corrupti nisi fugiat commodi veritatis, delectus consequuntur officia qui ullam veniam! Voluptatum quod animi dolorem molestias impedit, labore non, odio sequi fugit possimus enim, optio et numquam quam.</div>'
    ]);

    counselorProfile::factory()->create([
      'username' => 'konselor2',
      'user_id' => 2,
      'penanganan_masalah' => '["Depresi"]',
      'tentang' => '<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, molestiae! Temporibus facere ipsam ducimus praesentium necessitatibus voluptatum exercitationem vel officia nam. Laboriosam non sequi minus vero sapiente dicta at ullam doloribus blanditiis corrupti, iusto animi possimus aspernatur earum ratione sed magni. At inventore nesciunt unde repellat doloribus expedita dolorem harum rem, molestiae delectus laboriosam tempore molestias vitae dolore accusamus non ea maiores nulla quos omnis, ad aspernatur necessitatibus earum. Culpa dicta quia corrupti nisi fugiat commodi veritatis, delectus consequuntur officia qui ullam veniam! Voluptatum quod animi dolorem molestias impedit, labore non, odio sequi fugit possimus enim, optio et numquam quam.</div>'
    ]);

    counselorProfile::factory()->create([
      'username' => 'konselor3',
      'user_id' => 3,
      'penanganan_masalah' => '["Depresi"]',
      'tentang' => '<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, molestiae! Temporibus facere ipsam ducimus praesentium necessitatibus voluptatum exercitationem vel officia nam. Laboriosam non sequi minus vero sapiente dicta at ullam doloribus blanditiis corrupti, iusto animi possimus aspernatur earum ratione sed magni. At inventore nesciunt unde repellat doloribus expedita dolorem harum rem, molestiae delectus laboriosam tempore molestias vitae dolore accusamus non ea maiores nulla quos omnis, ad aspernatur necessitatibus earum. Culpa dicta quia corrupti nisi fugiat commodi veritatis, delectus consequuntur officia qui ullam veniam! Voluptatum quod animi dolorem molestias impedit, labore non, odio sequi fugit possimus enim, optio et numquam quam.</div>'
    ]);
    counselorProfile::factory()->create([
      'username' => 'konselor4',
      'user_id' => 4,
      'penanganan_masalah' => '["Depresi"]',
      'tentang' => '<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, molestiae! Temporibus facere ipsam ducimus praesentium necessitatibus voluptatum exercitationem vel officia nam. Laboriosam non sequi minus vero sapiente dicta at ullam doloribus blanditiis corrupti, iusto animi possimus aspernatur earum ratione sed magni. At inventore nesciunt unde repellat doloribus expedita dolorem harum rem, molestiae delectus laboriosam tempore molestias vitae dolore accusamus non ea maiores nulla quos omnis, ad aspernatur necessitatibus earum. Culpa dicta quia corrupti nisi fugiat commodi veritatis, delectus consequuntur officia qui ullam veniam! Voluptatum quod animi dolorem molestias impedit, labore non, odio sequi fugit possimus enim, optio et numquam quam.</div>'
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


    kampus::create([
      'name' => 'UTY',
      'alamat' => 'Yogyakarta',
    ]);
    kampus::create([
      'name' => 'UII',
      'alamat' => 'Yogyakarta',
    ]);

    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda marah karena sesuatu yang tidak terduga',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda merasa tidak mampu mengontrol hal-hal yang penting dalam kehidupan anda',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda merasa gelisah dan tertekan',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda merasa yakin terhadap kemampuan diri untuk mengatasi masalah pribadi',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda merasa segala sesuatu yang terjadi sesuai dengan harapan anda',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda mampu mengontrol rasa mudah tersinggung dalam kehidupan anda',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda merasa lebih mampu mengatasi masalah jika dibandingkan dengan orang lain',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda marah karena adanya masalah yang tidak dapat anda kendalikan',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);
    Assessment::create([
      'question' => 'Selama sebulan terakhir, seberapa sering anda merasakan kesulitan yang menumpuk sehingga anda tidak mampu untuk mengatasinya',
      'category' => 'pss',
      'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
    ]);

    
    Post::factory(100)->create();
  }
}
