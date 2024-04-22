<?php

use App\Http\Controllers\ProfileController;
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




Route::get('admin', function () {
    return '<h1> Admin </h1>';
})->middleware(['auth', 'verified', 'role:Admin|Super-Admin']);

Route::get('user', function () {
    return '<h1> user </h1>';
})->middleware(['auth', 'verified', 'role:User|Super-Admin']);

Route::get('superadmin', function () {
    return '<h1> Super-Admin </h1>';
})->middleware(['auth', 'verified', 'role:Super-Admin']);


require __DIR__ . '/auth.php';
