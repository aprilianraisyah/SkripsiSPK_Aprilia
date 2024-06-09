<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianAlternatif;

class PenilaianAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapenilaianalternatif = PenilaianAlternatif::orderBy('id', 'asc')->get();
        return view('/penilaianalternatif/datapenilaianalternatif', compact('datapenilaianalternatif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/penilaianalternatif/tambahpenilaianalternatif');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required',
            'nama_kriteria' => 'required',
            'nilai_kecocokan' => 'required',
        ]);

        PenilaianAlternatif::create($request->all());

        return redirect()->route('penilaianalternatif')
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
        $datapenilaianalternatif=PenilaianAlternatif::find($id);
        return view('/penilaianalternatif/editpenilaianalternatif', compact('datapenilaianalternatif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_alternatif' => 'required',
            'nama_kriteria' => 'required',
            'nilai_kecocokan' => 'required',
        ]);

        PenilaianAlternatif::find($id)->update([
            'nama_alternatif' => $request->nama_alternatif,
            'nama_kriteria' => $request->nama_kriteria,
            'nilai_kecocokan' => $request->nilai_kecocokan,
        ]);

        return redirect()->route('penilaianalternatif')
        ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PenilaianAlternatif::find($id)->delete();
        return redirect()->route('penilaianalternatif')
        ->with('success', 'Data berhasil dihapus');
    }
}
