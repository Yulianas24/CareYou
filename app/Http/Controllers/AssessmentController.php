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
}
