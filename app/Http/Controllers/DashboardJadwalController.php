<?php

namespace App\Http\Controllers;

use App\Models\jadwalCounselor;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.jadwal.index', [
            'title' => 'Jadwal',
            'jadwal' => jadwalCounselor::where('user_id', auth()->user()->id)
                ->orderByRaw("hari DESC, mulai_jam ASC")->get(),
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'hari' => 'required',
            'mulai_jam' => 'required',
            'hingga_jam' => 'required',

        ]);
        if ($request->mulai_jam >= $request->hingga_jam) {
            return redirect('/dashboard/jadwal')->with('error', 'Masukan jam dengan benar!!');
        } elseif (jadwalCounselor::where('user_id', $request->user_id)->where('hari', $request->hari)->count() > 1) {
            return redirect('/dashboard/jadwal')->with('error', 'Terlalu banyak jadwal untuk hari ' . $request->hari . ' !!');
        } elseif (jadwalCounselor::where('user_id', $request->user_id)->where('hari', $request->hari)->exists()) {
            $data = jadwalCounselor::where('user_id', $request->user_id)->where('hari', $request->hari)->get()[0];


            if ($request->mulai_jam >= $data->mulai_jam && $request->mulai_jam <= $data->hingga_jam) {
                return redirect('/dashboard/jadwal')->with('error', 'Sudah ada jadwal pukul ' . $request->mulai_jam . ' untuk hari ' . $request->hari . ' !!');
            } elseif ($request->hingga_jam >= $data->mulai_jam && $request->hingga_jam <= $data->hingga_jam) {
                return redirect('/dashboard/jadwal')->with('error', 'Sudah ada jadwal pukul ' . $request->hingga_jam . ' untuk hari ' . $request->hari . ' !!');
            } elseif ($request->mulai_jam  <=  $data->mulai_jam && $request->hingga_jam >= $data->mulai_jam) {
                return redirect('/dashboard/jadwal')->with('error', 'Sudah ada jadwal pukul ' . $request->hingga_jam . ' untuk hari ' . $request->hari . ' !!');
            }

            jadwalCounselor::create($validatedData);
            return redirect('/dashboard/jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
        } else {
            jadwalCounselor::create($validatedData);
            return redirect('/dashboard/jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwalCounselor  $jadwalCounselor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        jadwalCounselor::destroy($request->id);
        return redirect('/dashboard/jadwal')->with('success', 'jadwal sudah dihapus!');
    }
}
