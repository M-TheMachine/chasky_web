<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

// Rutas principales
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Rutas de perfil existentes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rutas de vendedores
    Route::prefix('sellers')->group(function () {
        Route::get('/', [SellerController::class, 'index'])->name('sellers.index');
        Route::get('/create', [SellerController::class, 'create'])->name('sellers.create');
        Route::post('/', [SellerController::class, 'store'])->name('sellers.store');
        Route::get('/{slug}/edit', [SellerController::class, 'edit'])->name('sellers.edit');
        Route::put('/{slug}', [SellerController::class, 'update'])->name('sellers.update');
        Route::delete('/{slug}', [SellerController::class, 'destroy'])->name('sellers.destroy');
    });
});

// Ruta pública para ver un vendedor
Route::get('/v/{slug}', [SellerController::class, 'show'])->name('sellers.show');

require __DIR__.'/auth.php';
