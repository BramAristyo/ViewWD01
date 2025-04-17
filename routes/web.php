<?php

use App\Models\Periksa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

/* --------------- Guest bisa login dan register --------------- */
Route::get('/', function(){
    return redirect('login');
});

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* --------------- Pasien bisa ke halaman dashboard, periksa, dan riwayat --------------- */

Route::middleware('auth')->group(function(){
    Route::middleware('role:pasien')->group(function(){
        Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.dashboard');
        Route::get('/pasien/periksa', [PasienController::class, 'showPeriksa'])->name('pasien.periksa');
        Route::get('/pasien/riwayat', [PasienController::class, 'showRiwayat'])->name('pasien.riwayat');
    });

    Route::middleware('role:dokter')->group(function(){
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
        });
});

