<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ensure app locale and Carbon locale are set according to config
        App::setLocale(config('app.locale'));
        Carbon::setLocale(config('app.locale'));
        // Set LC_TIME for strftime/locale-based date formats (includes Windows variants)
        setlocale(LC_TIME, 'es_ES.UTF-8', 'Spanish_Spain.1252', 'es_ES');
    }
}
