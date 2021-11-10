<?php


namespace LocaleEdu;


use Illuminate\Support\Facades\Session;

class LocaleService
{
    const SESSION_KEY = 'locale';

    public static function availableLocales()
    {
        $availableLocales = config('locale.available_locales');
        if (empty($availableLocales)) {
            throw new LocaleException('Available locales is empty');
        }

        $output = collect();
        foreach ($availableLocales as $code => $name) {
            $output->push((object)[
                'code' => $code,
                'name' => $name
            ]);
        }

        return $output;
    }

    public static function setLocale($code)
    {
        $availableLocales = self::availableLocales();
        if ($availableLocales->where('code', $code)->isEmpty()) {
            throw new \Exception("Code is not exists: {$code}");
        }
        Session::put(self::SESSION_KEY, $code);
    }

    public static function getLocale()
    {
        return Session::get(self::SESSION_KEY, self::detectDefault());
    }

    public static function detectDefault()
    {
        if (empty(config('locale.default'))) {
            throw new LocaleException('Has not default locale! config(locale.default)');
        }
        return config('locale.default');
    }
}
