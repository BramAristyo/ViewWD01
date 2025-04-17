<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Models\Periksa;
use Illuminate\Support\Facades\Route;

/* --------------- Guest bisa login dan register --------------- */
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

/* --------------- Pasien bisa ke halaman dashboard, periksa, dan riwayat --------------- */

Route::get('/pasien', function () {
    return view('pasien.dashboard');
})->name('pasien.dashboard');

Route::get('/pasien/periksa', function () {
    return view('pasien.periksa');
})->name('pasien.periksa');

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
})->name('pasien.riwayat');


Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.dashboard');
Route::get('/dokter/obat', [DokterController::class, 'showObat'])->name('dokter.obat');
Route::post('/dokter/obat', [DokterController::class, 'storeObat'])->name('dokter.obatStore');
Route::get('/dokter/obat/edit/{id}', [DokterController::class, 'editObat'])->name('dokter.obatEdit');
Route::put('/dokter/obat/update/{id}', [DokterController::class, 'updateObat'])->name('dokter.obatUpdate');
Route::delete('/dokter/obat/delete/{id}', [DokterController::class, 'destroyObat'])->name('dokter.obatDelete');


Route::get('/dokter/periksa', function () {
    $periksas = Periksa::all();
    return view('dokter.periksa', compact('periksas'));
})->name('dokter.periksa');

