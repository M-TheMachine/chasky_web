<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\WebDevController;
use App\Http\Controllers\UxUiController;
use App\Http\Controllers\OffshoringController;
use App\Http\Controllers\NearshoringController;
use App\Http\Controllers\MobileController;
use Illuminate\Support\Facades\Route;

// Rutas principales
Route::get('/', function () {
    return view('home');
})->name('home');

// Marketing routes
Route::get('/marketing', [MarketingController::class, 'show'])->name('marketing.show');
Route::post('/marketing/contact', [MarketingController::class, 'contact'])->name('marketing.contact');
Route::get('/marketing/success', [MarketingController::class, 'success'])->name('marketing.success');

// Mobile Development routes
Route::get('/services/mobile', function () {
    return view('services.mobile');
})->name('services.mobile');
Route::post('/services/mobile/contact', [MobileController::class, 'contact'])->name('mobile.contact');
Route::get('/services/mobile/success', [MobileController::class, 'success'])->name('mobile.success');

// Ruta para cambiar el idioma
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// Rutas de pasantías
Route::get('/pasantias', function () {
    return view('pasantias');
})->name('pasantias');
Route::get('/pasantias/software', [InternshipController::class, 'software'])->name('pasantias.software');
Route::get('/pasantias/marketing', [InternshipController::class, 'marketing'])->name('pasantias.marketing');
Route::post('/pasantias/software/submit', [InternshipController::class, 'submitSoftware'])->name('pasantias.software.submit');
Route::post('/pasantias/marketing/submit', [InternshipController::class, 'submitMarketing'])->name('pasantias.marketing.submit');

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

Route::get('/portafolio/memoria', function () {
    return view('portafolio.memoria');
})->name('portafolio.memoria');

Route::get('/portafolio/pick', function () {
    return view('portafolio.pick');
})->name('portafolio.pick');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/planes-outsourcing', function () {
    return view('planes-outsourcing');
})->name('planes.outsourcing');

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

// Rutas para prácticas
Route::get('/practicas/marketing', [InternshipController::class, 'showMarketing'])->name('internships.marketing');
Route::post('/practicas/marketing/apply', [InternshipController::class, 'applyMarketing'])->name('internships.marketing.apply');
Route::get('/practicas/audiovisual', [InternshipController::class, 'showAudiovisual'])->name('internships.audiovisual');
Route::post('/practicas/audiovisual/apply', [InternshipController::class, 'applyAudiovisual'])->name('internships.audiovisual.apply');

// Rutas para la sección de marketing
Route::get('/marketing', [MarketingController::class, 'show'])->name('marketing.show');
Route::post('/marketing/contact', [MarketingController::class, 'contact'])->name('marketing.contact');
Route::get('/marketing/success', [MarketingController::class, 'success'])->name('marketing.success');

// Web Development routes
Route::get('/servicios/desarrollo-web', [WebDevController::class, 'show'])->name('webdev.show');
Route::post('/servicios/desarrollo-web/contact', [WebDevController::class, 'contact'])->name('webdev.contact');
Route::get('/servicios/desarrollo-web/success', [WebDevController::class, 'success'])->name('webdev.success');

// UX/UI Design routes
Route::get('/servicios/ux-ui', [UxUiController::class, 'show'])->name('uxui.show');
Route::post('/servicios/ux-ui/contact', [UxUiController::class, 'contact'])->name('uxui.contact');
Route::get('/servicios/ux-ui/success', [UxUiController::class, 'success'])->name('uxui.success');

// Offshoring routes
Route::get('/servicios/offshoring', [OffshoringController::class, 'show'])->name('offshoring.show');
Route::post('/servicios/offshoring/contact', [OffshoringController::class, 'contact'])->name('offshoring.contact');
Route::get('/servicios/offshoring/success', [OffshoringController::class, 'success'])->name('offshoring.success');

// Nearshoring routes
Route::get('/servicios/nearshoring', [NearshoringController::class, 'show'])->name('nearshoring.show');
Route::post('/servicios/nearshoring/contact', [NearshoringController::class, 'contact'])->name('nearshoring.contact');
Route::get('/servicios/nearshoring/success', [NearshoringController::class, 'success'])->name('nearshoring.success');

require __DIR__.'/auth.php';
