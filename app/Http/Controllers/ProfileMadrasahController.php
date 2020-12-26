<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use Illuminate\Http\Request;

class ProfileMadrasahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::orderByRaw('created_at DESC')->paginate(1);
        return view('profilemadrasah.index', compact('profile_madrasah'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile_madrasah = ProfileMadrasah::find($id);
        return view('profilemadrasah.edit', compact('profile_madrasah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile_madrasah = ProfileMadrasah::findorfail($id);
        $profile_madrasah->update($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambar_profile/', 'GP-' . $request->file('gambar')->getClientOriginalName());
            $profile_madrasah->gambar = 'GP-' . $request->file('gambar')->getClientOriginalName();
            $profile_madrasah->save();
        }
        if ($request->hasFile('logo')) {
            $request->file('logo')->move('logo_madrasah/', 'LP-' . $request->file('logo')->getClientOriginalName());
            $profile_madrasah->logo = 'GP-' . $request->file('logo')->getClientOriginalName();
            $profile_madrasah->save();
        }
        return redirect('profilemadrasah')->with('success', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
