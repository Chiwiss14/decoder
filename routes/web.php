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

// Route::get(function () {
//     Route::get('/decoder', [DecoderController::class, 'index'])->name('decoder.index');
//     Route::post('/decoder/decode', [DecoderController::class, 'decode'])->name('decoder.decode');
// });

Route::get('/portfolio', function () {
    return view('portfolio');
});


require __DIR__.'/auth.php';
