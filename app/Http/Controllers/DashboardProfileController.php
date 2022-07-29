<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\kampus;
use Illuminate\Http\Request;
use App\Models\counselorProfile;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->get()[0];
        $profile = counselorProfile::where('username', $user['username'])->get()[0];
        return view('dashboard.profil.index', [
            'title' => 'Profile',
            'konselor' => $user,
            'profile' => $profile,
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
        $user = auth()->user();
        $profile = counselorProfile::where('username', $user['username'])->get()[0];
        return view('dashboard.profil.edit', [
            'konselor' => $user,
            'profile' => $profile,
            'kampus' => kampus::all(),
            'kategori' => Category::all(),
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
        return $request;
        $user = auth()->user();
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:2048',
        ];

        if ($request->username != $user->username) {
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

        $validatedProfile = $request->validate([
            'username' => 'required',
            'pend_s1' => '',
            'pend_s2' => '',
            'tentang' => 'required',
        ]);
        User::where('id', $user->id)->update($validatedData);
        counselorProfile::where('username',  $user->username)->update($validatedProfile);

        return redirect('/dashboard/profil')->with('success', 'Profile has been updated!');
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
