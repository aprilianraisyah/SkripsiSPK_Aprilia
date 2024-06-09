<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $alternatifCount = Alternatif::count();
        $kriteriaCount = Kriteria::count();
        return view('dashboard', compact('alternatifCount', 'kriteriaCount'));
    }
}
