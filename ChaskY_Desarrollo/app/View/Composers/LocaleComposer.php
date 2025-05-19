<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;

class LocaleComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $locale = Request::cookie('locale') ?? session('locale');
        
        if ($locale && in_array($locale, ['en', 'es'])) {
            // Aplicar el idioma directamente a la vista
            App::setLocale($locale);
            app()->setLocale($locale);
            
            // También compartir con la vista
            $view->with('current_locale', $locale);
            
            // Log para depuración
            Log::debug('Locale set in view composer', [
                'locale' => $locale,
                'app_locale' => app()->getLocale(),
                'view' => $view->getName()
            ]);
        }
    }
}
