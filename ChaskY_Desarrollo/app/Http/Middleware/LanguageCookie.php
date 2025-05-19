<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LanguageCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        
        // Si hay un idioma en la sesión, configurar una cookie para JavaScript
        if (session()->has('locale')) {
            $locale = session()->get('locale');
            $response->withCookie(cookie('locale', $locale, 60 * 24 * 30)); // 30 días
        }
        
        return $response;
    }
}
