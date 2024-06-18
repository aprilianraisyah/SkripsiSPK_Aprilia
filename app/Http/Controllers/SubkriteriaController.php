<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subkriteria;
use App\Models\Kriteria;

class SubkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasubkriteria = Subkriteria::orderBy('id', 'asc')->get();
        return view('/subkriteria/datasubkriteria', compact('datasubkriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        return view('/subkriteria/tambahsubkriteria', compact('kriteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kriteria_id' => 'required',
            'nilai_subkriteria' => 'required',
        ]);

        Subkriteria::create($request->all());

        return redirect()->route('subkriteria')
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
        $kriteria = Kriteria::all();
        $datasubkriteria = Subkriteria::with('kriteria')->find($id);
        return view('/subkriteria/editsubkriteria', compact('datasubkriteria', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'kriteria_id' => 'required',
            'nilai_subkriteria' => 'required',
        ]);

        Subkriteria::find($id)->update(
            $request->all());

        return redirect()->route('subkriteria')
        ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subkriteria::find($id)->delete();
        return redirect()->route('subkriteria')
        ->with('success', 'Data berhasil dihapus');
    }
}