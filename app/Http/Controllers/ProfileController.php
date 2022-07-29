<?php

namespace App\Http\Controllers;

use App\Models\counselorProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $user = auth()->user();
        return view('pages.profile', [
            'title' => 'Profile',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user = auth()->user();
        $rules = [
            'name' => 'max:255',
            'image' => 'image|file|max:2048',
            'tanggal_lahir' => '',
            'jenis_kelamin' => '',
            'email' => 'email|unique:users',
            'nomor_hp' => '',
        ];

        if ($request->username != $user->username && $request->username != null) {
            $rules['username'] = 'required|unique:users|min:5';
        }

        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        $validatedData['id'] = auth()->user()->id;

        if ($request->username != null) {
            $validatedProfile = $request->validate([
                'username' => '',
            ]);
            counselorProfile::where('username', $user->username)->update($validatedProfile);
        }
        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile/' . $user->username . '/edit')->with('success', 'edit berhasil !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
