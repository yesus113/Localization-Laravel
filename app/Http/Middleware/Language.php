<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class Language
{
        /**
         * Este middleware se ejecuta en cada petición.
         * Su propósito es establecer el idioma de la aplicación.
         */
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si existe 'applocale' en la sesión
        // y si ese valor corresponde a un idioma válido en config/languages.php
        if (Session()->has('applocale') and array_key_exists(Session()->get('applocale'), config('languages'))) {
            // Establece el idioma seleccionado por el usuario
            App::setLocale(Session()->get('applocale'));
            //App:setLocale('es');
        } else {
            // Si no hay idioma en la sesión, usa el idioma de respaldo configurado en config/app.php
            App::setLocale(Config('app.fallback_locale'));
        }
        return $next($request);
    }
}
