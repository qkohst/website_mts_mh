<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
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
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        return view('ekstrakulikuler.index', compact('ekstrakulikuler','madrasah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $madrasah = ProfileMadrasah::first();
        return view('ekstrakulikuler.create', compact('madrasah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstrakulikuler = new Ekstrakulikuler();
        $ekstrakulikuler->nama   = $request->input('nama');
        $ekstrakulikuler->deskripsi   = $request->input('deskripsi');
        $image                   = $request->file('foto');
        $imageName   = 'Eks-' . $image->getClientOriginalName();
        $image->move('foto_ekstrakulikuler/', $imageName);
        $ekstrakulikuler->foto  = $imageName;
        $ekstrakulikuler->save();
        return redirect()->route('ekstrakulikuler.index')->with("success", "Tambah data suskes");
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
        $ekstrakulikuler = Ekstrakulikuler::find($id);
        return view('ekstrakulikuler.edit', compact('ekstrakulikuler','madrasah'));
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
        $ekstrakulikuler = Ekstrakulikuler::findorfail($id);
        $ekstrakulikuler->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_ekstrakulikuler/', 'Eks-' . $request->file('foto')->getClientOriginalName());
            $ekstrakulikuler->foto = 'Eks-' . $request->file('foto')->getClientOriginalName();
            $ekstrakulikuler->save();
        }
        return redirect('ekstrakulikuler')->with('success', 'Edit data sukses');
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
            $ekstrakulikuler = Ekstrakulikuler::find($id);
            $ekstrakulikuler->delete();
            return redirect('ekstrakulikuler')->with('success', 'Hapus data sukses');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('warning', 'Maaf data  tidak dapat dihapus');
        }
    }
}
