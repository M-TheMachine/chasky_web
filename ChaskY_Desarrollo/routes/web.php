<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

// Rutas principales
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

// Rutas para los proyectos específicos del portafolio
Route::get('/portafolio/koko', function () {
    return view('portafolio.koko');
})->name('portafolio.koko');

Route::get('/portafolio/mujeres-al-volante', function () {
    return view('portafolio.mujeres-al-volante');
})->name('portafolio.mujeres-al-volante');

Route::get('/portafolio/galeno', function () {
    return view('portafolio.galeno');
})->name('portafolio.galeno');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

require __DIR__.'/auth.php';
