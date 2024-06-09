<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request)
    // {
    //     $locale = $request->input('locale');

    //     if (in_array($locale, ['en', 'fr', 'jp'])) {
    //         Session::put('locale', $locale);
    //         App::setLocale($locale);
    //     }

    //     return redirect()->back();
    // }
    public function setLocale($lang)
    {

        if (in_array($lang, ['en', 'fr', 'jp'])) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }

        return back();
    }
}
