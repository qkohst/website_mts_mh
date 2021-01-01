<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\InformasiPendaftaran;
use Illuminate\Http\Request;

class InformasiPendaftaranController extends Controller
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
        $madrasah = ProfileMadrasah::first();
        $informasi_pendaftaran = InformasiPendaftaran::orderByRaw('created_at DESC')->paginate(1);
        return view('informasipendaftaran.index', compact('informasi_pendaftaran','madrasah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $madrasah = ProfileMadrasah::first();
        return view('informasipendaftaran.create', compact('madrasah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informasi_pendaftaran = new InformasiPendaftaran();
        $informasi_pendaftaran->status   = $request->input('status');
        $informasi_pendaftaran->deskripsi   = $request->input('deskripsi');
        $filegambar                  = $request->file('gambar');
        $filegambarName   = 'GPendaf-' . $filegambar->getClientOriginalName();
        $filegambar->move('gambar_pendaftaran/', $filegambarName);
        $informasi_pendaftaran->gambar  = $filegambarName;
        $informasi_pendaftaran->save();
        return redirect()->route('informasipendaftaran.index')->with("success", "Data berhasil disimpan");
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
        $madrasah = ProfileMadrasah::first();
        $informasi_pendaftaran = InformasiPendaftaran::find($id);
        return view('informasipendaftaran.edit', compact('informasi_pendaftaran','madrasah'));
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
        $informasi_pendaftaran = InformasiPendaftaran::findorfail($id);
        $informasi_pendaftaran->update($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambar_pendaftaran/', 'GPendaf-' . $request->file('gambar')->getClientOriginalName());
            $informasi_pendaftaran->gambar = 'GPendaf-' . $request->file('gambar')->getClientOriginalName();
            $informasi_pendaftaran->save();
        }
        return redirect('informasipendaftaran')->with('success', 'Edit data sukses');
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
