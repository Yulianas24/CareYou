<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\counselorProfile;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
