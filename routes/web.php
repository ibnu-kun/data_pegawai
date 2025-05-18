<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function(){
    return view('welcom');
});

//Route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
//Route CRUD Tambah Pegawai
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
//Route CRUD pegawai --> store
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
//Route CRUD Edit Pegawai
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
//Route Update Pegawai
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
//Route Hapus
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

