<?php

namespace Database\Seeders;

use App\Models\Assessment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda marah karena adanya masalah yang tidak dapat anda kendalikan',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda merasa lebih mampu mengatasi masalah jika dibandingkan dengan orang lain',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda mampu mengontrol rasa mudah tersinggung dalam kehidupan anda',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda merasa tidak mampu menyelesaikan hal-hal yang harus dikerjakan',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda merasa segala sesuatu yang terjadi sesuai dengan harapan anda',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda merasa yakin terhadap kemampuan diri untuk mengatasi masalah pribadi',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda merasa gelisah dan tertekan',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda merasa tidak mampu mengontrol hal-hal yang penting dalam kehidupan anda',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
          Assessment::create([
            'question' => 'Selama sebulan terakhir, seberapa sering anda marah karena sesuatu yang tidak terduga',
            'category' => 'pss',
            'options' => 'Tidak pernah,Hampir tidak pernah (1-2 kali),Kadang-kadang (3-4 kali),Hampir sering (5-6 kali),Sangat sering (lebih dari 6 kali)',
          ]);
      
    }
}
