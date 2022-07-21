<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/pages/login', [
            "title" => "Login",
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'min:5'],
            'password' => ['required'],

        ]);
        $level = User::where('username', $credentials['username'])->get('level')[0];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if ($level['level'] === 'konseli') {
                return redirect()->intended('/');
            } elseif ($level['level'] === 'konselor') {
                return redirect()->intended('/dashboard');
            }
        }

        return back()->with('loginError', 'Login Gagal!');
    }
}
