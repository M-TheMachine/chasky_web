<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class LanguageController extends Controller
{
    /**
     * Cambia el idioma de la aplicación
     *
     * @param  string  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch($locale)
    {
        // Validar el idioma
        if (!in_array($locale, ['en', 'es'])) {
            return back()->with('error', 'Idioma no soportado / Language not supported');
        }

        // IMPORTANTE: Configurar la cookie sin usar Cookie::queue para que se establezca inmediatamente
        $cookie = cookie('locale', $locale, 60 * 24 * 365); // 1 año
        
        // Guardar también en sesión
        session(['locale' => $locale]);
        
        // Establecer el idioma en la aplicación (esto afectará la respuesta actual)
        app()->setLocale($locale);
        App::setLocale($locale);

        // Mensaje según el idioma seleccionado
        $message = ($locale === 'es') 
            ? 'Idioma cambiado a Español' 
            : 'Language changed to English';

        // Log para depuración
        Log::info('Idioma cambiado en controlador', [
            'requested_locale' => $locale,
            'cookie' => $cookie->getValue(),
            'session' => session('locale'),
            'app_locale' => app()->getLocale()
        ]);

        // Devolver respuesta con la cookie adjuntada
        return redirect()->back()->with('success', $message)->cookie($cookie);
    }
}
