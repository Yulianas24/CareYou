<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assessment;

class BiodataAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assessment::create([
            'question' => 'Jenis Kelamin',
            'category' => 'biodata',
            'options' => 'Laki - Laki,Perempuan',
        ]);
        Assessment::create([
            'question' => 'Umur',
            'category' => 'biodata',
            'type' => 'essay',
        ]);
        Assessment::create([
            'question' => 'Asal Daerah',
            'category' => 'biodata',
            'type' => 'essay',
        ]);
        Assessment::create([
            'question' => 'Status Hubungan',
            'category' => 'biodata',
            'options' => 'Single,Dalam Hubungan,Menikah,Cerai',
        ]);
        Assessment::create([
            'question' => 'Agama',
            'category' => 'biodata',
            'options' => 'Islam,Kristen,Hindu,Budha,Lainnya',
        ]);
        Assessment::create([
            'question' => 'Suku',
            'category' => 'biodata',
            'options' => 'Jawa,Sunda,Betawi,Batak,Sulawesi,Sumatra,Bugis,Madura,Melayu,Minangkabau,Lainnya',
        ]);
        Assessment::create([
            'question' => 'Orientasi Seksual',
            'category' => 'biodata',
            'options' => 'Lurus,Biseksual,Gay,Lesbian,Lainnya',
        ]);
        Assessment::create([
            'question' => 'Apakah pernah menjalani konseling sebelumnya?',
            'category' => 'biodata',
            'options' => 'Pernah,Belum Pernah',
        ]);
        Assessment::create([
            'question' => 'Ceritakan secara singkat kejadian atau peristiwa yang mendorongmu untuk melakukan konseling',
            'category' => 'kategori',
            'type' => 'long_essay',
        ]);
        Assessment::create([
            'question' => 'Ceritakan secara singkat perasaanmu dalam dua minggu terakhir',
            'category' => 'kategori',
            'type' => 'long_essay',
        ]);
        Assessment::create([
            'question' => 'Adakah aktivitas atau perilaku dalam dua minggu terakhir yang menurut kamu mengganggu kegiatanmu akhir-akhir ini? Kalau ada coba ceritakan secara singkat',
            'category' => 'kategori',
            'type' => 'long_essay',
        ]);
        Assessment::create([
            'question' => 'Sebutkan harapanmu dalam konseling ini?',
            'category' => 'kategori',
            'type' => 'long_essay',
        ]);
    }
}
