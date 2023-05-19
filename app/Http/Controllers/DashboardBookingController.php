<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Models\UserProfile;
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
    public function result($id){
        $user = User::where('id', $id)->get()[0];
        $profile = UserProfile::where('user_id', $id)->first();
        return view('dashboard.assessment_result', [
            'detail' => $profile,
            'user' => $user,
            'title' => 'Detail Konseli'
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
