<?php

namespace LocaleEdu;
use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/locale.php' => config_path('locale.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../router.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'locale');
    }
}
