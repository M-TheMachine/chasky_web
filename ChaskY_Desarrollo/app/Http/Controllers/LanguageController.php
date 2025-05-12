<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
            return back()->with('error', 'Idioma no soportado');
        }

        // Guardar el idioma en la sesión
        session()->put('locale', $locale);
        
        // Establecer el idioma en la aplicación
        App::setLocale($locale);

        // Redirigir con mensaje de éxito
        $message = $locale == 'es' ? 'Idioma cambiado a Español' : 'Language changed to English';
        return redirect()->back()->with('success', $message);
    }
}
