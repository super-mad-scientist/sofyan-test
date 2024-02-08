<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//redirect root path ke halaman index anggota
Route::get('/', function(){
    return redirect()->route('anggota.index');
});

//halaman index
Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.index');
//halaman create
Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
//proses create
Route::post('anggota', [AnggotaController::class, 'store'])->name('anggota.store');
//halaman edit & view
Route::get('anggota/{id}', [AnggotaController::class, 'edit'])->name('anggota.edit');
//proses edit
Route::post('anggota/{id}/update', [AnggotaController::class, 'update'])->name('anggota.update');
//halaman delete
Route::get('anggota/{id}/delete', [AnggotaController::class, 'delete'])->name('anggota.delete');
//proses delete
Route::post('anggota/{id}/delete', [AnggotaController::class, 'destroy'])->name('anggota.destroy');