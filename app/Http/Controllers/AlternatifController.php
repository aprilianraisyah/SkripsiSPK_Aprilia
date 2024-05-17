<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $dataalternatif = Alternatif::orderBy('id', 'asc')->get();
        return view('/alternatif/dataalternatif', compact('dataalternatif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/alternatif/tambahalternatif');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required'
        ]);

        Alternatif::create($request->all());

        return redirect()->route('alternatif')
        ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataalternatif=Alternatif::find($id);
        return view('/alternatif/editalternatif', compact('dataalternatif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_alternatif' => 'required'
        ]);

        Alternatif::findOrFail($id)->update($request->all());

        return redirect()->route('alternatif')
        ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Alternatif::find($id)->delete();
        return redirect()->route('alternatif')
        ->with('success', 'Data berhasil dihapus');
    }
}
