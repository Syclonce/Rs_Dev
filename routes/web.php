<?php

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
    Route::get('/superadmin/add', [SuperAdminController::class, 'pasienadd'])->name('superadmin.add');
    Route::post('/superadmin/add', [SuperAdminController::class, 'pasinadd'])->name('superadmin.add');
    Route::get('/superadmin/bank', [SuperAdminController::class, 'bank'])->name('superadmin.bank');
    Route::post('/superadmin/bank', [SuperAdminController::class, 'banks'])->name('superadmin.bank');
    Route::get('/superadmin/departemen', [SuperAdminController::class, 'departem'])->name('superadmin.departemen');
    Route::post('/superadmin/departemen', [SuperAdminController::class, 'depar'])->name('superadmin.departemen');
    Route::get('/superadmin/bidang', [SuperAdminController::class, 'bidang'])->name('superadmin.bidang');
    Route::post('/superadmin/bidang', [SuperAdminController::class, 'bidangs'])->name('superadmin.bidang');
    Route::get('/superadmin/pegawai', [SuperAdminController::class, 'pegawai'])->name('superadmin.pegawai');
});

Route::get('admin', function () {
    Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin');
})->middleware(['auth', 'verified', 'role:Admin|Super-Admin']);

Route::get('user', function () {
    return '<h1> user </h1>';
})->middleware(['auth', 'verified', 'role:User|Super-Admin']);

// Route::get('superadmin', function () {
//     return '<h1> Super-Admin </h1>';
// })->middleware(['auth', 'verified', 'role:Super-Admin']);


require __DIR__ . '/auth.php';
