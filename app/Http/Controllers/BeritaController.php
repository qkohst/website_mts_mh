<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
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
        $berita = Berita::orderByRaw('created_at DESC')->get();
        return view('berita.index', compact('berita', 'madrasah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $madrasah = ProfileMadrasah::first();
        return view('berita.create', compact('madrasah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul   = $request->input('judul');
        $filefoto                  = $request->file('foto');
        $filefotoName   = 'FB-' . $filefoto->getClientOriginalName();
        $filefoto->move('foto_berita/', $filefotoName);
        $berita->foto  = $filefotoName;
        $berita->penulis   = $request->input('penulis');
        $berita->deskripsi   = $request->input('deskripsi');
        $berita->save();
        return redirect()->route('berita.index')->with("success", "Berita berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $madrasah = ProfileMadrasah::first();
        $berita = Berita::find($id);
        return view('berita.show', compact('berita', 'madrasah'));
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
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita','madrasah'));
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
        $berita = Berita::findorfail($id);
        $berita->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_berita/', 'FB-' . $request->file('foto')->getClientOriginalName());
            $berita->foto = 'FB-' . $request->file('foto')->getClientOriginalName();
            $berita->save();
        }
        return redirect('berita')->with('success', 'Edit data sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $berita = Berita::find($id);
            $berita->delete();
            return redirect('berita')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}
