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
            $data = Str::replace("[", '<li class="flex font-roboto"><img src="/asset/icons/checklist.svg" alt="" >', $data);
            $data = Str::replace("]", '</li>', $data);
            $data = Str::replace('"', '', $data);
            $data = Str::replace(',', '</li><li class="flex font-roboto mt-1"><img src="/asset/icons/checklist.svg" alt="" >', $data);
            $items->push($data);
        }

        return view('/pages/beranda', [
            "title" => "Home",
            "konselor" => $konselor,
            "masalah" => $items,
        ]);
    }
}
