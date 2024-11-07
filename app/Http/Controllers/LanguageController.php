<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLanguage($lang)
    {
        $availableLanguages = ['en', 'cn', 'tw']; // Supported languages

        if (in_array($lang, $availableLanguages)) {
            // Store selected language in session
            Session::put('locale', $lang);

            // Set application locale
            App::setLocale($lang);
        }

        // Redirect back to the previous page
        return Redirect::back();
    }
}
