<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    //
    public function index() {
        return view('pages.assessment', [
            'title' => 'assessment',
            'assessments' => Assessment::all(),
        ]);
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
