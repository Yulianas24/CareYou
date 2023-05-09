<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    //
    public function index() {
        return view('pages.assessment', [
            'title' => 'assessment',
            'assessments' => Assessment::where('category', 'pss')->get(),
        ]);
    }
    public function indexResult(){
        return view('pages.assessment_result', [
            'title' => 'Assessment Result',
            'detail' => UserProfile::where('user_id', auth()->user()->id)->get()->first()
        ]);
    }
    public function indexBio(){
        return view('pages.assessment_bio', [
            'title' => 'Assessment Biodata',
            'assessments' => Assessment::where('category', 'biodata')->get(),
        ]);
    }
    public function indexKategori(){
        return view('pages.assessment_kategori', [
            'title' => 'Assessment Kategori',
            'assessments' => Assessment::where('category', 'kategori')->get(),
        ]);
    }
    public function storeBio(Request $request) { 
        try {
            $data = json_decode($request->answers);
            // return $data;
            $bio = new UserProfile();
            $bio->user_id = auth()->user()->id;
            $bio->jenis_kelamin = $data[0]->answer;
            $bio->umur = $data[1]->answer;
            $bio->asal_daerah = $data[2]->answer;
            $bio->status_hubungan = $data[3]->answer;
            $bio->agama = $data[4]->answer;
            $bio->suku = $data[5]->answer;
            $bio->orientasi_seksual = $data[6]->answer;
            $bio->riwayat_konsultasi = $data[7]->answer;
            $bio->save();
            
            return redirect()->intended('/assessment/kategori');        
        } catch (\Throwable $th) {
            return redirect()->intended('/');
        }
    }
    public function storeKategori(Request $request) { 
        $data = json_decode($request->answers);
        UserProfile::where('user_id', auth()->user()->id)
        ->update([
            'peristiwa' => $data[0]->answer,
            'perasaan_terakhir' => $data[1]->answer,
            'perilaku_pengganggu_kegiatan' => $data[2]->answer,
            'harapan_konsultasi' => $data[3]->answer,
        ]);
        return redirect()->intended('/assessment/result');
    }

    public function store(Request $request) {
        $data = json_decode($request->answers);
        $values = 0;
        foreach ($data as $answer) {
            switch ($answer->answer) {
                case 'Tidak pernah':
                    $values += 1;
                    break;
                case 'Hampir tidak pernah (1-2 kali)':
                    $values += 2;
                    break;
                case 'Kadang-kadang (3-4 kali)':
                    $values += 3;
                    break;
                case 'Hampir sering (5-6 kali)':
                    $values += 4;
                    break;
                case 'Sangat sering (lebih dari 6 kali)':
                    $values += 5;
                    break;
                default:
                    $values += 0;
                    break;
            }
        }
        $result = '';
        if($values/count($data) <= 2.5) {
            $result = "Rendah";
        } else if ($values/count($data) <= 4) {
            $result = "Sedang";
        } else 
            $result = "Cukup Tinggi";

        return view('pages.assessmentResult', [
            'title' => 'assessment Result',
            'result' => $result,
        ]);
    }
}
