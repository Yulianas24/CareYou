<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $konselor = User::where('level', 'konselor')->with('profile')->take(3)->latest()->get();
        $items = collect();
        for ($i = 0; $i < 3; $i++) {
            $data = $konselor[$i]->profile->penanganan_masalah;
            $data = json_decode($data, true);
            $items->push($data);
        }

        return view('/pages/beranda', [
            "title" => "Home",
            "konselor" => $konselor,
            "masalah" => $items,
        ]);
    }
}
