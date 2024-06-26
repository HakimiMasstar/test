<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', [RedirectController::class, 'home'])->name('/');
});

Route::middleware('auth', 'verified', 'admin')->group(function () {
    Route::get('dashboard', [RedirectController::class, 'dashboard'])->name('dashboard');
    Route::resource('datas', DataController::class);
});

// //this is profile from breeze, not using this for this project...
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
