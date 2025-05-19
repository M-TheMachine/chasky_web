<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtener el idioma de la cookie o la sesión
        $locale = $request->cookie('locale') ?? session('locale');
        
        // Si no hay idioma en cookie o sesión, usar el configurado por defecto
        if (!$locale) {
            $locale = config('app.locale');
        }
        
        // Solo permitir idiomas soportados
        if (!in_array($locale, ['en', 'es'])) {
            $locale = config('app.locale');
        }
        
        // IMPORTANTE: Forzar el idioma en la aplicación usando ambos métodos
        app()->setLocale($locale);
        App::setLocale($locale);
        
        // Sincronizar la sesión para mantener la coherencia
        if (session('locale') !== $locale) {
            session(['locale' => $locale]);
        }
        
        // Log para depuración
        Log::debug('Locale in middleware', [
            'cookie_locale' => $request->cookie('locale'),
            'session_locale' => session('locale'),
            'final_locale' => $locale,
            'app_locale' => app()->getLocale()
        ]);

        return $next($request);
    }
}
