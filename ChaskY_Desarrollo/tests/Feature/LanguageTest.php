<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

test('language can be switched', function () {
    // Intentar cambiar a inglés
    $response = $this->get(route('language.switch', 'en'));
    $response->assertSessionHas('locale', 'en');
    $response->assertSessionHas('success');
    
    // Verificar que el cambio persiste en la siguiente solicitud
    $response = $this->get('/');
    expect(app()->getLocale())->toBe('en');
    
    // Intentar cambiar a español
    $response = $this->get(route('language.switch', 'es'));
    $response->assertSessionHas('locale', 'es');
    $response->assertSessionHas('success');
    
    // Verificar que el cambio persiste en la siguiente solicitud
    $response = $this->get('/');
    expect(app()->getLocale())->toBe('es');
});

test('language cannot be switched to unsupported language', function () {
    // Intentar cambiar a un idioma no soportado
    $response = $this->get(route('language.switch', 'fr'));
    $response->assertSessionHas('error');
    $response->assertSessionMissing('locale', 'fr');
});
