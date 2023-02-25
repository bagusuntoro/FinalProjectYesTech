<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use DB;
use PDF;

class PresensiController extends Controller
{
    public function index(){
        $data = Presensi::all();
         
        return view('/presensi/dataPresensi', compact('data'));
    }

    public function insertPresensi(){
        $data = Presensi::all();

        return view('presensi/insertPresensi');
    }

    public function addPresensi(Request $request){
        Presensi::create($request->all());

        return redirect()->route('presensi')->with('success', 'Data Berhasil di Input');
    }

    public function tampilDataPresensi($id){
        $data = Presensi::find($id);

        return view('presensi/updatePresensi', compact('data'));
    }
    
    public function updatePresensi(Request $request, $id){
        $data = Presensi::find($id);
        $data->update($request->all());

        return redirect()->route('presensi')->with('success', 'Data Berhasil di Update');
    }
    
    public function deletePresensi($id){
        $data = Presensi::find($id);
        $data->delete();

        return redirect()->route('presensi')->with('success', 'Data Berhasil di Delete');
    }

    public function report(){
        $data_presensi = Presensi::all();
        $pdf = PDF::loadView('report.presensi', [
            'data' => $data_presensi
        ]);
        return $pdf->stream();
    }

}
