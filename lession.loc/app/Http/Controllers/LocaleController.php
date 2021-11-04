<?php

namespace App\Http\Controllers;

use App\Services\Locale;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale($code)
    {
        Locale::setLocale($code);
        return redirect()->back();
    }
}
