<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakriteria = Kriteria::orderBy('id', 'asc')->get();
        return view('/kriteria/datakriteria', compact('datakriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/kriteria/tambahkriteria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot' => 'required',
            'jenis_kriteria' => 'required',
        ]);

        Kriteria::create($request->all());

        return redirect()->route('kriteria.index')
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
        $datakriteria=Kriteria::find($id);
        return view('/kriteria/editkriteria', compact('datakriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot' => 'required',
            'jenis_kriteria' => 'required',
        ]);

        Kriteria::find($id)->update($request->all());

        return redirect()->route('kriteria')
        ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kriteria::find($id)->delete();
        return redirect()->route('kriteria')
        ->with('success', 'Data berhasil dihapus');
    }
}
