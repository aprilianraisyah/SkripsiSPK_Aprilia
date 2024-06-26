<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $alternatifCount = Alternatif::count();
        $kriteriaCount = Kriteria::count();
        $subkriteriaCount = Subkriteria::count();
        return view('dashboard', compact('alternatifCount', 'kriteriaCount', 'subkriteriaCount'));
    }
}
