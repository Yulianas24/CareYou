<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\jadwalCounselor;
use Illuminate\Support\Facades\DB;

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

        $data = $user->profile->penanganan_masalah;
        $data =  json_decode($data, true);
        $rekomendasi = DB::table('users')
            ->join('counselor_profiles', 'users.id', '=', 'counselor_profiles.user_id')
            ->select('users.id', 'users.name', 'users.username', 'users.image', 'counselor_profiles.penanganan_masalah')
            ->where('counselor_profiles.penanganan_masalah', 'like', "%{$data[0]}%")->take(5)->get();
        // 'name', 'like', "{$keyword}%"

        $pm = collect();
        for ($i = 0; $i < $rekomendasi->count(); $i++) {
            $item = $rekomendasi[$i]->penanganan_masalah;
            $item = json_decode($item, true);
            $pm->push($item);
        };
        // return json_decode($rekomendasi[0]->penanganan_masalah, true);
        return view('pages.detail_konselor', [
            'title' => 'Detail Konselor',
            'konselor' => $user,
            'masalah' => $data,
            'saran_konselor' => $rekomendasi,
            'pm' => $pm,
            'jadwal' => jadwalCounselor::where('user_id', $user->id)
                ->orderByRaw("hari DESC, mulai_jam ASC")->get(),
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
            return redirect('/konselor/' . $request->username)->with('error', 'Login sebagai konseli untuk melakukan konsultasi');
        }

        $validated_data = $request->validate([
            'user_id' => 'required',
            'konselor_id' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'metode' => 'required',
            'keterangan' => 'required'
        ]);
        $check = Booking::where(['konselor_id' => $request->konselor_id, 'hari' => $request->hari, 'jam' => $request->jam, 'keterangan' => 'mengajukan'])->get()->count();
        if ($check != null) {
            return redirect('/konselor/' . $request->username)->with('error', "hari $request->hari jam $request->jam sudah di booking");
        } else if (Booking::where(['user_id' => $request->user_id, 'keterangan' => 'mengajukan'])->get()->count() != null) {
            return redirect('/konselor/' . $request->username)->with('error', 'Anda sudah mendaftar konsultasi di konselor lain !');
        }
        Booking::create($validated_data);
        return redirect('/konselor/' . $request->username)->with('success', 'Booking Berhasil !');
    }
}
