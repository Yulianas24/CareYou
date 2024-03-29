<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $items = '';
        if (User::where('level', 'konselor')->with('profile') != null) {
            $konselor = User::where('level', 'konselor')->with('profile')->latest()->paginate(4);
            $items = collect();
            for ($i = 0; $i < 4; $i++) {
                if ($konselor[$i] != null) {
                    $data = $konselor[$i]->profile->penanganan_masalah ?? null;
                    $data = json_decode($data, true);
                    $items->push($data);
                }
            }
        }


        return view('/pages/beranda', [
            "title" => "Home",
            "konselor" => $konselor,
            "masalah" => $items,
        ]);
    }
}
