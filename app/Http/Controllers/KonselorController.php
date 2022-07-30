<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KonselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konselor = User::where('level', 'konselor')->with('profile')->get();

        $items = collect();
        for ($i = 0; $i < $konselor->count(); $i++) {
            $data = $konselor[$i]->profile->penanganan_masalah;
            $data = Str::replace("[", '<li class="flex font-roboto"><img src="/asset/icons/checklist.svg" alt="" >', $data);
            $data = Str::replace("]", '</li>', $data);
            $data = Str::replace('"', '', $data);
            $data = Str::replace(',', '</li><li class="flex font-roboto mt-1"><img src="/asset/icons/checklist.svg" alt="" >', $data);
            $items->push($data);
        }
        return view('pages.konselor', [
            "title" => "konselor",
            "konselor" => User::where('level', 'konselor')->with('profile')->paginate(9),
            'masalah' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }
}
