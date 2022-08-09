<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.home', [
            "title" => "Dashboard",
        ]);
    }

    public function selesai($id)
    {

        Booking::where('id', $id)->update(['keterangan' => 'selesai']);

        return redirect('/dashboard')->with('success', 'Konsultasi selesai');
    }
    public function batal($id)
    {
        Booking::where('id', $id)->update(['keterangan' => 'batal']);
        return redirect('/dashboard')->with('success', 'Konsultasi dibatalkan');
    }
}
