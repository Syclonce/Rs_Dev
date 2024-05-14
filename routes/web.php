<?php

use App\Http\Controllers\LicenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::middleware(['auth', 'verified', 'role:Super-Admin'])->group(function () {
    Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin');


    Route::get('/superadmin/pasienbaru', [SuperAdminController::class, 'pasienadd'])->name('superadmin.pasienbaru.get');
    Route::post('/superadmin/pasienbaru', [SuperAdminController::class, 'pasinadd'])->name('superadmin.pasienbaru');

    Route::get('/superadmin/bank', [SuperAdminController::class, 'bank'])->name('superadmin.bank.get');
    Route::post('/superadmin/bank', [SuperAdminController::class, 'banks'])->name('superadmin.bank');
    Route::post('/superadmin/bank/{id}', [SuperAdminController::class, 'bankd'])->name('superadmin.banks');

    Route::get('/superadmin/departemen', [SuperAdminController::class, 'departem'])->name('superadmin.departemen.get');
    Route::post('/superadmin/departemen', [SuperAdminController::class, 'depar'])->name('superadmin.departemen');

    Route::get('/superadmin/bidang', [SuperAdminController::class, 'bidang'])->name('superadmin.bidang.get');
    Route::post('/superadmin/bidang', [SuperAdminController::class, 'bidangs'])->name('superadmin.bidang');

    Route::get('/superadmin/jabatan', [SuperAdminController::class, 'jabatan'])->name('superadmin.jabatan.get');
    Route::post('/superadmin/jabatan', [SuperAdminController::class, 'jabatans'])->name('superadmin.jabatan');

    Route::get('/superadmin/pendidikan', [SuperAdminController::class, 'pendidikan'])->name('superadmin.pendidikan.get');
    Route::post('/superadmin/pendidikan', [SuperAdminController::class, 'pendidikans'])->name('superadmin.pendidikan');

    Route::get('/superadmin/grupjabatan', [SuperAdminController::class, 'grupjabatan'])->name('superadmin.grupjabatan.get');
    Route::post('/superadmin/grupjabatan', [SuperAdminController::class, 'grupjabatans'])->name('superadmin.grupjabatan');

    Route::get('/superadmin/resikokerja', [SuperAdminController::class, 'resikokerja'])->name('superadmin.resikokerja.get');
    Route::post('/superadmin/resikokerja', [SuperAdminController::class, 'resikokerjas'])->name('superadmin.resikokerja');

    Route::get('/superadmin/statswp', [SuperAdminController::class, 'statwp'])->name('superadmin.statwp.get');
    Route::post('/superadmin/statswp', [SuperAdminController::class, 'statwps'])->name('superadmin.statwp');

    Route::get('/superadmin/emergency', [SuperAdminController::class, 'emergency'])->name('superadmin.emergency.get');
    Route::post('/superadmin/emergency', [SuperAdminController::class, 'emergencys'])->name('superadmin.emergency');

    Route::get('/superadmin/ruangan', [SuperAdminController::class, 'ruangan'])->name('superadmin.ruangan.get');
    Route::post('/superadmin/ruangan', [SuperAdminController::class, 'ruanganok'])->name('superadmin.ruangan');

    Route::get('/superadmin/metoderacik', [SuperAdminController::class, 'metoderacik'])->name('superadmin.metoderacik.get');
    Route::post('/superadmin/metoderacik', [SuperAdminController::class, 'metoderaciks'])->name('superadmin.metoderacik');

    Route::get('/superadmin/statsker', [SuperAdminController::class, 'statsker'])->name('superadmin.statsker.get');
    Route::post('/superadmin/statsker', [SuperAdminController::class, 'statskers'])->name('superadmin.statsker');

    Route::get('/superadmin/bahasa', [SuperAdminController::class, 'bahasa'])->name('superadmin.bahasa.get');
    Route::post('/superadmin/bahasa', [SuperAdminController::class, 'bahasas'])->name('superadmin.bahasa');

    Route::get('/superadmin/lokasi', [SuperAdminController::class, 'lokasi'])->name('superadmin.lokasi');

    Route::get('/superadmin/pegawai', [SuperAdminController::class, 'pegawai'])->name('superadmin.pegawai');
});

Route::get('admin', function () {
    Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin');
})->middleware(['auth', 'verified', 'role:Admin|Super-Admin']);

Route::get('user', function () {
    return '<h1> user </h1>';
})->middleware(['auth', 'verified', 'role:User|Super-Admin']);

Route::get('/licenses', [LicenseController::class, 'store']);
Route::post('/test-key', [LicenseController::class, 'testGenerateKey']);

Route::middleware(['check.license'])->group(function () {
    Route::get('/protected-route', [LicenseController::class, 'index']);
});
// Route::get('superadmin', function () {
//     return '<h1> Super-Admin </h1>';
// })->middleware(['auth', 'verified', 'role:Super-Admin']);
// Route::match(['get', 'post'], '/superadmin/pasienbaru', [SuperAdminController::class, 'handlePasienBaru'])->name('superadmin.pasienbaru');

require __DIR__ . '/auth.php';
