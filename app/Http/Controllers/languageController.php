<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class languageController extends Controller
{
    /**
     * Cambia el idioma de la aplicación.
     * $lang viene del enlace que el usuario presiona.
     */
    public function switchLang($lang)
    {
        // Verifica si el idioma que intenta activar existe en config/languages.php
        if (array_key_exists($lang, Config::get('languages'))) {

            // Guarda el idioma en la sesión para recordar la selección del usuario
            Session::put('applocale', $lang);
        }
        // Regresa a la página anterior sin perder el contexto
        return Redirect::back();
    }
}
