<?php

namespace App\Http\Controllers;

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
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        return view('ekstrakulikuler.index', compact('ekstrakulikuler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekstrakulikuler.create');
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
        $ekstrakulikuler = Ekstrakulikuler::find($id);
        return view('ekstrakulikuler.edit', compact('ekstrakulikuler'));
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
        $ekstrakulikuler = Ekstrakulikuler::find($id);
        $ekstrakulikuler->delete();
        return redirect('ekstrakulikuler')->with('success', 'Hapus data sukses');
    }
}
