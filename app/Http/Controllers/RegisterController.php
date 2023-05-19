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
    public function indexKonselor()
    {
        //
        {
            //
            return view('/pages/registrasi_konselor', [
                "title" => "Registrasi Konselor",
            ]);
        }
    }
    public function store(Request $request)
    {

        $validated_data = $request->validate([
            'id' => 'unique',
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
            'level' => ['required'],
        ]);

        $validated_data['password'] = Hash::make($validated_data['password']);

        User::create($validated_data);

        if ($request->level == 'konselor') {
            $user = User::where('username', $request->username)->get()[0];
            $data['user_id'] = $user->id;
            $data['username'] = $user->username;
            counselorProfile::create($data);
        }


        $request->session()->flash('success', 'Registrasi Berhasil!, silahkan login');

        return redirect('login');
    }
    public function storeKonselor(Request $request)
    {

        $validated_data = $request->validate([
            'id' => 'unique',
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
            'level' => ['required'],
        ]);

        $validated_data['password'] = Hash::make($validated_data['password']);

        User::create($validated_data);

        if ($request->level == 'konselor') {
            $user = User::where('username', $request->username)->get()[0];
            $data['user_id'] = $user->id;
            $data['username'] = $user->username;
            counselorProfile::create($data);
        }


        $request->session()->flash('success', 'Registrasi Berhasil!, silahkan login');

        return redirect('login');
    }
}
