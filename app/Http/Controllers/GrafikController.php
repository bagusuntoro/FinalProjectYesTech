<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matakuliah;

class GrafikController extends Controller
{
    public function grafik()
    {
        $userData = Matakuliah::select(\DB::raw("COUNT(*) as SKS"))
        ->pluck('SKS');
        return view('dashboard', compact('userData'));
    }
}
