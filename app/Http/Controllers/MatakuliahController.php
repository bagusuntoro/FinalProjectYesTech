<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matakuliah;
use DB;
use PDF;


class MatakuliahController extends Controller
{
    public function index(){

        $data = Matakuliah::all();
        return view('/matakuliah/dataMatakuliah', compact('data'));
    }

    public function insertMatakuliah(){
        $data = Matakuliah::all();
        return view('/matakuliah/insertMatakuliah');
    }

    public function addMatakuliah(Request $request){
        // dd($request->all());
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah')->with('success', 'Data Berhasil di Input');
    }

    public function tampilDataMatakuliah($id){
        $data = Matakuliah::find($id);
        
        return view('/matakuliah/updateMatakuliah', compact('data'));
    }

    public function updateMatkul(Request $request, $id){
        $data = Matakuliah::find($id);
        $data->update($request->all());

        return redirect()->route('matakuliah')->with('success', 'Data Berhasil di Update');
    }

    public function delete($id){
        $data = Matakuliah::find($id);
        $data->delete();
        return redirect()->route('matakuliah')->with('success', 'Data Berhasil di Delete');
    }

    public function report(){
        $data_matakuliah = Matakuliah::all();
        $pdf = PDF::loadView('report.matakuliah', [
            'data' => $data_matakuliah
        ]);
        return $pdf->stream();
    }

    
}
