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
            'jadwal' => jadwalCounselor::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        } elseif (jadwalCounselor::where('user_id', $request->user_id)->where('hari', $request->hari)->exists()) {
            return redirect('/dashboard/jadwal')->with('error', 'Hari ' . $request->hari . ' sudah diambil !!');
        } else {
            jadwalCounselor::create($validatedData);
            return redirect('/dashboard/jadwal')->with('success', 'Jadwal berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jadwalCounselor  $jadwalCounselor
     * @return \Illuminate\Http\Response
     */
    public function show(jadwalCounselor $jadwalCounselor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jadwalCounselor  $jadwalCounselor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.jadwal.edit', [
            'jadwal' => jadwalCounselor::where('id', $id)->get()[0],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwalCounselor  $jadwalCounselor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = jadwalCounselor::where('id', $id)->get()[0];
        $validatedData = $request->validate([
            'hari' => 'required',
            'mulai_jam' => 'required',
            'hingga_jam' => 'required',

        ]);

        if ($request->mulai_jam >= $request->hingga_jam) {
            return redirect('/dashboard/jadwal')->with('error', 'Masukan jam dengan benar!!');
        } elseif ($data->hari != $request->hari && jadwalCounselor::where('user_id', $data->user_id)->where('hari', $request->hari)->exists()) {
            return redirect('/dashboard/jadwal')->with('error', 'Hari ' . $request->hari . ' sudah diambil !!');
        } else {
            jadwalCounselor::where('id', $id)->update($validatedData);
            return redirect('/dashboard/jadwal')->with('success', 'Jadwal berhasil diubah!');
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
