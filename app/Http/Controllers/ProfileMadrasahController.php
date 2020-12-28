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
        return view('profilemadrasah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile_madrasah = new ProfileMadrasah();
        $profile_madrasah->nama   = $request->input('nama');
        $profile_madrasah->jumlah_rombel   = $request->input('jumlah_rombel');
        $profile_madrasah->jumlah_siswa   = $request->input('jumlah_siswa');
        $profile_madrasah->jumlah_guru   = $request->input('jumlah_guru');
        $profile_madrasah->jumlah_tendik   = $request->input('jumlah_tendik');
        $profile_madrasah->deskripsi   = $request->input('deskripsi');
        $filegambar                  = $request->file('gambar');
        $filegambarName   = 'GP-' . $filegambar->getClientOriginalName();
        $filegambar->move('gambar_profile/', $filegambarName);
        $profile_madrasah->gambar  = $filegambarName;
        $filelogo                  = $request->file('logo');
        $filelogoName   = 'LP-' . $filelogo->getClientOriginalName();
        $filelogo->move('logo_madrasah/', $filelogoName);
        $profile_madrasah->logo  = $filelogoName;
        $profile_madrasah->save();
        return redirect()->route('profilemadrasah.index')->with("success", "Data berhasil disimpan");
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
        return redirect('profilemadrasah')->with('success', 'Edit data sukses');
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
