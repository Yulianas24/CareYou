<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;

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
            $data = json_decode($data, true);
            $items->push($data);
        }
        $keyword = '';
        if (request('search')) {
            $keyword = request('search');
        }
        return view('pages.konselor', [
            "title" => "konselor",
            "konselor" => User::where('level', 'konselor')->with('profile')
                ->where('name', 'like', "{$keyword}%")->paginate(9),
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
        $data = $user->profile->penanganan_masalah;
        $data = json_decode($data, true);

        if (Booking::where(['konselor_id' => $user->id, 'user_id' => auth()->user()->id])->get()->count() != null) {
            $status = 'booked';
        } else {
            $status = '';
        }


        return view('pages.detail_konselor', [
            'title' => 'Detail Konselor',
            'konselor' => $user,
            'masalah' => $data,
            'status' => $status,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $request)
    {
        if (auth()->user()->level == 'konselor') {
            return 'Login sebagai konseli untuk melakukan konsultasi';
        }

        $validated_data = $request->validate([
            'user_id' => 'required',
            'konselor_id' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'metode' => 'required',
            'keterangan' => 'required'
        ]);
        $check = Booking::where(['hari' => $request->hari, 'jam' => $request->jam])->get()->count();
        if ($check != null) {
            return redirect('/konselor/' . $request->username)->with('error', 'hari dan jam sudah di booking');
        }

        Booking::create($validated_data);
        return redirect('/konselor/' . $request->username)->with('success', 'Booking Berhasil !');
    }
}
