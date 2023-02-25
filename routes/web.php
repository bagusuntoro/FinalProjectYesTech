<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\GrafikController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// tes route
Route::get('/tess', function(){
    return view('tesLogin');
});







// for mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa')->middleware('auth');

Route::get('/insertMahasiswa', [MahasiswaController::class, 'insertMahasiswa'])->name('insert data')->middleware('auth');
Route::post('/addMahasiswa', [MahasiswaController::class, 'addMahasiswa'])->name('add');

Route::get('/tampilDataMahasiswa/{id}', [MahasiswaController::class, 'tampilDataMahasiswa'])->name('tampildata')->middleware('auth');
Route::post('/updateDataMahasiswa/{id}', [MahasiswaController::class, 'updateDataMahasiswa'])->name('updatedata');

Route::get('/deleteMahasiswa/{id}', [MahasiswaController::class, 'daleteMahasiswa'])->name('dalete');
Route::get('/mahasiswa/laporan', [MahasiswaController::class, 'report'])->name('dalete');




// for matakuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah')->middleware('auth');
Route::get('/insertMatakuliah', [MatakuliahController::class, 'insertMatakuliah'])->name('insertMatakuliah')->middleware('auth');
Route::post('/addMatakuliah', [MatakuliahController::class, 'addMatakuliah'])->name('addMatakuliah');

Route::get('/tampilDataMatakuliah/{id}', [MatakuliahController::class, 'tampilDataMatakuliah'])->name('tampildata')->middleware('auth');
Route::post('updateMatkul/{id}', [MatakuliahController::class, 'updateMatkul'])->name('updateMatkul');

Route::get('/deleteMatakuliah/{id}', [MatakuliahController::class, 'delete'])->name('delete');
Route::get('/matakuliah/laporan', [MatakuliahController::class, 'report'])->name('dalete');


// for presensi
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi');
Route::get('/insertPresensi', [PresensiController::class, 'insertPresensi'])->name('insertPresensi');
Route::post('/addPresensi', [PresensiController::class, 'addPresensi'])->name('addPresensi');

Route::get('/tampilDataPresensi/{id}', [PresensiController::class, 'tampilDataPresensi'])->name('tampildata');
Route::post('/updatePresensi/{id}', [PresensiController::class, 'updatePresensi'])->name('updatePresensi');

Route::get('/deletePresensi/{id}', [PresensiController::class, 'deletePresensi'])->name('deletePresensi');
Route::get('/presensi/laporan', [PresensiController::class, 'report'])->name('dalete');






//Login&Register
Route::redirect('/', '/auth/login');
Route::prefix('/auth')->group(function(){
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'processRegister']);
});

//Grafik
Route::get('/dashboard', [GrafikController::class, 'grafik'])->name('dashboard');