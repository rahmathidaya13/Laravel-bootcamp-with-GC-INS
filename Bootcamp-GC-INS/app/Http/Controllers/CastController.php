<?php

namespace App\Http\Controllers;

use App\Models\CastModel;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast  = CastModel::all();
        return view('cast.cast',['cast'=>$cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.addCast');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required | max:45',
            'umur' => 'required',
            'bio' => 'required',
        ],[
            'nama.required'=> 'Nama wajib diisi',
            'nama.max'=> 'Maksimal Panjang 45 Karakter',
            'umur.required'=> 'Umur wajib diisi',
            'bio.required'=> 'Bio wajib dibuat',
        ]);
        $cast = new CastModel();
        $cast->nama = $request['nama'];
        $cast->umur = $request['umur'];
        $cast->bio = $request['bio'];
        $cast->save();
        return redirect()->route('cast')->with('success', 'Tambah Pemain Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = CastModel::findOrFail($id);
        return view('cast.detail',['cast'=>$cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = CastModel::findOrFail($id);
        return view('cast.editCast',['cast'=>$cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required | max:45',
            'umur' => 'required',
            'bio' => 'required',
        ],[
            'nama.required'=> 'Nama wajib diisi',
            'nama.max'=> 'Maksimal Panjang 45 Karakter',
            'umur.required'=> 'Umur wajib diisi',
            'bio.required'=> 'Bio wajib dibuat',
        ]);
        $cast = CastModel::findOrFail($id);
        $cast->nama = $request['nama'];
        $cast->umur = $request['umur'];
        $cast->bio = $request['bio'];
        $cast->update();
        return redirect()->route('cast')->with('success', 'Ubah Data Pemain Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = CastModel::findOrFail($id);
        $cast->delete();
        return redirect()->route('cast')->with('success', 'Hapus Pemain Berhasil');

    }
}
