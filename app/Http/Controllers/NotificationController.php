<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function index() {
        $notifications =  Booking::where('user_id', auth()->user()->id)->get();
        return view('pages.notification', [
            'title' => 'Notification', 
            'notification' => $notifications,
        ]);
    }
}
