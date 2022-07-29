<?php

namespace App\Http\Controllers;

use App\Models\counselorProfile;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            //
            return view('/pages/registrasi', [
                "title" => "Registrasi",
            ]);
        }
    }
    public function store(Request $request)
    {

        $validated_data = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
            'level' => ['required'],
        ]);

        $validated_data['password'] = Hash::make($validated_data['password']);

        $request->session()->flash('success', 'Registrasi Berhasil!, silahkan login');
        return redirect('login');
    }
}
