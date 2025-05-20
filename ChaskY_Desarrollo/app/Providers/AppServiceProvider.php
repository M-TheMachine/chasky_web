<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Composers\LocaleComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Forzar HTTPS en producción
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Obtener el idioma de la cookie o sesión (prioritario) 
        // o usar el configurado por defecto
        $locale = Request::cookie('locale') ?? session('locale');
        
        // Solo aplicar si existe un idioma en la cookie o sesión,
        // y si está entre los idiomas soportados
        if ($locale && in_array($locale, ['en', 'es'])) {
            App::setLocale($locale);
            app()->setLocale($locale);
            
            // Log para depuración
            Log::debug('AppServiceProvider: Locale set', [
                'cookie' => Request::cookie('locale'),
                'session' => session('locale'),
                'applied' => $locale,
                'app_locale' => app()->getLocale()
            ]);
        }
        
        // Registrar componentes
        View::composer('*', LocaleComposer::class);
        
        // Registrar componente Alert
        Blade::component('alert', \App\View\Components\Alert::class);
    }
}
