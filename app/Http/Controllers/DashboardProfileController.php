<?php

namespace App\Http\Controllers;

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

        return view('dashboard.profil.index', [
            'title' => 'Profile',
            'konselor' => User::where('id', auth()->user()->id)->get()[0],
            'kampus' => kampus::all(),
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
        return view('dashboard.profil.edit', [
            'konselor' => $user,
            'kampus' => kampus::all(),
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
            'pend_s1' => 'required',
            'pend_s2' => 'required',
            'tentang' => 'required',
        ]);
        User::where('id', $user->id)->update($validatedData);
        counselorProfile::where('user_id',  $user->id)->update($validatedProfile);

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
