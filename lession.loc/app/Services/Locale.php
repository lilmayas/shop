<?php

namespace App\Services;

class Locale
{
    const EN = 'en';
    const RU = 'ru';

    public static function availableLocales()
    {

        return collect([
        (object)[   
            'code' => self::RU,
            'name' => 'Русский'
        ],
        (object)[
            'code' => self::EN,
            'name' => 'English'
        ]
        ]);
    }
}