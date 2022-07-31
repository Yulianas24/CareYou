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
        //
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
    public function edit(jadwalCounselor $jadwalCounselor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jadwalCounselor  $jadwalCounselor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwalCounselor $jadwalCounselor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jadwalCounselor  $jadwalCounselor
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwalCounselor $jadwalCounselor)
    {
        //
    }
}
