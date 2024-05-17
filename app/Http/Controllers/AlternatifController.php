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
<<<<<<< HEAD
        return view('/alternatif/\alternatif\dataalternatif', compact('dataalternatif'));
=======
        return view('/alternatif/dataalternatif', compact('dataalternatif'));
>>>>>>> 3d1e00abc308eb153bf38ce329bcf3f08362654a
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('tambahalternatif');
=======
        return view('/alternatif/tambahalternatif');
>>>>>>> 3d1e00abc308eb153bf38ce329bcf3f08362654a
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
<<<<<<< HEAD
        return view('editalternatif', compact('dataalternatif'));
=======
        return view('/alternatif/editalternatif', compact('dataalternatif'));
>>>>>>> 3d1e00abc308eb153bf38ce329bcf3f08362654a
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
